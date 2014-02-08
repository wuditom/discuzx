<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install.php 8889 2013-05-06 23:23:44Z mpage $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE IF EXISTS `pre_mpage_weibo`;
CREATE TABLE `pre_mpage_weibo` (
  `uid` mediumint(8) unsigned NOT NULL,
  `username` varchar(15) NOT NULL default '',
  `sina_uid` bigint(20) unsigned NOT NULL default '0',
  `sina_username` varchar(30) NOT NULL default '',
  `token` varchar(32) NOT NULL default '',
  `remind_in` int(10) unsigned NOT NULL default '0',
  `expires_in` int(10) unsigned NOT NULL default '0',
  `thread` tinyint(1) unsigned NOT NULL default '0',
  `reply` tinyint(1) unsigned NOT NULL default '0',
  `follow` tinyint(1) unsigned NOT NULL default '0',
  `blog` tinyint(1) unsigned NOT NULL default '0',
  `doing` tinyint(1) unsigned NOT NULL default '0',
  `share` tinyint(1) unsigned NOT NULL default '0',
  `article` tinyint(1) unsigned NOT NULL default '0',
  `dateline` int(10) unsigned NOT NULL default '0',
  `update` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM;

EOF;

runquery($sql);

$finish = TRUE;

?>