<?php 
/* Template Name: Download */

$gettarget = $_GET["target"];
$ftarget = (explode('_',$gettarget));
$post_id = $ftarget[1];
$target = 'http://www.innspub.net/'. $ftarget[0];

$dc = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id=$post_id AND meta_key='dc'" );
if($count = $dc + 1){

$upd = $wpdb->query( $wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value=$count WHERE post_id=$post_id AND meta_key='dc'") );

       if ($upd) {
            header("Location: " . $target); // redirect to target URL
        }else {
            header("Location: " . $target); // redirect to target URL
        }

} else {
    header("Location: " . $target); // redirect to target URL
}

?>