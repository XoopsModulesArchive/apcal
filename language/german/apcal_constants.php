<?php

if( defined('FOR_XOOPS_LANG_CHECKER') || !defined('_APCAL_CNST_LOADED') ) {
    define('_APCAL_CNST_LOADED' , 1 ) ;

    // Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:11
    define('_APCAL_JS_CALENDAR','calendar-de.js');

    // format for jscalendar. see common/jscalendar/doc/html/reference.html
    define('_APCAL_JSFMT_YMDN','%d %B %Y (%A)');

    // format for date()  see http://jp.php.net/date
    define('_APCAL_DTFMT_MINUTE','i');

    // definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
    // define('_APCAL_FMT_MD','%1$s %2$s') ;
    define('_APCAL_FMT_MD','%2$s %1$s') ;
    define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
    define('_APCAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
    define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s') ;
    define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
    define('_APCAL_FMT_YW','Kalenderwoche %2$s %1$s') ;
    define('_APCAL_FMT_DHI','%1$s %2$s:%3$s');
    define('_APCAL_FMT_HI','%1$s:%2$s');

    // format for strftime()  see http://de.php.net/strftime
    define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
    define('_APCAL_FMT_YEAR','Jahr %s') ;
    define('_APCAL_FMT_WEEKNO','Kalenderwoche %s') ;

    define('_APCAL_ICON_LIST','Listenansicht') ;
    define('_APCAL_ICON_DAILY','Tagesansicht') ;
    define('_APCAL_ICON_WEEKLY','Wochenansicht') ;
    define('_APCAL_ICON_MONTHLY','Monatsansicht') ;
    define('_APCAL_ICON_YEARLY','Jahresansicht') ;

    define('_APCAL_MB_SHOWALLCAT','Alle Kategorien') ;

    define('_APCAL_MB_LINKTODAY','Heute') ;
    define('_APCAL_MB_NOSUBJECT','(Kein Betreff)') ;

    define('_APCAL_MB_PREV_DATE','Gestern') ;
    define('_APCAL_MB_NEXT_DATE','Morgen') ;
    define('_APCAL_MB_PREV_WEEK','Vorherige Woche') ;
    define('_APCAL_MB_NEXT_WEEK','Nächste Woche') ;
    define('_APCAL_MB_PREV_MONTH','Vorheriger Monat') ;
    define('_APCAL_MB_NEXT_MONTH','Nächster Monat') ;
    define('_APCAL_MB_PREV_YEAR','Vorheriges Jahr') ;
    define('_APCAL_MB_NEXT_YEAR','Nächstes Jahr') ;

    define('_APCAL_MB_NOEVENT','Derzeit sind keine Veranstaltungen verfügbar') ;
    define('_APCAL_MB_ADDEVENT','Termin(e) hinzufügen') ;
    define('_APCAL_MB_CONTINUING','(dauernd)') ;
    define('_APCAL_MB_RESTEVENT_PRE','weitere ') ;
    define('_APCAL_MB_RESTEVENT_SUF','Einträge vorhanden') ;
    define('_APCAL_MB_TIMESEPARATOR','--') ;

    define('_APCAL_MB_ALLDAY_EVENT','Ganztagstermin') ;
    define('_APCAL_MB_LONG_EVENT','Als Balken darstellen') ;
    define('_APCAL_MB_LONG_SPECIALDAY','Geburtstag, etc.') ;

    define('_APCAL_MB_PUBLIC','öffentlich') ;
    define('_APCAL_MB_PRIVATE','privat') ;
    define('_APCAL_MB_PRIVATETARGET',' %s') ;

    define('_APCAL_MB_LINK_TO_RRULE1ST','Zum 1. Termin springen') ;
    define('_APCAL_MB_RRULE1ST','Das ist der 1. Termin') ;

    define('_APCAL_MB_EVENT_NOTREGISTER','nicht eingetragen') ;
    define('_APCAL_MB_EVENT_ADMITTED','freigegeben') ;
    define('_APCAL_MB_EVENT_NEEDADMIT','wartet auf Freigabe') ;

    define('_APCAL_MB_TITLE_EVENTINFO','Terminplaner') ;
    define('_APCAL_MB_SUBTITLE_EVENTDETAIL','Detailansicht') ;
    define('_APCAL_MB_SUBTITLE_EVENTEDIT','Bearbeitungsansicht') ;

    define('_APCAL_MB_HOUR_SUF',':') ;
    define('_APCAL_MB_MINUTE_SUF','') ;

    define('_APCAL_MB_ORDER_ASC','aufsteigend') ;
    define('_APCAL_MB_ORDER_DESC','absteigend') ;
    define('_APCAL_MB_SORTBY','Sortieren nach:') ;
    define('_APCAL_MB_CURSORTEDBY','Termine derzeit sortiert nach:') ;

    define('_APCAL_MB_LABEL_CHECKEDITEMS','Ausgewählte Events werden:');
    define('_APCAL_MB_LABEL_OUTPUTICS','nach iCalendar exportiert');

    define('_APCAL_MB_ICALSELECTPLATFORM','Plattform wählen');

    define('_APCAL_TH_SUMMARY','Titel') ;
    define('_APCAL_TH_TIMEZONE','Zeitzone') ;
    define('_APCAL_TH_STARTDATETIME','Start-Zeitpunkt') ;
    define('_APCAL_TH_ENDDATETIME','End-Zeitpunkt') ;
    define('_APCAL_TH_ALLDAYOPTIONS','Ganztagsoptionen') ;
    define('_APCAL_TH_LOCATION','Ort') ;
    define('_APCAL_TH_CONTACT','Kontakt') ;
    define('_APCAL_TH_CATEGORIES','Kategorie') ;
    define('_APCAL_TH_SUBMITTER','Eingetragen von') ;
    define('_APCAL_TH_CLASS','Klasse') ;
    define('_APCAL_TH_DESCRIPTION','Beschreibung') ;
    define('_APCAL_TH_RRULE','Regeln für wiederkehrende Termine') ;
    define('_APCAL_TH_ADMISSIONSTATUS','Status') ;
    define('_APCAL_TH_LASTMODIFIED','Letzte Änderung') ;

    define('_APCAL_NTC_MONTHLYBYMONTHDAY','(Zahl eingeben)') ;
    define('_APCAL_NTC_EXTRACTLIMIT','-> max. %s Termine werden eingetragen') ;
    define('_APCAL_NTC_NUMBEROFNEEDADMIT','(Termine, die noch auf Freigabe warten: %s )') ;

    define('_APCAL_OPT_PRIVATEMYSELF','nur ich selbst') ;
    define('_APCAL_OPT_PRIVATEGROUP','Gruppe %s') ;
    define('_APCAL_OPT_PRIVATEINVALID','(ungültige Gruppe)') ;

    define('_APCAL_MB_OP_AFTER','Nach dem') ;
    define('_APCAL_MB_OP_BEFORE','Vor dem') ;
    define('_APCAL_MB_OP_ON','Am') ;
    define('_APCAL_MB_OP_ALL','Alle') ;

    define('_APCAL_CNFM_SAVEAS_YN','Als einen weiteren Eintrag speichern - OK?') ;
    define('_APCAL_CNFM_DELETE_YN','Eintrag löschen - OK?') ;

    define('_APCAL_ERR_INVALID_EVENT_ID','Fehler: EventID nicht gefunden') ;
    define('_APCAL_ERR_NOPERM_TO_SHOW','Fehler: Keine Zugriffsberechtigung') ;
    define('_APCAL_ERR_NOPERM_TO_OUTPUTICS','Fehler: Keine Berechtigung für die iCalendar Ausgabe') ;
    define('_APCAL_ERR_LACKINDISPITEM','Eintrag %s ist leer.<br />Zurück-Button des Browsers drücken') ;

    define('_APCAL_BTN_JUMP','Zeigen') ;
    define('_APCAL_BTN_NEWINSERTED','Jetzt Eintragen') ;
    define('_APCAL_BTN_SUBMITCHANGES',' Änderungen zuweisen ') ;
    define('_APCAL_BTN_SAVEAS','Speichern unter') ;
    define('_APCAL_BTN_DELETE','Löschen') ;
    define('_APCAL_BTN_DELETE_ONE','Nur diesen Eintrag löschen') ;
    define('_APCAL_BTN_EDITEVENT','Bearbeiten') ;
    define('_APCAL_BTN_RESET','Zurücksetzen') ;
    define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
    define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
    define('_APCAL_BTN_PRINT','Drucken') ;
    define('_APCAL_BTN_IMPORT','Import!');
    define('_APCAL_BTN_UPLOAD','Upload!');
    define('_APCAL_BTN_EXPORT','Export!');
    define('_APCAL_BTN_EXTRACT','Extrahieren');
    define('_APCAL_BTN_ADMIT','Freigeben');
    define('_APCAL_BTN_MOVE','Verschieben');
    define('_APCAL_BTN_COPY','Kopieren');

    define('_APCAL_RR_EVERYDAY','Jeden Tag') ;
    define('_APCAL_RR_EVERYWEEK','Jede Woche') ;
    define('_APCAL_RR_EVERYMONTH','Jedes Monat') ;
    define('_APCAL_RR_EVERYYEAR','Jedes Jahr') ;
    define('_APCAL_RR_FREQDAILY','täglich') ;
    define('_APCAL_RR_FREQWEEKLY','wöchentlich') ;
    define('_APCAL_RR_FREQMONTHLY','monatlich') ;
    define('_APCAL_RR_FREQYEARLY','jährlich') ;
    define('_APCAL_RR_FREQDAILY_PRE','Alle') ;
    define('_APCAL_RR_FREQWEEKLY_PRE','Alle') ;
    define('_APCAL_RR_FREQMONTHLY_PRE','Alle') ;
    define('_APCAL_RR_FREQYEARLY_PRE','Alle') ;
    define('_APCAL_RR_FREQDAILY_SUF','Tage') ;
    define('_APCAL_RR_FREQWEEKLY_SUF','Wochen') ;
    define('_APCAL_RR_FREQMONTHLY_SUF','Monate') ;
    define('_APCAL_RR_FREQYEARLY_SUF','Jahre') ;
    define('_APCAL_RR_PERDAY','alle %s Tage') ;
    define('_APCAL_RR_PERWEEK','alle %s Wochen') ;
    define('_APCAL_RR_PERMONTH','alle %s Monate') ;
    define('_APCAL_RR_PERYEAR','alle %s Jahre') ;
    define('_APCAL_RR_COUNT','<br />%s-mal') ;
    define('_APCAL_RR_UNTIL','<br />bis %s') ;
    define('_APCAL_RR_R_NORRULE','wiederkehrend NEIN') ;
    define('_APCAL_RR_R_YESRRULE','wiederkehrend JA') ;
    define('_APCAL_RR_OR','oder') ;
    define('_APCAL_RR_S_NOTSELECTED','-nicht ausgewählt-') ;
    define('_APCAL_RR_S_SAMEASBDATE','gleich wie Start-Zeitpunkt') ;
    define('_APCAL_RR_R_NOCOUNTUNTIL','Keine Endbedingungen') ;
    define('_APCAL_RR_R_USECOUNT_PRE','Wiederholungen') ;
    define('_APCAL_RR_R_USECOUNT_SUF','mal') ;
    define('_APCAL_RR_R_USEUNTIL','bis') ;

    // Added by goffy for online registration handling
    define('_APCAL_RO_CANCEL','Vorgang abgebrochen');
    define('_APCAL_RO_RADIO_YES','Ja');
    define('_APCAL_RO_RADIO_NO','Nein');

    define('_APCAL_RO_ONLINE_POSS','Bei diesen Terminen ist eine Onlineanmeldung möglich. ');
    define('_APCAL_RO_ONLINE_POSS_2','Bei diesem Termin ist eine Onlineanmeldung möglich. ');
    define('_APCAL_RO_ONLY_MEMBERS','Eine Onlineanmeldung kann nur von registrierten Mitgliedern durchgeführt werden. ');
    define('_APCAL_RO_ONLINE_NO','Online-Anmeldung für diese Veranstaltung nicht aktiviert');
    define('_APCAL_RO_ONLINE_YES','Online-Anmeldung für diese Veranstaltung aktiviert');
    define('_APCAL_RO_ONLINE_ACTIVATE','Online-Anmeldung für diese Veranstaltung aktivieren');
    define('_APCAL_RO_ONLINE_DEACTIVATE','Online-Anmeldung für diese Veranstaltung nicht verwenden');
    define('_APCAL_RO_ONLINE','Anmeldungen');
    define('_APCAL_RO_BTN_ADD','Anmelden');
    define('_APCAL_RO_BTN_ADDMORE','Bearbeiten/Weitere Personen anmelden');
    define('_APCAL_RO_BTN_REMOVE','Abmelden');
    define('_APCAL_RO_ENABLE_ONLINE','Online-Anmeldung');
    define('_APCAL_RO_NOMEMBERS','Keine Anmeldungen zu diesem Event vorhanden');
    define('_APCAL_RO_BTN_LISTMEMBERS','Teilnehmerliste');
    define('_APCAL_RO_SUCCESS_ADD','Die Anmeldung zu dieser Veranstaltung wurde erfolgreich durchgeführt');
    define('_APCAL_RO_SUCCESS_REMOVE','Die Abmeldung von dieser Veranstaltung wurde erfolgreich durchgeführt');
    define('_APCAL_RO_UNAME','Anmelder(in)');
    define('_APCAL_RO_FIRSTNAME','Vorname');
    define('_APCAL_RO_LASTNAME','Familienname');
    define('_APCAL_RO_EMAIL','E-Mail-Adresse');
    //    extra infos have moved to preferences
    //    define('_APCAL_RO_EXTRAINFO1','Telefon'); //use it as you want; if you keep it blank, it will be invisible; if you change later, it has no effect on the data himself
    //    define('_APCAL_RO_EXTRAINFO2','Geb. Jahr'); //use it as you want, if you keep it blank, it will be invisible
    //    define('_APCAL_RO_EXTRAINFO3','Mitglied (JA / NEIN)'); //use it as you want, if you keep it blank, it will be invisible
    //    define('_APCAL_RO_EXTRAINFO4','Sonstige Anmerkungen'); //use it as you want, if you keep it blank, it will be invisible
    //    define('_APCAL_RO_EXTRAINFO5',''); //use it as you want, if you keep it blank, it will be invisible

    define('_APCAL_RO_BTN_CONF_ADD','Anmeldung bestätigen');
    define('_APCAL_RO_BTN_CONF_ADD_MORE','Anmeldung bestätigen und weitere Personen anmelden');
    define('_APCAL_RO_BTN_CONF_REMOVE','Abmeldung bestätigen');
    define('_APCAL_RO_BTN_CANCEL','Abbrechen');
    define('_APCAL_RO_EVENT','Veranstaltung');
    define('_APCAL_RO_TITLE1','Anmeldung zu einer Veranstaltung');
    define('_APCAL_RO_OBLIGATORY','Gekennzeichnete Felder zwingend erforderlich!');

    define('_APCAL_RO_ERROR_REMOVE','Unerwarteter Fehler beim Löschen der Anmeldedaten');
    define('_APCAL_RO_ERROR_ADD','Unerwarteter Fehler beim Erstellen der Anmeldung');
    define('_APCAL_RO_BTN_BACK','Zurück');
    define('_APCAL_RO_BACK','Sie werden auf die vorherige Seite weitergeleitet');
    define('_APCAL_RO_ONLINE2','Online-Anmeldungen');
    define('_APCAL_RO_ACTION','Aktionen');

    define('_APCAL_RO_TITLE2','Aktivierung der Online-Registrierung für eine Veranstaltung');
    define('_APCAL_RO_BTN_RO_EDIT','Online-Registrierung bearbeiten');
    define('_APCAL_RO_BTN_RO_DEACTIVATE','Online-Registrierung löschen');
    define('_APCAL_RO_BTN_RO_ACTIVATE','Aktivieren');
    define('_APCAL_RO_QUANTITY','Maximale Anzahl an Teilnehmern<br/>(0 bedeutet: Kein Limit)');
    define('_APCAL_RO_QUANTITY2','Maximale Anzahl an Teilnehmern');
    define('_APCAL_RO_DATELIMIT','Frist für Registrierung');
    define('_APCAL_RO_EMAIL_NOTIFY','E-Mail-Adresse, die bei An-/Abmeldungen verständigt werden soll (wenn keine Benachrichtigung erfolgen soll, einfach frei lassen)');
    define('_APCAL_RO_BTN_CONF_ACTIVATE','Bestätigen');
    define('_APCAL_RO_ERROR_RO_ACTIVATE','Unerwarteter Fehler beim Aktivieren der Online-Registrierung');
    define('_APCAL_RO_SUCCESS_RO_ACTIVATE','Aktivieren/Ändern der Online-Registrierung erfolgreich');
    define('_APCAL_RO_ERROR_RO_DEACTIVATE','Unerwarteter Fehler beim Deaktivieren der Online-Registrierung');
    define('_APCAL_RO_SUCCESS_RO_DEACTIVATE','Deaktivieren der Online-Registrierung erfolgreich');
    define('_APCAL_RO_ERROR_FULL','Es tut uns leid, aber für diese Veranstaltung sind keine Plätze mehr frei');
    define('_APCAL_RO_ERROR_TIMEOUT','Es tut uns leid, aber die Anmeldefrist für diese Veranstaltung ist abgelaufen');
    define('_APCAL_RO_ERROR_OBLIGATORY','Bitte das Pflichtfeld \'%f\' befüllen');
    define('_APCAL_RO_BTN_CONF_SAVE','Speichern');
    define('_APCAL_RO_BTN_CONF_EDIT','Änderungen speichern');

    define('_APCAL_RO_MAIL_SUBJ_ADD','Info Anmeldung');
    define('_APCAL_RO_MAIL_SUBJ_REMOVE','Info Abmeldung');
    define('_APCAL_RO_MAIL_SUBJ_TEXT','Veranstaltungsinfo');
    define('_APCAL_RO_DATE','Datum');
    define('_APCAL_RO_LOCATION','Ort');
    define('_APCAL_RO_LINK','Link zur Veranstaltung');
    define('_APCAL_RO_TITLE3','Übersicht über bereits durchgeführte Anmeldungen');
    define('_APCAL_RO_TITLE4','Allen gemeldeten Teilnehmer, die eine E-Mail-Adresse angegeben haben, eine E-Mail schicken');
    define('_APCAL_RO_MAIL_SENDER','Absender');
    define('_APCAL_RO_MAIL_SUBJ','Betreff');
    define('_APCAL_RO_MAIL_BODY1','Mailtext');
    define('_APCAL_RO_MAIL_BODY2','Die Ausdrücke in den geschwungenen Klammern werden entsprechend ersetzt (z.B. {NAME} wird durch Vor- und Familienname ersetzt)');
    define('_APCAL_RO_BTN_SEND','E-Mail Senden');
    define('_APCAL_RO_MAILSENT',' Nachricht(en) wurde(n) verschickt');

    define('_APCAL_RO_TITLE5','Ändern von Anmeldungen');
    define('_APCAL_RO_BTN_EDIT','Bearbeiten');
    define('_APCAL_RO_SUCCESS_EDIT','Ändern der Anmeldedaten erfolgreich');
    define('_APCAL_RO_ERROR_EDIT','Unerwarteter Fehler beim Ändern der Anmeldedaten');
    define('_APCAL_RO_SEND_CONF1','E-Mail-Bestätigung');
    define('_APCAL_RO_SEND_CONF2','senden an');
    define('_APCAL_RO_SEND_CONF3','E-Mail-Bestätigung senden: ');

    define('_APCAL_RO_REDIRECT','Sie werden zur Aktivierung der Onlineanmeldung weitergeleitet');
    define('_APCAL_RO_SUCCESS_NEW_EVENT','Termin wurde erfolgreich angelegt');
    define('_APCAL_RO_SUCCESS_DELETE_EVENT','Termin wurde erfolgreich gelöscht');
    define('_APCAL_RO_SUCCESS_UPDATE_EVENT','Änderungen Termin wurden erfolgreich durchgeführt');
    define('_APCAL_RO_SUCCESS_COPY_EVENT','Termin wurde erfolgreich kopiert');

    //version 2.23
    define('_APCAL_RO_NO_RIGHT','Sie besitzen nicht die Berechtigung für eine Onlineanmeldung. ');
    define('_APCAL_RO_MISSING_ITEM','Fehler beim Speichern der Onlineanmeldung: Bitte %s ergänzen');
    define('_APCAL_RO_GUEST','Gast');
    define('_APCAL_RO_AVAILABLE','Verfügbarkeit');
    define('_APCAL_RO_LIST_ACT','Beim Erreichen der maximalen Teilnehmeranzahl den Teilnehmer auf eine Warteliste setzen');
    define('_APCAL_RO_STATUS_ACT','Jede Teilnahme muss vom Veranstalter bestätigt werden');
    define('_APCAL_RO_STATUS','Status');
    define('_APCAL_RO_STATUS_PENDING','Teilnahme vom Veranstalter noch nicht bestätigt');
    define('_APCAL_RO_STATUS_OK','Teilnahme vom Veranstalter bestätigt');
    define('_APCAL_RO_STATUS_LIST','Online-Registrierung wurde auf einer Warteliste vermerkt');
    define('_APCAL_RO_ERROR_STATUS_CONF','Fehler bei Teilnahmebestätigung');
    define('_APCAL_RO_STATUS_SUCCESS_CHANGE_PENDING','Der Status Teilnahme wurde auf \'noch nicht bestätigt\' geändert');
    define('_APCAL_RO_STATUS_SUCCESS_CHANGE_OK','Der Status Teilnahme wurde auf \'bestätigt\' geändert');
    define('_APCAL_RO_MAIL_SUBJ_STATUS','Info Statusänderung');
    define('_APCAL_RO_MAIL_RECEPIENT','Empfänger');
    define('_APCAL_RO_PUT_ON_WAITINGLIST','Für diese Veranstaltung sind derzeit keine Plätze mehr frei! Deine Anmeldung wurde auf einer Warteliste vorgemerkt! Sollte Deine Teilnahme zu einem späteren Zeitpunkt bestätigt werden, senden wir Dir eine e-Mail-Verständigung.');
    define('_APCAL_RO_PUT_ON_WAITINGLIST2','Die Anmeldung wurde auf einer Warteliste vorgemerkt und muss manuell übernommen werden!');
    define('_APCAL_RO_PRINT_LIST','Teilnehmerliste drucken');
    define('_APCAL_RO_DATAPROTECT', 'Datenschutz');
    define('_APCAL_RO_DATAPROTECT_DETAIL', 'Die Daten der Teilnehmer werden nur für die Dauer der Durchführung der Veranstaltung gespeichert und keinesfalls an Dritte weitergeben.<br />
Während der Veranstaltung wird fotografiert und die Bilder werden eventuell für interne Zwecke (z.B. Veröffentlichung auf der Vereinswebseite) verwendet. Sollten Sie dies nicht wünschen, dann kontaktieren Sie den Veranstalter.<br />
Mit der Anmeldung wird seitens des Teilnehmers das Einverständnis mit dieser Vorgangsweise erklärt.');

}
