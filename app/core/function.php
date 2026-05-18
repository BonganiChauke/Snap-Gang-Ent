<?php 

// file for functions


function show($stuff){
    echo "<prev>";
    print_r($stuff);
    echo "</prev>";
}

// return file function
function pages ($file){
    return "../../app/pages/".$file."php";
}

?>