<?php
$servername = "localhost";
$username = "root";
$password = "admin";

$conn = new mysqli($servername, $username, $password);

$sql="CREATE DATABASE Video";
$conn->query($sql);
$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE C(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='C.png';

$Names=array('C Programming Tutorial - 1 - Introduction',
'C Programming Tutorial - 2 - Setting Up Code Blocks',
'C Programming Tutorial - 3 - How Computer Programs Work',
'C Programming Tutorial - 4 - Print Text on the Screen',
'C Programming Tutorial - 5 - Comments',
'C Programming Tutorial - 6 - Conversion Characters',
'C Programming Tutorial - 7 - Variables',
'C Programming Tutorial - 8 - String Terminator',
'C Programming Tutorial - 9 - I Need Arrays',
'C Programming Tutorial - 10 - Creating a Header File',
'C Programming Tutorial - 11 - Getting Input with scanf',
'C Programming Tutorial - 12 - Math Operators',
'C Programming Tutorial - 13 - Cats Love Bagels',
'C Programming Tutorial - 14 - Calculating the Average Age',
'C Programming Tutorial - 15 - How to Calculate Interest',
'C Programming Tutorial - 16 - Typecasting',
'C Programming Tutorial - 17 - Making Decisions Using if Statements',
'C Programming Tutorial - 18 - Nesting if Statements',
'C Programming Tutorial - 19 - if else',
'C Programming Tutorial - 20 - What about more than two choices?',
'C Programming Tutorial - 21 - Dont Beat Up Little Kids',
'C Programming Tutorial - 22 - or',
'C Programming Tutorial - 23 - Shorthand if else',
'C Programming Tutorial - 24 - Increment Operator',
'C Programming Tutorial - 25 - while Loops',
'C Programming Tutorial - 26 - do while Loops',
'C Programming Tutorial - 27 - for Loop',
'C Programming Tutorial - 28 - How to Make a Table',
'C Programming Tutorial - 29 - break',
'C Programming Tutorial - 30 - continue',
'C Programming Tutorial - 31 - switch',
'C Programming Tutorial - 32 - A Few Cool Character Functions',
'C Programming Tutorial - 33 - isupper and Challenge #1!',
'C Programming Tutorial - 34 - strcat and strcpy',
'C Programming Tutorial - 35 - puts and gets',
'C Programming Tutorial - 36 - Rounding Numbers',
'C Programming Tutorial - 37 - Absolute Value with abs',
'C Programming Tutorial - 38 - Random Number Generator with rand',
'C Programming Tutorial - 39 - int and float Arrays',
'C Programming Tutorial - 40 - Why I am Banned from Fantasy Hockey',
'C Programming Tutorial - 41 - Sorting Arrays',
'C Programming Tutorial - 42 - Pointers',
'C Programming Tutorial - 43 - Dereference Pointer',
'C Programming Tutorial - 44 - Arrays and Pointers',
'C Programming Tutorial - 45 - Strings and Pointers',
'C Programming Tutorial - 46 - Problems with String Lengths',
'C Programming Tutorial - 47 - The Heap',
'C Programming Tutorial - 48 - Creating an Expandable Program using the Heap',
'C Programming Tutorial - 49 - Structures',
'C Programming Tutorial - 50 - Writing Files in C',
'C Programming Tutorial - 51 - How to Read Files',
'C Programming Tutorial - 52 - Append to File',
'C Programming Tutorial - 53 - Random File Access',
'C Programming Tutorial - 54 - Functions',
'C Programming Tutorial - 55 - Global vs Local Variables',
'C Programming Tutorial - 56 - Passing Arguments to Functions',
'C Programming Tutorial - 57 - Return Values',
'C Programming Tutorial - 58 - Pass by Reference vs Pass by Value');

$Links=array(
'https://www.youtube.com/embed/2NWeucMKrLI',
'https://www.youtube.com/embed/3DeLiClDd04',
'https://www.youtube.com/embed/iWx3yyFMWQA',
'https://www.youtube.com/embed/oSpmApiUsHw',
'https://www.youtube.com/embed/oX2FpFYXE38',
'https://www.youtube.com/embed/To7WA4ijQQ0',
'https://www.youtube.com/embed/k1ur8rX-DQQ',
'https://www.youtube.com/embed/LEHaSSYreeo',
'https://www.youtube.com/embed/7F-Q2oVBYKk',
'https://www.youtube.com/embed/1EeetMPACMI',
'https://www.youtube.com/embed/hSHFjPvqFjw',
'https://www.youtube.com/embed/T3sj5iTK_0M',
'https://www.youtube.com/embed/rubhV7Bu34E',
'https://www.youtube.com/embed/cgkGwRonMU4',
'https://www.youtube.com/embed/_oqmPcqWHlE',
'https://www.youtube.com/embed/ohVRskLlHqM',
'https://www.youtube.com/embed/PXwWoL0IG5A',
'https://www.youtube.com/embed/FtZ1YgSFqs0',
'https://www.youtube.com/embed/KgVzRmUPsdo',
'https://www.youtube.com/embed/DZ0ZXipUx-A',
'https://www.youtube.com/embed/PO3BibcbkK8',
'https://www.youtube.com/embed/brC8O7AeCFA',
'https://www.youtube.com/embed/pze0PKwdfl0',
'https://www.youtube.com/embed/nNSn1uVNyiU',
'https://www.youtube.com/embed/7pAXm7WEA2I',
'https://www.youtube.com/embed/eU6no0EEJM0',
'https://www.youtube.com/embed/FPjLbPu5BsQ',
'https://www.youtube.com/embed/Y17-tKQXrxs',
'https://www.youtube.com/embed/JKVc02-GmGs',
'https://www.youtube.com/embed/4XaaIGBdhaw',
'https://www.youtube.com/embed/qZRP5hKGHrs',
'https://www.youtube.com/embed/IJp4KU7SiuQ',
'https://www.youtube.com/embed/PVTDEOeSP88',
'https://www.youtube.com/embed/-SSsm0gVu3o',
'https://www.youtube.com/embed/yvpCxgV3AZo',
'https://www.youtube.com/embed/XxwGqFaxJK0',
'https://www.youtube.com/embed/VcEHkVStszM',
'https://www.youtube.com/embed/QCe2ks9b8YI',
'https://www.youtube.com/embed/IPYA3b3_nyk',
'https://www.youtube.com/embed/_LDN79j5H5s',
'https://www.youtube.com/embed/6qiNJWw5aLI',
'https://www.youtube.com/embed/5BpYD7TxvKU',
'https://www.youtube.com/embed/vjq-13YADeI',
'https://www.youtube.com/embed/sq6n8dL117c',
'https://www.youtube.com/embed/-9fqo94G6YU',
'https://www.youtube.com/embed/Y7R8m-10GJc',
'https://www.youtube.com/embed/Buq071iqYAM',
'https://www.youtube.com/embed/gWppLYaCICM',
'https://www.youtube.com/embed/VMFKz7Klx7I',
'https://www.youtube.com/embed/38I_AUMpKpQ',
'https://www.youtube.com/embed/8nIilb2kiSU',
'https://www.youtube.com/embed/Hxhbp1WSDJA',
'https://www.youtube.com/embed/yPYrxbkY2rk',
'https://www.youtube.com/embed/lv5IDF7dmBk',
'https://www.youtube.com/embed/sAj_Jrqrg5g',
'https://www.youtube.com/embed/_oyuKw3vBf8',
'https://www.youtube.com/embed/_oyuKw3vBf8',
'https://www.youtube.com/embed/wAmq8eIkdI8');
for($i=0;$i<58;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO C (ID,Name,Url,Img)
VALUES ($i+1,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
