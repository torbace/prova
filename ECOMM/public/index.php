<?php require_once("../risorse/config.php"); ?>
<?php include(FRONT_END . DS . 'header.php'); ?>



    <!-- Page Content -->
    <div class="container my-5">

      <!-- Sidebar -->
      <div class="row">

      <?php include(FRONT_END . DS . 'sidebar.php'); ?>

        <div class="col-lg-9">

          <?php include(FRONT_END . DS . 'carousel.php'); ?>

          <div class="row">
          
            <?php mostraProdotti();  ?> 

            <!-- <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://lorempixel.com/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 2</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://lorempixel.com/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 3</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://lorempixel.com/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 4</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://lorempixel.com/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 5</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://lorempixel.com/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 6</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div> -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
      <h1><?php echo $_SESSION['prodotto_1']; ?></h1>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include(FRONT_END . DS . 'footer.php'); ?>
    