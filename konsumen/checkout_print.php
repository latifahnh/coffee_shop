<?php
//mengabaikan error
error_reporting(E_ALL ^ E_DEPRECATED);
//membuat koneksi ke database
require_once ('../koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coffee Lateef | Checkout</title>
  <!-- Tell the browser to be responsive to screen width -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/lte.css">
	<link rel="stylesheet" href="../css/agency.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/additional.css">

</head>
<body onload="window.print();">
<div class="container">

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="../img/header-icon.png"> Coffee Lateef, Inc.
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Admin, Inc.</strong><br>
            Jl. STM Pembangunan Yogyakarta<br>
            Mrican, Caturtunggal, Depok, Sleman<br>
            Phone: (0274)3210123<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
          <?php
          include '../koneksi.php';

          $result=$connect->query("SELECT * FROM tb_konsumen");
          while ($row=$result->fetch_assoc())
          {
            echo "<strong>".$row['nama_kon']."</strong>", "<br>";
            echo $row['alm_kon']."<br>";
            echo $row['tlp_kon']."<br>";
          }
          ?></address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Call of Duty</td>
              <td>455-981-221</td>
              <td>El snort testosterone trophy driving gloves handsome</td>
              <td>$64.50</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="../img/visa.png" alt="Visa">
          <img src="../img/mastercard.png" alt="Mastercard">
          <img src="../img/cirrus.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/lte.min.js"></script>
</body>
</html>
