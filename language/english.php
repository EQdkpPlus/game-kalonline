<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Thief',
		2	=> 'Knight',
		3	=> 'Magican',
		4	=> 'Archer',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Human',
	),
	'roles' => array(
		1 => array(3),
		2 => array(2),
		3 => array(2, 3),
		4 => array(1, 4),
		5 => array(1, 4)
	),
	'lang' => array(
		'kalonline'					=> 'KalOnline',
		
		// Roles
		'role1'						=> 'Healer',
		'role2'						=> 'Tank',
		'role3'						=> 'Attacker',
		'role4'						=> 'Debuffer',
		'role5'						=> 'Damage Dealer',
		
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'KalOnline Settings',
	),
);
?>