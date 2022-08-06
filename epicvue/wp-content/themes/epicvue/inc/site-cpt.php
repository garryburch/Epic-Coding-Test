<?php
//Put your CPT Here

function cptui_register_my_cpts_locations()
{

  /**
   * Post Type: Locations.
   */

  $labels = [
    "name" => __("Locations", "epicvue"),
    "singular_name" => __("Location", "epicvue"),
  ];

  $args = [
    "label" => __("Locations", "epicvue"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "locations", "with_front" => false],
    "query_var" => true,
    "menu_icon" => "dashicons-location",
    "supports" => ["title", "revisions"],
    "show_in_graphql" => false,
  ];

  register_post_type("locations", $args);
}

add_action('init', 'cptui_register_my_cpts_locations');
