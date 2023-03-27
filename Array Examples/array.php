<?php
$data = [
		['category'=>1, 'attribute'=>1, 'option'=>1],
		['category'=>1, 'attribute'=>1, 'option'=>2],
		['category'=>1, 'attribute'=>2, 'option'=>3],
		['category'=>1, 'attribute'=>2, 'option'=>4],
		['category'=>2, 'attribute'=>3, 'option'=>5],
		['category'=>2, 'attribute'=>3, 'option'=>6],
		['category'=>2, 'attribute'=>4, 'option'=>7],
		['category'=>2, 'attribute'=>4, 'option'=>8],

];
echo "<pre>";
//$data1 = [];

//$data1[1] = [];
//$data1[1][1] = [];
//$data1[1][1][1] = 1;
//$data1[1][1][2] = 2;
//$data1[1][2] = [];
//$data1[1][2][3] = 3;
//$data1[1][2][4] = 4;

//$data1[2] = [];
//$data1[2][3] = [];
//$data1[2][3][5] = 5;
//$data1[2][3][6] = 6;
//$data1[2][4] = [];
//$data1[2][4][7] = 7;
//$data1[2][4][8] = 8;
	//print_r($data1);


$data2 = [];
$line = 1;
foreach ($data as $row) 
{	
	$category = $row['category'];
	$attribute = $row['attribute'];
	$option = $row['option'];
	//if (!array_key_exists($category, $data2)) 
	//{
	//	$data2[$category] = [];
	//	if (!array_key_exists($attribute, $data2)) 
	//	{
	//		$data2[$category][$attribute] = [];
	//	}
	//}	
	$data2[$category][$attribute][$option] = time();
	//sleep(1);
	//print_r($data2);
	if ($line == 8) 
	{
		break;
	}
	$line++;
}
	print_r($data2);
?>