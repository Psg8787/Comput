<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
  <section>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="foot-img wow slideInLeft ">
                            <div class="foot-img text-center">
                               <a href="index.php"> <img src="assets/images/logoi.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="foot-con mt-3 text-center">
                            <ul class="list-inline wow slideInUp ">
                                <li class="list-inline-item"><a href="#">Shop</a></li>
                                <li class="list-inline-item"><a href="#">Learn</a></li>
                                <li class="list-inline-item"><a href="#">Articles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="foot-link text-center wow slideInRight ">
                            <i class="fa-brands fa-facebook fa-flip"></i>
                            <i class="fa-brands fa-twitter fa-flip"></i>
                            <i class="fa-brands fa-youtube fa-flip"></i>
                            <i class="fa-brands fa-linkedin fa-flip"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })

       
    </script>
</body>
</html>