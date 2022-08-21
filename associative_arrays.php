<?php
$ages = array(
    'Ahmed' => 27,  // key => value مفتاح وقيمة لكل index
    'Ali' => 30,
    'Mohammed' => 52,
    'Bakr' => 37,
     );
//echo count($ages);
foreach ($ages as $name => $ages) {
  //  echo $name."<br>"; طباعة الاسما فقط 
  // ولكن اذا اردت ان اطبع الاسما و اقول ان لكل اسم او شخص عمر 
  echo $name . " has " . $ages . "year old. <br> ";
}

?>