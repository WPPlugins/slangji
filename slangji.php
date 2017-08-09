<?php 
/*
Plugin Name: sLa2sLaNGjI4sLaNGjIs
Plugin URI: https://slangji.wordpress.com/slangji/
Description: Insert nfo Text on Header and Footer when one Plugin is Activated.
Author: sLaNGjIs
Author URI: https://slangji.wordpress.com/
Version: 2016.1231.0.0
Requires at least: 2.1
Keytag: 74be16979710d4c4e7c6647856088456
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: https://www.gnu.org/prep/standards/standards.html
Humans: We are the humans behind
Humans URI: https://humanstxt.org/Standard.html
 *
 * LICENSING
 *
 * [sLa2sLaNGjI4sLaNGjIs](https://wordpress.org/plugins/slangjis/) Insert nfo Text on Header and Footer
 *
 * Copyright (C) 2008-2016 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](https://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](https://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](https://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2014 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008-2014 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * sLa2sLaNGjI4sLaNGjIs.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2014 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2014 [slangijs](https://slangji.wordpress.com/) (email: <slangijs [at] googlemail [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](https://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](https://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](https://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](https://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */

	/**
	 * @package     sLa2sLaNGjI4sLaNGjIs
	 * @subpackage  WordPress PlugIn
	 * @description Insert nfo Text on Header and Footer
	 * @since       2.1+
	 * @tested      4.5+
	 * @version     2014.0815.2233
	 * @status      STABLE (trunk) release
	 * @development Code in Becoming!
	 * @install     The configuration of this Plugin is Automattic!
	 * @author      slangjis
	 * @license     GPLv2 or later
	 * @indentation GNU style coding standard
	 */

	if ( ! function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit;
		}

	add_action( 'admin_head',   'sLa2sLaNGjI4sLaNGjIs' );
	add_action( 'admin_footer', 'sLa2sLaNGjI4sLaNGjIs' );
	add_action( 'login_head',   'sLa2sLaNGjI4sLaNGjIs' );
	add_action( 'login_footer', 'sLa2sLaNGjI4sLaNGjIs' );
	add_action( 'wp_head',      'sLa2sLaNGjI4sLaNGjIs' );
	add_action( 'wp_footer',    'sLa2sLaNGjI4sLaNGjIs' );

	function sLa2sLaNGjI4sLaNGjIs()
		{
			echo "\n<!--Plugin sLa2sLaNGjI4sLaNGjIs Active - Tag ".md5(md5("".""))."-->\n\n";
		}
?>