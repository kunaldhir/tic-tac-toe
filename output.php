<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
$table=$_SESSION['table'];

echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";

session_destroy();
echo"<a href="tic-tac-toe.php">Play again</a>";

?>
