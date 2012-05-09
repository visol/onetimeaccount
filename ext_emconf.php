<?php

########################################################################
# Extension Manager/Repository config file for ext "onetimeaccount".
#
# Auto generated 11-02-2012 17:36
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'One-time FE account',
	'description' => 'This extension allows users to create a one-time FE account to which they will be automatically logged in. The users do not need to enter a user name or password. So this login can be used only one time.',
	'category' => 'plugin',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'ameos_formidable,oelib,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'oliverklee.de',
	'version' => '0.8.51',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
			'ameos_formidable' => '1.0.0-1.9.99',
			'oelib' => '0.7.62-',
			'static_info_tables' => '2.1.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'sr_feuser_register' => '2.2.0-',
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:9:"ChangeLog";s:4:"c049";s:39:"class.tx_onetimeaccount_configcheck.php";s:4:"ffe0";s:31:"class.tx_onetimeaccount_eid.php";s:4:"c821";s:16:"ext_autoload.php";s:4:"da6a";s:21:"ext_conf_template.txt";s:4:"b12b";s:12:"ext_icon.gif";s:4:"27c7";s:17:"ext_localconf.php";s:4:"6008";s:14:"ext_tables.php";s:4:"e694";s:13:"locallang.xml";s:4:"d2a5";s:16:"locallang_db.xml";s:4:"b6fc";s:17:"Tests/pi1Test.php";s:4:"93a4";s:26:"Tests/Fixtures/FakePi1.php";s:4:"0081";s:39:"doc/T3X_marijo-0_1_0-z-200909252202.t3x";s:4:"dad8";s:14:"doc/manual.sxw";s:4:"9a05";s:14:"pi1/ce_wiz.gif";s:4:"be1b";s:35:"pi1/class.tx_onetimeaccount_pi1.php";s:4:"ea66";s:43:"pi1/class.tx_onetimeaccount_pi1_wizicon.php";s:4:"d328";s:21:"pi1/flexforms_pi1.xml";s:4:"460e";s:17:"pi1/locallang.xml";s:4:"6830";s:26:"pi1/onetimeaccount_pi1.css";s:4:"9a64";s:27:"pi1/onetimeaccount_pi1.html";s:4:"8ee0";s:24:"pi1/static/constants.txt";s:4:"331d";s:20:"pi1/static/setup.txt";s:4:"f1e1";}',
	'suggests' => array(
		'sr_feuser_register' => '2.2.0-',
	),
);

?>