<?php

$data = [
		['category'=>1, 'categoryName'=>'c1', 'attribute'=>1, 'attributeName'=>'a1', 'option'=>1, 'optionName'=>'o1'],
		['category'=>1, 'categoryName'=>'c1', 'attribute'=>1, 'attributeName'=>'a1', 'option'=>2, 'optionName'=>'o2'],
		['category'=>1, 'categoryName'=>'c1', 'attribute'=>2, 'attributeName'=>'a2', 'option'=>3, 'optionName'=>'o3'],
		['category'=>1, 'categoryName'=>'c1', 'attribute'=>2, 'attributeName'=>'a2', 'option'=>4, 'optionName'=>'o4'],
		['category'=>2, 'categoryName'=>'c2', 'attribute'=>3, 'attributeName'=>'a3', 'option'=>5, 'optionName'=>'o5'],
		['category'=>2, 'categoryName'=>'c2', 'attribute'=>3, 'attributeName'=>'a3', 'option'=>6, 'optionName'=>'o6'],
		['category'=>2, 'categoryName'=>'c2', 'attribute'=>4, 'attributeName'=>'a4', 'option'=>7, 'optionName'=>'o7'],
		['category'=>2, 'categoryName'=>'c2', 'attribute'=>4, 'attributeName'=>'a4', 'option'=>8, 'optionName'=>'o8'],
];

$output = [];
echo "<pre>";
$line = 1;

foreach ($data as $row) 
{
	$category = $row['category'];
	$attribute = $row['attribute'];
	$option = $row['option'];

	if (!array_key_exists('category', $output)) 
	{
		$output['category'] = [];
	}
	
	if (!array_key_exists($category, $output['category'])) 
	{
		$output['category'][$category] = [];
	}

	if (!array_key_exists('name', $output['category'][$category])) 
	{
		$output['category'][$category]['name'] = $row['categoryName'];
	}
	
	if (!array_key_exists('attribute', $output['category'][$category])) 
	{
		$output['category'][$category]['attribute'] = [];
	}
	
	if (!array_key_exists($attribute, $output['category'][$category]['attribute'])) 
	{
		$output['category'][$category]['attribute'][$attribute] = [];
	}

	if (!array_key_exists('name', $output['category'][$category]['attribute'][$attribute])) 
	{
		$output['category'][$category]['attribute'][$attribute]['name'] = $row['attributeName'];
	}

	if (!array_key_exists('option', $output['category'][$category]['attribute'][$attribute])) 
	{
		$output['category'][$category]['attribute'][$attribute]['option'] = [];
	}
	
	if (!array_key_exists($option, $output['category'][$category]['attribute'][$attribute]['option'])) 
	{
		$output['category'][$category]['attribute'][$attribute]['option'][$option] = [];
	}

	if (!array_key_exists('name', $output['category'][$category]['attribute'][$attribute]['option'][$option])) 
	{
		$output['category'][$category]['attribute'][$attribute]['option'][$option]['name'] = $row['optionName'];
	}

	if ($line==8) 
	{
		break;
	}
	$line++;
}
print_r($output);
?>