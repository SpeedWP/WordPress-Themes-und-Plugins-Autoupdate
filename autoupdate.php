<?php
/*
Plugin Name: Automatische WordPress Updates
Plugin URI: https://speedword.press
Description: Das Plugin muss sich im Ordner wp-content/mu-plugins/ befinden. Ebenfalls muss in der wp-config autoupdaten aktiviert sein. Zeile 10 updatet die Plugins, Zeile 11 die Themes aus dem offiziellen WordPress Respository. Einfach die jeweilige Zeile löschen,falls nur eines von Beidem sich selber updaten soll.
Author: Daniel Bieli
Author URI: https://speedword.press
License: GPL2
*/
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );