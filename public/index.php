<?php

// Starts a new session or resumes the existing session.
// Sessions are used to store user data across different pages.
session_start();

// Includes the function file from the core folder.
require "../app/core/function.php";

// Get the 'url' parameter from the URL using GET.
// If no URL is provided, default to 'home'.
//
// Example:
// localhost/project/home/about
// $_GET['url'] = "home/about"
$URL = $_GET['url'] ?? 'home';


// Split the URL string into an array using "/" as the separator.
//
// Example:
// "home/about" becomes:
// ["home", "about"]
$URL = explode("/", $URL);

// Display the contents of the $URL array.
// Usually used for debugging purposes.
show($URL);

// Convert the first part of the URL to lowercase
// and pass it into the pages() function.
//
// Example:
// $URL[0] = "Home"
// strtolower($URL[0]) becomes "home"
//
// The pages() function probably returns the path
// to the correct page file.
$file = pages(strtolower($URL[0]));

// Check if the requested file exists.
if (file_exists($file)) {

    // Load the requested page file.
    require $file;


} else {

    // If the file does not exist,
    // load the 404 error page instead.
    require pages("404");
}
?>