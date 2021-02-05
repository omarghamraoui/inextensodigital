<!DOCTYPE html>
<html>
<head>
<title>FizzBuzz</title>
</head>
<body>

<form name="form" method="get">
<label>Please put max number: </label>
  <input type="number" name="max" id="max" min="2" max="1000">
  <input type="submit" value="Submit"/>
</form>

</body>
</html>
<?php
for($number=1; $number <= $_GET['max']; $number++){
    echo fizzBuzz($number).", ";
}
function fizzBuzz($number){
    switch ($number) {
        case ($number % 15 === 0):
            return "FizzBuzz";
        case ($number % 5 === 0):
            return "Buzz";
        case ($number % 3 === 0):
            return "Fizz";
        default:
        return $number;
      }
}