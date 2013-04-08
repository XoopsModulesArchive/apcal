<?php

//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
 
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      GIJ=CHECKMATE (PEAK Corp. http://www.peak.ne.jp/)
 * @version     $Id:$
 */

if( ! defined( 'APCAL_BLOCK_MINI_CALENDAR_INCLUDED' ) ) {

define( 'APCAL_BLOCK_MINI_CALENDAR_INCLUDED' , 1 ) ;

function apcal_mini_calendar_show( $options )
{
	global $xoopsConfig , $xoopsDB , $xoopsUser ;

	$mydirname = empty( $options[0] ) ? basename( dirname( dirname( __FILE__ ) ) ) : $options[0] ;

	// caldate や日付ジャンプの指定が無く（当月のデフォルトミニカレンダー表示）
	// かつ、ユーザのTimezoneがdefaultTZと一緒（一番多そうなシチュエーション）の
	// 場合には、キャッシュを使う
	if( empty( $_GET[ 'caldate' ] ) && empty( $_POST[ 'apcal_jumpcaldate' ] ) && ( ! is_object( $xoopsUser ) || $xoopsUser->timezone() == $xoopsConfig['default_TZ'] ) ) {
		$use_cache = true ;
		$cachefile = XOOPS_CACHE_PATH . "/{$mydirname}_minical_cache_{$xoopsConfig['language']}.html" ;
		// 5 minutes
		if( file_exists( $cachefile ) && filemtime( $cachefile ) > time() - 300 ) {
			if( false !== $fp = fopen( $cachefile, 'r' ) ) {
				$block['content'] = '' ;
				while( ! feof( $fp ) ) {
					$block['content'] .= fgets( $fp , 4096 ) ;
				}
				fclose( $fp ) ;
				return $block ;
			}
		}
	} else {
		$use_cache = false ;
	}

	// setting physical & virtual paths
	$mod_path = XOOPS_ROOT_PATH."/modules/$mydirname" ;
	$mod_url = XOOPS_URL."/modules/$mydirname" ;

	// defining class of APCal
	if( ! class_exists( 'APCal_xoops' ) ) {
		require_once( "$mod_path/class/APCal.php" ) ;
		require_once( "$mod_path/class/APCal_xoops.php" ) ;
	}

	// creating an instance of APCal 
	$cal = new APCal_xoops( "" , $xoopsConfig['language'] , true ) ;

	// ignoring cid from GET
	$cal->now_cid = 0 ;

	// setting properties of APCal
	$cal->conn = $xoopsDB->conn ;
	include( "$mod_path/include/read_configs.php" ) ;
	$cal->base_url = $mod_url ;
	$cal->base_path = $mod_path ;
	$cal->images_url = "$mod_url/images/$skin_folder" ;
	$cal->images_path = "$mod_path/images/$skin_folder" ;

	switch( $mini_calendar_target ) {
		case 'MONTHLY' :
			$get_target = "$mod_url/index.php" ;
			$query_string = "smode=Monthly" ;
			break ;
		case 'WEEKLY' :
			$get_target = "$mod_url/index.php" ;
			$query_string = "smode=Weekly" ;
			break ;
		case 'DAILY' :
			$get_target = "$mod_url/index.php" ;
			$query_string = "smode=Daily" ;
			break ;
		case 'LIST' :
			$get_target = "$mod_url/index.php" ;
			$query_string = "smode=List" ;
			break ;
		default :
		case 'PHP_SELF' :
			$get_target = '' ;
			$query_string = "" ;
			break ;
	}

	$block = array() ;
	$block['content'] = $cal->get_mini_calendar_html( $get_target , $query_string ) ;

	// キャッシュの書き出し
	if( $use_cache && $mini_calendar_target != 'PHP_SELF' ) {
		if( false !== $fp = fopen( $cachefile, 'w' ) ) {
			fwrite( $fp , $block['content'] ) ;
			fclose( $fp ) ;
		}
	}

	return $block ;
}



function apcal_mini_calendar_edit( $options )
{
	return '' ;
}

}

?>