<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&family=Questrial&display=swap"
        rel="stylesheet">


</head>

<body>

    <?php require ('dbcon.php');
   ?>


    <?php 
    require 'navbar.php'
    ?>

    <div class="jumbotron">
        <h1 align="center">Register to Ram Stationery</h1>
    </div>


    </div>

    <section class="my-5">
        <div class="py-3">
            <h2 class="text-center">User Registration</h2>
        </div>
        <div class="w-50 m-auto ">

            <form action="login_register.php" method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>

                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>

                </div>

                <div class="form-group">
                    <label>Password </label>
                    <input type="text" name="password" class="form-control" required>

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">remember me</label>
                </div>

                <button type="submit" class="btn btn-success" name="register">Register</button>

                <p py-5 p-3>Have an account! <a href="login.php">Login</a>.</p>
            </form>
        </div>

        </div>
    </section>
    </form>





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