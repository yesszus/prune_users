<?php
/* if (e_LANGUAGE != "English" && file_exists(e_PLUGIN . "prune_users/languages/admin/" . e_LANGUAGE . ".php"))
{
    include_once(e_PLUGIN . "prune_users/languages/admin/" . e_LANGUAGE . ".php");
}
else
{
    include_once(e_PLUGIN . "prune_users/languages/admin/English.php");
} */
e107::lan('prune_users', 'admin', true);
$text = "<table width='97%' class='fborder'>";
    $text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_1 . "</b></td></tr>";
    $text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_2 . "</b><br />" . PRUNE_HELP_3 . "</td></tr>";
    $text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_4 . "</b><br />" . PRUNE_HELP_5 . "</td></tr>";
    $text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_6 . "</b><br />" . PRUNE_HELP_7 . "</td></tr>";
    $text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_8 . "</b><br />" . PRUNE_HELP_9 . "</td></tr>";
	$text .= "<tr><td class='forumheader3'><b>" . PRUNE_HELP_10 . "</b><br />" . PRUNE_HELP_11 . "</td></tr>";

$text .= "</table>";
$ns->tablerender(PRUNE_HELP_0, $text);

?>