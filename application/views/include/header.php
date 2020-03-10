<header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
           
              <p class="mb-0">
                <a href="https://ash.veloximaging.net/" target="_blank" class="cta-btn">Physician Portal </a></p>
           
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
               <!-- <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Make an Appointment | <i class="fa fa-phone" aria-hidden="true" style="color:red;"></i>905-294-4880</a></p>-->
               <a href="tel:905-294-4880" class="cta-btn" ><i class="fa fa-phone" aria-hidden="true" style="color:red;"></i> 905-294-4880</a></p>
            </div>
            
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?php echo site_url("Home/")?>"> <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" class="img-fluid" style=" width:160px;height:40px;"><span></span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo site_url("Home/")?>">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("About/");?>">About Us</a>
              </li>

              <li class="nav-item dropdown">
            
               <a class="nav-link dropdown-toggle" href="<?php echo site_url("Service/")?> " id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo site_url("Xray/")?>">X-ray</a>
                  <a class="dropdown-item" href="<?php echo site_url('Ultrasound/')?>">Ultrasound</a>
                  <a class="dropdown-item" href="<?php echo site_url('Vascular/')?>">Vascular Ultrasound</a>
                  <a class="dropdown-item" href="<?php echo site_url('BdmService/')?>">BMD Services</a>
                  
                </div>  

              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Location/")?>">Location</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Contact')?>">Contact</a>
              </li>

              
            </ul>
          </div>
        </div>
      </nav>
    </header>