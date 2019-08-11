<?php

if (isset($_SESSION['Logged']) && $username == "doc") {
    echo "doctor";
    <html><a href="appointments.php">appointments</a></html>
    <html><a href="doctor.php">doctor</a></br></html>
    <html><a href="calendar.php">calendar</a></br></html>
    <html><a href="noinvs.php">no invoice</a></br></html>
    <html><a href="staff.html">staff</a></br></html>
    <html><a href="logout.html">logout</a></br></html>
} 
else if (isset($_SESSION['Logged']) && $username == "esc") {
    echo "secretary";
     <html><a href="calendar.php">calendar</a></html>
    <html><a href="appointments.php">appointments</a></br></html>
    <html><a href="noinvs.php">no invoice</a></br></html>
    <html><a href="logout.html">logout</a></br></html>
} 
?>
