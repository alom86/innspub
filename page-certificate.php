<?php 

/* Template Name: Certificate */


require 'cert-process.php';

ob_start();

 //echo var_dump($test);

/**
 * Creates a certificate using TCPDF
 * @abstract Certificate for publication
 * @author INNSPUB
 * @since 2017-25-6
*/

// Include the main TCPDF library (search for installation path).
require_once('cpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('INNSPUB');
$pdf->SetTitle('Certificate');
$pdf->SetSubject('Certificate for publication');
$pdf->SetKeywords('Certificate');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(false, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('georgia', '', 20);

// add a page
$pdf->AddPage('L', 'A4');

$pdf->Image('https://innspub.net/wp-content/uploads/2022/05/certificate-frame-low.png', 0, 0, 296, 210, 'PNG');

$titlehtml = <<<EOD
<h1 style="text-align:center; color:#01B04F;
        font-family:centaur;
        font-size: 22pt;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        text-align: center;">International Network For Natural Sciences</h1>
EOD;
$pdf->writeHTMLCell(140, '', 79, 20, $titlehtml, 0, 1, 0, true, '', true);

$title2html = <<<EOD
        <h2 style="font-family:algerian; text-transform: uppercase; font-size: 14pt; text-align:center; color:#006FC0;">$fulljournalname ($shortname)</h2>
EOD;
$pdf->writeHTMLCell(258, '', 20, '', $title2html, 0, 1, 0, true, '', true);

//$shortnames = strtolower( $shortname );
$refhtml = <<<EOD
       <span style="font-size:14pt;">Reference: $shortname V$volume N$number P$page_numbers $year </span>
EOD;
$pdf->writeHTMLCell(250, '', 23, 50, $refhtml, 0, 1, 0, true, '', true);

$issnhtml = <<<EOD
       <span style="font-size:14pt; text-align:right">$issn</span>
EOD;
$pdf->writeHTMLCell(250, '', 23, 50, $issnhtml, 0, 1, 0, true, '', true);

$certhtml = <<<EOD
    <div>
        <h2 style="font-family:oldengl; font-size:24pt; text-decoration: underline; color:#C00901; text-align:center;">Certificate for Publication</h2>

        <p style="font-family:georgia; text-align:justify; font-size:14pt;">This is certify that the paper entitled <strong style="font-size:13pt;">'$papertitle'</strong> has been published in "<strong style="font-size:13pt;">$fulljournalname <span style="text-transform: uppercase;">($shortname)</span></strong>" 
        journal with following details:</p>
        
        <p style="font-family:georgia; text-align:justify; font-size:13pt; line-height:1.5; color:#000;"><strong>Authors Name:</strong> <span style="font-family:arialrb; font-size:11pt; color:#006FC0;">$authors</span><br><strong>Journal Name:</strong> <span style="font-family:arialrb; font-size:11pt; color:#006FC0;">$fulljournalname  <span style="text-transform: uppercase;">($shortname)</span></span><br><strong>Publication:</strong> <span style="font-family:arialrb; font-size:11pt; color:#006FC0;">$issue</span></p>  
    </div>
     
EOD;
$pdf->writeHTMLCell(250, '', 23, 55, $certhtml, 0, 1, 0, true, '', true);


$pdf->Image('https://innspub.net/wp-content/uploads/2022/05/seal1.png', 25, 164, 25, 25, 'png');
$pdf->Image('https://innspub.net/wp-content/uploads/2022/05/innslogo.webp', 16, 13, 33, 31, 'webp');
$pdf->Image('https://innspub.net/wp-content/uploads/2022/05/sign.png', 222, 160, 60, 20, 'png');

$signhtml = <<<EOD
        <p style="border-top: 1px dashed black; font-size: 13pt; text-align:center">Editor in chief/Publisher </p>
EOD;
$pdf->writeHTMLCell(55, '', 222, 180, $signhtml, 0, 1, 0, true, '', true);

$footerhtml = <<<EOD
        <p style="font-family:andalus; font-size: 10pt; text-align:center">w w w . i n n s p u b . n et<br><span style="font-family:georgia;">(INNSPUB)</span></p>
EOD;
$pdf->writeHTMLCell(55, '', 123, 185, $footerhtml, 0, 1, 0, true, '', true);



// set style for barcode
$style = array(
    //'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);


//$pdf->write2DBarcode('www.tcpdf.org', 'PDF417', 100, 155, 0, 30, $style, 'N');


$pdf->write2DBarcode($fulljournalname.' '.$issn.' '.$certnum, 'QRCODE,H', 250, 12, 25, 25, $style, 'N');



// CODE 39 EXTENDED + CHECKSUM
//$pdf->Cell(0, 0, 'CODE 39 EXTENDED + CHECKSUM', 0, 1);
$pdf->write1DBarcode('International Network For Natural Sciences www.innspub.net', 'C128', 110, 164, 80, 16, 0.4, $style, 'N');





//$borderstyle = array('width' => 6, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(12,82,127));
//$pdf->Line(0, 3,300, 3, $borderstyle);
//$fborderstyle = array('width' => 4, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(12,82,127));
//$pdf->Line(0, 210,300, 210, $fborderstyle);




// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Certificate.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+


ob_end_flush();
