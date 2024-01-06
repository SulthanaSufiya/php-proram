<!DOCTYPE html>
<html>
<head>
    <title>Remove Duplicate from sorted list</title>
</head>
<body>
    <h2>Enter a sorted list of numbers separated by spaces:</h2>
    <form method="post">
        <input type="text" name="numbers" placeholder="Enter numbers">
        <input type="submit" name="submit" value="Remove duplicates">
    </form>
    <?php
    function removeDuplicates($arr){
        $n = count($arr);
        if($n == 0 || $n == 1){
            return $arr;
        }
        $unique = [];
        $unique[] = $arr[0];
        for($i = 1; $i < $n; $i++){
            if($arr[$i] != $arr[$i-1]){
                $unique[] = $arr[$i];
            }
        }
        return $unique;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST["numbers"];
        $inputArray = explode(' ', $input);
        $sortedList = array_map('intval', $inputArray);
        sort($sortedList);

        echo "<h2>Entered list:</h2>";
        echo "<pre>" . print_r($sortedList, true) . "</pre>";

        $result = removeDuplicates($sortedList);
        echo "<h2>List after removing duplicates:</h2>";
        echo "<pre>" . print_r($result, true) . "</pre>";
    }
    ?>
</body>
</html>
