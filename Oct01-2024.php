<?php
    // Assigning a string value 'Ahmed Rajwani' to the variable $name
    $name = 'Ahmed Rajwani';
    
    // Assigning an integer value 20 to the variable $age
    $age = 20;

    // Echoing a paragraph with embedded variables using double quotes. The variables will be parsed and their values displayed.
    echo "<P>Dear $name, you are $age years old</P>";  // Will display: "Dear Ahmed Rajwani, you are 20 years old"
    
    // Echoing a paragraph with embedded variables using single quotes. The variables will NOT be parsed, so the literal string is shown instead.
    echo '<P>Dear $name, you are $age years old</P>';   // Will display: "Dear $name, you are $age years old"

    // Using strlen() function to count the number of characters in the string $name (excluding spaces).
    $chars = strlen($name);  // $chars will be 14, since 'Ahmed Rajwani' has 14 characters in total.

    // Using str_word_count() function to count the number of words in the string $name.
    $words = str_word_count($name);  // $words will be 2, as there are 2 words: 'Ahmed' and 'Rajwani'.

    // Outputting the number of characters in $name.
    echo "<p>$name has $chars characters in it.</p>";  // Will display: "Ahmed Rajwani has 14 characters in it."

    // Outputting the number of words in $name.
    echo "<p>$name has $words word in it.</p>";  // Will display: "Ahmed Rajwani has 2 word in it."

    // Using strpos() to find the position of the substring "Rajwani" within the string $name. It returns the position where the substring starts.
    // strpos() returns the index (0-based) of the first occurrence of the substring.
    echo "<p>" . strpos($name, "Rajwani") . "</p>";  // Will display: "6" because "Rajwani" starts at position 6 in "Ahmed Rajwani"

    // Using strtolower() to convert the entire string $name to lowercase.
    echo "<p>" . strtolower($name) . "</p>";  // Will display: "ahmed rajwani" (all lowercase)

    // Using strtoupper() to convert the entire string $name to uppercase.
    echo "<p>" . strtoupper($name) . "</p>";  // Will display: "AHMED RAJWANI" (all uppercase)

    // Using str_replace() to replace the substring 'Rajwani' with 'Raza' in the string $name.
    echo "<p>" . str_replace('Rajwani', 'Raza', $name) . "</p>";  // Will display: "Ahmed Raza" (string replacement)

    // Assigning a string with extra spaces before and after the name to the variable $text.
    $text = "                       Ahmed                     Raza                   ";
    
    // Using trim() to remove any leading and trailing whitespace from the string $text.
    echo "<p>" . trim($text) . "</p>";  // Will display: "Ahmed Raza" (extra spaces at the beginning and end are removed)

?>
