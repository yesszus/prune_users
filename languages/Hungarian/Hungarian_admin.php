<?php
/*
+----------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/03/09 16:18:43
|
|        $Author: Yesszus $
|        Web: https://github.com/yesszus/e107-v2.x-Language-Packs/releases
+-----------------------------------------------------------------------+
*/

// Inaktív felhasználóknak szánt levél tárgya
define("PRUNE_ASUBJECT", "Inaktivitás figyelmeztetés! A ".SITENAME." weboldalról.");
// A megadott idő óta be nem lépett felhasználónak küldendő levél tartalma
// $_REQUEST['prune_days'] napja nem léptél be a weboldalra.
define("PRUNE_AMESSAGEL1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik ".$pref['prune_days']." napja nem léptek be. ");
define("PRUNE_AMESSAGEL2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat akkor, 1 héten belül lépj be az oldalra. Ha 1 héten belül nem lépsz be az oldalra a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGEL3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Figyelmeztető levél tartalma, arról hogy nem írt hozzászólást a fórumba
define("PRUNE_AMESSAGEF1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik nem írtak hozzászólást a Fórumba ".$pref['prune_days']." napja. ");
define("PRUNE_AMESSAGEF2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül írj hozzászólást a Fórumba. Ha 1 héten belül nem írsz hozzászólást a Fórumba akkor a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGEF3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email contents for not making a sufficient forum posts
define("PRUNE_AMESSAGEFP1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik nem írtak hozzászólást a Fórumba.");
define("PRUNE_AMESSAGEFP2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül írj hozzászólást a Fórumba. Ha 1 héten belül nem írsz hozzászólást a Fórumba akkor a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGEFP3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email contents for not making a sufficient chat posts
define("PRUNE_AMESSAGECB1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik nem írtak hozzászólást a chatbox-ba.");
define("PRUNE_AMESSAGECB2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül lépj be az oldalra. Ha 1 héten belül nem lépsz be, akkor a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGECB3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email contents for not making a sufficient comments
define("PRUNE_AMESSAGEC1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik nem írtak hozzászólást.");
define("PRUNE_AMESSAGEC2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül lépj be az oldalra. Ha 1 héten belül nem lépsz be, akkor a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGEC3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email contents for not making a sufficient visits
define("PRUNE_AMESSAGEV1", "A ".SITENAME." weboldal adminisztrátora törli az inaktív regisztrált felhasználókat. ");
define("PRUNE_AMESSAGEV2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül lépj be az oldalra. Ha 1 héten belül nem lépsz be, akkor a regisztrációdat töröljük. ");
define("PRUNE_AMESSAGEV3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email to say account now deleted
define("PRUNE_AMESSAGED1", "A ".SITENAME." weboldal adminisztrátora törlte a regisztrációdat, mivel nem léptél be az oldalra már ".$pref['prune_days']." napja. ");
define("PRUNE_AMESSAGED2", "Sajnos ezért törölve lettél az oldalról.");
define("PRUNE_AMESSAGED3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

// Email to say account demoted
define("PRUNE_AMESSAGEDM1", "A ".SITENAME." weboldal adminisztrátora törli azokat a regisztrált felhasználókat akik nem léptek be az oldalra ".$pref['prune_days']." napja. ");
define("PRUNE_AMESSAGEDM2", "Ha azt szeretnéd hogy ne töröljük a regisztrációdat, akkor 1 héten belül lépj be az oldalra. Ha 1 héten belül nem lépsz be, akkor a regisztrációdat töröljük.");
define("PRUNE_AMESSAGEDM3", "Üdvözlettel - ".SITENAME." Adminisztrátora.");

define("PRUNE_Preamble", "Helló");

define("PRUNE_HELP_0","Inaktív Felhasználók");
define("PRUNE_HELP_1","Beállítás");
define("PRUNE_HELP_2","Inaktivitás óta eltelt nap kiválasztása");
define("PRUNE_HELP_3","A felhasználó utolsó aktív napjától eltelt idő kiválasztása.");
define("PRUNE_HELP_4","Szelektálás");
define("PRUNE_HELP_5","Az inaktív felhasználókat, utolsó bejelentkezésük illetve utolsó fórum hozzászólásuk alapján szelektálhatod.");
define("PRUNE_HELP_6","Értesítés a törlésről");
define("PRUNE_HELP_7","E-mailben értesítheted az inaktívvá vált felhasználókat a tagságuk törléséről (Nincs hatással az emlékeztető E-mail-re).");
define("PRUNE_HELP_8","Művelet");
define("PRUNE_HELP_9","Beállíthatod hogy a kiválasztott felhasználóknak előbb emlékezetető E-mail-t küldessz az inaktivitásról, vagy törölni kivánod őket.");
define("PRUNE_HELP_10","Általános");
define("PRUNE_HELP_11","Először be kell állítanod a plugint majd kattints a <i>Felhasználók szelektálása</i> linkre a menüben.<br /> és itt tudod kezelni a beállítások alapján kiválasztott inaktív felhasználókat.");

define("PRUNE_A1", "Inaktív Felhasználók Szelektálása");
define("PRUNE_A2", "Mióta inaktív (napok száma)");
define("PRUNE_A3", "Mehet");
define("PRUNE_A4", "Név");
define("PRUNE_A5", "Utolsó aktivitás");
define("PRUNE_A6", "Töröl");
define("PRUNE_A7", "Sikertelen törlés");
define("PRUNE_A8", "Törölve!");
define("PRUNE_A9", "Nincs inaktív felhasználó a megadott kritériumok alapján");
define("PRUNE_A10", "Tovább");
define("PRUNE_A11", "0 napnál nagyobb periódust kell megadnod!");
define("PRUNE_A12", "több mint ");
define("PRUNE_A13", " nappal ezelőtt történt!");
define("PRUNE_A14", "<strong>FIGYELMEZTETÉS</strong> A kiválasztott felhasználók törölve lesznek.<br>Törlés után már csak akkor tudod visszaállítani a felhasználókat ha készítettél mentést.<br>Folytatod a műveletet, mindezen veszélyek ellenére?");
define("PRUNE_A15", "Elfelejtetted kiválasztani a felhasználókat!");
define("PRUNE_A16", "Szűrési feltétel");
define("PRUNE_A17", "Az utolsó belépés");
define("PRUNE_A18", "Az utolsó fórum hozzászólás");
define("PRUNE_A19", "Nincs hozzászólás");
define("PRUNE_A20", "Inaktív Felhasználók");
define("PRUNE_A21", "Beállítások");
define("PRUNE_A22", "A változtatások elmentve!");
define("PRUNE_A23", "E-mail (név)");
define("PRUNE_A24", "E-mail (E-mail cím)");
define("PRUNE_A25", "Művelet");
define("PRUNE_A26", "E-mail küldése a kiválasztott felhasználóknak");
define("PRUNE_A27", "A kiválasztott felhasználók törlése");
define("PRUNE_A28", "E-mail elküldve!");
define("PRUNE_A29", "E-mail elküldése sikertelen!");
define("PRUNE_A30", "Értesítő E-mail lesz elküldve a felhasználóknak");
define("PRUNE_A31", "Értesítés a felhasználó törléséről");
define("PRUNE_A32", "Nem");
define("PRUNE_A33", "Igen");
define("PRUNE_A34", "Még egyszer sem lépett be!");
define("PRUNE_A35", "Adminisztrátori rang megvonása E-mail küldés, vagy törlés előtt");
define("PRUNE_A36", "Összes kijelölése");
define("PRUNE_A37", "Kijelölések visszavonása");
define("PRUNE_A38", "Mentés");
define("PRUNE_A39", "Felhasználók szelektálása inaktivitásuk alapján (inaktív napok száma)");
define("PRUNE_A40", "Szelektálási kritérium");
define("PRUNE_A41", "Művelet");
define("PRUNE_A42", "Figyelmeztető e-mail küldése");
define("PRUNE_A43", "Felhasználók törlése");
define("PRUNE_A44", "Regisztráció ideje");
define("PRUNE_A45", "Inaktív felhasználók");
define("PRUNE_A46", "Frissítés Keresése");
define("PRUNE_A47", "Csoport eltávolítása");
define("PRUNE_A48", "Csoport eltávolítva!");
define("PRUNE_A49", "Csoport Szűrése");
define("PRUNE_A50", "Olvass El");
define("PRUNE_A51", "Ugrás az admin felületre és add meg az inaktív felhasználói beállításokat");
define("PRUNE_A52", "Min. fórum üzenet");
define("PRUNE_A53", "Min. chat üzenet");
define("PRUNE_A54", "Min. hozzászólás");
define("PRUNE_A55", "Maximum napok");
define("PRUNE_A56", "Fórum");
define("PRUNE_A57", "Chat");
define("PRUNE_A58", "Hozzászólás");
define("PRUNE_A59", "Utolsó Belépés");
define("PRUNE_A60", "Utolsó Üzenet");
define("PRUNE_A61", "Belépései");
define("PRUNE_A62", "Adminok kihagyása");
define("PRUNE_A63", "Szelektálható felhasználók száma:");

define("PRUNE_R01","Inaktív Felhasználók");
define("PRUNE_R02","Plugin");
define("PRUNE_R03","Inaktív Felhasználók");
define("PRUNE_R04","Szerző");
define("PRUNE_R05","Father Barry");
define("PRUNE_R06","Verzió");
define("PRUNE_R07","2.6");
define("PRUNE_R08","Állapot");
define("PRUNE_R09","Kiadva");
define("PRUNE_R10","Figyelmeztetés");
define("PRUNE_R11","Semmilyen felelősséget nem vállalok a plugin használatából eredendő károkért!<br>Mindenki csak saját felelősségére használja!");
define("PRUNE_R12","Copyright");
define("PRUNE_R13","Barry Keal 2007.");
define("PRUNE_R14","Licensz");
define("PRUNE_R15","GPL");
define("PRUNE_R16","Weboldal");
define("PRUNE_R17","www.keal.me.uk");
define("PRUNE_R18","Támogatás");
define("PRUNE_R19","A plugin frissítések és segítség nyújtás, kizárólag <strong>CSAK</strong> a <a target='_blank' href='http://www.keal.me.uk'>Weboldalamon</a> érhető el.");
define("PRUNE_R20","");
define("PRUNE_R21","");
define("PRUNE_R22","");
define("PRUNE_R23","");
define("PRUNE_R24", "Ha tetszik a munkám, <b>támogathatsz</b> adományozással a <a target='_blank' href='http://www.keal.me.uk'>Weboldalamon</a>.  ");
define("PRUNE_R25", "Adomány");

define("EVERSION_U1", "A plugin.php nem létezik a plugin könyvtárában!");
define("EVERSION_U2", "az e_update.php nem létezik a plugin könyvtárában");
define("EVERSION_U3", "Frissítések keresése a pluginhoz :");
define("EVERSION_U4", "A jelenlegi telepített verzió :");
define("EVERSION_U5", "Frissítések Keresése");
define("EVERSION_U6", "Nem lehet elérni frissítő weboldalt, ellenőrizze a verziószámot");
define("EVERSION_U7", "Elérhető az új verzió");
define("EVERSION_U8", "Ez egy béta verzió.");
define("EVERSION_U9", "Jelenleg a legfrissebb verziót használod!");
define("EVERSION_U10", "Nem lehet kapcsolódni a frissítési weboldalhoz! Vedd föl a kapcsolatot a plugin szerzőjével.");
define("EVERSION_U11", "Frissítések Keresése");
define("EVERSION_U12", "Eredmény");
define("EVERSION_U13", "Tekintse meg a verzió adatait, vagy töltse le ");
define("EVERSION_U14", "Ide Kattinva");
define("EVERSION_U15", "Ismertetés :");
define("EVERSION_U16", "Frissítések Keresése");
define("EVERSION_U17", "Kiadva :");
define("EVERSION_U18", "A Plugin Szerzője :");
define("EVERSION_U19", "A Plugin Manager szerint ");
define("EVERSION_U20", "ez a verzió van telepítve. Ellenőrizd a Plugin Manager-ben.");
define("EVERSION_U21", "Kiadva"); 
?>