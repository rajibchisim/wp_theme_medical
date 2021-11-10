<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Demo email</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        /* Google font import Lato */
        @import url('https://fonts.googleapis.com/css?family=Lato:400,700&display=swap');

        /* Outlook link fix */
        #outlook a {
            padding: 0;
        }

        /* Hotmail background & line height fixes */
        .ExternalClass {
            width: 100% !important;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,

        /* Image borders & formatting */
        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        a img {
            border: none;
        }

        /* Re-style iPhone automatic links (eg. phone numbers) */
        .appleLinksGrey a {
            color: #919191 !important;
            text-decoration: none !important;
        }

        /* Hotmail symbol fix for mobile devices */
        .ExternalClass img[class^=Emoji] {
            width: 10px !important;
            height: 10px !important;
            display: inline !important;
        }

        /* Button hover colour change */
        .CTA:hover {
            background-color: #5FDBC4 !important;
        }


        @media screen and (max-width:640px) {
            .mobilefullwidth {
                width: 100% !important;
                height: auto !important;
            }

            .logo {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .h1 {
                font-size: 36px !important;
                line-height: 48px !important;
                padding-right: 30px !important;
                padding-left: 30px !important;
                padding-top: 30px !important;
            }

            .h2 {
                font-size: 18px !important;
                line-height: 27px !important;
                padding-right: 30px !important;
                padding-left: 30px !important;
            }

            .p {
                font-size: 16px !important;
                line-height: 28px !important;
                padding-left: 30px !important;
                padding-right: 30px !important;
                padding-bottom: 30px !important;
            }

            .CTA_wrap {
                padding-left: 30px !important;
                padding-right: 30px !important;
                padding-bottom: 30px !important;
            }

            .footer {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .number_wrap {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .unsubscribe {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body style="padding:0; margin:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:100%; background-color:#e8e8e8; font-family: 'Lato', sans-serif; font-size:16px; line-height:24px; color:#919191">

    <!--[if mso]>
	<style type="text/css">
		body, table, td {font-family: Arial, Helvetica, sans-serif !important;}
	</style>
<![endif]-->



    <!-- // FULL EMAIL -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>

            <!-- // LEFT SPACER CELL *** MUST HAVE A BACKGROUND COLOUR -->
            <td bgcolor="#EBEBEB" style="font-size:0px">&zwnj;</td>
            <!-- LEFT SPACER CELL // -->

            <!-- // MAIN CONTENT CELL -->
            <td align="center" bgcolor="#EBEBEB" width="600" style="padding-top: 16px; padding-bottom: 16px;">

                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="padding: 16px;">

                    <tbody>



                        <!-- START OF CONTENT -->


                        <tr width="100%">
                            <td width="100%">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr width="100%">
                                        <td width="100%" bgcolor="#0cb8b6" align="center">
                                            <img src="http://rajibchisim.com/statics/email/medilab/logo.png" alt="logo">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 20px; font-weight: 700; padding-top: 16px; padding-left: 16px; padding-right: 16px;">
                                            Hello, <?php echo $name ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 16px; padding-left: 16px; padding-right: 16px;">
                                            Thank you for visiting my site. This email is sending from a demo
                                            WordPress site that you are visited and requested for this demo email.
                                            Request was submitted via WordPress ajax call. Then processed by
                                            WordPress mailer.<br><br>
                                            <span style="font-style: italic; font-weight: 600;">This is an example that
                                                you can deliver
                                                newsletter style emails to your
                                                visitors or your site members.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 16px; padding-left: 16px; padding-right: 16px;">
                                            For reference, You submitted form with below details:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 16px; padding-left: 16px; padding-right: 16px; color:#fff">
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td bgcolor="#29302E" style="padding-left: 32px; padding-right: 32px; padding-top: 32px; font-style: italic;">
                                                        Subject: <?php echo $subject ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#29302E" style="padding-left: 32px; padding-right: 32px; padding-bottom: 32px; font-style: italic;">
                                                        Message: <?php echo $message ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 16px;"></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#1C4A5A" style="height: 48px; padding-left: 16px; padding-right: 16px; color: #ddd">
                                            Thank you : Rajib
                                            chisim | <a style="text-decoration: none; color:#ddd">rajibchisim@gmail.com</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>



                        <!-- END OF CONTENT -->



                    </tbody>
                </table>

            </td>
            <!-- // MAIN CONTENT CELL -->

            <!-- // RIGHT SPACER CELL *** MUST HAVE A BACKGROUND COLOUR -->
            <td bgcolor="#EBEBEB" style="font-size:0px">&zwnj;</td>
            <!-- RIGHT SPACER CELL // -->

        </tr>
    </table>
    <!-- FULL EMAIL // -->
</body>

</html>