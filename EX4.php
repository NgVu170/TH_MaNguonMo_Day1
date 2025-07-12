<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <form action="" method="post">
                    <div>
                        <label for="num">Enter numbers (comma-separated):</label>
                        <input type="text" id="num" name="num" required>
                    </div>
                    <div>
                        <input type="submit" name="btnSubmit" value="Find Max" class="btn btn-primary mt-3">
                    </div>
                </form>
                <?php
                if (isset($_POST['btnSubmit'])) {
                    $num = $_POST['num'];
                    $numbers = explode(',', $num);
                    $max = max($numbers);
                    echo "The maximum number is: " . $max;
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>