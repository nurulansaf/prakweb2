<?php
    include_once('navbar.php');
    include_once('sidebar.php');
?>

<!-- CONTENT -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <?php 
        if(isset($_GET['page'])){
          $page = $_GET['page'];
      
          switch ($page) {
            case 'week1':
              include "../../week1/index.php";
              break;
            case 'week2':
              include "../../week2/index.php";
              break;
            case 'week3':
              include "../../week3/index.php";
              break;			
            default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
          }
        }else{
          include "../../week1/index.php";
        }
    
      ?>
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  </div>
  <!-- /.content-wrapper -->

<!-- / CONTENT -->

<?php 
    include_once('footer.php');
?>
