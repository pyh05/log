<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computer10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM member WHERE num=" . $_GET["num"];

if (mysqli_query($conn, $sql)) {
  echo "레코드가 삭제되었습니다";
} else {
  echo "오류 : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
    <a href="./list.php">회원목록</a>
    <a href="./register.html">회원가입</a>
</div>