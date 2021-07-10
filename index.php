<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test prova</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tab-slider.css">
    <!-- carousel style -->
    <link rel="stylesheet" href="css/splide.min.css">
    <!-- bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- carousel cdn-->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  </head> 
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
         <!-- logo -->
        <a class="navbar-brand" href="https://placeholder.com"><img src="https://via.placeholder.com/60" alt=""></a>

        <!-- hamburgher-menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- /hamburgher-menu -->

         <!-- navbar-right -->
         <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
            <div class="navbar-right">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                 <a class="nav-link ps-4" href="#">Ideas</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link ps-4" href="#">Expertise</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ps-4" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ps-4" href="#">Insights</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ps-4" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ps-4" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ps-4 pe-4" href="#">Careers</a>
                </li>
             </ul>
            </div>
         </div>
         <!-- /navbar-right -->         
        
      </div>
  </nav>
   <!-- hero  -->
  <section class="container-fluid text-center">
      <div class="hero">
         <div class="container-fluid p-0 position-relative bg">
            <img src="https://source.unsplash.com/random/1900x800" alt="">
            <div class="container title text-white position-absolute bottom-0 start-50 translate-middle-x">
               <h1 class="text-uppercase">Lorem ipsum dolor sit</h1>
               <h3>Hic placeat doloremque laboriosam</h3>
               <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat doloremque laboriosam labore, quasi laborum atque minus deserunt eum. Aut omnis doloribus quasi at ab beatae nihil molestias nostrum fugiat?</p>
            </div>
         </div>
      </div>
  </section>
  <!-- /hero  -->
  <main class="container">
      <div class="container p-5">
         <div class="row">
            <div class="col-sm-8 p-5">
               <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat doloremque laboriosam labore, quasi laborum atque minus deserunt eum.</h2>
            </div>
            <div class="col-sm-4 text-end d-flex flex-column justify-content-end">
               <p class="fs-12"><span class="fw-bold fs-6">Lorem Ipsum</span><br>Dolor sit amet consectetur adipisicing elit</p>
            </div>
         </div>
      </div> 
      <div class="container">
         <div class="row">
            <div class="col-xl-6">
               <div class="row mg-r-10">
                  <a href="#" class=" card-1 p-4  mg-r-20 text-decoration-none text-body">
                     <h3>Lorem Ipsum</h3>
                     <p class="text-uppercase fw-bold ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>  
                     <div class="text-end">

                        <img class="iphone-1" src="img/iphone.png" alt="iphone">          
                     </div>
                  </a>
               </div>
            </div>
                       
            <div class="col-xl-6">
               <div class="row">
                  <a href="#" class="col-sm-12 col-md-12 p-4 card-2 text-decoration-none text-body mg-b-20">
                     <div class="col-sm-12 d-flex justify-content-between">
                        <div class="">
                           <h3>Lorem Ipsum</h3>
                           <p class="text-uppercase ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                        </div>
                        <div class="text-end">
                           <img src="img/iphone.png" alt="iphone">
                        </div>
                     </div> 
                  </a>
               </div>
               <div class="row special">
                  <a href="#" class="col-sm-12 col-md-6 card-3 p-4 text-decoration-none text-body mg-r-20 ">
                     <div class="row">
                        <div>
                           <h3>Lorem Ipsum</h3>
                           <p class="text-uppercase ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                        </div>
                        <div class="text-end">
                           <img src="img/iphone.png" alt="iphone">
                        </div>
                     </div>
                  </a>
                  <a href="#" class="col-sm-12 col-md-6 card-4 p-4 text-decoration-none text-body">
                     <div class="row">
                        <div>
                           <h3>Lorem Ipsum</h3>
                           <p class="text-uppercase ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                        </div>
                        <div class="text-end ">
                           <img class="wd-30" src="img/iphone.png" alt="iphone">
                        </div>
                     </div>
                  </a>
               </div>
   
            </div>
         </div>
      </div>       
      <div class="container">
         <div class="col-sm-12 text-center">
            <h1 class="text-uppercase p-5">Uso creativo dello spazio.</h1>
         </div>
         <!-- tab-slider  -->
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="tabs">
                     <div class="tab-header">
                       <div class="active">
                         <h6>5 Posti</h6>
                       </div>
                       <div>
                         <h6>3 Posti</h6>
                       </div>
                       <div>
                         <h6>2 Posti</h6>
                       </div>   
                     </div>
                     <div class="tab-indicator"></div>
                     <div class="tab-body">
                       <div class="active">
                         <h2>450 litri</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error neque saepe commodi blanditiis fugiat nisi aliquam ratione porro quibusdam in, eveniet accusantium cumque. Dolore officia reprehenderit perferendis quod libero omnis.</p>
                       </div>
                       <div>
                         <h2>3 porte</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt quaerat ut ducimus?</p>
                       </div>
                       <div>
                         <h2>Full optional</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt quaerat ut ducimus?</p>
                       </div>
                       <div>
                         <h2>This is contact section</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt quaerat ut ducimus?</p>
                       </div>
                       <img src="img/mini.jpg" alt="foto mini">
                     </div>
                   </div>
               </div>
            </div>
         </div>
         <!-- tab-slider  -->
      </div>  

      <div class="container ptb-60">
        <div class="col-sm-12">
          <div class="col-sm-12">
               <h3 class="pb-4 fw-bold">Come ti supportiamo</h3>
          </div>
          <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-4">
              <h5 class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat doloremque laboriosam labore, quasi laborum atque minudeserunt eum. Aut omnis doloribus quasi at ab beatae nihil molestias nostrum fugiat?</p>
              <a class="fs-12 cl-blck fw-bold" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <h5 class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat doloremque laboriosam labore, quasi laborum atque minudeserunt eum.</p>
              <a class="fs-12 cl-blck fw-bold" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
            </div>
            
            <!-- form  -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <form id="my-form" action="" method="POST" >
                <h5>Aggiungi le date per conoscere i prezzi</h5>   
                <div class="elem-group inlined">
                  <label for="checkin-date">Check-in</label>
                  <input type="date" id="checkin-date" name="checkin" value="<?php date('Y-m-d'); ?>" required>
                </div>
                <div class="elem-group inlined">
                  <label for="checkout-date">Check-out</label>
                  <input type="date" id="checkout-date" name="checkout" value="<?php date('Y-m-d'); ?>" required>
                </div>
                <div class="elem-group">
                  <label for="room-selection">Numero di ospiti</label>
                  <select type="select" id="room-selection" name="numerodiospiti" required>
                    <option value="">Seleziona il numero di ospiti</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                                                
                <button id="submit" type="submit" name="submit" value="Send">Controlla la disponibilità</button>
              </form>             
              <!--alert messages start-->
              <?php echo $alert; ?>
              <!--alert messages end-->
              <div id="my-form-status"></div>
                          
            </div>
            <!-- form  -->
          </div>
        </div>  
      </div> 

      <div class="container ptb-60 text-center">
         <h4 class="fw-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi mollitia provident nesciunt itaque fugiat <br> neque saepe eaque officiis? At cum sed explicabo natus?<br><span class="fw-bold">maiores quasi ab voluptatum, aut cupiditate.</span> </h4>
      </div>
  </main>

  <section>
      <!-- carousel -->
      <div class="container-fluid">
            <div class="container ptb-60">
               <div class="row ">   
                     <div class="splide">       
                        <div class="splide__track">
                           <ul class="splide__list list-inline inline-flex">
                              <li class="splide__slide ">
                                 <div class="splide__slide__container audi">
             
                                 </div>
                              </li>
                              <li class="splide__slide">
                                 <div class="splide__slide__container audi">
                      
                                 </div>
                              </li>  
                              <li class="splide__slide">
                                 <div class="splide__slide__container audi">
          
                                 </div>
                              </li>
                              <li class="splide__slide">
                                 <div class="splide__slide__container audi">
                
                                 </div>
                              </li> 
                              <li class="splide__slide">
                                 <div class="splide__slide__container audi">
                                 </div>
                              </li>
                              <li class="splide__slide">
                                 <div class="splide__slide__container audi">
                                 </div>
                              </li>                                       
                           </ul>
                        </div>
                        
                        <div class="splide__progress">
                           <div class="splide__progress__bar">
                           </div>
                        </div>
                     </div>               
               </div>
            </div>      
      </div>
      <!-- /carousel -->
   </section>

   <!-- footer  -->
   <footer>   
      <div class="container-fluid bg-black">
         <div class="container p-4">
            <div class="row">
               <div class="col-sm-3">
                  <h2 class="fw-bold cl-white">Bold.</h2>
               </div>
               <div class="col-sm-3">
                  <ul class="list-unstyled" >
                     <li><a class="cl-white text-decoration-none fw-bold" href="#">Contatti</a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12 " href="#">corso IX Maggio</a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12 " href="#">corso IX Maggio</a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12" href="#"><li>30124 Milano Italy</a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12" href="#">335214785></a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12" href="#">contatti@rossi.com</a></li>
                  </ul>
               </div>
               <div class="col-sm-3">
                  <ul class="list-unstyled" >
                     <li><a class="cl-white text-decoration-none fw-bold" href="#">Seguici</a></li>
                     <li><a class="cl-lgrey text-decoration-none fw-light fs-12 " href="#">Facebook</a></li>
                     <li class="pb-5"><a class="cl-lgrey text-decoration-none fw-light fs-12" href="#">Instagram</a></li>
                     <li><a class="cl-white fw-bold text-decoration-none fw-light fs-12" href="#">Privacy policy</a></li>
                     <li><a class="cl-white fw-bold text-decoration-none fw-light fs-12" href="#">Cookie Policy</a></li>
                  </ul>
               </div>
               <div class="col-sm-3">
                  <ul class="list-unstyled" >
                     <li><a class="cl-white text-decoration-none fw-bold" href="#">Newsletter</a></li>
                     <li>
                        <div class="input-group mb-3 flex-nowrap">
                        <input type="text" class="form-control" placeholder="la tua email" aria-label="la tua email" aria-describedby="button-addon2">
                        <button class="btn-custom" type="button" id="button-addon2">Send</button>
                        </div>
                     </li>
                     
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!--/footer  -->





    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

    <script src="js/carousel.js"></script>
    <script src="js/tab-slider.js"></script> 
    <script src="js/form.js"></script> 
  </body>
</html>