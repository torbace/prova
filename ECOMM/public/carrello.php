<?php require_once("../risorse/config.php"); ?>
<?php include(FRONT_END . DS . 'header.php'); ?>

<?php 
  // if (isset($_GET['add'])){
  //   $_SESSION['prodotto_' . $_GET['add']]+=1;
  //   header('Location: index.php');
  // }

  if (isset($_GET['add'])){
    $_SESSION['prodotto_'.$_GET['add']]+=1;
    header('Location:index.php');
  }
?>

    <!-- Page Content -->
    <div class="container my-5">

      <!-- Sidebar -->
      <div class="row">

      <?php include(FRONT_END . DS . 'sidebar.php'); ?>

      </div>
    <!-- /.container -->

    <?php include(FRONT_END . DS . 'footer.php'); ?>