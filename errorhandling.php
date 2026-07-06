<?php 
if (!isset($_GET['message'])) {
}
else {
    $checkURL = $_GET['message'];
    if ($checkURL == "all") {
        echo '<p class = "danger"> All Fields Are Required </p>';
    }
    elseif ($checkURL == "name"){
        echo '<p class = "danger"> Name Should Be 3 Or More </p>';
    }
    elseif ($checkURL == "notexists") {
        echo '<p class = "danger"> Credentials Does not Match Our Records</p>';        
    }
    elseif ($checkURL == "char") {
        echo '<p class = "danger"> Invalid Name Format </p>';
    }
    elseif ($checkURL == "email" ) {
        echo '<p class = "danger"> Invalid Email Format </p>';
    }
    elseif ($checkURL == "pass") {
        echo '<p class = "danger"> Password Should Be 8 Or More </p>';
    }
    elseif ($checkURL == "exist") {
        echo '<p class = "danger"> User Already Exists </p>';
    }
    elseif ($checkURL == "success") {
        echo '<p class = "success"> Added Successfully </p>';
    }
    elseif ($checkURL == "more") {
        echo '<p class = "danger"> Product Name Cannot Be More Than 50 </p>';
    }
    elseif ($checkURL == "positive") {
        echo '<p class = "danger"> Product Price Cannot Be Negative Or Non numeric </p>';
    }
    elseif($checkURL == "noimage"){
      echo '<p class = "danger"> No Image Added </p>';
    }
    elseif ($checkURL == "ext") {
      echo '<p class = "danger"> Extension Not Allowed </p>';
    }
    elseif ($checkURL == "large") {
       echo '<p class = "danger"> Image Size Should be 2MB or Less </p>';
     }
    elseif ($checkURL == "save") {
        echo '<p class = "danger"> Failed to save image. Please try again </p>';
    }
    elseif ($checkURL == "ds") {
        echo '<p class ="success"> Product Deleted Successfully </p>';
    }
    elseif ($checkURL == "us") {
        echo '<p class ="success"> Product Updated Successfully </p>';
    }

}