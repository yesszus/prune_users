<?php
// **************************************************************************
// *
// * Prune Inactive Users
// *
// **************************************************************************
require_once("../../class2.php");
if (!defined('e107_INIT'))
{
    exit;
}
if (!getperms("P"))
{
    header("location:" . e_HTTP . "index.php");
    exit;
}
if (!ADMIN)
{
    print "You must be an admin";
    exit;
}
// ***********************************************************
// Get the necessary requires
// ***********************************************************
require_once(e_ADMIN . "auth.php");
require_once(e_HANDLER . "mail.php");
e107::lan('prune_users', 'admin', true);
require_once(e_HANDLER . "userclass_class.php");
if (!defined('ADMIN_WIDTH'))
{
    define(ADMIN_WIDTH, "width:100%;");
}
if (e_QUERY)
{
    $prune_tmp = explode('.' , e_QUERY);
    $prune_from = intval($prune_tmp[0]);
    $prune_action = $prune_tmp[1];
} elseif (isset($_POST['prune_action']))
{
    $prune_from = intval($_POST['prune_from']);
    $prune_action = $_POST['prune_action'];
}
else
{
    $prune_from = 0;
    $prune_action = 'show';
}

$prune_time = time() + ($pref['time_offset'] * 3600);
$prune_today = mktime(0, 0, 0, date('n', $prune_time), date('d', $prune_time), date('Y', $prune_time));
$prune_joinbefore = ($pref['prune_days'] * 86400) + $prune_today;

$prune_convert = new convert;
//$prune_obj = new e_userclass;

if ($prune_action == "prune_dodel")
{
$prune_text .= "
<table class='fborder' style='".ADMIN_WIDTH."'>
	<tr>
		<td class='fcaption' colspan='2'>" . PRUNE_A1 . "</td>
	</tr>";
    $prune_class = intval($pref['prune_class']);
    if (isset($_REQUEST['prune_record']))
    {
        switch ($pref['prune_type'])
        {
            case 0:
                $prune_message = PRUNE_AMESSAGEL1 . "\n\n" . PRUNE_AMESSAGEL2 . "\n\n" . PRUNE_AMESSAGEL3;
                break;
            case 1:
                $prune_message = PRUNE_AMESSAGEF1 . "\n\n" . PRUNE_AMESSAGEF2 . "\n\n" . PRUNE_AMESSAGEF3;
                break;
            case 2:
                $prune_message = PRUNE_AMESSAGEFP1 . "\n\n" . PRUNE_AMESSAGEFP2 . "\n\n" . PRUNE_AMESSAGEFP3;
                break;
            case 3:
                $prune_message = PRUNE_AMESSAGECB1 . "\n\n" . PRUNE_AMESSAGECB2 . "\n\n" . PRUNE_AMESSAGECB3;
                break;
            case 4:
                $prune_message = PRUNE_AMESSAGEC1 . "\n\n" . PRUNE_AMESSAGEC2 . "\n\n" . PRUNE_AMESSAGEC3;
                break;
            case 5:
                $prune_message = PRUNE_AMESSAGEV1 . "\n\n" . PRUNE_AMESSAGEV2 . "\n\n" . PRUNE_AMESSAGEV3;
                break;
        }
        
        foreach($_REQUEST['prune_record'] as $prune_array)
        {
            if ($prune_array > 0)
            {
                $sql->db_Select("user", "user_name,user_email, user_admin,user_class", "where user_id='$prune_array'", "nowhere", false);
                $prune_row = $sql->db_Fetch();
                $prune_user = $prune_array;
                extract($prune_row);
                if ($user_admin <> 1)
                {
                   switch ($pref['prune_action'])
                    {
                        case 1:
                            
                            if ($sql->db_Delete("user", "user_id='$prune_user'"))
                            {
                                
                                if ($pref['prune_notify'] == 0)
                                {
                                    $prune_emsg = PRUNE_Preamble . ' ' . $user_name . "\n\n" . PRUNE_AMESSAGED1 . "\n\n" . PRUNE_AMESSAGED2 . "\n\n" . PRUNE_AMESSAGED3;
                                    sendemail($user_email, PRUNE_ASUBJECT, $prune_emsg, $user_name, $pref['siteadminemail'], $pref['siteadmin']);
                                }
                                $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A8 . "</td>
	</tr>";
                            }
                            else
                            {
                                
                                $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A7 . "</td>
	</tr>";
                            } ;
                            break;
                        case 2:
                            
                            $prune_uclass = $sql->db_Select("user", "user_class", "where user_id=$prune_user", "nowhere", false);
                            $prune_urow = $sql->db_Fetch();
                            $prune_classlist = explode(",", $prune_urow['user_class']);
                            foreach($prune_classlist as $prune_key => $prune_item)
                            {
                                if ($prune_item == $prune_class || is_null($prune_item) || empty($prune_item))
                                {
                                    unset($prune_classlist[$prune_key]);
                                }
                            }
                            
                            $prune_newlist = array_values($prune_classlist);
                            $prune_tmparray = array_unique($prune_newlist);
                            $prune_newarray = implode(",", $prune_tmparray);
                            $prune_uclass = $sql->db_Update("user", "user_class='$prune_newarray' where user_id=$prune_user", false);
                            if ($pref['prune_notify'] == 0)
                            {
                                $prune_emsg = PRUNE_Preamble . ' ' . $user_name . "\n\n" . PRUNE_AMESSAGEDM1 . "\n\n" . PRUNE_AMESSAGEDM2 . "\n\n" . PRUNE_AMESSAGEDM3;
                                sendemail($user_email, PRUNE_ASUBJECT, $prune_emsg, $user_name, $pref['siteadminemail'], $pref['siteadmin']);
                            }
                            $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A48 . "</td>
	</tr>";

                            break;
                        default:
                            
                            $prune_emsg = PRUNE_Preamble . ' ' . $user_name . "\n\n" . $prune_message;

                            if (sendemail($user_email, PRUNE_ASUBJECT, $prune_emsg, $user_name, $pref['siteadminemail'], $pref['siteadmin']))
                            {
                                
                                $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A28 . "</td>
	</tr>";
                            }
                            else
                            {
                                
                                $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A29 . "</td>
	</tr>";
                            } ;
                    } 
                }
                else
                {
                    $prune_text .= "
	<tr>
		<td class='forumheader3' style='width:30%;'>$user_name</td><td class='forumheader3' style='width:60%;'>" . PRUNE_A35 . "</td>
	</tr>";
                }
            }
        }
    }
    else
    {
        $prune_text .= "
	<tr>
		<td class='forumheader3' colspan='2'>" . PRUNE_A15 . "</td>
	</tr>";
    }
    $prune_text .= "
	<tr>
		<td class='fcaption' colspan='2'>
			<a href='" . e_SELF . "'>" . PRUNE_A10 . "</a>
		</td>
	</tr>
</table>";
}
if ($prune_action == 'show')
{
    
    $prune_text .= "
<table class='fborder' style='" . ADMIN_WIDTH . "'>
	<!--<tr>
		<td class='forumheader3' colspan='2'><b>" . PRUNE_A1 . "</b><input type='hidden' value='prune_docheck' name='prune_action' /></td>
	</tr>-->
	<tr>
		<td class='forumheader3' style='width:40%;'>" . PRUNE_A39 . "</td>
		<td class='forumheader3' style='width:60%;'><b>" . $pref['prune_days'] . "</b></td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:40%;'>" . PRUNE_A40 . "</td>
		<td class='forumheader3' style='width:60%;'><b>" ;
    switch ($pref['prune_type'])
    {
        case 0:
            $prunon_name = PRUNE_A17;
            break;
        case 1:
            $prunon_name = PRUNE_A18;
            break;
        case 2:
            $prunon_name = PRUNE_A52;
            break;
        case 3:
            $prunon_name = PRUNE_A53;
            break;
        case 4:
            $prunon_name = PRUNE_A54;
            break;
        case 5:
            $prunon_name = PRUNE_A61;
            break;
    }
    $prune_text .= $prunon_name . "</b></td>
	</tr>
		<tr>
		<td class='forumheader3' style='width:40%;'>" . PRUNE_A55 . "</td>
		<td class='forumheader3' style='width:60%;'><b>" . $pref['prune_threshold'] . "</b></td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:40%;'>" . PRUNE_A41 . "</td>
		<td class='forumheader3' style='width:60%;'><b>";
    switch ($pref['prune_action'])
    {
        case 1:
            $prune_text .= PRUNE_A43;
            break;
        case 2:
            $prune_text .= PRUNE_A47 . " <b>" . r_userclass_name($pref['prune_class']) . "</b>";
            break;
        default:
            $prune_text .= PRUNE_A42;
    }
    $prune_text .= "</b>
		</td>
	</tr>
</table>";
    
    $prune_fromdate = $prune_today - ($pref['prune_threshold'] * 86400);
    if ($pref['prune_class'] != 255)
    {
        $prune_where = " and find_in_set('" . $pref['prune_class'] . "',user_class) ";
    }
    if ($pref['prune_exadmin'] == 1)
    {
        $prune_where .= " and user_admin !=1 ";
    }

    switch ($pref['prune_type'])
    {
        case 0:
            // Last Login date
            $prune_count = $sql->db_Count('user', '(*)', "where (user_currentvisit=0 or user_currentvisit < $prune_fromdate) $prune_where and user_join < " . $prune_joinbefore , false);
            $prune_sql = "select u.* from #user as u
			where (user_currentvisit=0 or user_currentvisit < $prune_fromdate) $prune_where and user_join < " . $prune_joinbefore . " order by user_currentvisit limit $prune_from,50";
            break;
        case 1:
            // last forum post
            $prune_count = $sql->db_Count('user', '(*)', "where user_lastpost < $prune_fromdate $prune_where and u.user_join < $prune_joinbefore" , false);
            $prune_sql = "select * from #user as u
			where user_lastpost < $prune_fromdate $prune_where and u.user_join < $prune_joinbefore order by user_lastpost limit $prune_from,50";
            break;
        case 2:
            // Minimum forum posts
            $prune_count = $sql->db_Count('user', '(*)', "where user_forums < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
            $prune_sql = "select u.* from #user as u
			where user_forums < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore . " order by user_forums asc limit $prune_from,50";
            break;
        case 3:
            // Minimum chatbox
            $prune_count = $sql->db_Count('user', '(*)', "where user_forums < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
            $prune_sql = "select u.* from #user as u
			where user_chats < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore . " order by user_chats asc limit $prune_from,50";

            break;
        case 4:
            // minimum comments
            $prune_count = $sql->db_Count('user', '(*)', "where user_comments < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
            $prune_sql = "select u.* from #user as u
			where user_comments < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore . " order by user_comments asc limit $prune_from,50";
            break;
        case 5:
            // minimum visits
            $prune_count = $sql->db_Count('user', '(*)', "where user_visits < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
            $prune_sql = "select u.* from #user as u
			where user_visits < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore . " order by user_visits asc limit $prune_from,50";
            break;
        default: ;
    } 
	
    if ($sql->db_Select_gen($prune_sql, false))
    {
        $prune_text .= "
				<script type='text/javascript'>
				<!--
				function prunecheckAll(allbox)
{
for (var i=0; i < document.pruneform[\"prune_record[]\"].length; i++)
        document.pruneform[\"prune_record[]\"][i].checked=true ;
}

function pruneuncheckAll(allbox)
{
for (var i=0; i < document.pruneform[\"prune_record[]\"].length; i++)
        document.pruneform[\"prune_record[]\"][i].checked=false ;
}
-->
</script>

<form name='pruneform' id='pruneform' method='post' action='" . e_SELF . "'>
<div>
	<input type='hidden' name='prune_action' value='prune_dodel' />
</div>
	<table class='fborder' style='" . ADMIN_WIDTH . "'>
		<tr>
			<td class='forumheader' colspan='9'><b>" . PRUNE_A63 . " $prune_count</b>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td class='forumheader' style='width:10%;'><b>" . PRUNE_A4 . "</b></td>
			<td class='forumheader' style='width:15%;'><b>" . PRUNE_A44 . "</b></td>
			<td class='forumheader' style='width:15%;'><b>" . PRUNE_A59 . "</b></td>
			<td class='forumheader' style='width:15%;'><b>" . PRUNE_A60 . "</b></td>
			<td class='forumheader' style='width:10%;text-align:right;'><b>" . PRUNE_A56 . "</b></td>
			<td class='forumheader' style='width:10%;text-align:right;'><b>" . PRUNE_A57 . "</b></td>
			<td class='forumheader' style='width:10%;text-align:right;'><b>" . PRUNE_A58 . "</b></td>
			<td class='forumheader' style='width:10%;text-align:right;'><b>" . PRUNE_A61 . "</b></td>
			<td class='forumheader' style='width:5%;text-align:center;'><b>" . PRUNE_A6 . "</b></td>
		</tr>";
        while ($prune_row = $sql->db_Fetch())
        {
            
            extract($prune_row);
            $prune_text .= "
		<tr>
			<td class='forumheader3' style='width:10%;'>" . $tp->toHTML($user_name) . "</td>
			<td class='forumheader3' style='width:15%;'>" . ($user_join > 0?$prune_convert->convert_date($user_join, "short"):'&nbsp;') . "</td>
			<td class='forumheader3' style='width:15%;'>" . ($user_lastvisit > 0?$prune_convert->convert_date($user_lastvisit, "short"):'&nbsp;') . "</td>
			<td class='forumheader3' style='width:15%;'>" . ($user_lastpost > 0?$prune_convert->convert_date($user_lastpost, "short"):'&nbsp;') . "</td>
			<td class='forumheader3' style='width:10%;text-align:right;'>" . $user_forums . "</td>
			<td class='forumheader3' style='width:10%;text-align:right;'>" . $user_chats . "</td>
			<td class='forumheader3' style='width:10%;text-align:right;'>" . $user_comments . "</td>
			<td class='forumheader3' style='width:10%;text-align:right;'>" . $user_visits . "</td>
			<td class='forumheader3' style='width:5%;text-align:center;'>" . ($user_admin == 1?"A":"<input type='checkbox' class='tbox' name='prune_record[]' value='$user_id' />") . "</td>
		</tr>";
        } // while
        $prune_action = 'show';
        $parms = $prune_count . ',50,' . $prune_from . ',' . e_SELF . '?' . '[FROM].' . $prune_action;
        $prune_nextprev = $tp->parseTemplate("{NEXTPREV={$parms}}") . '';
        $prune_text .= "
		<tr>
			<td class='forumheader3' colspan='8' style='text-align:right;'>
				<input class='button' type='button' name='CheckAll' value='" . PRUNE_A36 . "' onclick='prunecheckAll(this);' />
				<input class='button' type='button' name='UnCheckAll' value='" . PRUNE_A37 . "' onclick='pruneuncheckAll(this);' />
			</td>
			<td  class='forumheader3'>&nbsp;</td>
		</tr>
		<tr>
			<td class='forumheader2' colspan='9'>$prune_nextprev&nbsp;</td>
		</tr>
		<tr>
			<td class='fcaption' colspan='9'><input class='button' type='submit' name='subit' value='" . PRUNE_A3 . "' /></td>
		</tr>
	</table>
</form>";
    }
    else
    {
        
        $prune_text .= "
<table class='fborder' style='" . ADMIN_WIDTH . "'>
	<tr>
		<td class='fcaption' >" . PRUNE_A1 . "</td>
	</tr>
	<tr>
		<td  class='forumheader3'>" . PRUNE_A9 . "</td>
	</tr>
</table>";
    }
}

$ns->tablerender(PRUNE_A1, $prune_text);

require_once(e_ADMIN . "footer.php");

?>