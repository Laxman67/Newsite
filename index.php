<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cookie_name = "data";
$cookie_value = "Foo Bar";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie named '" . $cookie_name . "' is not set!";
}
else {
 echo "Cookie '" . $cookie_name . "' is set!<br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
}
 
?>


<div id="content">
<form action="">
    <fieldset>
    <legend>Laxman</legend> 
    <div id="form-content">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="text"></td>
            </tr>
            
            <tr>
                <td>Email:</td>
                <td><input type="text"></td>
            </tr>
        </table>
    </div>
    </fieldset>
</form>

</div>

</body>
</html>