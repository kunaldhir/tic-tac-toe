<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$_SESSION['table']=$table;
$table = array
(
array(1, 2, 3),
array(4, 5, 6),
array(7, 8, 9)
);
echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Put X at :<input type="text" name="input1" placeholder="any no. between 1 to 9">
<input type="submit" value="Submit" name="submit">
</form>

<?php

$input1 = $_POST['input1'];

if(isset($_POST['submit'])&& $input1<10){

if ($input1 == 1){
$table[0][0] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 2){
$table[0][1] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 3){
$table[0][2] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 4){
$table[1][0] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 5){
$table[1][1] = "X";
$table[0][0] = "O";
}
elseif ($input1 == 6){
$table[1][2] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 7){
$table[2][0] = "X";
$table[1][1] = "O";
}
elseif ($input1 == 8){
$table[2][1] = "X";
$table[0][0] = "O";
}
elseif ($input1 == 9){
$table[2][2] = "X";
$table[1][1] = "O";
}
$_SESSION['table']=$table;

header('location:input2.php');

}
elseif($input1>9) {
	echo"Type in a valid number.";
}
?>
