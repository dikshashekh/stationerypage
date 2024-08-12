<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ram Stationery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&family=Questrial&display=swap"
        rel="stylesheet">


</head>

<sec>

    <?php 

    require 'navbar.php'
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" h-200px w-300px>
            <div class="carousel-item active">
                <img src="images/first.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="images/second.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/third.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/ram.jpg" class="img-fluid aboutimg">

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4"> Hello , I am Ram Stationery</h2>
                    <p class="py-3">A stationery business is an excellent method to exhibit your skills while also
                        providing appealing products for all individuals to enjoy. Selling your original drawings on
                        greeting cards, booklets, business cards, envelopes, and other paper-based goods is a simple and
                        enjoyable way to make money.</p>
                    <a href="about.php" class="btn btn-success">More</a>

                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/ser1.jpg " width=300 height=500 alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Shopping</h4>
                            <p class="card-text">Easy and cheap shopping products.</p>
                            <a href="#" class="btn btn-primary">Get</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/ser2.jpg " width=300 height=500 alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Wholesale</h4>
                            <p class="card-text">Get products in bulk with wholesale prices.</p>
                            <a href="#" class="btn btn-primary">Get</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/ser3.jpg " width=300 height=500 alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Customization</h4>
                            <p class="card-text">Get products of your style.</p>
                            <a href="#" class="btn btn-primary">Get</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Products Gallery</h2>
        </div>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/prd5.jpg" width=500 height=500 class="img-fluid galleryimgs " py-4>

                </div>
                <div class="col-lg-4 col-md-4 col-12 ">
                    <img src="images/prd2.jpg" width=500 height=500 class=" img-fluid galleryimgs" py-4>

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/prd3.jpg" width=500 height=500 class=" img-fluid galleryimgs" py-4>

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/prd1.jpg" width=500 height=500 class=" img-fluid galleryimgs" py-4>

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/prd6.jpg" width=500 height=500 class=" img-fluid galleryimgs" py-4>

                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/prd7.jpg" width=500 height=500 class=" img-fluid galleryimgs" py-4>

                </div>
            </div>

        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" class="form-control">

                </div>

                <div class="form-group">
                    <label>Mobile </label>
                    <input type="text" name="mobile" class="form-control">

                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comment">

      			</textarea>

                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

        </div>
        </form>

    </section>




    <footer>
        <p class="p-3 bg-dark text-white text-center">
            @ramstationery
        </p>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>