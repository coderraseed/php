<?php 
// Magic of printf() function


/*
//PHP manual
$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 is 'A'

// notice the double %%, this prints a literal '%' character
printf("%%b = '%b'\n", $n); // binary representation
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function
printf("%%d = '%d'\n", $n); // standard integer representation
printf("%%e = '%e'\n", $n); // scientific notation
printf("%%u = '%u'\n", $n); // unsigned integer representation of a positive integer
printf("%%u = '%u'\n", $u); // unsigned integer representation of a negative integer
printf("%%f = '%f'\n", $n); // floating point representation
printf("%%o = '%o'\n", $n); // octal representation
printf("%%s = '%s'\n", $n); // string representation
printf("%%x = '%x'\n", $n); // hexadecimal representation (lower-case)
printf("%%X = '%X'\n", $n); // hexadecimal representation (upper-case)

printf("%%+d = '%+d'\n", $n); // sign specifier on a positive integer
printf("%%+d = '%+d'\n", $u); // sign specifier on a negative integer
 $s = 'monkey';
$t = 'many monkeys';

printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces
printf("[%-10s]\n",   $s); // left-justification with spaces
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.9s]\n",  $t); // right-justification but with a cutoff of 8 characters
printf("[%-10.9s]\n", $t); // left-justification but with a cutoff of 8 characters

*/
// My Practice
$fname = "Hasin";
$lname = "Hayder";
$mname = "PHP boss";

 printf("My php teacher's full name is %s %s\n", $fname, $lname);
 
//printf("My php teacher\'s full name is %3$s %2$s %1$s ", $fname, $lname, $mname);//this line wrong code because use of double quotations

//Variable swapping
printf('My php teacher\'s full name is %3$s %2$s %1$s ', $fname, $lname, $mname);// Argument numbering

echo "\n";

//Number converting 
printf("The binary number equivalent of %d is %b", 12,12);
echo "\n";
printf('The binary number equivalent of %1$d is %1$b', 12);
echo "\n";


//Doshomik er porer number er ghor control
$n=464.002;
printf("%.2f", $n);
echo "\n";

//Number ke inline er jonno ager ghor control by printf() function
$r=456;
$s=45;
printf("%05d \n", $r);
printf("%05d \n", $s);

//Doshomiker porer ghor and ager ghor control by printf() function
$m = 45.4877;
$p = 78.124;
printf("%07.2f \n", $m);//.2f mane hosse doshimik er por dui ghor dekhanor jonno
printf("%08.2f \n", $p);
printf("%07.3f \n", $m);
printf("%08.3f \n", $p);
 

