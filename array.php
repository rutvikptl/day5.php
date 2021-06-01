
<?php
//method1
//numerical array

$a[0]=20;
$a[1]=30;
$a[2]=40;
$a[3]="ac";
$a[0]="20";


//method2
//index dynamic array

$a[]=20;
$a[]=30;
$a[]=40;
$a[]="ac";
$a[]="20";

//method3

$a=array(10,20,30,"ac","ankit","php");

for($i=0;$i<count($a);$i++){
    echo"<br>".$a[$i];
}

echo"<pre>";
print_r($a);
echo"</pre>";
echo"<pre>";
var_dump($a);
echo"</pre>";

//method1//key=value
$a[0]=css;
$a['ab']=30;
$a[d]=40;
$a['java']="ac";
$a[30]="html";

//method2

$a = array(
0 => 10,
"ab" => "bootstrap",
10 => "ten");

echo "ab for".$a['bootstrap'];
