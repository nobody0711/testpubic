<?php

// Retrieve posted data
$postData = $_POST['postData'];

// Separate the data by newline character (\n)
$dataArray = explode("\n", $postData);

// Output formatted data
foreach ($dataArray as $data) {
    echo $data . "<br>";
}

// Write data to file
$file = 'nobody0711.github.io/testpubic/data.txt';
$current = file_get_contents($file);
$current .= $postData . "\n";
file_put_contents($file, $current);

// Two empty fields for the next post message
echo "Empty Field 1: <br>";
echo "Empty Field 2: <br>";
?>

