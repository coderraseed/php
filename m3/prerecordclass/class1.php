<?php
//In PHP, there are several types of loops that can be used to iterate through arrays or perform repetitive tasks. Here are the most common ones:

//for loop:
echo "=======This is FOR loop=========";
for ( $i = 0; $i < 10; $i++ ) {
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

//for loop break statement:
echo "=======This is FOR loop=========";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i == 5 ) {
        break;
    }
    echo $i;
    echo PHP_EOL;
}
//for loop continue statement
echo "=======This is FOR loop=========";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
      continue;
    }
    echo $i;
    echo PHP_EOL;
    echo PHP_EOL;
  }
/*   
//for loop with alternate syntax:
    for ($i = 0; $i < 5; $i++): ?>
        <li><?php echo $i; ?></li>
      <?php endfor;  */

//while loop:
$i = 0;
while ( $i < 10 ) {
    echo $i;
    $i++;
}

//while loop with continue and break:
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
  }
  if ($i == 8) {
    break;
  }
  echo $i;
  $i++;
}


//While infinite loop:
$i = 0;
while (true) {
  echo $i;
  $i++;
  if ($i == 10) {
    break;
  }
}

/* //while loop with list:
$people = array(
    array("John", "Doe", 30),
    array("Jane", "Doe", 25),
    array("Bob", "Smith", 40)
  );
  
  while (list($first, $last, $age) = each($people)) {
    echo $first . " " . $last . " is " . $age . " years old.<br>";
  } */
  


//do-while loop:
$i = 0;
do {
    echo $i;
    $i++;
} while ( $i < 10 );

//foreach loop:
$numbers = [ 1, 2, 3, 4, 5 ];
foreach ( $numbers as $value ) {
    echo $value;
}

//foreach loop with key:
$fruits = [ "apple" => "red", "banana" => "yellow", "orange" => "orange" ];
foreach ( $fruits as $key => $value ) {
    echo $key . " is " . $value;
}

//foreach nested loop
$colors = array("red", "green", "blue");
$fruits = array("apple", "banana", "orange");

foreach ($colors as $color) {
  foreach ($fruits as $fruit) {
    echo $color . " " . $fruit;
  }
}
//for-each loop with list:
$person = array("John", "Doe", 30);
list($first, $last, $age) = $person;
echo $first . " " . $last . " is " . $age . " years old.";


//for each loop with reference:
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as &$value) {
  $value = $value * 2;
}
print_r($numbers);

//foreach alternative syntax
 foreach ($items as $item): ?>
    <li><?php echo $item; ?></li>
  <?php endforeach; 




$i = 0;
loop:
if ($i < 10) {
  echo $i;
  $i++;
  goto loop;
}
