<?= $this->include('/ecm/top') ?>
<body>
<?= $this->include('/ecm/header') ?>

<!-- CRUD -->



      <div class="fashion_section">
        <h1 class="fashion_taital">Product Input</h1>
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">

        <form action="/save" method="post" align="center">
        <label>Product Name</label>
        <input type="hidden" name="id" value="<?= $prod['id'] ?? '' ?>">
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name'] ?? $prod['name'] ?? '' ?>">
        <br>
        <label>Product Description</label>
        <input type="text" name="description" placeholder="description" value="<?= $_POST['description'] ?? $prod['description'] ?? '' ?>">
        <br>
        <label>Product Image</label>
        <input type="file" name="image" accept=".jpeg, .jpg, .png" value="<?= $_POST['image'] ?? $prod['image'] ?? '' ?>">
        <br>
        <!--<label>Product Category</label>
        <select name="ProductCategory" id="ProductCategory">
            <option>Select a Category</option>
            /* foreach ($category as $cat) {
                echo "<option value =".$cat['ProductCategory'].">".$cat['ProductCategory']."</option>";
            } */?>
        </select> -->
        <label>Product Price</label>
        <input type="text" name="price" placeholder="price" value="<?= $_POST['price'] ?? $prod['price'] ?? '' ?>">
        <br>
        <label>Product Category</label>
        <input type="text" name="category" placeholder="category" value="<?= $_POST['category'] ?? $prod['category'] ?? '' ?>">
        <br>
        <label>Product Quantity</label>
        <input type="text" name="quantity" placeholder="quantity" value="<?= $_POST['quantity'] ?? $prod['quantity'] ?? '' ?>">
        <br>

        <br>
        <button>
            <input type="submit" name="update">
        </button>
        
    </form>

         </div>
      </div>


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
                                 <p class="price_text">Qty: <span style="color: #262626;"><?= $product['quantity']?></span></p>
                                 <div class="electronic_img"><img src="<?= "images/".$product['image']; ?>"></div>
                                 <p class="price_text">Description  <span style="color: #262626;"><?= $product['description']?></span></p>
                                 <a href="/delete/<?= $product['id'] ?>">delete</a> | <a href="/edit/<?= $product['id'] ?>">edit</a>
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
                                          <p class="price_text">Qty: <span style="color: #262626;"><?= $product['quantity']?></span></p>
                                          <div class="electronic_img"><img src="<?= $product['image']?>"></div>
                                          <p class="price_text">Description  <span style="color: #262626;"><?= $product['description']?></span></p>
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
