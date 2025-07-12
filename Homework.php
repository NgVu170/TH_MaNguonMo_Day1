<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Homework Exercises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 800px;
        }
        h2 {
            margin-top: 40px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        form {
            margin-bottom: 25px;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 0 6px #ddd;
        }
        label {
            display: block;
            margin-top: 8px;
            font-weight: bold;
        }
        input[type="number"],
        input[type="text"] {
            padding: 6px;
            margin-top: 4px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 12px;
            padding: 8px 15px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
        }
        .result {
            margin-top: 10px;
            font-size: 1.1em;
            color: #222;
            background: #e1f5fe;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #81d4fa;
        }
    </style>
</head>
<body>

<?php
// Your functions
function Exerciser1(int $number){
    return $number % 2 == 0 ? 1 : 0;
}
function Exerciser2(int $celsius){
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}
function Exerciser3(int $number){
    if ($number < 0) return "Undefined for negative numbers.";
    $fact = 1;
    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i;
    }
    return $fact;
}
function Exerciser4(int $number){
    if ($number <= 1) return false;
    if ($number == 2) return true;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function Excesiser5(string $str){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $str = strtolower($str);
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
function Exerciser6($a, $b, $c){
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        return $a + $b + $c;
    } else {
        return "Invalid triangle sides";
    }
}
function Exerciser7($str){
    return strrev($str);
}
function Exerciser8($radius){
    return pi() * pow($radius, 2);
}
function Exerciser9($num){
    $original = strval($num);
    $reversed = strrev($original);
    return $original === $reversed;
}
function Exerciser10($n){
    $fibonacci = [];
    if ($n <= 0) return $fibonacci;
    $fibonacci[0] = 0;
    if ($n > 1) $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
?>

<h1>Homework Exercises</h1>

<!-- Exercise 1 -->
<h2>Exercise 1: Check if a number is even</h2>
<form method="post">
    <label for="ex1_number">Enter a number:</label>
    <input type="number" id="ex1_number" name="ex1_number" required />
    <input type="submit" value="Check Even" />
</form>
<?php
if (isset($_POST['ex1_number'])) {
    $num = intval($_POST['ex1_number']);
    $res = Exerciser1($num) ? "Even" : "Odd";
    echo "<div class='result'>Result: $num is <strong>$res</strong>.</div>";
}
?>

<!-- Exercise 2 -->
<h2>Exercise 2: Convert Celsius to Fahrenheit</h2>
<form method="post">
    <label for="ex2_celsius">Enter temperature in Celsius:</label>
    <input type="number" id="ex2_celsius" name="ex2_celsius" step="any" required />
    <input type="submit" value="Convert" />
</form>
<?php
if (isset($_POST['ex2_celsius'])) {
    $celsius = floatval($_POST['ex2_celsius']);
    $fahrenheit = Exerciser2($celsius);
    echo "<div class='result'>{$celsius} °C = <strong>" . round($fahrenheit, 2) . " °F</strong></div>";
}
?>

<!-- Exercise 3 -->
<h2>Exercise 3: Calculate Factorial</h2>
<form method="post">
    <label for="ex3_number">Enter a non-negative integer:</label>
    <input type="number" id="ex3_number" name="ex3_number" min="0" required />
    <input type="submit" value="Calculate Factorial" />
</form>
<?php
if (isset($_POST['ex3_number'])) {
    $num = intval($_POST['ex3_number']);
    $result = Exerciser3($num);
    echo "<div class='result'>Factorial of $num is <strong>$result</strong></div>";
}
?>

<!-- Exercise 4 -->
<h2>Exercise 4: Check if a number is Prime</h2>
<form method="post">
    <label for="ex4_number">Enter a number:</label>
    <input type="number" id="ex4_number" name="ex4_number" min="0" required />
    <input type="submit" value="Check Prime" />
</form>
<?php
if (isset($_POST['ex4_number'])) {
    $num = intval($_POST['ex4_number']);
    $isPrime = Exerciser4($num);
    echo "<div class='result'>$num is <strong>" . ($isPrime ? "Prime" : "Not Prime") . "</strong></div>";
}
?>

<!-- Exercise 5 -->
<h2>Exercise 5: Count number of vowels in a string</h2>
<form method="post">
    <label for="ex5_string">Enter a string:</label>
    <input type="text" id="ex5_string" name="ex5_string" required />
    <input type="submit" value="Count Vowels" />
</form>
<?php
if (isset($_POST['ex5_string'])) {
    $str = $_POST['ex5_string'];
    $count = Excesiser5($str);
    echo "<div class='result'>Number of vowels in \"<strong>" . htmlspecialchars($str) . "</strong>\": <strong>$count</strong></div>";
}
?>

<!-- Exercise 6 -->
<h2>Exercise 6: Calculate the perimeter of a triangle</h2>
<form method="post">
    <label for="ex6_a">Side a:</label>
    <input type="number" id="ex6_a" name="ex6_a" step="any" min="0" required />
    <label for="ex6_b">Side b:</label>
    <input type="number" id="ex6_b" name="ex6_b" step="any" min="0" required />
    <label for="ex6_c">Side c:</label>
    <input type="number" id="ex6_c" name="ex6_c" step="any" min="0" required />
    <input type="submit" value="Calculate Perimeter" />
</form>
<?php
if (isset($_POST['ex6_a']) && isset($_POST['ex6_b']) && isset($_POST['ex6_c'])) {
    $a = floatval($_POST['ex6_a']);
    $b = floatval($_POST['ex6_b']);
    $c = floatval($_POST['ex6_c']);
    $perimeter = Exerciser6($a, $b, $c);
    echo "<div class='result'>Perimeter: <strong>" . (is_numeric($perimeter) ? $perimeter : htmlspecialchars($perimeter)) . "</strong></div>";
}
?>

<!-- Exercise 7 -->
<h2>Exercise 7: Reverse a string</h2>
<form method="post">
    <label for="ex7_string">Enter a string:</label>
    <input type="text" id="ex7_string" name="ex7_string" required />
    <input type="submit" value="Reverse String" />
</form>
<?php
if (isset($_POST['ex7_string'])) {
    $str = $_POST['ex7_string'];
    $reversed = Exerciser7($str);
    echo "<div class='result'>Reversed string: <strong>" . htmlspecialchars($reversed) . "</strong></div>";
}
?>

<!-- Exercise 8 -->
<h2>Exercise 8: Calculate area of a circle</h2>
<form method="post">
    <label for="ex8_radius">Enter radius:</label>
    <input type="number" id="ex8_radius" name="ex8_radius" step="any" min="0" required />
    <input type="submit" value="Calculate Area" />
</form>
<?php
if (isset($_POST['ex8_radius'])) {
    $radius = floatval($_POST['ex8_radius']);
    $area = Exerciser8($radius);
    echo "<div class='result'>Area of circle: <strong>" . round($area, 2) . "</strong></div>";
}
?>

<!-- Exercise 9 -->
<h2>Exercise 9: Check if a number is palindrome</h2>
<form method="post">
    <label for="ex9_number">Enter a number:</label>
    <input type="text" id="ex9_number" name="ex9_number" required />
    <input type="submit" value="Check Palindrome" />
</form>
<?php
if (isset($_POST['ex9_number'])) {
    $num = $_POST['ex9_number'];
    $isPalindrome = Exerciser9($num);
    echo "<div class='result'>$num is <strong>" . ($isPalindrome ? "Palindrome" : "Not Palindrome") . "</strong></div>";
}
?>

<!-- Exercise 10 -->
<h2>Exercise 10: Generate Fibonacci sequence up to n terms</h2>
<form method="post">
    <label for="ex10_terms">Enter number of terms:</label>
    <input type="number" id="ex10_terms" name="ex10_terms" min="1" required />
    <input type="submit" value="Generate Sequence" />
</form>
<?php
if (isset($_POST['ex10_terms'])) {
    $n = intval($_POST['ex10_terms']);
    $fib = Exerciser10($n);
    if (count($fib) === 0) {
        echo "<div class='result'>Please enter a positive integer greater than 0.</div>";
    } else {
        echo "<div class='result'>Fibonacci sequence (first $n terms): <strong>" . implode(", ", $fib) . "</strong></div>";
    }
}
?>

</body>
</html>
