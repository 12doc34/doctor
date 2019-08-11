<?php
$dsn = 'mysql:host=localhost;dbname=doctor';
// עקב בעיית תאימות בין גרסאות שרת מסד הנתונים
// וכדי שהיישום יעבוד בכל המחשבי,ם היישום יורץ עם זיהוי של המשתמש
// הראשי שהוא בעל הרשאות מלאות וללא סיסמה
$username = '';
$userpwd = '';
$uid='';
$pwd='';
$ex='';

try {
    $db = new PDO($dsn, $username, $userpwd);
    $db->exec("set NAMES utf8"); // this prevent the ?????? on the ou    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Problem establishing connection to DB. ' ;
    exit();
}




if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ($_POST["command"]=="login")
    {
        if (empty($_POST["uid"]) || empty($_POST["pwd"]))
        {
            echo "username or password empty";
        }
        else
        {
            $username=array('sec', 'doc');
            $userpwd=array('1234', '4567');

            if ($uid==$username[0] && $pwd==$userpwd[0])
            {
                header("Location:menu1.php");
            }
            else if ($uid==$username[1] && $pwd==$userpwd[1])
            {
                header("Location:menu2.php");
            }
            else
            {
                echo "username or password wrong";
            }
        }
    }
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>log in page</title>

</head>
<body>
<h1>log in</h1>
<form method="post">
    User Id:
    <input type="text" name="uid" maxlength="80" size="60"/><br>
    Password:
    <input type="password" name="pwd" maxlength="14" size="14"/><br/>
    <input type="reset" value="reset"/>
    <button type="submit" name="command" value="login">כנס</button>
</form>


</body>
</html>
