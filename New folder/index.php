<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/font/stylesheet.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="firs">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-12 col-md-8">
                            <div class="wow slideInLeft ">
                                <div class="drink">
                                    <h1 class="font" style="font-family : 'Cargiona';">Plant Based Drink, Benefits You
                                        Feel.</h1>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="nunib">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            <button class="rounded-pill fs3 btn btn-dark">Shop Now</button>
                                        </div>
                                        <div class="col-4">
                                            <div class="dink-img1 mt-3 text-center slideInRight ">
                                                <img src="assets/images/shop.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="dink-img mt-3 text-center slideInRight ">
                                <img src="assets/images/botle.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- <div class="prde">
           
            <div class="container">
                <div class="oel">
                <h2 class="lmn font wow slideInUp ">Our Products <span class="float-end btn btn-outline-dark">See
                    all</span></h2>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">...</div>
                                <div class="owl-item">...</div>
                                <div class="owl-item">...</div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div> -->





        <!-- <div class="product-card">
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- product -->
        <div class="container-fluid prd">
            <div class="products mt-3">
                <h2 class="lmn font wow slideInUp ">Our Products <span class="float-end btn btn-outline-dark">See
                        all</span></h2>
                <div class="container">
                    <div class="carou">
                        <div class="owl-carousel owl-theme owl-loaded-field">
                            <?php
                            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
                            if (!empty($product_array)) {
                                foreach ($product_array as $key => $value) {
                                    ?>

                                    <div class="item wow slideInRight">
                                        <form method="post"
                                            action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?> ">
                                            <div class="product-card">
                                                <div class="product-tumb">
                                                    <img src="<?php echo $product_array[$key]["image"]; ?>" alt="">
                                                </div>
                                                <div class="product-details nunib">
                                                    <!-- <span class="product-catagory prim">
                                                        <?php echo $product_array[$key]["name"]; ?>
                                                    </span> -->
                                                    <h4 class="prim">
                                                        <?php echo $product_array[$key]["name"]; ?>
                                                    </h4>
                                                    <div class="product-bottom-details">

                                                        <div class="product-links">

                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <div class="product-price nunib">
                                                                        <?php echo "₹. " . $product_array[$key]["price"]; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="quantity"
                                                                        class="form-select form-select-sm btn7 product-quantity"
                                                                        aria-label=".form-select-sm example">
                                                                        <option selected value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12">
                                                                    <!-- <a href=""
                                                                        class="btn btnAddAction add-cart btn-outline-dark btn6"><i
                                                                            class="fa fa-shopping-cart"></i> <span
                                                                            class="text-dark1 ">
                                                                            </span>
                                                                    </a> -->
                                                                    <span
                                                                        class="btn btnAddAction add-cart btn-outline-dark btn6"><i
                                                                            class="fa fa-shopping-cart"></i>
                                                                        <input type="submit" value="Add to Cart"
                                                                            class="btnAddAction add-cart cart1 btn btn2" />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- <div class="item wow slideInRight">
                                        <form method="post"
                                            action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                            <img src="<?php echo $product_array[$key]["image"]; ?>">
                                            <div class="carou-con text-center dat">
                                                <p class="txt">
                                                    <?php echo $product_array[$key]["name"]; ?>
                                                </p>
                                                <p class="text-white">
                                                    <?php echo $product_array[$key]["name"]; ?>
                                                </p>

                                                <div class="btn-group btn-group-lg" role="group"
                                                    aria-label="Large button group">
                                                    <p class="bord">Buy :
                                                        <?php echo 'hellooooo'; ?>
                                                    </p>
                                                    <input type="text" class="product-quantity text-center" name="quantity"
                                                        value="1" size="2" />
                                                    <input type="submit" value="Add to Cart"
                                                        class="btnAddAction add-cart cart1 btn btn2" />
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- drinks -->

        <div class="drinks mt-5 mb-5">
            <div class="dri4-img wow  fadeIn ">
                <img src="assets/images/flower.png" alt="">
            </div>
            <div class="dri2-img wow slideInUp  ">
                <img src="assets/images/torn.png" alt="">
            </div>


            <div class="row g-0">
                <div class="col-12 col-md-2">
                    <div class="dri wow slideInLeft">
                        <h2>Drinks</h2>
                        <h3>Energy</h3>
                        <h4>Focus</h4>
                        <h4>Calm</h4>
                        <h4 class="text-danger">Sleep</h4>
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="dri1-img wow slideInUp ">
                        <img src="assets/images/product1.png" alt="">
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="dri1-img wow slideInUp ">
                        <img src="assets/images/b1.png" alt="">
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="dri1-img wow slideInUp ">
                        <img src="assets/images/b2.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="dri1 wow slideInRight ">
                        <h5>Description</h5>
                        <p class="fst nunib">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias,
                            impedit.
                        </p>
                        <button class="rounded-pill fs3 btn btn-dark">Shop Now</button>
                    </div>
                </div>
            </div>
            <div class="dri3-img wow slideInUp ">
                <img src="assets/images/light1.png" alt="">
            </div>

        </div>

        <!-- drinks -->
        </div>
    </section>

    <section>
        <div class="container">
            <!-- testimonials -->
            <div class="test">
                <div class="d-flex">
                    <span class="quo"><i class="fa-solid fa-quote-left"></i></span>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="test1 wow slideInLeft ">

                                <p> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur rem
                                    doloremque atque deserunt sapiente magnam."</p>

                                <h4><span class="title2">Prashant Gupta .</span><span class="title1 nunib">Doloremque
                                        atque
                                        deserunt</span></h4>
                                <h6 class="dat">02 --- 03</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- <div class="test-img wow slideInRight "> -->
                            <div class="progress-circle over50 p77">
                                <span class="test-img wow slideInRight"><img src="assets/images/t.jpg" alt=""></span>
                                <div class="left-half-clipper">
                                    <div class="first50-bar"></div>
                                    <div class="value-bar"></div>
                                </div>
                            </div>
                            <!-- <img src="assets/images/t.jpg" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials -->
        <!-- articles -->
        <div class="container-fluid">
            <h2 class="lmn font mb-5 wow slideInUp ">Articles <span class="float-end btn btn-outline-dark">See
                    all</span></h2>
            <!-- <div class="article">
                    <h3>Articles</h3>

                </div> -->
            <div class="container">
                <div class="owl">
                    <div id="carouselWithIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators calr">
                            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-4 col-md-4">
                                                    <div class="card-img1 ">
                                                        <img src="assets/images/b1.png" class="card-img-top"
                                                            alt="card-img-top">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><small class="text-muted">June 16 2023 3
                                                                mins
                                                                ago</small></p>
                                                        <h5 class="card-title4">Lasting Benefits</h5>
                                                        <!-- <h6 class="card-title">Bone Health</h6> -->
                                                        <p class="card-text nunib">This is a wider card with supporting
                                                            text
                                                            below
                                                            as
                                                            a natural
                                                            lead-in to additional content. This content is a little bit
                                                            longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-4 col-md-4">
                                                    <div class="card-img1 ">
                                                        <img src="assets/images/b2.png" class="card-img-top"
                                                            alt="card-img-top">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><small class="text-muted">June 16 2023 3
                                                                mins
                                                                ago</small></p>
                                                        <h5 class="card-title4">Elemental Drink</h5>
                                                        <p class="card-text nunib">This is a wider card with supporting
                                                            text
                                                            below
                                                            as
                                                            a natural
                                                            lead-in to additional content. This content is a little bit
                                                            longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-4 col-md-4">
                                                    <div class="card-img1">
                                                        <img src="assets/images/b4.png" class="card-img-top"
                                                            alt="card-img-top">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><small class="text-muted">June 16 2023 3
                                                                mins
                                                                ago</small></p>
                                                        <h5 class="card-title4">Working With Body</h5>
                                                        <p class="card-text nunib">This is a wider card with supporting
                                                            text
                                                            below
                                                            as
                                                            a natural
                                                            lead-in to additional content. This content is a little bit
                                                            longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-4 col-md-4">
                                                    <div class="card-img1 ">
                                                        <img src="assets/images/b3.png" class="card-img-top"
                                                            alt="card-img-top">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><small class="text-muted">June 16 2023 3
                                                                mins
                                                                ago</small></p>
                                                        <h5 class="card-title4">Immediate Functions</h5>
                                                        <p class="card-text nunib">This is a wider card with supporting
                                                            text
                                                            below
                                                            as
                                                            a natural
                                                            lead-in to additional content. This content is a little bit
                                                            longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselWithIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselWithIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- articles -->

        <!-- extra -->

        <!-- extra -->

        <!-- faq -->
        <div class="container-fluid">
            <div class="faq mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h1 class="wow slideInDown">FAQ</h1>
                            <div class="accord wow slideInUp">
                                <div class="accordion" id="accordionBasic">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Can I Drink them EveryDay?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                                            <div class="accordion-body">
                                                <strong class="nunib">This is the first item's accordion body.</strong>
                                                It is
                                                hidden by default, until the collapse plugin adds the
                                                appropriate
                                                classes that we use to style each element. These classes control
                                                the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that
                                                just
                                                about any HTML can go within the,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                What Do Elements Drinks taste Like?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
                                            <div class="accordion-body">
                                                <strong class="nunib">This is the second item's accordion body.</strong>
                                                It is
                                                hidden by default, until the collapse plugin adds the
                                                appropriate
                                                classes that we use to style each element. These classes control
                                                the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that
                                                just
                                                about any HTML can go within the,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Where Can I Purhase Element Drinks?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
                                            <div class="accordion-body">
                                                <strong class="nunib">This is the third item's accordion body.</strong>
                                                It is
                                                hidden by default, until the collapse plugin adds the
                                                appropriate
                                                classes that we use to style each element. These classes control
                                                the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that
                                                just
                                                about any HTML can go within the ,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="lmh">
                                <div class="accrd-img wow slideInRight">
                                    <img src="assets/images/1.png" class="img-fluid" alt="">

                                </div>
                                <div class="hide1 wow slideInLeft">
                                    <img src="assets/images/8.png" class=" img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="join wow slideInDown">
                <h3>Join Now</h3>
                <div class="input-group rounded-pill">
                    <input type="text" class="form-control" placeholder="Enter Your Email Address"
                        aria-label="Username">
                    <a href=""><button type="button" class="btn btn-outline-secondary "
                            id="input-group-button-right">Sign Up</button></a>
                </div>
            </div>

        </div>
        <!-- faq-->
        </div>
    </section>


</body>

</html>

<?php
include 'footer1.php'
    ?>