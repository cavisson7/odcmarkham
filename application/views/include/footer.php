
       <!-- mode Link -->
       <!-- <a href="#" class="cta-link element-animate" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a> -->
    <!-- END cta-link -->


<footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-rocket" aria-hidden="true"></i> Services</h3>
            <ul class="footer-link list-unstyled">
              <li><a  href="<?php echo site_url("Xray/")?>">Xray </a></li>
              <li><a  href="<?php echo site_url("Ultrasound/")?>">Ultrasound</a></li>
              <li><a  href="<?php echo site_url("Vascular/")?>">Vascular</a></li>
              <li><a  href="<?php echo site_url("BdmService/")?>">BdmService</a></li>
            </ul>
          </div>
          
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-bars" aria-hidden="true"></i> Menus</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="<?php echo site_url("Home/");?>">Home</a></li>
              <li><a href="<?php echo site_url("About/");?>">About Us</a></li>
              <li><a href="<?php echo site_url("Service/");?>">Services</a></li>
              <li><a href="<?php echo site_url("Location/");?>">Location</a></li>
              <li><a href="<?php echo site_url("Contact/");?>">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h3>
            <p ><i class="fa fa-address-card" aria-hidden="true"></i>  6633, Highway 7 East, <br> Suite – 005, Markham, ON, L3P 7P2</p>

          </div>

          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-address-book-o" aria-hidden="true"></i> Contact</h3>
            <h4 class="text-uppercase mb-3 h6 text-white">Email /Phone </h5>
            <p ><a href="mailto:odc.markham@gmail.com "><i class="fa fa-envelope" aria-hidden="true"></i> odc.markham@gmail.com </a></p>
   
           
            <p> <i class="fa fa-phone" aria-hidden="true"></i> Call us at : 905-294-4880</p>
            <p><i class="fa fa-fax" aria-hidden="true"></i> Fax : 905-472-6629 </p>
           
           

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p>&copy; 2020 odcmarkham.com Designed &amp; Developed by
            <a href="http://www.codensity.in/" target="_blank" class="cta-btn"> Codensity</a>
             </p>
           
           
            
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>



    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>