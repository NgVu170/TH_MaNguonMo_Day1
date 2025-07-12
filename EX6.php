<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="distance">Distance (in km):</label>
        <input type="text" name="distance" id="distance" required>
            
        <div>
            <input type="submit" name="btnSubmit" value="Taxi fee" class="btn btn-primary mt-3">
        </div>
    </form>


    <?php
        if (isset($_POST['btnSubmit'])){
            $distance = floatval($_POST['distance']);
            $fee = 0;
            if ($distance >= 1) {
                $fee += 15000;
                if ($distance >= 5){
                    $fee += 12000 * 4;
                    if ($distance > 5) {
                        $fee += 9000 * ($distance - 5);
                        if ($distance > 140){
                            $fee = $fee * 0.88;
                        } 
                    }
                }
            } else {
                $fee = 15000;
            }
            echo "<h2>Taxi fee: " . $fee . " VND</h2>";
        }
    ?>
</body>
</html>