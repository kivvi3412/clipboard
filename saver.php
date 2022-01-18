<?php
$text = $_POST["text"];
echo $text;
$temp_file = fopen("temp.txt", "w+");
fwrite($temp_file, $text);
header("Location: index.php");
