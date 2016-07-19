<?php
require('../Connect.php');
$sql="SELECT * FROM mc";
$result = mysql_query($sql,$conn)or die("SQL Error 1: " . mysql_error()); //select the date
srand((double) microtime() * 1000000); 
$questions = array();
$NoOfQuestion = 6;
for($i=0; $i<$NoOfQuestion; $i++){
	$tmp = rand(1,mysql_num_rows($result));
	for($i=0 ;$i< count($questions); $i++){
		if($questions[$i] == $tmp){
			$tmp = -1;
			break;
			}
	}
	if($tmp != -1)
		$questions[] = $tmp; 
	else $i--;
}

for ($i=0;$i<$NoOfQuestion;$i++)
   echo $questions[$i]."<br />";
?>