<?php
/*! pimpmylog - 1.2.2 - 97dbe9c6d654a2d26d1d3011ecead8510ce417fa*/
/*
 * pimpmylog
 * http://pimpmylog.com
 *
 * Copyright (c) 2014 Potsky, contributors
 * Licensed under the GPLv3 license.
 */
?><?php
if ( realpath( __FILE__ ) === realpath( $_SERVER[ "SCRIPT_FILENAME" ] ) ) {
	header( $_SERVER[ 'SERVER_PROTOCOL' ] . ' 404 Not Found');
	die();
}

if (!isset($fav)) {
	$fav = '';
}
?><link rel="shortcut icon" href="<?php echo $fav;?>img/favicon.ico" type="image/x-icon"><link rel="apple-touch-icon" href="<?php echo $fav;?>img/apple-touch-icon.png"><link rel="apple-touch-icon" sizes="57x57" href="<?php echo $fav;?>img/apple-touch-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="<?php echo $fav;?>img/apple-touch-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $fav;?>img/apple-touch-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="<?php echo $fav;?>img/apple-touch-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $fav;?>img/apple-touch-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="<?php echo $fav;?>img/apple-touch-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="<?php echo $fav;?>img/apple-touch-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="<?php echo $fav;?>img/apple-touch-icon-152x152.png">