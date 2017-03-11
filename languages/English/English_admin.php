<?php
/*
+----------------------------------------------------------------------+
|        e107 website content management system English Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/03/09 16:18:43
|
|        $Author: Yesszus $
|        Web: https://github.com/yesszus/e107-v2.x-Language-Packs/releases
+-----------------------------------------------------------------------+
*/

// Subject for the email to inactive user
define("PRUNE_ASUBJECT", "Use it or lose it! Membership of ".SITENAME." is being reviewed");
// Email contents for not logged in recently
// $_REQUEST['prune_days'] is the number of days you entered
define("PRUNE_AMESSAGEL1", "The administrator of ".SITENAME." is purging accounts that have not been active within the last ".$pref['prune_days']." days. ");
define("PRUNE_AMESSAGEL2", "Before deleting your account we are giving you the option to visit the site again if you wish.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGEL3", "Regards - ".SITENAME." Administrator");

// Email contents for not making a forum post recently
define("PRUNE_AMESSAGEF1", "The administrator of ".SITENAME." is purging accounts that have not made a contribution to the forums within the last ".$pref['prune_days']." days. ");
define("PRUNE_AMESSAGEF2", "Before deleting your account we are giving you the option to visit the site again and make a forum contribution.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGEF3", "Regards - ".SITENAME." Administrator");

// Email contents for not making a sufficient forum posts
define("PRUNE_AMESSAGEFP1", "The administrator of ".SITENAME." is purging accounts that have not made a useful contribution to the forums.");
define("PRUNE_AMESSAGEFP2", "Before deleting your account we are giving you the option to visit the site again and make forum contributions.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGEFP3", "Regards - ".SITENAME." Administrator");

// Email contents for not making a sufficient chat posts
define("PRUNE_AMESSAGECB1", "The administrator of ".SITENAME." is purging accounts that have not made a good contribution to the chatbox.");
define("PRUNE_AMESSAGECB2", "Before deleting your account we are giving you the option to visit the site again and make a bigger contribution.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGECB3", "Regards - ".SITENAME." Administrator");

// Email contents for not making a sufficient comments
define("PRUNE_AMESSAGEC1", "The administrator of ".SITENAME." is purging accounts that have not made a contribution to the site with comments ");
define("PRUNE_AMESSAGEC2", "Before deleting your account we are giving you the option to visit the site again and make a bigger contribution.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGEC3", "Regards - ".SITENAME." Administrator");

// Email contents for not making a sufficient visits
define("PRUNE_AMESSAGEV1", "The administrator of ".SITENAME." is purging accounts that have not made a contribution to the site by regularly visiting. ");
define("PRUNE_AMESSAGEV2", "Before deleting your account we are giving you the option to visit the site again and make a bigger contribution.  If you do not visit within the next week your account will be deleted. ");
define("PRUNE_AMESSAGEV3", "Regards - ".SITENAME." Administrator");

// Email to say account now deleted
define("PRUNE_AMESSAGED1", "The administrator of ".SITENAME." has purged accounts that have not made a contribution to the site or logged in within the last ".$pref['prune_days']." days. ");
define("PRUNE_AMESSAGED2", "Your account has now been deleted and your user name and password are no longer valid.  If you wish to use the site you will have to re register.");
define("PRUNE_AMESSAGED3", "Regards - ".SITENAME." Administrator");

// Email to say account demoted
define("PRUNE_AMESSAGEDM1", "The administrator of ".SITENAME." has purged accounts that have not made a contribution to the site or logged in within the last ".$pref['prune_days']." days. ");
define("PRUNE_AMESSAGEDM2", "Your account has now had some privileges removed.");
define("PRUNE_AMESSAGEDM3", "Regards - ".SITENAME." Administrator");

define("PRUNE_Preamble", "Hi there");


define("PRUNE_HELP_0","Prune Users");
define("PRUNE_HELP_1","Configure");
define("PRUNE_HELP_2","Select Membership Days");
define("PRUNE_HELP_3","Select the minumum number of days membership to be considered.");
define("PRUNE_HELP_4","Select On");
define("PRUNE_HELP_5","Chose whether to search on last logged in date or on the last forum posting date, number of forum posts, chat posts, comments or visits.");
define("PRUNE_HELP_6","Notify on deletion");
define("PRUNE_HELP_7","Do you wish to send an email to the user when they are deleted. (Does not affect the reminder emails).");
define("PRUNE_HELP_8","Action");
define("PRUNE_HELP_9","Chose whether to email the user to warn them you are purging inactive accounts or do the deletions or class change.  If deleting see the previous option if you want to notify them their account has been deleted.");
define("PRUNE_HELP_10","General");
define("PRUNE_HELP_11","Configure the options first, then click on the <i>Prune Users</i> link in the menu.<br />These options also affect the status display on the admin main page which gives a display of potential deletions according to your settings.");

define("PRUNE_A1", "Prune Inactive Users");
define("PRUNE_A2", "Select users who have been members for more than (days)");
define("PRUNE_A3", "Proceed");
define("PRUNE_A4", "User name");
define("PRUNE_A5", "Last Activity");
define("PRUNE_A6", "Delete");
define("PRUNE_A7", "Failed to delete");
define("PRUNE_A8", "Deleted OK");
define("PRUNE_A9", "No users meet this criteria");
define("PRUNE_A10", "Continue");
define("PRUNE_A11", "You must specify a period of more than 0 days");
define("PRUNE_A12", "more than ");
define("PRUNE_A13", " days ago");
define("PRUNE_A14", "<strong>WARNING</strong> This will delete the users you have selected.  They will not be recoverable unless you restore from a backup (you do have a backup don't you?). Proceed at your peril.");
define("PRUNE_A15", "You forgot to select any users");
define("PRUNE_A16", "Select on");
define("PRUNE_A17", "Last login");
define("PRUNE_A18", "Last Forum post");
define("PRUNE_A19", "No postings");
define("PRUNE_A20", "Prune Users");
define("PRUNE_A21", "Configure");
define("PRUNE_A22", "Changes Saved");
define("PRUNE_A23", "Email from (name)");
define("PRUNE_A24", "Email from (address)");
define("PRUNE_A25", "Action");
define("PRUNE_A26", "Send email to selected users");
define("PRUNE_A27", "Delete selected users");
define("PRUNE_A28", "Email Sent OK");
define("PRUNE_A29", "Email Send failed");
define("PRUNE_A30", "A notification email will be sent to the selected users");
define("PRUNE_A31", "Notify user of deletion");
define("PRUNE_A32", "No");
define("PRUNE_A33", "Yes");
define("PRUNE_A34", "Never visited");
define("PRUNE_A35", "Remove admin status before trying to delete or email");
define("PRUNE_A36", "Select All");
define("PRUNE_A37", "Unselect All");
define("PRUNE_A38", "Save");
define("PRUNE_A39", "Selecting members who have been registered for more than (days)");
define("PRUNE_A40", "Selecting members on");
define("PRUNE_A41", "Action to be taken");
define("PRUNE_A42", "Emailing Users");
define("PRUNE_A43", "Deleting Users");
define("PRUNE_A44", "User Joined");
define("PRUNE_A45", "Prunable users");
define("PRUNE_A46", "Check for Updates");
define("PRUNE_A47", "Remove from class");
define("PRUNE_A48", "Removed from class");
define("PRUNE_A49", "Prune from class");
define("PRUNE_A50", "Readme");
define("PRUNE_A51", "Goto the admin section and configure then prune your users");
define("PRUNE_A52", "Min forum post count");
define("PRUNE_A53", "Min chat post count");
define("PRUNE_A54", "Min comment post count");
define("PRUNE_A55", "Pruning threshold");
define("PRUNE_A56", "Forum");
define("PRUNE_A57", "Chat");
define("PRUNE_A58", "Comment");
define("PRUNE_A59", "Last Visit");
define("PRUNE_A60", "Last Post");
define("PRUNE_A61", "Minimum Visits");
define("PRUNE_A62", "Exclude admins");
define("PRUNE_A63", "Total prunable users:");

define("PRUNE_R01","Prune Users");
define("PRUNE_R02","Plugin");
define("PRUNE_R03","Prune Users");
define("PRUNE_R04","Author");
define("PRUNE_R05","Father Barry");
define("PRUNE_R06","Version");
define("PRUNE_R07","2.6");
define("PRUNE_R08","Status");
define("PRUNE_R09","Release");
define("PRUNE_R10","Disclaimer");
define("PRUNE_R11","No responsibility can be accepted for the failure of this plugin in any way shape or form. You use entirely at your own risk.");
define("PRUNE_R12","Copyright");
define("PRUNE_R13","Barry Keal 2007.");
define("PRUNE_R14","License");
define("PRUNE_R15","GPL");
define("PRUNE_R16","Website");
define("PRUNE_R17","www.keal.me.uk");
define("PRUNE_R18","Support");
define("PRUNE_R19","Support for this plug-in is <strong>ONLY</strong> available at <a target='_blank' href='http://www.keal.me.uk'>My Website</a> and nowhere else.");
define("PRUNE_R20","");
define("PRUNE_R21","");
define("PRUNE_R22","");
define("PRUNE_R23","");
define("PRUNE_R24", "If you find this plugin useful then please consider making a <b>donation</b> at <a target='_blank' href='http://www.keal.me.uk'>My Website</a>  ");
define("PRUNE_R25", "Donations");

define("EVERSION_U1", "plugin.php does not exist in the plugin directory");
define("EVERSION_U2", "e_update.php does not exist in the plugin directory");
define("EVERSION_U3", "Checking for updates to plugin :");
define("EVERSION_U4", "The Current Version on your server is :");
define("EVERSION_U5", "Check for Updates");
define("EVERSION_U6", "Unable to reach update site to check for version information");
define("EVERSION_U7", "There is a new version available");
define("EVERSION_U8", "However, it is a beta version.");
define("EVERSION_U9", "You are up to date. You have the current version installed.");
define("EVERSION_U10", "The update site has no details on this plugin. Contact the plugin author directly.");
define("EVERSION_U11", "Checking for Updates");
define("EVERSION_U12", "Results");
define("EVERSION_U13", "View the details on this version or download it at");
define("EVERSION_U14", "Click Here");
define("EVERSION_U15", "Description :");
define("EVERSION_U16", "Update Check");
define("EVERSION_U17", "It was released on :");
define("EVERSION_U18", "Plugin Author :");
define("EVERSION_U19", "Plugin Manager reports that version ");
define("EVERSION_U20", "is installed. Check the Plugin Manager.");
define("EVERSION_U21", "Stable");
?>