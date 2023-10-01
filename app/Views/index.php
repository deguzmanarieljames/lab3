<?= $this->include('/ecm/top') ?>
<body>
<?= $this->include('/ecm/header') ?>


      <!-- electronic section start -->
      <div class="fashion_section">
        <h1 class="fashion_taital">Laptop</h1>
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">

                     <div class="fashion_section_2">
                        <div class="row">

                        <?php foreach ($products as $product): ?>
                           <?php foreach ($product as $category): ?>
                              <?php if ($category == 'Laptop'): ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?= $product['name']?></h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">₱<?= $product['price']?></span></p>
                                 <div class="electronic_img"><img src="<?= "images/".$product['image']; ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="/details/<?= $product['id'] ?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- electronic section end -->


      <!-- electronic section start -->
      <div class="fashion_section">
        <h1 class="fashion_taital">Cellphones</h1>
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">

                     <div class="fashion_section_2">
                        <div class="row">

                        <?php foreach ($products as $product): ?>
                           <?php foreach ($product as $category): ?>
                              <?php if ($category == 'Cellphone'): ?>
                                 <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">

                                          <h4 class="shirt_text"><?= $product['name'] ?></h4>
                                          <p class="price_text">Start Price <span style="color: #262626;">₱<?= $product['price'] ?></span></p>
                                          <div class="electronic_img"><img src="images/<?= $product['image'] ?>"></div>
                                          <div class="btn_main">
                                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                                <div class="seemore_bt"><a href="/details/<?= $product['id'] ?>">See More</a></div>
                                          </div>
                                    </div>
                           </div>
                         <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- electronic section end -->





<?= $this->include('/ecm/footer') ?>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
      </body>


