<!DOCTYPE html>

<html lang="en">

<head> 

    <title>START NG TEST CLASS</title>

</head>
<body>

<form action="index.php" method="post">
        <label for='name'>Enter Your Name</label>
        <input id='name' name='username' type='text' required>
        <br><br>
        <label for='year'>Enter Your Year of Birth</label>
        <input id='year' name='birthyear' type='number' min = "1950" max="2018" required>
        <br><br>
        <input type='submit' name='submit' value='Check My Age!'>
    </form>

</body>
</html>

<?php

echo "Hello Africa";
$string = "I am a boss";
$number = 20;
echo $string . " " . $number;

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $year = $_POST['birthyear'];
    $currentyear = 2019;
    $age = $currentyear - $year;
    echo "<pre>Welcome " .$name. ", you are " .$age. " years old :)</pre>";
}

?>