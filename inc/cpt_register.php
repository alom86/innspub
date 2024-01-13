<?php
// Custom post type function

function cptui_register_my_cpts()
{


	/**
	 * Post Type: ijbs.
	 */

	// $labels = [
	// 	"name" => esc_html__("ijbs", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("ijb", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("ijbs", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "ijb article post",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => true,
	// 	"show_in_menu" => "publish.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => true,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijb", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijb", $args);

	/**
	 * Post Type: jbes.
	 */

	// $labels = [
	// 	"name" => esc_html__("jbes", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("jbes", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("jbes", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "jbes",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => true,
	// 	"show_in_menu" => "publish.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => true,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "jbes", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("jbes", $args);


	/**
	 * Post Type: ijaars.
	 */

	// $labels = [
	// 	"name" => esc_html__("ijaars", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("ijaar", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("ijaars", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "ijaar",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => true,
	// 	"show_in_menu" => "publish.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => true,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijaar", "with_front" => true],
	// 	"query_var" => true,
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijaar", $args);

	/**
	 * Post Type: ijbbs.
	 */

	// $labels = [
	// 	"name" => esc_html__("ijbbs", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("ijbb", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("ijbbs", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "ijbb",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => true,
	// 	"show_in_menu" => "publish.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => true,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijbb", "with_front" => true],
	// 	"query_var" => true,
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijbb", $args);

	/**
	 * Post Type: ijmms.
	 */

	// $labels = [
	// 	"name" => esc_html__("ijmms", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("ijmm", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("ijmms", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "ijmm",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => true,
	// 	"show_in_menu" => "publish.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => true,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijmm", "with_front" => true],
	// 	"query_var" => true,
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijmm", $args);


	/**
	 * Post Type: QuickViews.
	 */

	//  $labels = [
	// 	"name" => esc_html__( "QuickViews", "custom-post-type-ui" ),
	// 	"singular_name" => esc_html__( "QuickView", "custom-post-type-ui" ),
	// ];

	// $args = [
	// 	"label" => esc_html__( "QuickViews", "custom-post-type-ui" ),
	// 	"labels" => $labels,
	// 	"description" => "QuickView",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => true,
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => true,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => [ "slug" => "quickview", "with_front" => true ],
	// 	"query_var" => true,
	// 	"supports" => [ "title", "editor", "thumbnail" ],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type( "quickview", $args );


	/**
	 * Post Type: Journals.
	 */

	$labels = [
		"name" => esc_html__("Journals", "custom-post-type-ui"),
		"singular_name" => esc_html__("journal", "custom-post-type-ui"),
		"all_items" => esc_html__("All Journals", "custom-post-type-ui"),
		"add_new" => esc_html__("Add New Journal", "custom-post-type-ui"),
		"edit_item" => esc_html__("Edit Journal", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Journals", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "journal",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => ["slug" => "journal", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-text-page",
		"supports" => ["title", "editor", "thumbnail", "custom-fields"],
		"taxonomies" => ["category"],
		"show_in_graphql" => false,
	];

	register_post_type("journal", $args);


	/**
	 * Post Type: JBES Editors.
	 */

	// $labels = [
	// 	"name" => esc_html__("JBES Editors", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("JBES Editor", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("JBES Editors", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => "editorinfo.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "jbeseditor", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("jbeseditor", $args);

	/**
	 * Post Type: IJB Editors.
	 */

	// $labels = [
	// 	"name" => esc_html__("IJB Editors", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("IJB Editor", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("IJB Editors", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => "editorinfo.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijbeditor", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijbeditor", $args);

	/**
	 * Post Type: IJAAR Editors.
	 */

	// $labels = [
	// 	"name" => esc_html__("IJAAR Editors", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("IJAAR Editor", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("IJAAR Editors", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => "editorinfo.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijaareditor", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijaareditor", $args);

	/**
	 * Post Type: IJBB Editors.
	 */

	// $labels = [
	// 	"name" => esc_html__("IJBB Editors", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("IJBB Editor", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("IJBB Editors", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => "editorinfo.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijbbeditor", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijbbeditor", $args);

	/**
	 * Post Type: IJMM Editors.
	 */

	// $labels = [
	// 	"name" => esc_html__("IJMM Editors", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("IJMM Editor", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("IJMM Editors", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => "editorinfo.php",
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "ijmmeditor", "with_front" => true],
	// 	"query_var" => true,
	// 	"supports" => ["title", "editor", "thumbnail"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("ijmmeditor", $args);

	/**
	 * Post Type: Top Bar Notices.
	 */

	// $labels = [
	// 	"name" => esc_html__("Top Bar Notices", "custom-post-type-ui"),
	// 	"singular_name" => esc_html__("Top Bar Notice", "custom-post-type-ui"),
	// ];

	// $args = [
	// 	"label" => esc_html__("Top Bar Notices", "custom-post-type-ui"),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"rest_namespace" => "wp/v2",
	// 	"has_archive" => false,
	// 	"show_in_menu" => true,
	// 	"show_in_nav_menus" => true,
	// 	"delete_with_user" => false,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"can_export" => true,
	// 	"rewrite" => ["slug" => "top_notice", "with_front" => true],
	// 	"query_var" => true,
	// 	"menu_icon" => "dashicons-welcome-widgets-menus",
	// 	"supports" => ["title"],
	// 	"show_in_graphql" => false,
	// ];

	// register_post_type("top_notice", $args);

	/**
	 * Post Type: Become an Editor.
	 */

	$labels = [
		"name" => esc_html__("Become an Editor", "custom-post-type-ui"),
		"singular_name" => esc_html__("Become an Editor", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Become an Editor", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "editor", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-edit-page",
		"supports" => ["title", "editor", "author"],
		"taxonomies" => ["category"],
		"show_in_graphql" => false,
	];

	register_post_type("editor", $args);

	/**
	 * Post Type: Indexes.
	 */

	$labels = [
		"name" => esc_html__("Indexed In", "custom-post-type-ui"),
		"singular_name" => esc_html__("Indexe", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Indexed In", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "indexedin", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-index-card",
		"supports" => ["title"],
		"show_in_graphql" => false,
	];

	register_post_type("indexedin", $args);

	/**
	 * Post Type: Members In.
	 */

	$labels = [
		"name" => esc_html__("Members In", "custom-post-type-ui"),
		"singular_name" => esc_html__("Member In", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Members In", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "memberin", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-buddicons-groups",
		"supports" => ["title"],
		"show_in_graphql" => false,
	];

	register_post_type("memberin", $args);



	/**
	 * Post Type: Home Feature section
	 */

	 $labels = [
		"name" => esc_html__("Features", "custom-post-type-ui"),
		"singular_name" => esc_html__("Feature", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Features", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "feature", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-expand",
		"supports" => ["title", "editor", "thumbnail", "custom-fields"],
		"show_in_graphql" => false,
	];

	register_post_type("feature", $args);



	/**
	 * Post Type: Home Author section
	 */
	
	$labels = [
		"name" => esc_html__("Authors", "custom-post-type-ui"),
		"singular_name" => esc_html__("Author", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Authors", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "authors", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-networking",
		"supports" => ["title", "thumbnail", "custom-fields"],
		"show_in_graphql" => false,
	];

	register_post_type("authors", $args);



	/**
	 * Post Type: Home Announcement section
	 */

	$labels = [
		"name" => esc_html__("Announcements", "custom-post-type-ui"),
		"singular_name" => esc_html__("Announcements", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Announcements", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "announcement", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-controls-volumeon",
		"supports" => ["title", "thumbnail", "custom-fields"],
		"show_in_graphql" => false,
	];

	register_post_type("announcement", $args);



	/**
	 * Post Type: Home Published issue section
	 */

	$labels = [
		"name" => esc_html__("Published Issues", "custom-post-type-ui"),
		"singular_name" => esc_html__("Published Issue", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("Published Issue", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => ["slug" => "published-issue", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-table-col-delete",
		"supports" => ["title", "custom-fields"],
		"show_in_graphql" => false,
	];

	register_post_type("published-issue", $args);


	


}


add_action('init', 'cptui_register_my_cpts');

