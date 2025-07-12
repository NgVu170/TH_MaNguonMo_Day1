<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 class="text-center">Login</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="loginProgress.php" method="post">
                    
                    <?php
                        if (isset($_GET['error'])) {
                            echo "<h3 style='color: red;'>Invalid username or password.</h3>";
                        }
                    ?>

                    <div>
                        <label for="username">Username: </label>
                        <input type="text" id="username" name="username" required class="form-control">
                    </div>
                    <div>
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" required class="form-control">
                    </div>
                    <div>
                        <input type="submit" name="btnLogin" value="Login" class="btn btn-primary mt-3">
                    </div>
                </form>
            </div>
        </div>
            
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous"></script>


</body>
</html>