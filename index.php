
<html>
<body>
<h1>Fizz Buzz App</h1>
<h2>Step 1</h2>

<p>Output:</p>
<p>
<?php
$firstNumber = 1;
$secondNumber = 20;
foreach (range($firstNumber, $secondNumber) as $number) {
    if (0 !== $number % 3 && 0 !== $number % 5) {
        echo $number.' ';
        continue;
    }
    if (0 === $number % 3) {
        echo 'fizz';
    }
    if ( 0 === $number % 5) {
        echo 'buzz';
    }
    echo ' ';
}
?>
</p>

</body>
</html>