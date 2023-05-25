<!-- Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.--> 
<?php
$a = 6;
if ($a % 2== 0 )
{
    echo "$a là số chẵn";
} else {
    echo "$a không phải số chẵn "
}
?>

<!-- Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.--> 
<?php
$n= 7 ;
$sum= 0;
for ($i =1 ; $i<$n ; $i++)
{
    $sum += $i ;
}
echo "tổng của các số từ 1 đến'$n' là: '$sum' ";
?> 

<!-- Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.--> 
<?php
$n= 10;
for ($i= 1; $i<=10 ; $i++) // for đầu dungf để lặp các số trong bảng cửu chương 
{
    for($j =1; $j <=10; $j++) { // for sau là các số sau để tạo ra các phép tính trong bảng cc 
    echo "{$i} * {$j} = ".($i *$j )."<br>";
} echo "<br>"; 
}
?>

<!-- Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không --> 
<?php
$str = "Xin chào Phương Thanh ngáo ngơ";
$search = " ngáo ";
$pos = strpos ($str, $search );
if ($pos === false )
{
    echo "Không tìm thấy chuỗi '$search' trong chuỗi '$str'";
   } else    {
    echo "Chuỗi '$search' được tìm thấy ở vị trí $pos trong chuỗi '$str'";
    }
    ?>

<!-- Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng--> 
<?php
$array = array (5,7,9,2,1,4);
$min = min($array);
$max= max($array);
echo " giá trị nhỏ nhất trong mảng là ".$min;
echo "giá trị lớn nhất trong mảng là ".$max;
?>

<!-- Câu 6:Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.-->
<?php
$array = array (5,7,9,2,1,4);// khai báo mảng cần sắp xếp 
asort ($array ); // sắp xếp mảng theo thứ tự tăng dần 
print_r ($array); // hiển thị kết quả 
?>

<!-- câu 7:Viết chương trình PHP để tính giai thừa của một số nguyên dương.--> 
<?php
// định nghĩa hàm tính giai thừa 
function factorial($n)
{
    $result = 1;
    for ($i=1; $i<$n; $i++)
    {$result *=$i ;}

 return $result; }
// sử dụng hàm để tinh tính giai thừa của số 5
echo " giai thừa của 5 là ".factorial(5);
?>

<!-- câu 8:Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.--> 
<?php
// hàm kiểm tra số nguyên tố 
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 60);
?>

<!-- câu 9:Viết chương trình PHP để tính tổng của các số trong một mảng.--> 
<?php
$array = array (2,3,4,5,6,7,8);
$sum=array_sum($array);
echo " tổng của mảng là ".$sum;
?>


<!-- câu 10:Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.--> 
<?php 
//Dãy Fibonacci là dãy vô hạn các số tự nhiên bắt đầu bằng 1 và 1
// sau đó các số tiếp theo sẽ bằng tổng của 2 số liền trước nó.
function fibonacci ($n)
{
    if($n==0) return 0;
    else if($n == 1 ||$n==2) return 1 ;
    else return fibonacci ($n-1) + fibonacci ($n-2);
}
$start = 1;
$end = 30;
for ($i=$start ; $i<=$end ; $i++ )
{
    echo fibonacci($i).",";
}
?>

 Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.


<!-- câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.--> 
<?php
        $array = array( 1,2,3,4,5 );  
		echo 'Mảng ban đầu: '."<br>";  
		foreach ($array as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
		$socanchen  = '$';  
		array_splice( $array, 3, 0, $socanchen );   
		echo "Sau khi chèn phần tử '$' thì mảng sẽ như sau: "."<br>";  
		foreach ($array  as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
       ?>


<!-- Câu 13:Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.--> 
<?php
$array =array (1,2,3,2,4,5,6,5);
$unique_array= array_unique($array);
echo "mảng đầu là ";
print_r ($array);

echo "mảng sau khi loại bỏ phần tử trung lặp là ";
print_r($unique_array);
?>


<!-- câu 14:Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.--> 
<?php
$array= array(1,2,3, 'Vỗ', 'tay','hay','quá');
$search= "hay";
$array_search= array_search($search,$array);
if ($array_search === false)
{
    echo "không tìm thấy phần tử '$search' trong mảng ";
} else 
{
    echo "Phần tử '$search' nằm ở vị trí '$array_search' trong mảng " ;
    print_r ($array);
}
?>


<!-- Câu 15:Viết chương trình PHP để đảo ngược một chuỗi.--> 
<?php
$str=" Xin chào Phương Thanh ngaongo ";
$reverse = strrev($str);
echo "Chuỗi '$str' sau khi đảo ngược lại là '$reverse' ";
?>


<!-- Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.--> 
<?php
$array= array(4,5,6,7,8,9);
$array2= array( 'Xin', 'Chào', 'Phuong', 'Thanh', 'Ngao', 'Ngo' );
echo count ($array) ;
echo "<br>";
echo count ($array2);
?>


 <!-- Câu 17:Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.--> 
 <?php
        function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo kiem_tra_chuoi_palindrome('madam')."<br>";
       ?>


<!-- Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.--> 
<?php
$array= array (2,3,4,5,4,3,6,7,3);
echo '<pre>';
print_r(array_count_values($array));
?>


<!-- Câu 19:Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.--> 
<?php
$array = array (2,1,5,7,3,9,0);
rsort($array);
echo " mảng sau khi sắp xếp giảm dần là " ;
echo "<br>";
print_r($array);
?>


 Câu 20:Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.



<!-- Câu 21:Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. --> 
<?php
$array = array (2,1,5,7,3,9,0);
rsort($array);
echo " mảng sau khi sắp xếp giảm dần là " ;
echo "<br>";
print_r($array);
echo "<br>";
echo " số lớn thứ 2 trong mảng là ";
print_r ($array[1]);
?>


<!--Câu 22:Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.--> 
<?php

function UCLN($a, $b){
    if($b == 0){
        return $a;
    }
    else{
        return UCLN($b, $a % $b);
    }
}

function BCNN($a, $b){
    return ($a * $b) / UCLN($a, $b);
}

$num1 = 24;
$num2 = 36;

echo "Uoc chung lon nhat cua ".$num1." va ".$num2." la: ".UCLN($num1, $num2)."<br>";
echo "Boi chung nho nhat cua ".$num1." va ".$num2." la: ".BCNN($num1, $num2);
?>



Câu 23:Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
<!--Câu 24:Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.--> 
<?php
$array =array(2,3,4,5,6,7,8,9);
$arr_new= array(); // tạo bảng mới để chứa các số lẻ 
// duyệt mảng ban đầu và thêm các số lẻ và bảng mới 
foreach ($array as $value ){
    if ($value % 2 !=0){
        array_push($arr_new,$value);
    }
}
//sắp xếp mảng mới theo tt giảm dần 
rsort($arr_new);
echo " các số lẻ sau khi đã sắp xếp là :";
print_r($arr_new);
echo "<br>";
echo " số lẻ lớn nhất trong mảng là:";
print_r ($arr_new[0]);
?>


<!--Câu 25:Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.--> 
<?php
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 30 là: <br>");
for($i = 0; $i < 30; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
?>


<!--Câu 26:Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.--> 
<?php
$arr =array (3,-5,8,9,-3,4,6,-1,-2);
$arr_new= array ();
foreach ($arr as $value ){
    if($value >0 ){
        array_push($arr_new , $value);
    }
}
rsort ($arr_new);
echo " Các số dương sau khi được sắp xếp giảm dần là ";
print_r($arr_new); 
echo "<br>";
echo " Số dương lớn nhất trong mảng là : ";
print_r($arr_new[0]);
?>

<!--Câu 27:Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.--> 
<?php
$arr =array (3,-5,8,9,-3,4,6,-1,-2);
$arr_new= array ();
foreach ($arr as $value ){
    if($value <0 ){
        array_push($arr_new , $value);
    }
}
rsort ($arr_new);
echo " Các số âm sau khi được sắp xếp giảm dần là ";
print_r($arr_new); 
echo "<br>";
echo " Số âm lớn nhất trong mảng là : ";
print_r($arr_new[0]);
?>


<!--Câu 28:Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.-->
<?php
        $sum = 0;  
		for($x=1; $x <= 20; $x++)  
		{  
		  $sum +=$x;  
		}  
		echo "Tổng dãy số từ 1 đến 20 là $sum"."<br>"; 
       ?> 


<!--Câu 29:Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.--> 
<?php
$a=1;
$b=100;
for ($i=1; $i<=100; $i++){
    $sqrt = sqrt ($i);
    if(floor ($sqrt)==$sqrt ){
        echo $i." ";
    }
}
?> 


<!--Câu 30:Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không--> 
<?php
$str= " xin chao Phuong Thanh ngao ngo ";
$search= "ngao ngo";
if(strstr ($str, $search)){
    echo " chuỗi '$search' có nằm trong chuỗi '$str' ";
} else {
    echo "chuỗi '$search' không nằm trong chuỗi '$str' ";
}
?>