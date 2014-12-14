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