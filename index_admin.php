<?php
include "koneksi.php";

if (isset($_POST["add_to_cart"])) {
  if (isset($_SESSION["coffee_shop"])) {
    $item_array_id = array_column($_SESSION["coffee_shop"], "item_id");
    if (!in_array($_GET["id_produk"], $item_array_id)) 
    {
      $count = count($_SESSION["coffee_shop"]);
      $item_array = array(
      'item_id' => $_GET["id_produk"] ,
      'item_name' => $_POST["hidden_name"] ,
      'item_price' => $_POST["hidden_price"] ,
      'item_quantity' => $_POST["quantity"]
       );
    $_SESSION["coffee_shop"] [$count] = $item_array;
    }

  else 
  {
    echo '<script>alert("item ditambahkan")</script>';
    echo '<script>window.location="index_admin.php"</script>';
  }

  }
  else {
    $item_array = array(
      'item_id'       => $_GET["id_produk"],
      'item_name'     => $_POST["hidden_name"],
      'item_price'    => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"]
       );
    $_SESSION["coffee_shop"] [0] = $item_array;
  }
}

if (isset($_GET["action"])) 
{
  if ($_GET["action"] == "delete") 
  {
    foreach($_SESSION["coffee_shop"] as $keys => $values)
    {
      if ($values["item_id"] == $_GET["id_produk"]) 
      {
        unset($_SESSION["coffee_shop"] [$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="index_admin.php"</script>';
      }
    }
  }
}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Coffee Lateef</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
	<script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #2C0A05;">
  <!-- di dalam container -->
  <div class="container">
  <!-- header menu -->
    <div class="navbar-header">
        <button type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#mymenu"
            aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="img/header-icon.png"></img>
        <a class="navbar-brand" href="index_admin.php">COFFEE LATEEF</a>
    </div>
    <!-- daftar item menu -->
    <div class="collapse navbar-collapse" id="mymenu" style="background-color: #2C0A05;">
          <ul class="nav navbar-nav pull-right page-scroll">
            <li class="active"><a href="login/home.php">Welcome Admin</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#getintouch">Get In Touch</a></li>
            <li><a href="login/logout.php">Logout</a></li>
          </ul>
    </div>
  </div>
</nav>
<!-- ./NAVBAR -->

<!-- CONTAIN -->
<div class="container"id="welcome">
  <!-- Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-top: 55px;">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/slider1.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME</h1>
              <h2>Coffee - Makes you Love</h2>
            </div>
          </div>
          <div class="item">
            <img src="img/slider2.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h2>A Lot Can Happen Over Coffee</h2>
            </div>
          </div>
          <div class="item">
            <img src="img/slider1.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h2>Its Awesome!!!</h2>
            </div>
          </div>
          <div class="item">
            <img src="img/slider4.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h2>Just Come here!!</h2>
            </div>
          </div>
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  <div class="div-pattern2"></div>
</div>

<!--  LIST MENU-->
<div class="container" align="center" id="menu"><br /><br /><br />
  <h3>List Menu</h3>
      <!-- MENU IMAGE -->
      <?php
        $query = "SELECT * FROM tb_produk ORDER BY id_produk ASC";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) 
          {
          while ($row = mysqli_fetch_array($result)) 
          {
      ?>
      <div class="col-md-4">
        <form method="post" action="index_admin.php?action=add&id_produk=<?php echo $row["id_produk"]; ?>">
          <div style="border:1px solid #333; background-color: #f1f1f1; border-radius: 16px; padding: 16px;" align="center">
            <img src="img/<?php echo $row["gambar"]; ?>" class="img-responsive"/><br/>
            <h4 class="text-info"><?php echo $row["kode_produk"]; ?></h4>
            <h4 class="text-info"><?php echo $row["nama_produk"]; ?></h4>
            <h4 class="text-danger">Rp. <?php echo $row["harga_produk"]; ?></h4>
            <input type="text" name="quantity" class="form-control" value="1"></input>
            <input type="hidden" name="hidden_name" value="<?php echo $row["nama_produk"];?>"></input>
            <input type="hidden" name="hidden_price" value="<?php echo $row["harga_produk"];?>"></input>
            <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart"></input>
          </div>
        </form>
      </div>
      <?php     
          }
        }
      ?>
      </div>
      <!-- ORDER DETAIL -->
        <div class="container" style="clear: both; text-align: center;"><br/>
            <h3>Order Details</h3>
          <div class="table-responsive">
            <table class="table table-striped table-bordered jumbotron">
              <tr>
                <th width="30%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Harga</th>
                <th width="15%">Total</th>
                <th width="5%">Aksi</th>
              </tr>
                <?php
                if (!empty($_SESSION["coffee_shop"])) {
                  $total = 0;
                  foreach($_SESSION["coffee_shop"] as $keys => $values) 
                  {
                ?>
              <tr>
                <td><?php echo $values ["item_name"]; ?></td>
                <td><?php echo $values ["item_quantity"]; ?></td>
                <td>Rp. <?php echo number_format($values ["item_price"],2); ?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                <td><a href="index_admin.php?action=delete&id_produk=<?php echo $values["item_id"]; ?>"><span class="text-danger" style="color: #2C0A05;">Remove</span></a></td>
              </tr>
                <?php
                      $total = $total + ($values["item_quantity"] * $values["item_price"]);
                  }
                ?>
              <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">Rp. <?php echo number_format($total, 2); ?></td>
                <td></td>
              </tr>
                <?php
                }
                ?>
            </table>
          </div>
</div>
<!-- ./produk-list -->

<!-- ./CONTAINER -->

<?php include "footer.php"?>