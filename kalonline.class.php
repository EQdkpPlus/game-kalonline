<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('kalonline')) {
	class kalonline extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.2';
		protected $this_game		= 'kalonline';
		protected $types			= array('classes', 'races');
		public $icons				= array('classes', 'classes_big');
		protected $classes			= array();
		protected $races			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',	// Unknown
						1 	=> 'all',	// Human
					),
				),
			),
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;
		
		protected $class_colors = array(
			1	=> '#C8C8C8',
			2	=> '#49A03E',
			3	=> '#3287C1',
			4	=> '#C66F0A',
		);

		public function install($install=false){}

		protected function load_filters($langs){
			return array();
		}
	}
}
?>