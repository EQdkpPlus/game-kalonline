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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Dieb',
		2	=> 'Ritter',
		3	=> 'Zauberer',
		4	=> 'Bogenschütze',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Menschen',
	),
	'roles' => array(
		1 => array(3),
		2 => array(2),
		3 => array(2, 3),
		4 => array(1, 4),
		5 => array(1, 4)
	),
	'lang' => array(
		'kalonline' => 'KalOnline',
		
		// Roles
		'role1'			=> 'Heiler',
		'role2'			=> 'Tank',
		'role3'			=> 'Angreifer',
		'role4'			=> 'Debuffer',
		'role5'			=> 'Damage Dealer',
	),
);
?>