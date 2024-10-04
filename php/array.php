<?php 

$students = [
  101 => ['name' => 'john', 'age' => 20 , 'grade' => 'A'],
  102 => ['name' => 'jane', 'age' => 21 , 'grade' => 'B'],
  103 => ['name' => 'jill', 'age' => 22 , 'grade' => 'C'],
  104 => ['name' => 'jack', 'age' => 23 , 'grade' => 'D'],
];

//add new student
$students[105] = ['name' => 'joe', 'age' => 24 , 'grade' => 'E'];

// /update student 
$students[101]['grade'] = 'F';

//delete student
unset($students[103]);


//display studnets

foreach ($students as $id => $student) {    

  echo "ID: $id, Name: {$student['name']}, Age: {$student['age']}, Grade : {$student['grade']}\n "; 

}
