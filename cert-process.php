<?php


$post_id = $_GET["target"]; 

$postname = $wpdb->get_var( "SELECT post_title FROM $wpdb->posts WHERE ID=$post_id" );
$authors = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id=$post_id AND meta_key='authors'" );
$volume = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id=$post_id AND meta_key='volume'" );
$number = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id=$post_id AND meta_key='number'" );
$shortname = get_field("journal_short_name", $post_id);
$page_numbers = get_field("page_no", $post_id);
//$journalshortname = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id=$post_id AND meta_key='journal_short_name'" );


$date = $wpdb->get_var( "SELECT post_date FROM $wpdb->posts WHERE ID=$post_id" );

$certnum = get_field("certification", $post_id);
$snum = (string)$certnum;
$certlen = strlen($snum);

switch ($certlen) {
    case '1':
        $certnum = '000'. $certnum;
        break;
        
    case '2':
        $certnum = '00'. $certnum;
        break;
        
    case '3':
        $certnum = '0'. $certnum;
        break;
    
    case '4':
        $certnum = ''. $certnum;
        break;   
}




//$cnum = strlen($snum);

$papertitle = str_replace('-',' ',$postname);
$year = substr($date,0,4);
$month = substr($date,5,2);

switch ($month) {
    case '01':
		$month = 'January';
        break;
	case '02':
		$month = 'February';
        break;
	case '03':
		$month = 'March';
        break;
	case '04':
		$month = 'April';
        break;
	case '05':
		$month = 'May';
        break;
	case '06':
		$month = 'June';
        break;
	case '07':
		$month = 'July';
        break;
	case '08':
		$month = 'August';
        break;
	case '09':
		$month = 'September';
        break;
	case '10':
		$month = 'October';
        break;
	case '11':
		$month = 'November';
        break;
	case '12':
		$month = 'December';
        break;
            
	} 

// $farray = (explode('-',$filename));
// $p = (explode('p',$filename));
// $pages = $p[1];
// $journalsname = $farray[0];

// $posturl = "http://www.innspub.net/".$journalname.'/'.$postname."/";

// $vol = $farray[2];
// $no = $farray[4];

$issue = "Volume $volume, Number $number, $year";




switch ($shortname) {
    case 'IJB':
      $fulljournalname = 'International Journal of Biosciences';
      $pissn = '2220-6655';
      $eissn = '2222-5234';
        break;
        
    case 'JBES':
      $fulljournalname = 'Journal of Biodiversity and Environmental Sciences';
      $pissn = '2220-6663';
      $eissn = '2222-3045';
        break;
        
    case 'IJBB':
      $fulljournalname = 'International Journal of Biomolecules and Biomedicine';
      $pissn = '2221-1063';
      $eissn = '2222-503X';
        break;
    
    case 'IJAAR':
      $fulljournalname = 'International Journal of Agronomy and Agricultural Research';
      $pissn = '2223-7054';
      $eissn = '2225-3610';
        break;
    
    case 'IJMM':
      $fulljournalname = 'International Journal of Microbiology and Mycology';
      $pissn = '2309-4796';
      //$eissn = '';
        break;
    
} 


if($journalname == 'IJMM'){
    $issn = "ISSN: <sup>P</sup>$pissn";
}else{
    $issn = "ISSN: <sup>P</sup>$pissn <sup>E</sup>$eissn";
}



?>