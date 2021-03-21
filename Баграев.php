 
<?php
//.1
//$a=5;
//$b=7;
//echo $a+$b;
//echo $a*$b;


//1.2.

//$x=4;
//$y=6;
//$s=$x*$x;
//$k=$y*$y;
//echo $s+$k;


//1.3.

//$a=3;
//$b=5;
//$v=8;
//echo ($a+$b+$v)/3;


//1.4.

//$a=2;
//$b=6;
//$v=9;
//$s=($a+1)*4;
//$k=2*($v-2*($a*$a)+($b*$b));
//echo $s-$k;


//1.5.

//$a=4;
//$b=8;
//$c=3;
//echo ($a+$b)/$c;
//echo ($a+$c)/$b;
//echo ($b+$c)/$a;


//1.6.

//$x=readline();
//$y=$x%10;
//$z=(($x%100)-$y)/10;
//$a=($x-($z*10)-$y)/100;
//echo $y+$z+$a;


//2.1. 

//$x=15;
//if ($x>10) {
//echo $x+100;
//} else {
//echo $x-30;
//}


//2.2. 

//$x=8;
//if ($x%2==0) {
//echo $x/2;
//} else {
//echo $x*3;
//}


//2.3. 

//$x=readline();
//if ($x>50) {
//echo $x*$x; 
//} elseif ($x>10 && $x<30) {
//echo "0";
//} else {
//echo "Ошибка";
//}


//2.4. 

//$x=15;
//$y=4;
//if ($x>$y) {
//echo $x; 
//} else {
//echo $y;
//}


//2.5. 

//$x=19;
//$y=143;
//if ($y-$x==100) {
//echo 'Да';
//} else {
//echo 'Нет';
//}


//2.6. 

//$x=readline();
//$y=readline();
//if ($x-$y<20 || $y-$x<20) {
//echo 'Да';
//} else {
//echo 'Нет';
//}


//2.7. 

//$x=readline();
//if ($a[0]>=$a[1] && $a[0]>=$a[2] && $a[1]>=$a[2]) {
//    echo $a[0].$a[1].$a[2];
//}elseif ($a[1]>=$a[0] && $a[1]>=$a[2] && $a[0]>=$a[2]) {
//    echo $a[1].$a[0].$a[2];
//}elseif ($a[2]>=$a[0] && $a[2]>=$a[1] && $a[0]>=$a[1]) {
//    echo $a[2].$a[0].$a[1];
//}elseif ($a[2]>=$a[0] && $a[2]>=$a[1] && $a[1]>=$a[0]) {
//    echo $a[2].$a[1].$a[0];
//}


//2.8.

//$a=readline();
//if($a=="1"){
//echo "Понедельник";
//} elseif($a=="2") {
//echo "Вторник";
//} elseif($a=="3") {
//echo "Среда";
//} elseif($a=="4") {
//echo "Четверг";
//} elseif($a=="5") {
//echo "Пятница";
//} elseif($a=="6") {
//echo "Суббота";
//} elseif($a=="7") {
//echo "Воскресенье";
//}


//2.9. 
//<?php
//$a=readline();
//if ($a>80) {
//echo 'Здравствуйте, уважаемый';
//} else {
//echo 'Успехов!';
//}


//3.1. 

//$arr[0]='Привет, ';
//$arr[1]='мир';
//$arr[2]='!';
//echo '$arr[0].$arr[1].$arr[2]';


//3.2. 

//$arr[0]='Привет, ';
//$arr[1]='мир';
//$arr[2]='!';
//$text = '$arr[0]+$arr[1]+$arr[2]';
//echo $text;


//3.3. 
//<?php
//$arr=array['Привет, ', 'мир', '!'];
//$arr[0]='Пока, ';
//echo $arr;


//3.4. 

//$a= arra[1,"",2,"","",3];
//foreach ($a as $value)
// {
//  if($a=="")
//  {}
//  else $arr2=$a;
// }
//echo $arr2;


//3.5.

//$arr=("Коля"=>"1000", "Вася"=>"500", "Петя"=>"200")
//echo $arr['Коля'];





            
            
//            3.7. 

//$a = array("a" => "1", "b" => "2", "c" => "3");
//echo $a["b"];


//3.8. 

//$a = array("a" => "1", "b" => "2", "c" => "3");
//echo $a["a"] + $a["b"] + $a["c"];


//3.9.

//$a = array("1" => "понедельник", "2" => "вторник", "3" => "среда", "4" => "четверг", "5" => "пятница", "6" => "суббота", "7" => "воскресенье");
//echo "сегодня - $a[4]";


//3.10. 
//$d = 3;
//$a = array("1" => "понедельник", "2" => "вторник", "3" => "среда", "4" => "четверг", "5" => "пятница", "6" => "суббота", "7" => "воскресенье");
//echo "сегодня - $a[$d]";


//4.1. 
//$a = [
//'sp'=>['azul', 'rojo', 'verde'],
//'en'=>['blue', 'red', 'green'],
//];
//echo $a['sp'][0];


//4.2. 
//$a = [
//'sp'=>['azul', 'rojo', 'verde'],
//'en'=>['blue', 'red', 'green'],
//];
//echo $arr['sp'][0]. ' ';
//echo $arr['sp'][1]. ' ';
//echo $arr['sp'][2].'<br />';


//4.3. 
//$arr = array(2, 8, 5, 3);
//$x = $arr[0] * $a[1];
//$y = $arr[2] * $arr[3];
//echo $a = $x + $y.'<br />';


//4.4. 
//echo $a[0] =1 .' ';
//echo $a[1] =2 .' ';
//echo $a[2] =3 .' ';
//echo $a[3] =4 .' ';
//echo $a[4] =5.'<br />';


//4.5. 
//$a = [
//'cms'=>['joomla', 'wordpress', 'drupal'],
//'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый'],
//];
//echo $a['cms'][0] .' ';   
//echo $a['cms'][2].'<br />';


//4.6. 
//$a = [
//'ru'=>['Понедельник', 'Вторник', 'Среда'],
//'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
//];
//echo $a['ru'][0] .' ';
//echo $a['en'][3] .'<br />';


        

//7.1
//$a="php";
//echo strtoupper($a);





//7.2
//$a="PHP";
//echo strtolower($a);



//7.3
//$a="london";
//echo ucfirst(strtolower($a));




//7.4
//$a="London";
//echo ucfirst(strtolower($a));




//7.5
//$a="london is the capital of great britan";
//echo ucwords($a);


//7.6
//$a="London";
//echo strtoupper(strlen($a));

//7.7
//$a = "html css php";
//echo strlen($a);




//7.8
//$password = "cucumber";
//$a = strlen($password);
//if ($a > 5 && $a < 10)
//{
//    echo "Пароль подходит";
//}
//else
//{
//    echo "Придумайте новый пароль";
//}




//7.9
//$a = "html css php";
//echo substr($a, -3);



//7.10
//$a = "cucumber";
//echo substr($a, -3);



//7.11
//$a = "http://cucumber";
//$b = substr($a, 0, -8);
//if ($b == "http://")
//{
//    echo "Да";
//}
//else
//{
//    echo "Нет";
//}





//7.12
//$a = "https://cucumber";
//$b = substr($a, 0, -8);
//if ($b == "http://" || $b == "https://")
//{
//    echo "Да";
//}
//else
//{
//    echo "Нет";
//}





//7.13
//$a = "cucumber.png";
//$b = substr($a, -4);
//if ($b == ".png")
//{
//    echo "Да";
//}
//else
//{
//    echo "Нет";
//}




//7.14
//$a = "cucumber.jpg";
//$b = substr($x, -4);
//if ($b == ".png"  || $b == ".jpg")
//{
//    echo "Да";
//}
//else
//{
//    echo "Нет";
//}




//7.15
//$a = "cucumber";
//$b = strlen($x);
//if ($b > 5)
//{
//    $c = substr($a, 5);
//    $c = $c ."...";
//    echo $c;
//}
//else
//{
//    echo $a;
//}





//7.16
//$a = "31.12.2013";
//$b = str_replace(".", "-", $a);
//echo $b;





//7.17
//$str = "absfacaajbbc";
//$a = array("a", "b", "c");
//$b = array("1", "2", "3");
//$c = str_replace($a, $b, $str);
//echo $d;


 
//7.18
//$str = "1a2b3c4b5d6e7f8g9h0";
//$a = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
//$b = array("");
//$c = str_replace($a, $b, $str);
//echo $d;

   
//7.19
//$a = "abracadabra";
     
//    $b = array("a"=>"1","b"=>"2","c"=>"3");
//    echo ".strtr($a, $b)";

//    echo ".strtr($a,"abc","123")";



//7.21
//$str = "mehovushka";
//echo substr_replace($str, "!!!", 4, 5);



//7.22
//$a = "abc abc abc" ;
//echo strpos($a, "b");



//7.23
//$a = "abc abc abc" ;
//echo strrpos($a, "b");




//7.24
//$a = "abc abc abc" ;
//echo strpos($a, "b", 3);




//7.25
//$a = "aa aa aa aa" ;
//echo $y = strpos($a, " ", 3);



// 7.26
//$a = "http://jhhjb";
//$b = substr($x, 0, 7);
//if ($b = "http://")
//{
//    echo "Да";
//}
//else
//{
//    echo "Нет";
//}




//7.27
//$a = "html css php";
//$b = explode(" '", $a);
//echo $b[0];
//echo $b[1];
//echo $b[2];





//7.28
//$a = array("html", "css", "php");
//$b = implode(", ", $a);
//echo $b;


//7.29
//$date = "2016-12-31";
//$x = explode("-", $date);
//echo $x[2]. ".".$x[1]. ".".$x[0];




//7.30
//$a = "1234567890";
//$b = str_split($a, 2);
//echo $b[0]. " ".$b[1]. " ".$b[2]. " ".$b[3]. " ".$b[4];



//7.31
//$a = "1234567890";
//$b = str_split($a, 1);
//echo $b[0]. " ".$b[1]. " ".$b[2]. " ".$b[3]. " ".$b[4]. " ".$b[5]. " ".$b[6]. " ".$b[7]. " ".$b[8]. " ".$b[9];





//7.32
//$a = "1234567890";
//$b = str_split($a, 2);
//$c = implode("-", $b);
//echo $c;




//7.33
//$a = " hello world ";
//echo trim($a);





//7.34
//$a = "/php/";
//echo trim($a, "/");





//7.35
//$a = "слова слова слова.";
//echo trim($a, "."). ".";





//7.36
//$a = "12345";
//echo strrev($a);





//7.37
//$a = "madam";
//$b = strrev($a);
//if ($a = $b)
//{
//    echo "Да";
//}
//else
//{
//    echo "нет";
//}





//7.38
//$ф = "UnaFata";
//echo str_shuffle($a);
//?*/>



//7.39
//$a = "abcdifghijklnmopqrstuvwxyz";
//$b = str_shuffle($a);
//$c = substr($b, 0, 6);
//echo $c;





//7.40
//$a = "a";
//for ($i = 1; $i <10; $i++)
//{
//    echo "<br>".str_repeat($a, $i);
//}




//7.41
//for ($i = 2; $i <10; $i++)
//{
//    echo "<br>".str_repeat($i, $i);
//}




//7.43
//$a = "html, <b>php</b>, js";
//echo strip_tags($a);




//7.44
//$a = "<p>html</p>, <b>php</b>, <i>js</i>";
//echo strip_tags($a, "<b>, <i>");





//7.45
//$a = "html, <b>php</b>, js";
//echo htmlspecialchars($a);




//7.46
//$a = "ab-cd-ef";
//echo strstr($a, "-");




//8.1
//$a = "Москва Санкт-Питербург Ростов Магадан";
//$b = explode(" ", $a);
//sort($b);
//echo $m = implode(", ", $b);





//8.2
//$a = "var_test_text";
//$b = explode("_", $a);
//$c = implode(" ", $b);
//$d = ucwords($c);
//$e = explode(" ", $d);
//$f = implode("", $e);
//echo $t = lcfirst($e);





//8.3
//$a = "12345 67890";
//$b = explode(" ", $a);
//$c[0] = strrev($c[0]);
//$c[1] = strrev($c[1]);
//echo implode(" ", $c);







//8.5
//$a = [367, 2, 3, 10];
//$b = implode(",", $a);
//echo substr_count($b, 3);




//8.6
//$a = "12345678";
//$b = str_split($a, 2);
//echo array_sum($b);
?>