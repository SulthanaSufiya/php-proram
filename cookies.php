<?php
// set a cookie named user with value that expires in 24 hours
$cookie_name = "UserID";
$cookie_value = "A1B234C";
$expiration_time = time() + (24 * 3600); // 24 hours from now

setcookie($cookie_name, $cookie_value, $expiration_time, "/");

echo "Cookie '$cookie_name' is set.<br><br><br>";

// retrieve the value of the user cookie if it exists
if (isset($_COOKIE[$cookie_name])) {
    echo "Value of cookie '$cookie_name' is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '$cookie_name' is not set.";
}
?>
