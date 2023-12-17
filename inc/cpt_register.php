<?php
// Custom post type function

function custom_post(){
    // Indexes
    register_post_type('indexedin',
        array(
            'labels' => array(
                'name' => ('Indexes'),
                'singular_name' => ('Index'),
                'add_new' => ('Add New Post'),
                'add_new_item' => ('Add New Post'),
                'edit_item' => ('Edit Post'),
                'new_item' => ('New Post'),
                'view_item' => ('View Post'),
                'not_found' => ('You don\'t add any Post, please add.'),
            ),

            'menu_icon' => 'dashicons-index-card',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'indexedin'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    // memberin
    register_post_type('memberin',
        array(
            'labels' => array(
                'name' => ('Members In'),
                'singular_name' => ('Member In'),
                'add_new' => ('Add New Post'),
                'add_new_item' => ('Add New Post'),
                'edit_item' => ('Edit Post'),
                'new_item' => ('New Post'),
                'view_item' => ('View Post'),
                'not_found' => ('You don\'t add any Post, please add.'),
            ),

            'menu_icon' => 'dashicons-buddicons-groups',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'memberin'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    // authors
    register_post_type('authors',
        array(
            'labels' => array(
                'name' => ('Authors'),
                'singular_name' => ('Author'),
                'add_new' => ('Add New Author'),
                'add_new_item' => ('Add New Author'),
                'edit_item' => ('Edit Author'),
                'new_item' => ('New Author'),
                'view_item' => ('View Author'),
                'not_found' => ('You don\'t add any Author, please add.'),
            ),

            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 7,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'authors'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    // announcement
    register_post_type('announcement',
        array(
            'labels' => array(
                'name' => ('Announcements'),
                'singular_name' => ('Announcement'),
                'add_new' => ('Add New Announcement'),
                'add_new_item' => ('Add New Announcement'),
                'edit_item' => ('Edit Announcement'),
                'new_item' => ('New Announcement'),
                'view_item' => ('View Announcement'),
                'not_found' => ('You don\'t add any Announcement, please add.'),
            ),

            'menu_icon' => 'dashicons-controls-volumeon',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 8,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'announcement'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    // delivery
    register_post_type('delivery',
        array(
            'labels' => array(
                'name' => ('First Delivery'),
                'singular_name' => ('First Delivery'),
                'add_new' => ('Add New First Delivery'),
                'add_new_item' => ('Add New First Delivery'),
                'edit_item' => ('Edit First Delivery'),
                'new_item' => ('New First Delivery'),
                'view_item' => ('View First Delivery'),
                'not_found' => ('You don\'t add any First Delivery, please add.'),
            ),

            'menu_icon' => 'dashicons-editor-expand',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 9,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'delivery'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
    
    // delivery
    register_post_type('delivery',
        array(
            'labels' => array(
                'name' => ('First Delivery'),
                'singular_name' => ('First Delivery'),
                'add_new' => ('Add New First Delivery'),
                'add_new_item' => ('Add New First Delivery'),
                'edit_item' => ('Edit First Delivery'),
                'new_item' => ('New First Delivery'),
                'view_item' => ('View First Delivery'),
                'not_found' => ('You don\'t add any First Delivery, please add.'),
            ),

            'menu_icon' => 'dashicons-editor-expand',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 9,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'delivery'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    // portfolio
    // register_post_type('memberin',
    //     array(
    //         'labels' => array(
    //             'name' => ('Portfolios'),
    //             'singular_name' => ('Portfolio'),
    //             'add_new' => ('Add new portfolio'),
    //             'add_new_item' => ('Add new portfolio'),
    //             'edit_item' => ('Edit portfolio'),
    //             'new_item' => ('New portfolio'),
    //             'view_item' => ('View portfolio'),
    //             'not_found' => ('You don\'t add any portfolio, please add.'),
    //         ),

    //         'menu_icon' => 'dashicons-portfolio',
    //         'public' => true,
    //         'publicly_queryable' => true,
    //         'exclude_from_search' => true,
    //         'menu_position' => 7,
    //         'has_archive' => true,
    //         'hierarchial' => true,
    //         'show_ui' => true,
    //         'capability_type' => 'post',
    //         'taxonomies' => array ('category'),
    //         'rewrite' => array('slag' => 'memberin'),
    //         'supports' => array('title', 'thumbnail', 'editor'),
    //     )
    // );
}

add_action('init', 'custom_post');

// query post
function query_post_type($query){
    if(is_category()){
        $post_type = get_query_var('post_type');
        if($post_type){
            $post_type = $post_type;
        } else{
            $post_type = array('post', 'portfolio');
            $query -> set('post_type', $post_type);
            
            return $query;
        }
    }
}

add_filter('pre_get_posts', 'query_post_type');