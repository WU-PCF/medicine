<?php
//header("Content-Type: text/plain");
	if (have_posts()) :
		while (have_posts()) :
			the_post();

	$content = get_the_content();
    // This is where wordpress filters the content text and adds paragraphs
    $content = apply_filters('the_content', $content);
    $replace_p = '<p style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">';
    $replace_h2 = '<h2 style="display:block;font-family:Georgia;font-size:20px;font-style:normal;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
    $replace_h3 = '<h3 style="display:block;font-family:Georgia;font-size:16px;font-style:normal;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
    $replace_h4 = '<h4 style="display:block;font-family:Georgia;font-size:14px;font-style:normal;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';

    $email_content = str_replace(array('<p>','<h2>','<h3>','<h4>'), array($replace_p, $replace_h2, $replace_h3, $replace_h4), $content);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>News Release | Washington University in St. Louis</title>
        <style type="text/css">
			/* Client specific styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
			body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
			img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

			/* Reset styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table{border-collapse:collapse !important;}
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

			#bodyCell{padding:20px;}
			#templateContainer{width:600px;}
			h1{
				display:block;
				font-family:Georgia;
				font-size:26px;
				font-style:normal;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}
			h2{
				display:block;
				font-family:Georgia;
				font-size:20px;
				font-style:normal;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}
			h3{
				display:block;
				font-family:Georgia;
				font-size:16px;
				font-style:normal;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}
			h4{
				display:block;
				font-family:Georgia;
				font-size:14px;
				font-style:normal;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}
			.headerContent{
				padding-bottom:15px;
			}
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#EB4102;
				font-weight:normal;
				text-decoration:underline;
			}
			#headerImage{
				height:auto;
				max-width:600px;
			}
			.bodyContent{
				color:#333;
				font-family:Georgia;
				font-size:14px;
				line-height:150%;
				padding-top:30px;
				padding-bottom:20px;
				text-align:left;
			}
			.bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#990000;
				font-weight:normal;
				text-decoration:none;
			}
			.bodyContent img{
				display:inline;
				height:auto;
				max-width:600px;
			}
			#templateFooter{
				border-top:#990000 2px solid;
			}
			.footerContent{
				color:#787878;
				font-family:Georgia;
				font-size:10px;
				line-height:150%;
				padding-top:20px;
				padding-bottom:20px;
				text-align:left;
			}
			.footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
				color:#990000;
				font-weight:normal;
				text-decoration:none;
			}

            @media only screen and (max-width: 480px){
				/* Client-specific mobile styles */
				body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */

				#bodyCell{
					padding:10px !important;
				}
				#templateContainer{
					max-width:600px !important;
					width:100% !important;
				}
				h1{
					font-size:24px !important;
					line-height:100% !important;
				}
				h2{
					font-size:20px !important;
					line-height:100% !important;
				}
				h3{
					font-size:18px !important;
					line-height:100% !important;
				}
				h4{
					font-size:16px !important;
					line-height:100% !important;
				}
				#headerImage{
					height:auto !important;
					max-width:600px !important;
					width:100% !important;
				}
				.headerContent{
					padding-bottom: 12px !important;
				}
				.bodyContent{
					font-size:16px !important;
					line-height:140% !important;
				}
				.bodyContent img {
					height:auto !important;
					max-width:600px !important;
					width:100% !important;
				}
				.templateColumnContainer {
					display: block !important;
					width: 100% !important;
				}
				#news-release img {
					max-width: 150px;
				}
				#media-contact {
					padding-top: 15px;
				}
				.footerContent{
					font-size:14px !important;
					line-height:115% !important;
				}
			}
		</style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            	<tr>
                	<td align="center" valign="top" id="bodyCell">
                    	<!-- BEGIN TEMPLATE // -->
                    	<table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                            	<img src="<?php echo get_template_directory_uri() . '/_/img/wusm-logo.jpg'; ?>" id="headerImage" />
                                            </td>
                                        </tr>
                                        <tr>
                                        <td align="center" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
	                                        <tr>
	                                        	<td align="left" valign="middle" style="width:280px;" id="news-release" class="templateColumnContainer">
	                                            	<img src="<?php echo get_template_directory_uri() . '/_/img/news-release.jpg'; ?>" />
	                                            </td><?php
$has_media_contact = '';
$rows = get_field( 'media_contact' );
$has_media_contact = $rows[0]['media_contact'];
if( $has_media_contact ):
if( have_rows('media_contact') ):
    while ( have_rows('media_contact') ) : the_row();
    	if(get_sub_field('custom_media_contact')) {
    		$media_contact_name = get_sub_field('name');
    		$media_contact_phone = get_sub_field('phone_number');
    		$media_contact_email = get_sub_field('email_address');
    	} elseif(get_sub_field('media_contact')) {
    		$author = get_sub_field('media_contact');
			$user_id = $author['ID'];
			$media_contact_name = get_the_author_meta( 'display_name', $user_id);
			$media_contact_phone = get_user_meta( $user_id, 'phone', true);
			$media_contact_email = get_the_author_meta( 'user_email', $user_id );
    	}
    endwhile;
?><td align="left" valign="top" style="width:220px;" id="media-contact" class="templateColumnContainer">
<p style="font-family:Georgia,serif;font-size:11px;padding:0;margin:0;line-height:100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;"><strong>Media Assistance:</strong><br>
<?php echo $media_contact_name; ?><br><?php echo $media_contact_phone; if($media_contact_phone && $media_contact_email) { echo ' | '; } ?><a href="mailto:<?php echo $media_contact_email; ?>" style="color:#990000;text-decoration:none;"><?php echo $media_contact_email; ?></a></p></td>
<?php endif; endif; ?>
	                                        </tr>
	                                    </table>
	                                    </td>
	                                    </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
				<?php

				if ( get_post_status() == 'future' ) {
					$date_time = get_the_date('F j, Y') . ' ' . get_the_time('H:i:s');
					$embargo_lift = date('F j, Y \a\t g:i A', strtotime($date_time . '+ 1 hour'));
				    echo '<p class="embargo-notice">This article is embargoed until ' . $embargo_lift . ' EST.</p>';
				}
				
				the_title('<h1 style="display:block;font-family:Georgia;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">', '</h1>');
				
				if(has_excerpt()):
					echo '<p style="font-size:16px;color:#787878;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">' . get_the_excerpt() . '</p>';
				endif;

				echo '<p style="margin:0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">';

				if( have_rows('article_author') ):
				$author = array();
					while ( have_rows('article_author') ) : the_row();
						if(get_sub_field('custom_author')) {
							$author[] = get_sub_field('name');
						} elseif(get_sub_field('author')) {
				        	$wp_author = get_sub_field('author');
							$user_id = $wp_author['ID'];
							$author[] = get_the_author_meta( 'display_name', $user_id);
						}
					endwhile;

					switch (count($author)) {
					    case 0:
					        $result = '';
					        break;
					    case 1:
					        $result = 'by ' . reset($author);
					        break;
					    default:
					        $last = array_pop($author);
					        $result = 'by ' . implode(', ', $author) . ' & ' . $last;
					        break;
					}
        			echo $result;
        		endif;
				
				echo '</p>';

				echo '<p style="margin-bottom:15px;margin-top:0;">' . get_the_date() . '</p>';

				if( get_field('audio') ) { ?>
					<p><strong>Article audio:</strong> <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
				<?php }

				if(has_post_thumbnail()) {
					the_post_thumbnail('large');
					$creditID = get_post_thumbnail_id();
					$creditName = esc_html( get_post_meta( $creditID, 'image_credit', true ) );
					$credit = '';
					if (!empty($creditName)) {
						$credit = '<span style="font-family:Arial,sans-serif;font-size:11px;text-transform:uppercase;text-align:right;margin:0 4px 3px 15px;color:#909090;float:right;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">' . $creditName . '</span>';
					}
					echo $credit;
					$post_thumbnail_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
					if(!empty($post_thumbnail_caption)) {
						echo '<p style="background:#F5F5F5;margin:0;padding:10px;line-height:140%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">' . $post_thumbnail_caption . '</p>';
					}
				} ?>

			<?php echo $email_content; ?>

			<?php if(get_field('boilerplate')) { ?>
				<div class="boilerplate">
					<?php the_field('boilerplate'); ?>
				</div>
			<?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                Washington University School of Medicine in St. Louis<br>Office of Medical Public Affairs (314) 286-0100 <a href="https://medicine.wustl.edu">medicine.wustl.edu</a><br>Affiliated with Barnes-Jewish Hospital and St. Louis Children's Hospital, which are members of BJC HealthCare.
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
<?php
		endwhile;
	endif;
?>