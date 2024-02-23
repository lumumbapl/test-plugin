<?php
/*
Plugin Name: Test Script Modules
Version: 1.0.0
*/
wp_register_script_module(
'bar',
plugins_url( '/bar.js', FILE )
);
wp_enqueue_script_module(
'foo',
plugins_url( '/foo.js', FILE ),
array( 'bar' )
);
