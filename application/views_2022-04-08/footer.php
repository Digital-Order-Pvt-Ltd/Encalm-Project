
<footer class="bg-blue">
    <div class="container">
      <div class="row">
          <div class="col-lg-2">
            <h6 class="text-primarys">BACK TO TOP</h6>
            <hr/>
           <a href="#top" class="back-to-top d-flex align-items-center justify-content-center active">
              <img src="<?=base_url()?>assets/image/plane.png" alt="encalm" width="74px" />
            </a>
            <div class="social-media">
            <span class="text-white">Follow Us :</span>
            <br/>
            <a class="social-icon facebook" target="blank" href="https://www.facebook.com/encalmindia"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a class="social-icon twitter" target="blank" href="https://twitter.com/EncalmIndia"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><a class="social-icon instagram" target="blank" href="https://www.instagram.com/encalmindia/"><i class="fa fa-instagram" aria-hidden="true"></i></a><a class="social-icon pinterest" target="blank" href="https://www.linkedin.com/company/encalmindia/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><a class="social-icon pinterest" target="blank" href="https://in.pinterest.com/encalmindia/"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
            </div>
         </div>
          <div class="col-lg-2">
             <h6 class="text-primarys">QUICK LINK</h6>
            <hr/>
            <ul class="foots text-white">
              <li><a class="text-white" href="<?=base_url()?>contact"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a></li>
              <li><a class="text-white"href="<?=base_url()?>privacy"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy</a></li>
              <li><a class="text-white"href="<?=base_url()?>termsandconditions"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms And Conditions</a></li>
              <li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Press Room</a></li>
              <li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Career</a></li>
              <!--li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> CSR</a></li-->
              <li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3">
              <h6 class="text-primarys">SUBSCRIBE TO OUR NEWSLETTER</h6>
              <hr/>
              
              <small class="text-white">Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox</small>
              <form class="bg-main-news">
                
                <input type="email" name="" class="form-control mt-3" placeholder="Enter Your Email" />
                <button class="mt-3 btn-main" type="button" id="subscribe">Subscribe Now</button>
              </form>
          </div>
          <div class="col-lg-5">
            <h6 class="text-primarys">ADDRESS</h6>
              <hr/>
              <div class="footer-info">
                  <h6 class="text-white">ENCALM HOSPITALITY PVT. LTD.</h6>
                  <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                    <div class="col-md-12 mt-2">
                      <p class="text-white"><strong><span class="color-main"><i class="fa fa-map-marker" aria-hidden="true"></i></span> </strong> 7th Floor, TAG Tower, Plot No. 17-18, Phase 4, Udyog Vihar, Gurugram – 122015, Haryana, India</p>
                      
                    </div>
                    
                  </div>
                </div>
               <p><span class="me-2 color-main"><i class="fa fa-envelope" aria-hidden="true"></i></span> <a class="text-white" href="mailto:guest.services@encalm.com">guest.services@encalm.com</a><span class="mob-hidden"> &nbsp; | &nbsp; </span><small class="mob-foot-phone"><span class="me-2 color-main"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span> <a class="text-white" href="tel:+919289366950">+91-92893 66950</a><small></p>
               
         
          </div>
      </div>
    </div>
</footer>
<div class="blacks-bg">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
        <div class="copyright text-white"> © Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
    </div>
    
  </div>
</div>
</div>
<!-- Vendor JS Files --> 
<script src="<?=base_url()?>assets/js/jquery-2.2.4.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/aos/aos.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script> 
<!-- Template Main JS File --> 
<script src="<?=base_url()?>assets/js/encalm-popper.min.js"></script>
<script src="<?=base_url()?>assets/js/encalm-jquery.sticky.js"></script>
<script src="<?=base_url()?>assets/js/encalm-main.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $('#subscribe').click(function() {
      var e = $(this).siblings('input');
      $.ajax({
          type: 'POST',
          url: "<?=base_url('index/newsletter')?>",
          data: {'email':e.val()},
          dataType: "html",
            beforeSend : function(data){
                },
            success: function(data) { 
              alert('Thank you for your interest.');
              e.val('');
                        $('#loader').hide();
              return true;
            },
            error:function(data)
            {
              if(data.status==0){
                alert("There is no internet connection found. Please reconnect and try again!");
                return false;
              }
              if(data.status>0){
                alert(data.responseText);
                var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
                OpenWindow.document.write(data.responseText);
                return false;
                
              }
            }
        });
    });
  });
</script>
</body>
</html>