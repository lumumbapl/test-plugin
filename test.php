<?php
/*
Plugin Name: Test Script Modules
Version: 1.0.0
*/
wp_register_script_module(
'bar',
plugins_url( '/bar.js', __FILE__ )
);
wp_enqueue_script_module(
'foo',
plugins_url( '/foo.js', _FILE_ ),
array( 'bar' )
);
