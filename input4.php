<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$table=$_SESSION['table'];

echo $table[0][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[0][2]."<br>"."<br>";
echo $table[1][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[1][2]."<br>"."<br>";
echo $table[2][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][1]."&nbsp;&nbsp;&nbsp;&nbsp;".$table[2][2]."<br>"."<br>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Put X at :<input type='text' name='input4' placeholder='any no. between 1 to 9'>
<input type='submit' value='Submit' name='submit'>
</form>

<?php

$input4=$_POST['input4'];


if(isset($_POST['submit'])&& $input3<10){
	
	if($table[0][0] == "X" && $table[0][1] == "X" && $table[2][0] == "X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	
	//**************************Computer wins X = (1,2,7)***********************************
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $table[2][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $table[2][0] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $table[2][1] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,3,8)***********************************
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $table[2][1] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][2] == "X" && $table[2][1] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,4,3)***********************************
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,6,7)***********************************
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][0] == "X" && $table[1][0] == "X" && $table[0][2] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,7,6)***********************************
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,8,3)***********************************
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][0] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (1,9,4)***********************************
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][0] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[0][2] == "X" && $table[2][2] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (2,3,9)***********************************
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $table[2][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[0][2] == "X" && $table[2][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	//**************************Computer wins X = (2,4,1)***********************************
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $table[0][0] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $table[0][0] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][0] == "X" && $table[0][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (2,6,1)***********************************

	elseif($table[0][1] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************
	
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $table[2][2] =="X" && $table[2][1] != "O" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (2,7,9)***********************************
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $table[2][2] =="X" && $table[2][1] != "O" && $input4 == 3){
		$table[0][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][0] == "X" && $table[2][2] =="X" && $table[2][1] != "O" && $input4 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}
		
	//**************************Computer wins X = (2,8,6)***********************************
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][1] == "X" && $table[2][2] == "X" && $table[1][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}	

	//**************************Computer wins X = (2,9,6)***********************************
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $table[1][2] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][1] == "X" && $table[2][2] == "X" && $table[1][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[1][0] == "X" && $table[2][1] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}	

	//**************************Computer wins X = (3,4,8)***********************************
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $table[2][1] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][2] == "X" && $table[1][0] == "X" && $table[2][1] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}	

	//**************************Computer wins X = (3,6,1)***********************************
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}	
	elseif($table[0][2] == "X" && $table[1][2] == "X" && $table[0][0] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}	
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}	

	//**************************Computer wins X = (3,6,1)***********************************
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][0] == "X" && $table[1][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (3,8,6)***********************************
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[0][2] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (3,9,4)***********************************
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[0][2] == "X" && $table[2][1] == "X" && $table[1][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	//**************************Computer wins X = (4,6,9)***********************************
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $table[2][2] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $table[2][2] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][0] == "X" && $table[1][2] == "X" && $table[2][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][0] == "X" && $table[2][2] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (4,7,9)***********************************
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $table[0][1] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][0] == "X" && $table[0][1] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][1] == "X" && $table[2][2] =="X" && $table[0][2] != "O" && $input4 == 3){
		$table[0][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (4,8,9)***********************************
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $table[2][2] =="X" && $table[0][2] != "O" && $input4 == 2){
		$table[0][1] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][1] == "X" && $table[2][2] =="X" && $table[0][2] != "O" && $input4 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (4,9,2)***********************************
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[1][2] == "X" && $table[2][0] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[2][1] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (5,6,7)***********************************
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $table[2][0] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][1] == "X" && $table[1][2] == "X" && $table[2][0] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[2][0] == "X" && $table[0][1] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $table[0][1] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	elseif($table[1][1] == "X" && $table[2][0] == "X" && $table[0][1] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (5,8,3)***********************************
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][1] == "X" && $table[2][1] == "X" && $table[0][2] =="X" && $input4 == 9){
		$table[2][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][1] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	elseif($table[1][1] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][0] == "X" && $table[2][1] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (6,7,8)***********************************
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $table[2][1] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][0] == "X" && $table[2][1] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}	
	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 7){
		$table[2][0] = "X";
		$table[1][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (6,8,1)***********************************
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[2][0] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[1][2] == "X" && $table[2][2] == "X" && $table[2][0] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[0][0] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (6,9,7)***********************************

	elseif($table[1][2] == "X" && $table[2][2] == "X" && $table[2][0] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[1][2] == "X" && $table[2][2] == "X" && $table[2][0] =="X" && $input4 == 4){
		$table[1][0] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[2][0] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[0][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (7,8,1)***********************************
	elseif($table[2][0] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 2){
		$table[0][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[2][0] == "X" && $table[2][1] == "X" && $table[0][0] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[2][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 6){
		$table[1][2] = "X"; 
		$table[0][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}

	//**************************Computer wins X = (7,9,2)***********************************
	elseif($table[2][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 1){
		$table[0][0] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[2][0] == "X" && $table[2][2] == "X" && $table[0][1] =="X" && $input4 == 3){
		$table[0][2] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	//************************************************************************************

	elseif($table[2][1] == "X" && $table[2][2] == "X" && $table[1][0] == "X" && $input4 == 2){
		$table[0][1] = "X";
		$table[1][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[2][1] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 5){
		$table[1][1] = "X";
		$table[0][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
	elseif($table[2][1] == "X" && $table[2][2] == "X" && $table[1][0] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[1][1] = "O";
		echo '<script>alert("Computer Wins");</script>';}
		$_SESSION['table']=$table;
		header('location:output.php');
}
		
else {
	echo'<script>alert("Type in a valid number");window.location.reload()"</script>';
	}

?>
