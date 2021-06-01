<?php

//count()

$arr = array('php','c','c++','java','android');
echo count($arr);

//array_count_values()

$arr = array('php','c','c++','java','android');
$newarr = array_count_values($arr);

foreach($newarr as $key => $value){
    echo"<br/>$key- <strong>$value</strong>";

}

//array_sum()

$myarray = array(1,2,4,6,7);
echo "<br/>".array_sum($myarray);

//array_product()

$myarray = array(1,2,4,6,7);
echo "<br/>".array_product($myarray);

//array_reverse()

$arr = array('php','c','c++','java','android');
$revarr=array_reverse($arr);
echo"<br>";
print_r($revarr);

//in_array()

$arr = array('php','c','c++','java','android');
$temp = in_array('php', $arr);
echo "<br>".$temp;

//array_rand() function
$a=array(11,30,60.50,'c','php');
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];


//array_unique() function 
$a=array(11,30,60.50,'c','php');
print_r(array_unique($a));


//array_merge() function 
$a1=array(11,30,60.50,'c','php');
$a2=array(10,20,30,40,50);
$NewArray=array_merge($a1,$a2);
print_r($NewArray); 


//array_search() function 
$a=array(11,30,60.50,'c','php');
$search=array_search('c', $a);
echo $search;


//range() function 
$a = range("11", "20");
foreach($a as $key => $value){
echo "<br /> $key - $value ";
} 


//sort() function 
$a=array(2,66,44,77,256,6);
sort($a);
print_r($a); 


//rsort() function  
$a=array(2,66,44,77,256,6);
rsort($a);
print_r($a); 


//asort() function 
$a=array(2,66,44,77,256,6);
asort($a);
print_r($a); 

//ksort() function ->key based
$a=array(
    "hair" => "black", 
    "graps" => "green", 
    "banana" => "yellow" 
    );
    ksort($a);
    foreach ($a as $key => $value){
    echo "<br/>$key - $value "; 
    }
    
    
    //krsort() function ->key based
    $a=array(
    "hair" => "black", 
    "graps" => "green", 
    "banana" => "yellow" 
    );
    krsort($a);
    foreach ($a as $key => $value){
    echo "<br/>$key - $value "; 
    } 

    //shuffle() function
$a=array(11,30,60.50,'c','php');
shuffle($a); 
foreach ($a as $key => $value){
echo "<br /> $value "; 
}

//array_key_exists() function 
$a=array("a" => "Armstrong", "b" => "bigboss");
echo array_key_exists('a',$a); 


//array_change_key_case() function
$a=array(
 
"hair" => "black", 
"graps" => "green", 
"banana" => "yellow"
);
$uppercase = array_change_key_case($a,CASE_UPPER);
print_r($uppercase); 


//array_combine() function  
//Both ArrayElements Must be Equal
$a1= array("hair" , "graps" , "banana");
$a2= array("black","green", "yellow");
$b= array_combine($a1,$a2);
print_r($b); 

//end() function 
$a=array(11,30,60.50,'c','php');
echo end($a); 


//compact() function 
$name="parth";
$subject="php";
$a=compact("name","subject");
print_r($a); 


//array_flip() function 
$a=array("p" => "parth", "j" => "janhvi", "a" => "arpit");
$b=array_flip($a);
print_r($b);


//array_diff() function 
$a=array(11,30,60.50,'c','php');
$b=array(11,60.50,'php');
$diff=array_diff($a,$b);
print_r($diff);

//array_intersect() function 
$a1=array(0=>1,1=>2,2=>"c");
$a2=array(3=>"c",4=>5,5=>"php");
print_r(array_intersect($a1,$a2));


//array_values() function 
$a=array("i"=>"c","want"=>"python","learn"=>"php");
$b=array_values($a);
foreach($b as $key => $value){
echo "<br/>$key - $value";  
} 


//array_push() function 
$a=array("php","html");
array_push($a,"css","js");
print_r($a); 


//array_pop() function 
$a=array(11,30,60.50,'c','php');
array_pop($a); 
print_r($a);
array_pop($a); 
print_r($a);


//explode() function 
$s="coding is my love";
$a=explode(" ",$s);
print_r($a); 


//implode() function 
$a=array("coding","is","my","love");
$s=implode(" ", $a);
echo $s;

?>


