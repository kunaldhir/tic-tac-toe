<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$table=$_SESSION['table'];

echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Put X at :<input type='text' name='input3' placeholder='any no. between 1 to 9'>
<input type='submit' value='Submit' name='submit'>
</form>

<?php

$input3=$_POST['input3'];


if(isset($_POST['submit'])&& $input2<10){
	
	if($table[0][0] == "X" && $table[0][1] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[1][0] = "O";}
	
	//**************************Computer wins X = (1,2)***********************************
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");</script>';}	
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][0] = "O";
        echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][0] = "O";}
	
	//**************************Computer wins X = (1,3)***********************************
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[0][1] = "O";}

	//**************************Computer wins X = (1,4)***********************************
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[1][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][1] = "O";}

	//**************************Computer wins X = (1,6)***********************************
	elseif($table[0][0] == "X" && $table[1][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][2] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[2][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";}
	
	//**************************Computer wins X = (1,7)***********************************
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[1][0] = "O";}

	//**************************Computer wins X = (1,8)***********************************
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";}

	//**************************Computer wins X = (1,9)***********************************
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[0][2] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[1][0] = "O";}

	//**************************Computer wins X = (2,3)***********************************
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[1][0] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (2,4)***********************************
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][2] = "O";}
	
	//**************************Computer wins X = (2,6)***********************************
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[2][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[1][0] = "O";}

	//**************************Computer wins X = (2,7)***********************************
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[2][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";}

	//**************************Computer wins X = (2,8)***********************************
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $input3 == 7){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $input3 == 9){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
		
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (2,9)***********************************
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][0] = "O";}
		
	//**************************Computer wins X = (3,4)***********************************
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[1][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][1] = "O";}

	//**************************Computer wins X = (3,6)***********************************
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";}

	//**************************Computer wins X = (3,7)***********************************
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][2] = "O";}

	//**************************Computer wins X = (3,8)***********************************
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][1] = "O";}

	//**************************Computer wins X = (3,9)***********************************
	elseif($table[0][2] == "X" && $table[2][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[1][2] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (4,6)***********************************
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";}

	//**************************Computer wins X = (4,7)***********************************
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][1] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][0] = "O";}

	//**************************Computer wins X = (4,8)***********************************
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (4,9)***********************************
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $input3 == 3){
		$table[0][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[1][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (5,6)***********************************
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[2][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][1] = "O";}

	//**************************Computer wins X = (5,7)***********************************
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][0] = "O";}

	//**************************Computer wins X = (5,8)***********************************
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][1] = "O";}

	//**************************Computer wins X = (5,9)***********************************
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][0] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";}
	
	//**************************Computer wins X = (6,7)***********************************
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $input3 == 9){
		$table[2][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][1] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (6,8)***********************************
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][2] == "X" && $input3 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";}

	//**************************Computer wins X = (6,9)***********************************
	elseif($table[1][2] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][2] == "X" && $input3 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif ($table[2][0] == "X" && $table[2][1] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[1][0] = "O";}

	//**************************Computer wins X = (7,8)***********************************
	elseif ($table[2][0] == "X" && $table[2][1] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][1] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][1] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][1] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif ($table[2][0] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][0] = "O";}

	//**************************Computer wins X = (7,9)***********************************
	elseif ($table[2][0] == "X" && $table[2][2] == "X" && $input3 == 1){
		$table[0][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][0] == "X" && $table[2][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************

	elseif ($table[2][1] == "X" && $table[2][2] == "X" && $input3 == 4){
		$table[1][0] = "X";
		$table[0][2] = "O";}

	//**************************Computer wins X = (8,9)***********************************
	elseif ($table[2][1] == "X" && $table[2][2] == "X" && $input3 == 2){
		$table[0][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][1] == "X" && $table[2][2] == "X" && $input3 == 3){
		$table[0][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][1] == "X" && $table[2][2] == "X" && $input3 == 5){
		$table[1][1] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif ($table[2][1] == "X" && $table[2][2] == "X" && $input3 == 6){
		$table[1][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer wins");</script>';}
		$_SESSION['table']=$table;
		header('location:input4.php');
}

else {
	echo'<script>alert("Type in a valid number");window.location.reload()"</script>';
	}

?>
