<?php

$grade = array (
    "Math"=> "3",
    "Art"=>"5",
    "History"=>"4",
    "Music"=>"5",
);

//$grade = ['Math'] = "3"
//$grade = ['Art'] = "5"
//$grade = ['History'] = "4"
//$grade = ['Music'] = "5"

//echo "Math grade is  ".$grade['Math'];

foreach($grade as $subject => $grade){
    echo "Subject : ".$subject . "/ Grade: ".$grade;
    echo "<br>";
}
?>