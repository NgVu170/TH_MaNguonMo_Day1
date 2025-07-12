<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Calculate</h1>
                <form action="" method="post">
                    <div>
                        <label for="firstNumber">FirstNumber:</label>
                        <input type="text" name="firstNumber" id="firstNumber" required>
                    </div>
                    <div>
                        <label for="secondNumber">SecondNumber:</label>
                        <input type="text" name="secondNumber" id="secondNumber" required>
                    </div>
                    <div>
                        <label for="operation">Operation:</label>
                        <select name="operation" id="operation" required>
                            <option value="add">Add</option>
                            <option value="subtract">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="divide">Divide</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="btnSubmit" value="Calculate" class="btn btn-primary mt-3">
                    </div>
                    <?php
                    if (isset($_POST['btnSubmit'])) {
                        $firstNumber = floatval($_POST['firstNumber']);
                        $secondNumber = floatval($_POST['secondNumber']);
                        $operation = $_POST['operation'];
                        $result = 0;

                        switch ($operation) {
                            case "add":
                                $result = $firstNumber + $secondNumber;
                                break;
                            case "subtract":
                                $result = $firstNumber - $secondNumber;
                                break;
                            case "multiply":
                                $result = $firstNumber * $secondNumber;
                                break;
                            case "divide":
                                if ($secondNumber != 0) {
                                    $result = $firstNumber / $secondNumber;
                                } else {
                                    $result = "Division by zero error";
                                }
                                break;
                        }
                        echo "<h2>Result: " . $result . "</h2>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>