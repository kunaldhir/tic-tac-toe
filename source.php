<?
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
