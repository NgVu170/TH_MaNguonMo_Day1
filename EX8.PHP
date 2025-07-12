<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="number">Number of target:</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
            <?php
            if (isset($_POST['number'])) {
                $number = intval($_POST['number']);
                $result = 0;
                for ($i = 1; $i <= $number; $i++) {
                    $result += $i;
                }
                echo "<h2>Sum of numbers from 1 to $number is: $result</h2>";
            }
            ?>
        </div>
    </div>
</body>
</html>