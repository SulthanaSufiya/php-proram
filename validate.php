<!DOCTYPE html>
<html>
    <head>
        <title>input validation</title>
    </head>
    <body>
        <?php
        $username = $usernameErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // validate username input
            if (empty($_POST["username"])) {
                $usernameErr = "Username is required";
            } else {
                $username = test_input($_POST["username"]);
                // check if username contains only letters and whitespace
                if (!preg_match("/^[a-zA-Z]*$/", $username)) {
                    $usernameErr = "Only letters and white space allowed";
                }
            }
        }
        // function to sanitize and validate input 
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h2>Validate input: username</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username: <input type="text" name="username">
            <span class="error">*<?php echo $usernameErr;?></span><br><br>
            <input type="submit" name="submit" value="Submit">
             </form>
        <?php
        if (!empty($username)) {
            echo "<h3>Entered Username:</h3>";
            echo $username;
        }
        ?>
    </body>
</html>
