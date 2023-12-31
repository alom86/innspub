<?php 

/* Template Name: Cover */


require 'cert-process.php';
// require "ijb-cover.php";
$shortname = strtolower( $shortname );
switch ($shortname) {
    case 'ijb':
        require "$shortname-cover.php";
        break;
        
    case 'jbes':
        require "$shortname-cover.php";
        break;
        
    case 'ijaar':
        require "$shortname-cover.php";
        break;
    
    case 'ijbb':
        require "$shortname-cover.php";
        break;
        
    case 'ijmm':
        require "$shortname-cover.php";
        break;
    
}