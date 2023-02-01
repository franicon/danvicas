<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Email verification</title> -->
    <style type="text/css">
        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }
    </style>
</head>

<body style="margin: 0;background-color: #f6f8fc;font-family: sans-serif;">
<!-- HEADER LOGO SECTION -->
<table width="100%">
    <tr>
        <td style="background-color: #5192ef;padding: 19px 0 17px; text-align: center;">
            <div border="0" style="vertical-align: middle; font-size: 30px; color: #ffffff;" width="110">Danvicas</div>
        </td>
    </tr>
</table>
<!-- END OF HEADER LOGO SECTION -->
<center style="width: 100%;max-width: 600px; table-layout: fixed;padding-bottom: 60px; margin: 40px auto;">
    <!-- MAIN PAGE -->
    <table width="100%"
           style="background-color: #ffffff; margin: 0 auto; width: 100%; max-width: 97%; border-spacing: 0; color: #2c293b; border: 1px solid #e5e8f0; border-spacing: 0;">

        <!-- PAGE CONTENT -->
        <tr>
            <td style="padding: 20px 20px 15px;background: #fff;">
                <table width="100%">
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-weight: 600; font-size: 20px; line-height: 25px;">Quotation Request Mail</p>
                        </td>
                    </tr>
                </table>
                <table width="100%" style="font-size: 11px;line-height: 18px;">
                    <tr>
                        <td>
                            <p style="padding: 5px 0 0;">Hello <strong>Danvicas</strong></p>
                            <p>I am requesting for quotation for the service with the details below: .</p>
                        </td>
                    </tr>
                </table>
                <!-- LISTED ITEMS -->
                <table width="100%" style="font-size: 11px;line-height: 18px;">
                    <tr>
                        <td>
                            <p style="padding: 5px 0 0; text-transform: uppercase; font-size: 10px;"><strong>Service
                                    information</strong></p>
                            <table style="width: 60%;min-width: 320px;border-spacing: 0 10px;">
                                <tr>
                                    <td style="font-weight: 500;">Full Name:</td>
                                    <td style="text-align: right;">{{$mailData['first_name']}} {{$mailData['last_name']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 500;">Email Address</td>
                                    <td style="text-align: right;">{{$mailData['email']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 500;">Phone Number</td>
                                    <td style="text-align: right;">{{$mailData['number']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 500;">Project Title</td>
                                    <td style="text-align: right;">{{$mailData['project_title']}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table width="100%" style="font-size: 11px;line-height: 18px;">
                    <tr>
                        <p style="font-weight: 500; font-size: 11px;">ABOUT PROJECT:</p>
                        <td style="text-align: justify;">{{$mailData['about_project']}}</td>
                    </tr>
                </table>
                <table width="100%" style="font-size: 11px;line-height: 18px;">
                    <tr>
                        <p style="font-weight: 500; font-size: 11px;">ABOUT PERSON/COMPANY</p>
                        <td style="text-align: justify;">{{$mailData['about_company']}}</td>
                    </tr>
                </table>
                <table width="100%" style="font-size: 11px;line-height: 18px;">
                    <tr>
                        <td>
                            <p style="padding-top: 10px;text-align: center; font-weight: bold;">Thank you! Looking forward to your response</p>
                        </td>
                    </tr>
                </table>
                <!-- BORDER -->
            </td>
        </tr>
        <!-- END OF PAGE CONTENT -->
    </table>
    <!-- END OF MAIN PAGE -->
</center>

</body>

</html>
