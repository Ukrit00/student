<?php
require 'conn.php';
$sql_update="UPDATE studentbio SET Sname='$_POST[Sname]',slastname='$_POST[slastname]' ,address='$_POST[Address]' ,Telephone='$_POST[Telephone]' WHERE sid='$_POST[SID]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/student/mainmenu.php");
}

?>