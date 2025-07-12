<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate age</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Calculate Age</h1>
                <form action="" method="post">
                    <div>
                        <label for="birthYear"> Enter your birthYear: </label>
                        <input type="text" id="birthYear" name="birthYear" required>
                    </div>
                    <div>
                        <input type="submit" name="btnSubmit" value="Calculate" class="btn btn-primary mt-3">
                    </div>
                    <?php
                    if (isset($_POST['btnSubmit'])) {
                        $myYear = intval($_POST['birthYear']);
                        $currentYear = date("Y");
                        $myAge = $currentYear - $myYear;
                        echo "Your age is: " . $myAge . " years old.";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>