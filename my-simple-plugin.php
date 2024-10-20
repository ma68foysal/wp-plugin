<?php
/*
Plugin Name: My Simple Plugin
Description: A simple example WordPress plugin
Version: 1.0
Author: Your Name
*/

// Hook for adding a menu item
add_action('admin_menu', 'my_simple_plugin_menu');

// Function for adding the menu page
function my_simple_plugin_menu() {
    add_menu_page(
        'Simple Plugin Page',       // Page title
        'Simple Plugin',            // Menu title
        'manage_options',           // Capability
        'my-simple-plugin',         // Menu slug
        'my_simple_plugin_page',    // Function to display page content
        'dashicons-admin-generic',  // Icon
        6                           // Position
    );
}

// Function to display the plugin page content
function my_simple_plugin_page() {
    echo '<h1>Welcome to My Simple Plugin Page</h1>';
    echo '<p>This is a simple plugin that adds a page to the admin menu.</p>';
}
