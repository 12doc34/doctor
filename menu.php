<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location':login.php);
        exit();
}
if ($_SESSION['username'] == "doc") {
    echo "doctor";
    echo "<html>";
    echo "<body>";
    echo "<a href=\"appointments.php\">appointments</a></br>";
    echo "<a href=\"doctor.php\">doctor</a></br>";
    echo "<a href=\"calendar.php\">calendar</a></br>";
    echo "<a href=\"noinvs.php\">no invoice</a></br>";
    echo "<a href=\"staff.html\">staff</a></br>";
    echo "<a href=\"logout.html\">logout</a>";
    echo "</body>";
    echo "</html>";
} 
else if ($_SESSION['username'] == "sec") {
    echo "secretary";
    echo "<html>";
    echo "<body>";
    echo "<a href=\"calendar.php\">calendar</a>";
    echo "<a href=\"appointments.php\">appointments</a></br>";
    echo "<a href=\"noinvs.php\">no invoice</a></br>";
    echo "<a href=\"logout.html\">logout</a></br>";
    echo "</body>";
    echo "</html>";
} 
?>
