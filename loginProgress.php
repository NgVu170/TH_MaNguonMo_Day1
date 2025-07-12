<?php 
    if (isset($_POST['btnLogin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "Hutech" &&  $password == "123") {
            echo "<p>Login successful! Welcome, $username.</p>";
            header("Location: https://hentaiz.bot/");
        } else {
            header("Location: login.php?error=1");
        }
    }