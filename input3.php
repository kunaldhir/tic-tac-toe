<?php
session_start();
$table=$_SESSION['table'];

echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Put X at :<input type='text' name='input2' placeholder='any no. between 1 to 9'>
<input type='submit' value='Submit' name='submit'>
</form>

<?php

$input3=$_POST['input3'];

if(isset($_POST['submit'])&& $input2<10){
	
	if($table[0][0] == $table[0][1] == "X" && $input3 == 7)
		$table[2][0] = "X";
		$table[1][2] = "O";
	
	//**************************Computer wins X = (1,2)***********************************
	elseif($table[0][0] == $table[0][1] == "X" && $input3 == 4)
		$table[1][0] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	elseif($table[0][0] == $table[0][1] == "X" && $input3 == 6)
		$table[1][2] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");window.location.tic.php;</script>';	
	elseif($table[0][0] == $table[0][1] == "X" && $input3 == 8)
		$table[2][1] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	elseif($table[0][0] == $table[0][1] == "X" && $input3 == 9)
		$table[2][2] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	//************************************************************************************
	
	elseif($table[0][0] == $table[0][2] == "X" && $input3 == 8)
		$table[2][1] = "X";
		$table[1][0] = "O";
	
	//**************************Computer wins X = (1,3)***********************************
	elseif($table[0][0] == $table[0][2] == "X" && $input3 == 4)
		$table[1][0] = "X";
		$table[2][1] = "O";
	echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	elseif($table[0][0] == $table[0][2] == "X" && $input3 == 6)
		$table[1][2] = "X";
		$table[2][1] = "O";
	echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	elseif($table[0][0] == $table[0][2] == "X" && $input3 == 7)
		$table[2][0] = "X";
		$table[2][1] = "O";
	echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	elseif($table[0][0] == $table[0][2] == "X" && $input3 == 9)
		$table[2][2] = "X";
		$table[2][1] = "O";
	echo '<script>alert("Computer wins");window.location.tic.php;</script>';
	//************************************************************************************
}

?>
