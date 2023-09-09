<?php

$student = [1,"axios",3,"foo","pop"];
$teacher = array(2,"board","chalk",69);
print_r($student[0]); 
echo (count($student)."");

for($i = 0; $i < count($teacher); $i++ ) {
    print_r($teacher[$i]."\n");
}