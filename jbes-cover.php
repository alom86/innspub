<?php

ob_start();

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
$pdf->SetTitle('Cover');
$pdf->SetSubject('Cover');
$pdf->SetKeywords('Cover');

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
$pdf->AddPage('P', 'A4');





$issnhtml = <<<EOD
<p style="text-align:center; color:#800000;
        font-family:georgia;
        font-size: 12pt;
        text-align: right;">ISSN  $pissn (Print)<br>ISSN $eissn (Online)</p>
EOD;
$pdf->writeHTMLCell(60, '', 130, 15, $issnhtml, 0, 1, 0, true, '', true);

$copyhtml = <<<EOD
<p style="text-align:center; color:#000090;
        font-family:georgia;
        font-size: 12pt;
        ">JBES ©<br>Off Print </p>
EOD;
$pdf->writeHTMLCell(40, '', 25, 68, $copyhtml, 0, 1, 0, true, '', true);

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/innslogo.jpg', 15, 20, 25, 25, 'jpg');

$titlehtml = <<<EOD
<h1 style="text-align:center; color:#008000;
        font-family:georgia;
        font-size: 16pt;
        text-align: left;"><span style="color:#336699; font-size:24pt; text-transform:uppercase;">$shortname</span><br>$fulljournalname</h1>
EOD;
$pdf->writeHTMLCell(170, '', 35, 26, $titlehtml, 0, 1, 0, true, '', true);

$titleborderhtml = <<<EOD
<h2 style="text-align:center; color:green;
        font-family:centaur;
        font-size: 20pt;
        border-top: 2px solid #800000;
        text-align: right;"></h2>
EOD;
$pdf->writeHTMLCell(113, '', 20, 44, $titleborderhtml, 0, 1, 0, true, '', true);

$titleborderhtml1 = <<<EOD
<h2 style="text-align:center;
        font-family:centaur;
        font-size: 20pt;
        border-top: 1px solid #000;
        text-align: right;"></h2>
EOD;
$pdf->writeHTMLCell(90, '', 20, 45, $titleborderhtml1, 0, 1, 0, true, '', true);




$issuehtml = <<<EOD
<h1 style="text-align:center; color:#000;
        font-family:time;
        font-size: 12pt;
        text-align: right;">Volume $volume, Number $number, $month $year</h1>
EOD;
$pdf->writeHTMLCell(172, '', 20, 65, $issuehtml, 0, 1, 0, true, '', true);

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/jbesmain.jpg', 45, 95, 110, 110, 'jpg');

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/jbesfootertree.jpg', 12, 230, 50, 50, 'jpg');

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/jbesfooter.jpg', 62, 230, 120, 50, 'jpg');

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/arrow-left.jpg', 21, 58, 12, 12, 'jpg');

$pdf->Image('https://innspub.net/wp-content/uploads/2022/08/arrowright.jpg', 182, 260, 12, 12, 'jpg');



$footerhtml = <<<EOD
<h3 style="text-align:center; color:#800000;
        font-family:centaur;
        font-size: 17pt;
        line-height:1;
        text-align: left;"><span style="color:#886706;">INNSPUB</span><br>International Network For Natural Sciences<br><span style="color:#215868; font-size:18px; line-height:1.5;">Website: www.innspub.net</span></h3>
EOD;
$pdf->writeHTMLCell(170, '', 62, 242, $footerhtml, 0, 1, 0, true, '', true);

$footerhtml = <<<EOD
<h3 style="text-align:center; color:#800000;
        font-family:centaur;
        font-size: 17pt;
        line-height:1;
        text-align: left;"><span style="font-size:11px; font-family:time; color:#000; font-weight:normal;">Copyright © INNSPUB $year</span></h3>
EOD;
$pdf->writeHTMLCell(170, '', 14, 274, $footerhtml, 0, 1, 0, true, '', true);


$fborderstyle = array('width' => .4, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0,0,0));
$pdf->Line(63, 254,138, 254, $fborderstyle);


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('cover.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

ob_end_flush();