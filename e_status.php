<?php
if (!defined('e107_INIT'))
{
    exit;
}
if (!getperms("P"))
{
    header("location:" . e_HTTP . "index.php");
    exit;
}
e107::lan('prune_users', 'admin', true);

$prune_time = time() + ($pref['time_offset'] * 3600);
$prune_today = mktime(0, 0, 0, date('n', $prune_time), date('d', $prune_time), date('Y', $prune_time));
$prune_joinbefore = ($pref['prune_days'] * 86400) + $prune_today;
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
        break;
    case 1:
        // last forum post
        $prune_count = $sql->db_Count('user', '(*)', "where user_lastpost < $prune_fromdate $prune_where and u.user_join < $prune_joinbefore" , false);
        break;
    case 2:
        // Minimum forum posts
        $prune_count = $sql->db_Count('user', '(*)', "where user_forums < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
        break;
    case 3:
        // Minimum chatbox
        $prune_count = $sql->db_Count('user', '(*)', "where user_forums < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
        break;
    case 4:
        // minimum comments
        $prune_count = $sql->db_Count('user', '(*)', "where user_comments < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
        break;
    case 5:
        // minimum visits
        $prune_count = $sql->db_Count('user', '(*)', "where user_visits < " . $pref['prune_threshold'] . " $prune_where and user_join < " . $prune_joinbefore , false);
        break;
    default: ;
} 




if ($prune_count)
{
//    $text .= "<div style='padding-bottom: 2px;'><img src='" . e_PLUGIN . "prune_users/images/prune_16.png' style='width: 16px; height: 16px; vertical-align: bottom;border:0;' alt='' /><a href='" . e_PLUGIN . "prune_users/admin_prune.php'> " . PRUNE_A45 . "</a> " . $prune_count . "</div>";
	$text .= "<img src='" . e_PLUGIN . "prune_users/images/prune_16.png' style='width: 16px; height: 16px; vertical-align: bottom;border:0;' alt='' /><a href='" . e_PLUGIN . "prune_users/admin_prune.php'> " . PRUNE_A45 . "</a> " . $prune_count . "";

}

?>