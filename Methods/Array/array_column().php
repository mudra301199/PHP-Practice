<?php

 $records = array(
    array(
        'id' => 2135,
        'first_name' => 'Zara',
        'last_name' => 'Ali',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Nuha',
        'last_name' => 'Mac',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Shifa',
        'last_name' => 'Alam',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Riya',
        'last_name' => 'Sweet',
    )
  );

 $first_names = array_column($records, 'first_name');
 print_r($first_names);
?>