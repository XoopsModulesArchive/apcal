<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright   {@link http://xoops.org/ XOOPS Project}
 * @license     {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @package
 * @since
 * @author       XOOPS Development Team,
 * @author       GIJ=CHECKMATE (PEAK Corp. http://www.peak.ne.jp/)
 */

// 台灣農曆假期設定2005-2010 by Chia (http://www.cyai.net/)
$this->holidays = array(
    '2005-2-8'  => '除夕',
    '2005-2-9'  => '春節',
    '2005-2-10' => '回娘家',
    '2005-2-11' => '祭祖',
    '2005-2-12' => '迎神',
    '2005-2-13' => '開市',
    '2005-6-11' => '端午節',
    '2005-9-18' => '中秋節',
    '2006-1-28' => '除夕',
    '2006-1-29' => '春節',
    '2006-1-30' => '回娘家',
    '2006-1-31' => '祭祖',
    '2006-2-1'  => '迎神',
    '2006-2-2'  => '開市',
    '2006-5-31' => '端午節',
    '2006-10-6' => '中秋節',
    '2007-2-17' => '除夕',
    '2007-2-18' => '春節',
    '2007-2-19' => '回娘家',
    '2007-2-20' => '祭祖',
    '2007-2-21' => '迎神',
    '2007-2-22' => '開市',
    '2007-6-19' => '端午節',
    '2007-9-25' => '中秋節',
    '2008-2-6'  => '除夕',
    '2008-2-7'  => '春節',
    '2008-2-8'  => '回娘家',
    '2008-2-9'  => '祭祖',
    '2008-2-10' => '迎神',
    '2008-2-11' => '開市',
    '2008-6-8'  => '端午節',
    '2008-9-14' => '中秋節',
    '2009-1-25' => '除夕',
    '2009-1-26' => '春節',
    '2009-1-27' => '回娘家',
    '2009-1-28' => '祭祖',
    '2009-1-29' => '迎神',
    '2009-1-30' => '開市',
    '2009-5-28' => '端午節',
    '2009-10-3' => '中秋節',
    '2010-2-13' => '除夕',
    '2010-2-14' => '春節',
    '2010-2-15' => '回娘家',
    '2010-2-16' => '祭祖',
    '2010-2-17' => '迎神',
    '2010-2-18' => '開市',
    '2010-6-16' => '端午節',
    '2010-9-22' => '中秋節'
);

// 台灣國曆假期設定2001-2020 by Chia (http://www.cyai.net/)
for ($y = 2001; $y < 2020; ++$y) {
    $this->holidays["$y-1-1"]   = '元旦';
    $this->holidays["$y-2-28"]  = '和平紀念日';
    $this->holidays["$y-4-5"]   = '清明節';
    $this->holidays["$y-10-10"] = '國慶日';
}
