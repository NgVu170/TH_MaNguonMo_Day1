<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Toss a Coin</h1>
    <div class="result text-center">
        <h2>Click the button to toss a coin:</h2>
        <form action="" method="post">
            <input type="submit" name="btnToss" value="Toss Coin" class="btn btn-primary mt-3">
        </form>
        <h2>Result:</h2>
        <p>
            <?php
            if (isset($_POST['btnToss'])) 
            {
                $Coin = null;
                $Coin = rand(0,1);
                if($Coin == 0){
                    echo("Tail");
                }
                else {
                    echo("Head");
                }
            }
            ?>
        </p>
    </div>
</body>
</html>