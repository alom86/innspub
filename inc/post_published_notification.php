<?php

require_once 'constants.php';

function post_published_notification($ID, $post)
{

    $to = get_field("authors_email", $ID);
    if (!$to)
        return;

    if (get_post_status($ID) == 'draft')
        return;

    // If this is just a revision, don't send the email.
    if (wp_is_post_revision($ID))
        return;

    $author = $post->post_author; // Post author ID.
    $name = get_the_author_meta('display_name', $author);
    $email = "adv@darwinautomotors.com.au"; //get_the_author_meta( 'user_email', $author );
    $title = $post->post_title;
    $permalink = get_permalink($ID);
    $edit = get_edit_post_link($ID, '');
    $authors = get_field("authors", $ID);
    $post_type = get_post_type($ID);
    $shortname = get_field("journal_short_name", $ID);



    switch ($shortname) {
        case 'IJB':
            $fulljournalname = 'International Journal of Biosciences';
            break;

        case 'JBES':
            $fulljournalname = 'Journal of Biodiversity and Environmental Sciences';
            break;

        case 'IJBB':
            $fulljournalname = 'International Journal of Biomolecules and Biomedicine';
            break;

        case 'IJAAR':
            $fulljournalname = 'International Journal of Agronomy and Agricultural Research';
            break;

        case 'IJMM':
            $fulljournalname = 'International Journal of Microbiology and Mycology';
            break;
    }


    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 2;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = SMTP_HOST;                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = SMTP_USER;                 // SMTP username
    $mail->Password = SMTP_PASSWORD;                       // SMTP password
    //$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->setFrom('info@innspub.net', 'INNSpub Network');
    $mail->addAddress($to, 'Author');
    $mail->addBCC(BCC_1);
    $mail->addBCC(BCC_2);

    $mail->isHTML(true);                                  

    $ebody = "<p style=\"line-height:1.5;\">
    
                Dear Author(s): $authors<br>
                Congratulations! We are happy to inform you that, your submitted paper entitled: '<b>$title</b>' has been published in the \"<b>$fulljournalname</b>\" Journal. You can take advantage of the published paper for valid reference or scientific purpose and can share in global scientific community, social media & library.
                <br><br>
                Here some necessary document links for the published paper below:<br>
                
                <b>Published paper link:</b> <a href=\"$permalink\">$permalink</a><br>
                <b>Cover page link:</b> <a href=\"https://www.innspub.net/cover/?target=$ID\">Create cover and Download</a><br>
                <b>Certificate for the publication link:</b> <a href=\"https://www.innspub.net/certificate/?target=$ID\">Create certificate and Download</a>
                
                <br><br>
                The published paper will be available forever in the archive of the $fulljournalname journal of 'International Network for Natural Sciences website. INNSpub store it as an effective research findings and publications for the mankind. 
                <br><br>
                Thank you very much for choosing and being with the INNSpub publication Network.

                <br><br>
                Regards,<br> 
                International Network for Natural Sciences<br>
                Website: www.innspub.net<br>
                Email: info@innspub.net<br>
				Online Submission: www.rjm.innspub.net
    
    </p>";

    $mail->Subject = 'Congratulations! Your fruitful manuscript has been published';
    $mail->Body    = $ebody;


    if ($post->post_date != $post->post_modified) {
        //THIS IS AN UPDATE
    } else {
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        }
    }
}

add_action('wp_insert_post', 'post_published_notification', 10, 2);
