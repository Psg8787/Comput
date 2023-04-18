<?php

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}

?>

<?php
// echo 'pre'; print_r($_SESSION);
// echo '<br>';
// echo count($_SESSION["cart_item"]);
?>



<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href='assets/pdf/custom.ttf' rel='stylesheet' type='text/css'>
    <link href='assets/pdf/custom2.ttf' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="asset/js/submit.js"></script>
</head>
<body>
    <section>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl navbar-light sticky-top text-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <div class="foot-img">
                            <img src="assets/images/logoi.png" alt="">
                        </div>

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="true"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarWithDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Story</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Account</a>
                            </li>
                            <li class="nav-item cart3">
                               <a class="nav-link"  href="cart.php">
                                <button type="button" class="btn position-relative">
                                    <i class="fa-solid fa-cart-shopping fa-bounce .carte"></i>
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-danger">
                                            <?php 
                                        if(isset($_SESSION["cart_item"])){
                                            echo count($_SESSION["cart_item"]);
                                        }else{
                                            echo '0';
                                        }
                                         ?>
                                    </span>
                                </button>
                               </a>
                             
                            </li>
                            <!-- <li class="nav-item cart3">
                                <a class="nav-link" href="cart.php"><span class="btn">
                                <i class="fa-solid fa-cart-shopping fa-bounce text-white .carte"></i>
                                </span><span class="car">
                                   // <?php 
                                  //  if(isset($_SESSION["cart_item"])){
                                  //      echo count($_SESSION["cart_item"]);
                                  //  }else{
                                  //      echo '0';
                                   // }
                                     ?>
                                </span></a>
                            </li> -->
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
</body>
</html>

