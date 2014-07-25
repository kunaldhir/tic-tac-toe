<?php

session_start();
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
	
	if($table[0][0] == "X" && $table[0][1] == "X" && $table[1][2] =="X" && $input4 == 6){
		$table[1][2] = "X";
		$table[2][2] = "O";
		echo '<script>alert("Match Drawn");</script>';}
	
	//**************************Computer wins X = (1,2,7)***********************************
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $table[1][2] =="X" && $input4 == 8){
		$table[2][1] = "X";
		$table[1][2] = "O";
		echo '<script>alert("Computer wins");</script>';}
	elseif($table[0][0] == "X" && $table[0][1] == "X" && $table[1][2] =="X" && $input4 == 9){
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



echo '<script>window.location="http://localhost/input4.php"</script>';


}
elseif($input4>9) {
	echo"Type in a valid number.";
}
$_SESSION['table']=$table;
?>
