<?php
/*	Project:	EQdkp-Plus
 *	Package:	Kalonline game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
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
		'kalonline'					=> 'KalOnline',
		
		// Roles
		'role1'						=> 'Heiler',
		'role2'						=> 'Tank',
		'role3'						=> 'Angreifer',
		'role4'						=> 'Debuffer',
		'role5'						=> 'Damage Dealer',

		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'KalOnline Einstellungen',
	),
);
?>