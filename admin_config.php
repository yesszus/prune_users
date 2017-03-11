<?php
// **************************************************************************
// *
// * Prune Inactive Users
// *
// **************************************************************************
require_once("../../class2.php");

if (!getperms("P"))
{
    header("location:" . e_HTTP . "index.php");
    exit;
}

e107::lan('prune_users', 'admin', true);

require_once(e_HANDLER . "userclass_class.php");

require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{
    define(ADMIN_WIDTH, "width:100%;");
}
//include_lan(e_PLUGIN . "prune_users/languages/admin/" . e_LANGUAGE . ".php");
if (e_QUERY == "update")
{
    if ($_POST['prune_days'] > 0)
    {
        // Update rest
        $pref['prune_auto'] = $_POST['prune_auto']; // Auto not in use yet
        $pref['prune_notify'] = intval($_POST['prune_notify']);
        $pref['prune_days'] = intval($_POST['prune_days']);
        $pref['prune_type'] = intval($_POST['prune_type']);
        $pref['prune_threshold'] = intval($_POST['prune_threshold']);
        $pref['prune_action'] = intval($_POST['prune_action']);
        $pref['prune_class'] = intval($_POST['prune_class']);
        $pref['prune_exadmin'] = intval($_POST['prune_exadmin']);
        save_prefs();
        $prune_msg .= PRUNE_A22 ;
    }
    else
    {
        $prune_msg .= PRUNE_A11;
    }
}

$prune_text .= "
<form method='post' action='" . e_SELF . "?update' id='pruneuser'>
	<table class='fborder' style='" . ADMIN_WIDTH . "'>
		<!--<tr>
			<td class='forumheader3' colspan='2'>" . PRUNE_A21 . "</td>
		</tr>-->
		<tr>
			<td class='forumheader3' colspan='2'><strong>" . $prune_msg . "</strong>&nbsp;</td>
		</tr>
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A2 . " :</td>
			<td class='forumheader3'>
				<input type='text'  class='tbox' name='prune_days' value='" . $pref['prune_days'] . "' />
			</td>
		</tr>";
$prune_text .= "
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A16 . " :</td>
			<td class='forumheader3'>
				<select class='tbox' name='prune_type'>
					<option value='0' " . ($pref['prune_type'] == 0?"selected='selected'":"") . " >" . PRUNE_A17 . "</option>
					<option value='1' " . ($pref['prune_type'] == 1?"selected='selected'":"") . " >" . PRUNE_A18 . "</option>
					<option value='2' " . ($pref['prune_type'] == 2?"selected='selected'":"") . " >" . PRUNE_A52 . "</option>
					<option value='3' " . ($pref['prune_type'] == 3?"selected='selected'":"") . " >" . PRUNE_A53 . "</option>
					<option value='4' " . ($pref['prune_type'] == 4?"selected='selected'":"") . " >" . PRUNE_A54 . "</option>
					<option value='5' " . ($pref['prune_type'] == 5?"selected='selected'":"") . " >" . PRUNE_A61 . "</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A55 . " :</td>
			<td class='forumheader3'>
				<input type='text'  class='tbox' name='prune_threshold' value='" . $pref['prune_threshold'] . "' />
			</td>
		</tr>
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A62 . " :</td>
			<td class='forumheader3'>
				<input type='checkbox' class='tbox' name='prune_exadmin' value='1'" . ($pref['prune_exadmin']==1?"checked='checked'":"") . "' />
			</td>
		</tr>	";
// Notify by email when deleting
$prune_text .= "
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A31 . " :</td>
			<td class='forumheader3'>
				<select class='tbox' name='prune_notify'>
					<option value='0' " . ($pref['prune_notify'] == 0?"selected='selected'":"") . " >" . PRUNE_A33 . "</option>
					<option value='1' " . ($pref['prune_notify'] == 1?"selected='selected'":"") . " >" . PRUNE_A32 . "</option>

				</select>
			</td>
		</tr>";
$prune_text .= "
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A25 . " :</td>
			<td class='forumheader3' >
				<select class='tbox' name='prune_action'>
					<option value='0' " . ($pref['prune_action'] == 0?"selected='selected'":"") . " >" . PRUNE_A26 . "</option>
					<option value='1' " . ($pref['prune_action'] == 1?"selected='selected'":"") . " >" . PRUNE_A27 . "</option>
					<option value='2' " . ($pref['prune_action'] == 2?"selected='selected'":"") . " >" . PRUNE_A47 . "</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style='width:40%' class='forumheader3'>" . PRUNE_A49 . " :</td>
			<td class='forumheader3' >" . r_userclass("prune_class", $pref['prune_class'], "off", "nobody,classes") . "</td>
		</tr>";
// Submit
$prune_text .= "
		<tr>
			<td class='fcaption' colspan='2' style='text-align: left;'><input type='submit' name='update' value='" . PRUNE_A38 . "' class=btn submit/></td>
		</tr>
	</table>
</form>";

$ns->tablerender(PRUNE_A1, $prune_text);

require_once(e_ADMIN . "footer.php");

?>