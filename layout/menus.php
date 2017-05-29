<?php
if (!defined('BLARG')) die();

$headerlinks = array
(
	actionLink('wiki') => 'Wiki',
	actionLink('irc') => 'IRC',
);

$sidelinks = array
(
	Settings::get('menuMainName') => array
	(
		actionLink('home') => 'Home page',
		actionLink('board') => 'Forums',
		actionLink('faq') => 'FAQ',
		actionLink('memberlist') => 'Member list',
		actionLink('ranks') => 'Ranks',
		actionLink('online') => 'Online users',
		actionLink('lastposts') => 'Last posts',
		actionLink('search') => 'Search',
	),
);

?>
