<?php require_once("../risorse/config.php"); ?>
<?php include(FRONT_END . DS . 'header.php'); ?>


    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">

      <?php include(FRONT_END . DS . 'sidebar.php'); ?>
        <!-- /.col-lg-3 -->

        <?php 
          $pdtSingolo = query("SELECT * FROM prodotti WHERE id_prodotto = {$_GET['id']}");
          conferma($pdtSingolo);
          while($row = fetch_array($pdtSingolo)):
        ?>

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="../risorse/<?php echo $row['immagine']; ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['nome_prodotto']; ?></h3>
              <h4>€ <?php echo $row['prezzo']; ?></h4>
              <p class="card-text"><?php echo $row['descr_prodotto']; ?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stelle
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Recensioni
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <a href="#" class="btn btn-info">Lascia una recensione</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->
          <?php endwhile ?>
      </div>

    </div>
    <!-- /.container -->

    <?php include(FRONT_END . DS . 'footer.php'); ?>

