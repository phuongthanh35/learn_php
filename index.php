<!-- câu 1:Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().-->
<?php 
$str = " Xin chào Phương Thanh!" ;
$length = strlen($str);
echo "Chuỗi '$str' có '$length' ký tự . "   
?>

<!--câu 2:Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().-->
<?php
$str = "Xin chào Phương Thanh đến với thế giới này! " ;
$wordcount = str_word_count ($str);
echo "Chuỗi '$str' có $wordcount' từ ";
?>

<!--câu 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().-->
<?php
$str = "Xin chào Phương Thanh";
$reverse = strrev($str);
echo "Chuỗi '$str' sau khi đảo ngược lại là '$reverse' ";
?>

<!--câu 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().-->
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

<!-- câu 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().-->
<?php
$str= "Xin chào Phương Thanh ngáo ngơ";
$search = " ngáo ";
$replace = " ngơ ";
$newstr = str_replace ($search, $replace, $str);
echo "Chuỗi mới là : $newstr ";
?>
 
 <!-- Câu 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()-->
 <?php
$string = " Xin chao Thanh ngao ngo ";
$search = "Xin";
if (startswith($string , $search) )// hàm startwith () dùng để lấy ra các ký tự đầu 
{
    echo "Có nằm ở đầu trong chuỗi ";
   } else    {
    echo " Không nằm ở đầu chuỗi '$string'";
    }
?>
 <!-- Câu 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().-->
 <?php
 $str= "Xin chào Phương Thanh";
 $pper = strtoupper ( $str); //hàm stroupper được sd để chuyển đổi -> hoa và gán vào biến $pper //
 echo $pper ;
 ?>

<!-- Câu 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().-->
<?php
$str = "XIN CHAO PHUONG THANH NGAO NGO";
$ower = strtolower ($str);
echo $ower ;
?>

<!-- Câu 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().-->
<?php
$str = "xin chao phuong thanh ngao ngo ";
$word = ucwords ( $str);
echo $word ;
?>

<!-- Câu 10: Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().--> 
<?php
$str = "     Xin Chào      Phương Thanh Ngáo Ngơ !  ";
$trim = trim ($str);
echo $trim ;
?> 

<!-- Câu 11:Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().--> 
<?php
$str = " Xin Chào Phương Thanh Ngáo Ngơ !  ";
$ltrim = ltrim ($str);
echo $ltrim ;
?> 

<!-- Câu 12: như câu 11 --> 
<!-- Câu 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().--> 
<?php
$str = " Ngáo ngơ, làm tốt lắm :vv ";
$tach = " ";  // ký tự tách ở 
$lode  = explode ( $tach,$str);
print_r ($lode); // dùng hàm này để in ra các phần tử của biến $lode 
?>

<!-- Câu 14: Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().--> 
<?php
$array=array('Xin', 'chào', 'Thanh') ;
$glue =" "; // ký tự hay chuỗi mà ta muốn sd để nối các phần tử lại với nhau 
$str = implode ($glue, $array );// nối các phần tử của mảng $array với nhau thành chuỗi 
echo $str;
?>

<!-- Câu 15: Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().--> 
<?php
$str ="Phương Thanh ngơ";
$lstr ="Xin chào - ";
$rstr = "- Xin chào";
$x = $lstr . $str ; // phép nối chuỗi là (.) 
$y = $str . $rstr ;
echo $x ;
echo $y ;
?>

<!-- Câu 16 : Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().--> 
<?php
$string = " Xin chao Thanh ngao ngo ";
$search = "ngo";
if (substr($string , - strlen ($search ))===$search )// hàm substr () dùng để lấy ra các ký tự cuối cùng của $string có chiều dài bằng với chiều dài của biến cần tìm 
{
    echo "Không nằm ở cuối trong chuỗi ";
   } else    {
    echo "Có nằm ở cuối chuỗi '$string'";
    }
?>

<!-- Câu 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().--> 
<?php
$string = " Xin chao Thanh ngao ngo ";
$search = "chao";
if (strstr($string, $search) )
{ // if để xác định xem kết quả trả về từ hàm strstr() có phải là một chuỗi hay ko 
   echo "'$search' có nằm trong chuỗi '$string'";
   } else    {
    echo "Không tìm thấy '$search' trong chuỗi '$string' ";
    }
?>

<!-- Câu 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải 
là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().--> 


<!-- Câu 19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải 
là một số nguyên hay không sử dụng hàm is_int().--> 
<?php
$str= "Xin chào ngáo ngơ";
//$str = "1234567";
if (is_int ($str))
{
    echo "Chuỗi '$str ' là một số nguyên ";
} else {
    echo "Chuỗi '$str' không phải là một số nguyên mà là một chuỗi";
}
?>

<!-- Câu 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải 
là một email hợp lệ hay không sử dụng hàm filter_var().--> 
<?php
$str= "phuongthanh6535@gmail.com";
//$str = "phuongthanh6535@gmailcom";
if(filter_var($str, FILTER_VALIDATE_EMAIL )) //filter_validate_email dùng kiểm tra xem email có hợp lệ hay ko 
{
    echo " Email hợp lệ ";
} else {
    echo " Email không hợp lệ";
}
?>








