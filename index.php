<!doctype html>
<html lang="en">

<head>
    <title>TIME TABLE</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="bg bg-light p-3">
        <div class="container text-center">
            <h2>TIME TABLE MANAGMENT SYSTEM</h2>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h3 class="text-center">Admin Login</h3>
                    <form name="login" id="login" method="POST" action="login_action.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Sign in</button>
                    </form>
                    <h5 class="text-center text-danger">
                        <?php
                        if (isset($_GET['status'])) {
                            echo "Wrong Credentials";
                        }
                        ?>
                    </h5>
                    <p>Email : admin@gmail.com</p>
                    <p>Password : 123456</p>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>