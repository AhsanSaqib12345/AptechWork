<?php
// Output a horizontal rule (<hr>) for separation between different sections of content
$file = readfile("abc.txt");  // Reads and outputs the contents of "abc.txt" file
// The readfile() function automatically outputs the content of the file, no need to echo

echo "<hr>";  // Output a horizontal rule for separation

// Open "abc.txt" for reading
$myfile = fopen("abc.txt", "r");
// Read the entire content of the file and output it
echo fread($myfile, filesize("abc.txt"));
// Close the file after reading
fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

// Open "breakfast_menu.xml" for reading
$myfile = fopen("breakfast_menu.xml", "r");
// Read the entire content of the XML file and output it
echo fread($myfile, filesize("breakfast_menu.xml"));
// Close the file after reading
fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

// Open "breakfast_menu.json" for reading
$myfile = fopen("breakfast_menu.json", "r");
// Read the entire content of the JSON file and output it
echo fread($myfile, filesize("breakfast_menu.json"));
// Close the file after reading
fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

// Open "abc.txt" for reading again
$myfile = fopen("abc.txt", "r");
// Loop through the file until the end of file is reached
while (!feof($myfile)) {
    // Read one line at a time and wrap it in <p> tags for proper HTML formatting
    echo "<p>" . fgets($myfile) . "</p>";
}
// Close the file after processing
fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

$myfile = fopen("abc.txt", "r");
//output one character until end-of-file
while (!feof($myfile)) {
  echo "<p>" . fgetc($myfile) . "<br>";
}
fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

//run the following code just once as it will keep on appending the message.

// $myfile = fopen("abc.txt", "a");
// $message = "\nThis is a new line by Muhammad Ahsan Mughal";
// fwrite ($myfile,$message);
// fclose($myfile);

echo "<hr>";  // Output a horizontal rule for separation

readfile("abc.txt");
?>
