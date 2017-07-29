<?php
$homepage = file_get_contents('https://delectable-passbook.000webhostapp.com/sms/android2messages.html');
//echo $homepage;
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<!-- Way2sms API - Found More Scripts on WWW.Howi.IN -->
  <head>
    <title>OTP verification system.</title>
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="Content-Language" content="en-us" />
    <meta http-equiv="content-type" content="Text/html; charset=UTF-8" />
    <meta name="charset" content="UTF-8" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="Index,follow" />
    <meta name="revisit-after" content="3 Day" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <!-- Way2sms API - Found More Scripts on WWW.Howi.IN -->
  <body style="max-width:400px">
    <div class="w3-container w3-red">
      <h6>OTP verification system.</h6>
    </div>
    <div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
      <center>
        <!-- Way2sms API - Found More Scripts on WWW.Howi.IN -->
      </center>
      <div class="content">
        <form action="sendsms.php" method="post" id="myForm">
      
          <label>Send OTP to:</label>
          <input type="text" class="w3-input" name="phone" value="" />
      
       <label>Please be patient for a duration of 2-3 minutes to recieve OTP!</label>
          <input type="hidden" class="w3-input" name="message" value="Wellcome! Your otp is <?php echo $homepage; ?>" />
</br>
 <input type="submit"   style="margin-left: 35%" class="w3-btn w3-white w3-border w3-round" value="Send" id="submit" />
  <input type="hidden"  name="user" value="9449017699" />
         <input type="hidden"  name="pass" value="12345" />
        </form>
  
        <!-- Way2sms API - Found More Scripts on WWW.Howi.IN -->
        <br>
      </div>
      <p><span class="w3-tag w3-blue" id="ack">Message Status</span></p>
    </div>

    <footer class="w3-container w3-red">
         <label>@SIDCORP.Limited</label>
    </footer>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="my_script.js"></script>