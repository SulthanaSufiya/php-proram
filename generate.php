<?php
// Start the session to store the generated captcha
session_start();

// Function to generate a random captcha code
function generateCaptcha($length = 6)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = "";

    $charLength = strlen($characters);

    // Generate random characters for the captcha
    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $charLength - 1)];
    }

    // Store the captcha code in session (for validation)
    $_SESSION['captcha'] = $captcha;
    return $captcha;
}

// Generate a 6-character captcha code
$captchaCode = generateCaptcha(6);

// Output the captcha code as text (you can modify this part to display it as an image or in an HTML element)
echo "Generated captcha: $captchaCode";
?>
