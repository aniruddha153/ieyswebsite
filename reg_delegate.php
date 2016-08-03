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
                <center><table cellspacing="40px">
                	<tr>
                        <td>
                        <div id="delegatereg_button">
                            <a href="" rel="#internalreg_popup">Internal Registrations<br />(VIT - Vellore Campus)</a>
                        </div>
                        <td>
                        <div id="delegatereg_button">
                            <a href="" rel="#externalreg_popup">External<br />Registrations</a>
                        </div>
                    </tr>
                </table>
                </center>
                <!-- OVERLAY InternalReg open-->
                <div class="apple_overlay" id="internalreg_popup">
                    <div id="speakerpopup_title">Internal Registrations (VIT - Vellore Campus)</div>
                    <div style="padding:15px; font-family: Verdana, Geneva, sans-serif; font-size:15px; color:#333; text-align: justify;">
                        <p>For students of VIT Univeristy - Vellore Campus, Registration Desks have been set up at various locations across the campus.<br />Please visit one of these desks to register for IEYS 2013.</p>
                    <p>Desk locations include: 
                        <ul>
                            <li>SJT</li>
                            <li>TT Main Entrance</li>
                            <li>Hexagon</li>
                            <li>Control Room</li>
                        </ul>
                    </p>
                    </div>                                    
                    <div class="clear"></div>
                </div>
                <!-- OVERLAY InternalReg close-->
                <!-- OVERLAY InternalReg open-->
                <div class="apple_overlay" id="externalreg_popup">
                    <div id="speakerpopup_title">External Registrations (Non-VITians)</div>
                    <div style="padding:15px; font-family: Verdana, Geneva, sans-serif; font-size:15px; color:#333; text-align: justify;">
                        <p>External Registrations are yet to be opened, subject to confirmation. Please keep checking this space for updates.<br /><br />Alternatively, like our Official Facebook page for announcements about external registrations: <a href="http://www.facebook.com/ieysvit" target="_new">http://www.facebook.com/ieysvit</a></p>
                    </div>                                    
                    <div class="clear"></div>
                </div>
                <!-- OVERLAY InternalReg close-->
                
                <div id="reg_poster">
                	<img src="images/regposter.png" width="1000px"/>
                </div>

 
    </div><!--body_left close-->
    
</div>
<!--main_body close-->
<div class="clear"></div>

<!--credit note open-->
<div id="credit_note">
	<hr />
	<p>The India Emerge Youth Summit 2013 is an initiative created and organized <br />by Toastmasters VIT, a Toastmasters International chapter of VIT University.</p>
    	<p><img src="images/logo/tmivitlogo.png" width="90" height="90" /></p>
</div><!--credit note close-->


<!--footer open-->
<?php include("controller/footer.php"); ?>
<!--footer close-->


</div> <!--wrapper-->

</body>
</html>