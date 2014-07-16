<?php
$table = array
(
array(1, 2, 3),
array(4, 5, 6),
array(7, 8, 9)
);
echo $table[0][0]."  ".$table[0][1]."  ".$table[0][2];
echo $table[1][0]."  ".$table[1][1]."  ".$table[1][2];
echo $table[2][0]."  ".$table[2][1]."  ".$table[2][2];

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Put X at :<input type="text" name="input" placeholder="Type a number between 1 to 9">
<input type="submit" value="Submit" name="Submit">
</form>
<?php



?>
<?php
global $input;
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
Put X at :<input type="text" name="input" placeholder="any no. between 1 to 9">
<input type="submit" value="Submit" name="submit">
</form>
<?php
$input = $_POST['input'];
if ($input = "1"){
	$table[0][0] = "X";
	$table[1][1] = "O";
}
elseif ($input = "2"){
	$table[0][1] = "X";
	$table[0][0] = "O";
}
elseif ($input = "3"){
	$table[0][2] = "X";
	$table[1][1] = "O";

}
elseif ($input = "4"){
	$table[1][0] = "X";
}
elseif ($input = "5"){
	$table[1][1] = "X";
}
elseif ($input = "6"){
	$table[1][2] = "X";
}
elseif ($input = "7"){
	$table[2][0] = "X";
}
elseif ($input = "8"){
	$table[2][1] = "X";
}
elseif ($input = "9"){
	$table[2][2] = "X";
}
//***********************SWITCH not working*************************//
/*switch($input){
		case "1":
			$table [0][0] = "X";
		case "2":
			$table [0][1] = "X";
		case "3":
			$table [0][2] = "X";
		case "4":
			$table [1][0] = "X";
		case "5":
			$table [1][1] = "X";
		case "6":
			$table [1][2] = "X";
		case "7":
			$table [2][0] = "X";
		case "8":
			$table [2][1] = "X";
		case "9":
			$table [2][2] = "X";
}*/

if(isset($_POST['submit'])){
	echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
	echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
	echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";
}
elseif(!isset($_POST['submit'])){
	echo "Type in a valid number.";
}

?>
