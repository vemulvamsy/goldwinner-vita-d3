<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Wordpress
 * @subpackage Base
 * @since  Base v1.0
 */

?>



</div><!-- end of body block -->

<!-- Footer -->
<footer>
	<div class="container">
		<div class="margin-top-30 margin-bottom-20 margin-bottom-footer-min">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="footer-data" >
						<div id="social-links" align="center">
							<a href="https://www.facebook.com/Gold-Winner-1269297709747345/" id="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/fb.png"  class="social" alt="facebook" title="facebook" /></a>
							<a href="https://www.youtube.com/user/kaleesuwari" id="yt" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/yt.png"  class="social" alt="youtube" title="youtube" /></a>
							<a href="http://kaleesuwari.com/" id="yt" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/internet.png"  class="social" alt="brand" title="brand" /></a>
						</div>
						<p class="small center-small text-center large-show"> <a href="http://kaleesuwari.com/" target="_blank">Kaleesuwari Refineries Pvt. Ltd.</a> &copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
						<p class="small center-small text-center small-show"> <a href="http://kaleesuwari.com/" target="_blank">Kaleesuwari Refineries Pvt. Ltd.</a> &copy; <?php echo date('Y'); ?> <br> All Rights Reserved.</p>
						<p class=" small text-center text-bold center-small">Customer Care : 1800 3000 3999 </p>
						<p class=" small text-center text-bold center-small">Developed by <a href="http://digitallyinspiredmedia.com/" target="_blank">Digitally Inspired Media</a></p>
					</div>
				</div>
			</div><!-- end of row-->
		</div><!-- end of margins -->
	</div><!-- end of container -->
</footer>
<!-- Footer -->

<!-- this is code is for header and menu resize -->
<script>
showsubmit();
$("#submit_but").hide();
$('#user_phone_v').keypress(function (e) {
var mobnumlen=$("#user_phone_v").val().length;
    var regex = new RegExp("^[0-9-]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
   showsubmit();
   
   //var key = event.keyCode || event.charCode;
    //if( key == 8 || key == 46 )
     //   return true;
  if(mobnumlen<10){
    $("#mob_err_v").html("Please enter valid mobile number");
  }
  else{
    $("#mob_err_v").html(""); 
  }
    if (regex.test(str) && mobnumlen<10 || e.keyCode === 13 || e.keyCode === 8 || e.keyCode === 46 || e.keyCode === 37|| e.keyCode === 38|| e.keyCode === 39|| e.keyCode === 40) {
        return true;
    }
    else{
      e.preventDefault();
      return false;
    }

    
});
$('#user_name_v').keydown(function (e) {
  //alert("name");
  showsubmit();
});
$('#user_email_v').keydown(function (e) {
  //alert("email");
  showsubmit();
});
$('#user_addr_v').keydown(function (e) {
  //alert("email");
  showsubmit();
});
$( "#user_name_v" ).blur(function() {
  showsubmit();
});
$( "#user_email_v" ).blur(function() {
  showsubmit();
});
$( "#user_phone_v" ).blur(function() {
  showsubmit();
});
$( "#user_addr_v" ).blur(function() {
  showsubmit();
});
function showsubmit(){
  var mobnumlen=$("#user_phone_v").val().length;
  var usernames=$("#user_name_v").val().length;
  var useremails=$("#user_email_v").val();
  var useraddr=$("#user_addr_v").val();

  if((mobnumlen==9 || mobnumlen==10) && usernames!=0 && useremails != "" && validemail(useremails) && useraddr!="" && useraddr.length>5){
    //alert("show_but");
    $("#mob_err_v").html("");
    $("#name_err_v").html("");
    $("#email_err_v").html(""); 
    $("#addr_err_v").html("");  
    $("#submit_but").show();

  }
  else{
    if(useraddr == "" && useraddr.length <5){
      $("#addr_err_v").html("Please enter your address");
    }
    else{
      $("#addr_err_v").html("");
    }

    if(mobnumlen < 10){
      $("#mob_err_v").html("Please enter valid mobile number");
    }
    else{
      $("#mob_err_v").html(""); 
    }

    if(usernames == 0){
      $("#name_err_v").html("Please enter your name");
    }
    else{
      $("#name_err_v").html("");
    }
    
    if(useremails.length == 0 || !validemail(useremails)){
      $("#email_err_v").html("Please enter valid email id");
    }
    else{
      $("#email_err_v").html(""); 
    }
    //alert("hide_but");
    $("#submit_but").hide();
  }
}
function validemail(email){
  var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
  if (reg.test(email)){
    return true; 
  }
  else{
    $("#email_err_v").html("Please enter valid email id");
    return false;
  }
}
</script
<?php wp_footer(); ?>
</body>
</html>
