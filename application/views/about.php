
<!-- include base url -->
<title>ODCMARKHAM: About Us </title>
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
              <h1>About Us</h1>
              <p>Serving Humanity With Marvels Of Technology.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


  

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 element-animate">
            <img src="<?php echo base_url('assets/img/img_1.jpg'); ?>" class="img-fluid mb-4" alt="Image placeholder" style="width:100%;height:37em;">

          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            <h2 class="text-uppercase mb-4">Serving Humanity With Marvels Of Technology</h2>
            <p class="lead">Some of our differentiating features of ODC are</p>
            <p class="mb-5"  style="text-align: justify";>
            
            Ontario Diagnostic Centers is one of the most capable places to exhibit the strength of humanity and life bodies in each and every action and service.
            The vision has been remarkable and completely in accordance with the healthcare needs of the society in the current world. 
            Complete care and concern for the society’s health is what we focus upon and act on it with the help of modern technological marvels.
            In the field of medical imaging services, our mettle, experience and value is unmatchable and provides the best possible services to the people. 
            There are a lot of factors which make us different from the rest and make us superior to anybody in serving your medical imaging needs and specifications.
            Ontario Diagnostic Centres(ODC) provides X-ray, general ultrasound, Vascular Ultrasound in Markham.

            </p>
      
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Our Services</h2>
            <p class="mb-0 lead" style="text-align: justify";>
            Ontario Diagnostic Centers (ODC) - Markham provides X-Ray, Ultrasound, Vascular Ultrasound and Bone Mineral Density test services in Markham. 
            At our clinic we provide comprehensive care for our patients.
            </p>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
              <div class="media d-block media-custom text-center">
                <img src="<?php echo base_url('assets/img/xray.jpg'); ?>" alt="Image Placeholder" class="img-fluid" style="width:500px;height:300px;">
                <div class="media-body">
                  <h3 class="mt-0 text-black">X-ray</h3>
                  <p>
                  X-ray was discovered by Wilhelm Roentgen, a German scientist accidentally almost a century back. 
                  
                  </p>
                  <p><a href="<?php echo site_url("Xray/")?>" class="btn btn-primary">Read More</a></p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-center">
                <img src="<?php echo base_url('assets/img/Ultrasound-Banner.jpg'); ?>" alt="Image Placeholder" class="img-fluid" style="width:500px;height:300px;">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Ultrasound:</h3>
                  <p>Ontario Diagnostic Centres provides ultrasound services for the residents of Markham.
                  </p>
                  <p><a href="<?php echo site_url('Ultrasound/')?>" class="btn btn-primary">Read More</a></p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-center">
                <img src="<?php echo base_url('assets/img/Vascular_Ultrasound.jpg'); ?>" alt="Image Placeholder" class="img-fluid" style="width:500px;height:300px;">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Vascular Ultrasound:</h3>
                  <p  style="text-align: justify";>X-ray was discovered by Wilhelm Roentgen, a German scientist accidentally almost a century back.</p>
                  <p><a href="<?php echo site_url('Vascular/')?>" class="btn btn-primary">Read More</a></p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-center">
                <img src="<?php echo base_url('assets/img/BONE MINERAL DENSITY.jpg'); ?>" alt="Image Placeholder" class="img-fluid" style="width:500px;height:300px;">
                <div class="media-body">
                  <h3 class="mt-0 text-black">BONE MINERAL DENSITY (BMD):-</h3>
                  <p  style="text-align: justify";>X-ray was discovered by Wilhelm Roentgen, a German scientist accidentally almost a century back.</p>
                  <p><a href="<?php echo site_url('BdmService/')?>" class="btn btn-primary">Read More</a></p>
                </div>
              </div>
            </div>

      
          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->

    <!--start footer -->
    <?php $this->load->view('include/footer')?>
    <!-- END footer -->
    <?php $this->load->view('include/base'); ?>  
  </body>
