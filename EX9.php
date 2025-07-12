<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <form action="" method="post">
        <div>
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form> 
    <?php
        if (isset($_POST['btnSend'])){
            $name = $_POST['name'];
            echo "<p>Hello " . $name . " Welcome to my website.</p>";
            echo "<p>Hello $name Welcome to my website.</p>";
        }
    ?>
</body>
</html>