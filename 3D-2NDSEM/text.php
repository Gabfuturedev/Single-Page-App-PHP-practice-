<?php
// String functions
$str = "Hello, World!";  // Define a string variable with the value "Hello, World!"
$length = strlen($str);  // Get the length of the string (number of characters) and store it in the variable $length
$position = strpos($str, "World");  // Find the position of the word "World" in the string and store it in $position
$replaced = str_replace("World", "PHP", $str);  // Replace the word "World" with "PHP" in the string and store the result in $replaced

// Array functions
$arr = array("apple", "banana", "cherry");  // Define an array with three elements: "apple", "banana", and "cherry"
$count = count($arr);  // Count the number of elements in the array and store it in $count
$keys = array_keys($arr);  // Get the keys (indexes) of the array and store them in $keys
$values = array_values($arr);  // Get the values of the array and store them in $values

// File functions
$file = fopen("example.txt", "w");  // Open a file named "example.txt" for writing and store the file handle in $file
fwrite($file, "Hello, World! gab");  // Write the string "Hello, World! gab" to the file
fclose($file);  // Close the file

if (file_exists("example.txt")) {  // Check if the file "example.txt" exists
    $size = filesize("example.txt");  // Get the size of the file and store it in $size
    $content = file_get_contents("example.txt");  // Get the content of the file and store it in $content
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Output the results of string functions
    echo "String functions<br>";
    echo "Length: " . $length . "<br>";
    echo "Original string: " . $str . "<br>";
    echo "Position of 'World': " . $position . "<br>";
    echo "String after replacement: " . $replaced . "<br>";

    // Output the results of array functions
    echo "<br>Array functions<br>";
    foreach($arr as $value) {
        echo $value . "<br>";
    }
   
    ?>
</body>
</html>
