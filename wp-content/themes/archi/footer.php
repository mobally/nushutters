<?php
/**
 * The template for displaying the footer
 */
 global $archi_option;
?>
<?php
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/footers/footer-sidenav');
    }else{
?>

<!--- Contact------------------->

<div class="container-box rotated">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModall">Contact Us</button>
  <div class="overlay">
    <div class="text"></div>
  </div>
</div>
<div id="myModall" class="modal fade " data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body">

               <div role="form" class="wpcf7" id="wpcf7-f283-p256-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/contact/#wpcf7-f283-p256-o1" method="post" class="wpcf7-form" novalidate="novalidate" id='srv'>
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="283">
<input type="hidden" name="_wpcf7_version" value="5.0.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f283-p256-o1">
<input type="hidden" name="_wpcf7_container_post" value="256">
</div>
<div class="row ppupct">
<div class="col-md-12">

<div class="col-md-6 cl1"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name"></span> </div>
<div class="col-md-6"><span class="wpcf7-form-control-wrap email-453"><input type="email" name="email-453" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email"></span> </div>
<div class="col-md-6 cl1" ><span class="wpcf7-form-control-wrap tel-565"><input type="tel" name="tel-565" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Your Phone"></span></div>
<div class="col-md-6" ><span class="wpcf7-form-control-wrap text-283"><input type="text" name="text-283" value="" size="40" class="wpcf7-form-control wpcf7-text pname" id="propname" aria-invalid="false" placeholder="Property Name"></span></div>
</div>
<div class="col-md-12">
<div><span class="wpcf7-form-control-wrap text-283"><input type="text" name="text-283" value="" size="40" class="wpcf7-form-control wpcf7-text tmframe" id="tframe" aria-invalid="false" placeholder="Timeframe to start Interiors"></span></div>
<div><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="msg" aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea></span></div>
<div class="col-md-12" id="hw">
<h3>How did you get to know about us</h3>
<p><span class="wpcf7-form-control-wrap checkbox-257"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox cbxcls" id="cbx"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-257" value="facebook"><span class="wpcf7-list-item-label">facebook</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-257" value="Google"><span class="wpcf7-list-item-label">Google</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-257" value="Linkedin"><span class="wpcf7-list-item-label">Linkedin</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-257" value="Others"><span class="wpcf7-list-item-label">Others</span></label></span></span></span></p></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 app">
<span class="wpcf7-form-control-wrap text-407"><input type="text" name="text-407" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Please specify other source"></span></div>
<div class="col-md-12 sbtt">
<p id="submit"><input type="submit"  value="Submit Form" class="wpcf7-form-control wpcf7-submit btn btn-line"><span class="ajax-loader"></span></p>
</div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
            </div>
        </div>
    </div>
</div>

<!--- End ---->
	<!-- footer begin -->
  <footer>
    <div class="footer-links-web" id="myft">
                <ul class="list-inline list-unstyled text-uppercase">
                    <li class="text-left"><a href="http://localhost/nushutter/about/">About us</a></li>
                    <li><a href="http://localhost/nushutter/refer-a-friend/">Refer a Friend</a></li>
                    <li><a href="#">FAQ</a></li>
                                            <li><a href="http://localhost/nushutter/warranty/">Warranty</a></li>
                                        <li><a href="http://localhost/nushutter/contact">Contact US</a></li>
                </ul>
            </div>

    		  			<div class="main-footer">
    	            <div class="container">
    	                <div class="row">


  <div class="col-md-12 col-xs-12">
      <div id="text-5" class="widget widget_text">			<div class="textwidget"><div class="col-md-12">
  <div id="text-5" class="widget widget_text">
  <div class="textwidget">
  <div class="col-md-8 col-sm-12 col-xs-12">
  <div id="text-2" class="widget widget_text">
  <div class="textwidget">
  <div class="row">
  <div class="col-md-12 col-sm-12 tmv col-xs-12">
  <div class="col-md-11 col-sm-12 col-xs-12">NuSpace (earlier called Nushutter) was established in October of 2005 with the intention of creating stellar interior designs. One of our core ideologies at NuSpace is, we combine design, functionality and cutting-edge technology to give homeowners a stress-free home designing process by which they can make their home cosy, comfortable and stylish.
</div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-10 col-xs-12" id="sbft">
    <div class="subfooter ">
      <div class="container">
        <div class="row">
                        <div class="col-md-12 text-center">
              <div class="social-icons">
                <ul>
                  <ul>
                    <li><a target="_blank" href="https://www.facebook.com/NuSpaceBangalore/"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href=" https://twitter.com/NuSpaceinterior"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/nuspace_interiors/?hl=en"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/nuspaceinteriors/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://in.pinterest.com/NuSpace_Bengaluru/"><i class="fa fa-pinterest"></i></a></li>

                              </ul>
              </ul></div>
            </div>
                    </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4">
  <address>

                                  <span><strong>Phone:</strong>080-26670649</span><br>
   <span><strong>Ashish:<br>
  </strong>(Mob) 7619429346</span><p></p>
  <p><span><strong>Shruthi:<br>
  </strong>(Mob) 9945565826</span></p>
  <p><span><strong>Email:</strong><a href="mailto:nuspacebangalore@gmail.com">nuspacebangalore@gmail.com</a></span></p>
  </address>
  </div>
  </div>
  </div>
  </div>
  </div>
  		</div></div><!-- end col-lg-3 -->






    	                </div>
    	            </div>


    	        </div>
    		<a id="back-to-top" href="#" class="show"></a>
    	</footer>

</div><!-- #wrapper -->

<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript">
_linkedin_data_partner_id = "244195";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=244195&fmt=gif" />
</noscript>
</body>
</html>
