<?php

if (isset($_SESSION['Logged']) && $username == "doc") {
    echo "doctor";
    header("Location:appointments.php");
    header("Location:doctor.php");
    header("Location:calendar.php");
    header("Location:noinvs.php");
    header("Location:staff.html");
    header("Location:logout.php");
} 
else if (isset($_SESSION['Logged']) && $username == "esc") {
    echo "secretary";
    header("Location:calendar.php");
    header("Location:appointments.php");
    header("Location:noinvs.php");
    header("Location:logout.php");
} 
?>
