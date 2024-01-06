<?php
//define an array to map of the week to background colours

$dayColors = [
    'Sunday'=>'#ffcccb',
    'Monday' => '#ffebcd',
    'Tuesday' => '#add8e6',
    'Wednesday' => '#98fb98',
    'Thursday' => '#f0e68c',
    'Friday' =>'#dda0dd',
    'Saturday' =>'#c0c0c0'
];
//get the current day of the week
$currentDay =date('l');

//set a default color in case the day is not found
$backgroundColor='#ffffff';

//check if the current day exists in the array
if(array_key_exists($currentDay,$dayColors)){
    // if the day exists ,set the background color based on the day
    $backgroundColor = $dayColors[$currentDay];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>background color based on the day of week</title>
<style>
    body
    {
        background-color:<?php echo $backgroundColor;?>;
    }
    </style>
</head>
<body>
    <h1>welcome! today is <?php echo $currentDay; ?></h1>
</body>
</html>
