<?php
// Command to be executed
$command = 'dir';

// Execute the command and store the output in an array
$output = [];
exec($command, $output);

// Display the output
foreach ($output as $line) {
    echo $line . "<br>";
}
?>
