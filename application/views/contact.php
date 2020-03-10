

<title>ODCMARKHAM: Contact Us </title>
<!-- include base url -->

<?php $this->load->view('include/base'); ?>
  <body>
    
    <!-- START HEADER -->
   
    <?php $this->load->view('include/header'); ?>
    <!-- END header -->
    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url('assets/img/slider-2.jpg'); ?>">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact Us</h1>
              <p>
              
              <h4 style="color:white;">To Book an appointment, take a picture of your Requisition and email it to odc.markham@gmail.com <br>
              Or call us at 905-294-4880</h4>

              
              </p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
    
      <div class="container">
      <h4 class="text-uppercase" style="color:blue;"><i class="fa fa-question-circle" aria-hidden="true"></i>  Send Your Query</h4>
      <hr>
        <div class="row">
        
          <div class="col-md-6 mb-5 element-animate">

          <?php if (validation_errors() != false) { ?>
                            <div class="alert alert-danger"> <strong><?php echo validation_errors(); ?></strong> </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('successMessage')) { ?>
                            <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('successMessage'); ?></strong> </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('errorMessage')) { ?>
                            <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('errorMessage'); ?></strong> </div>
                        <?php } ?>



               <?php echo form_open(site_url('Contact/sendMessage'), ['id' => 'Contact']); ?>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name"> Name</label>
                  <input type="text" class="form-control form-control-lg"name="name" placeholder="Enter Your Name"  value="<?php echo set_value('name'); ?>">
                </div>
                <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  class="form-control form-control-lg" placeholder="Enter Email id :" value="<?php echo set_value('email'); ?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" name="mobile"  class="form-control form-control-lg" placeholder="Enter phone Number" value="<?php echo set_value('mobile'); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject"  class="form-control form-control-lg" placeholder="Enter Your Query Subject" value="<?php echo set_value('subject'); ?>">
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" name="message" class="form-control form-control-lg" placeholder="Write Your Query..." cols="30" rows="8"><?php echo set_value('message'); ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3"><i class="fa fa-address-book-o" aria-hidden="true"></i> Address</h5>
            <p class="mb-5">  6633, Highway 7 East, <br> Suite – 005,
            <br> Markham, ON, L3P 7P2 <br> </p>
            
            <h5 class="text-uppercase mb-3">Email Us At</h5>

             <a href="mailto:odcmarkham@gmail.com"> <i class="fa fa-envelope" aria-hidden="true"></i> odc.markham@gmail.com</a></p>
            
            <h5 class="text-uppercase mb-3">CALL US</h5>

            <p class="mb-5"> Phone : Call at  <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:905-294-4880"> 905-294-4880</a></p>
            <p><i class="fa fa-fax" aria-hidden="true"></i> Fax : 905-472-6629 </p>
  

          </div>
        </div>
      </div>
    </section>


    <!--start footer -->
    <?php $this->load->view('include/footer')?>
    <!-- END footer -->


   

    <?php $this->load->view('include/base'); ?>  
  </body>
