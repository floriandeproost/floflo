<?php
	if(!defined('BRAIN_CMS'))
	{
		die('Sorry but you cannot access this file!');
	}

	/* Database Setting */
	$db['host'] = '127.0.0.1'; //Mysql's Host
	$db['port'] = '3306'; //Mysql's port
	$db['user'] = "root"; //Mysql's user
	$db['pass'] = ''; //Mysql's password
	$db['db'] = "haddo"; //Mysql's database

	/* Emu Settings */
	$config['hotelEmu'] = 'plusemu'; // plusemu // arcturus

	/* Client Setting */
	$hotel['emuHost'] = "proxy1.proxypoort.nl"; //IP of VPS//IP of Proxy //proxy1.proxypoort.nl
	$hotel['emuPort'] = "2058";  //Port of VPS//Port of Proxy //2058
	$hotel['staffCheckClient'] = false; //Enable the staff pin in the client (true) or disable it (false)
	$hotel['staffCheckClientMinimumRank'] = 3; //Minium staff rank to get the staff pin in the client
	$hotel['homeRoom'] = '0'; //Set the start room when you get in the hotel
	$hotel['swfFolderSwf'] = "";
	$hotel['swfFolder'] = "";
	$hotel['figuremap'] = "";
	$hotel['external_Texts_Override'] = "";
	$hotel['external_Variables_Override'] = "";
	$hotel['external_Variables'] = "";
	$hotel['external_Texts'] = "";
	$hotel['figuredata'] = "";
	$hotel['furnidata'] = "";
	$hotel['productdata'] = "";

	$hotel['onlineCounter'] = true; // Enable the user count in the client.
	$hotel['diamonds.enabled'] = true; // Enable diamonds in the hotel.

	/* Website Setting */
	$config['hotelUrl'] = "http://localhost";//Address of your hotel. Does not end with a "/"

	$config['skin'] = "haddo"; //Skin/template of your website
	$config['lang'] = "nl"; //Language of your website en/nl/es
	$config['hotelName'] = "Haddo"; //Name of your hotel
	$config['favicon'] = "https://haddo.nl/templates/brain/style/images/favicon/favicon.ico";
	$config['staffCheckHk'] = false; //Enable the staff pin in the housekeeping (true) or disable it (false)
	$config['staffCheckHkMinimumRank'] = 3; //Minium staff rank to get the staff pin in the housekeeping
	$config['maintenance'] = false; //Enable the maintenance of your website (true) or disable it (false)
	$config['maintenancekMinimumRankLogin'] = 1; //Minium staff rank to login when the website is in maintenance
	$config['groupBadgeURL'] = "https://haddo.nl/swf/habbo-imaging/badge.php?badge=";
	$config['badgeURL'] = "https://haddo.nl/swf/c_images/album1584/";
	$config['userLikeEnable'] = true; // Enable user likes
	$config['newsCommandEnable'] = true; //Enable news commands
	$config['newsCommandFilter'] = true; //Enable wordfilter on news commands (the filter use the db tabels wordfilter and wordfilter_characters)
	$config['alertReferrer'] = true;
	$config['alert'] = 'BrainCMS Beta'; //Alert message. If you don't want a alert, you fill in 'nomessage' or you do leave it blank.
	$config['brainversion'] = '1.8.0'; // Please do not change.

	/* Facebook Login Settings
		You need a Facebook app for this to work go to
		https://developers.facebook.com/apps/ */

	$config['facebookLogin'] = false; //Enable the Facebook login (true) or disable it (false)
	$config['facebookAPPID'] = '';
	$config['facebookAPPSecret'] = '';

	/* Email Settings */
	$email['mailServerHost'] = 'smtp.gmail.com';
	$email['mailServerPort'] = 587;
	$email['SMTPSecure'] = 'TLS';
	$email['mailUsername'] = 'gmail@gmail.com';
	$email['mailPassword'] = '*****';
	$email['mailLogo'] = 'https://haddo.nl/templates/brain/style/images/logo/logo.png';
	$email['mailTemplate'] = '/system/app/plugins/PHPmailer/temp/resetpassword.html';

	/* Social settings */
	$config['facebook'] = 'https://www.facebook.com/Habbo/';
	$config['facebookEnable'] = false;
	$config['twitter'] = 'https://twitter.com/Habbo';
	$config['twitterEnable'] = false;

	/* Register Setting */
	$config['startMotto'] = "Welkom in Haddo!"; //Regsiter start motto
	$config['credits']	= "99999";
	$config['duckets']	= "64";
	$config['diamonds']	= "10";
	$config['diamondsRef']	= "10";
	$config['registerEnable'] = false;

	/* Google recaptcha Site Key
	   Go to this website to create a recaptcha Site Key: https://www.google.com/recaptcha/intro/index.html	*/
	$config['recaptchaSiteKey'] = "";
	$config['recaptchaSiteKeyEnable'] = false;

	/* Buy VIP Settings */
	$config['vipCost'] = "25";
	$config['vipRankToGet'] = "3";
	$config['vipBadge'] = "vip";


	switch($config['hotelEmu'])
	{
		case "arcturus":
		$emuUse['user_wardrobe']  = 'users_wardrobe ';
		$emuUse['ip_last'] = 'ip_current';
		$emuUse['respect'] = 'respects_received';
		$emuUse['user_stats'] = 'users_settings';
		$emuUse['user_stats_user_id'] = 'user_id';
		$emuUse['OnlineTime'] = 'online_time';
		break;
		case "plusemu":
		$emuUse['user_wardrobe']  = 'user_wardrobe ';
		$emuUse['ip_last'] = 'ip_last';
		$emuUse['respect'] = 'Respect';
		$emuUse['user_stats'] = 'user_stats';
		$emuUse['user_stats_user_id'] = 'id';
		$emuUse['OnlineTime'] = 'OnlineTime';
		break;
		default:
		//Nothing
		break;
	}
?>
