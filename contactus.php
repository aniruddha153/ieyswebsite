<?php 
  $TITLE = "IEYS 2013 - India Emerge Youth Summit 2013 - Realize. Reflect. Rediscover.";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include("controller/head_tag.php"); ?> <!--Head Tag included-->
</head>

<body>
<div id="wrapper">

<!--header & navigation-->
<?php include("controller/header.php"); ?> <!--Head Tag included-->
<!--end header & navigation-->

<!--main_body open-->
<div id="main_body">
	
    <!--body_left open-->
    <div id="body_left">
 
	 <!-- query section starts here -->
    	<div class="maintitle">
        	Contact Us
        </div>
	 <div id="query_div">
     <p>If you have a query, write to us using the form below and we'll get back to you soon.</p>
	 <form name="query_form" id="query_form" class="query_form" action="contactemail.php" method="post">
	 <table class="contactform_table tabletext" >
	<tr><td colspan="2">	 <div id="query_res" class="queryresult"></div></tr>
	 <tr>
	 <td class="contactform_table_left">Your Email Address:</td>
	 <td><input type="email" name="fromemail" id="mailid" class="query_field"></td>
	 </tr>
	 
	 <tr>
	 <td>Email Subject:</td>
	 <td><input type="text" name="sub" id="sub" class="query_field"></td>
	 </tr>
	 
	 <tr>
	 <td colspan="2">Your Query:<br />
	 <textarea name="msg" id="ques" class="query_msgbody" placeholder="Max word limit: 500 words"></textarea></td>
	 </tr>
	 
	 <tr>
	 <td colspan="2">
	 <center><input type="submit" value="Send Email" name="query_sub" id="query_sub" class="sendemail_button"></center></td>
	 </tr>
	 
	 
	 </table>
	 </form>
	 </div>
	 <!-- query section ends here -->


    </div><!--body_left close-->
    
    <!--body_right open-->
	<?php include("controller/body_right.php"); ?> 
	<!--body_right close-->

</div>
<!--main_body close-->
<div class="clear"></div>

<!--footer open-->
<?php include("controller/footer.php"); ?>
<!--footer close-->


</div> <!--wrapper-->

</body>
</html>