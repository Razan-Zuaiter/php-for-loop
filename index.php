<!DOCTYPE html>
<html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 

  <table align="left" border="1" cellpadding="3px" cellspacing="0px">

  <br>
  <br>
  <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
  <?php

///loop
//Question no.1
for($x=1; $x<=9; $x++)
{
  echo $x.'-';
  
}
echo $x."<br>"."<br>";

//Question no.2
$sum=0;
for($y=0; $y<=30; $y++)
{
 $sum +=$y;  
}
echo $sum."<br>"."<br>";

//Question no.3
function printStar(){
for($x=1; $x<=5; $x++)
{
    for($i=5; $i>=$x ;$i--)
    {
      echo "$";  
    } 
    for($k=1; $k<$x; $k++)
    {
      echo "&"." ";  
    } 
    echo "<br>";  
}
}
printStar();

echo "<br>"."*********************"."<br>";



//Question no.3
function printStar1(){
  function printStar(){
    for ($row = 1 ; $row <=5 ; $row++ ){
        for($char = "A" ; $char <= "E" ; $char++ ){
            echo str_repeat(" A " , 5-$row). str_repeat($char , $row)." <br> ";
            if($row++ > $row){
            break;
            }
        }
    }

  }
}
printStar();

echo "<br>"."*********************"."<br>";




//Question no.4
function printStar2(){
    for($x=1; $x<=5; $x++)
    {
    for($i=1; $i<$x ;$i++)
    {
      echo "0 ";  
    } 
    echo $x." " ;  
    for($k= $x; $k<5; $k++)
    {
        echo "0 ";  
    } 
    echo "<br>";  
   
    }}
printStar2();
echo "<br>"."*********************"."<br>";


//Question no.5

function factorial($var){
 $fact=1;
for($i=$var; $i>1 ; $i--){
    $fact*=$i;
}
echo "The factorial is ".$fact;

}
factorial(4);
echo "<br>"."*********************"."<br>";



//Question no.6
function Fibonacci(){
  $number0=0;
  $number1=1;
  $sum=1;
  echo $number0." ".$number1." ";
   while($sum < 10){
      $number3 = $number0+$number1 ;
      echo $number3." ";
      $number0 = $number1;
      $number1 = $number3;
      $sum =   $sum+1;
   }
 
}

Fibonacci();
echo "<br>"."*********************"."<br>";

//Question no.7
$data = "OrangeAcademy";
echo "no. of c charterers in string is  ".substr_count($data, 'c');
echo "<br>"."*********************"."<br>";

//Question no.8
for($i=1;$i<= 6;$i++)
{
  echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td >$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
 }

echo "<br>"."*********************"."<br>";


//Question no.9
for($row=1;$row<=8;$row++)
{
   echo "<tr>";
      for($col=1;$col<=8;$col++)
		 {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
        }
     echo "</tr>";
}
 
echo "<br>"."*********************"."<br>";


//Question no.10
for($i=1;$i<= 10;$i++)
{
    $result=1;
     echo "<tr>";
    for ($j=1;$j<=10;$j++)
      {
        $result=$i*$j;
      echo "<td > $result</td>";
      }
      echo "</tr>";
}
echo "<br>"."*********************"."<br>";


//Question no.11
function fizzBuzz(){
for($i=1;$i<= 50;$i++)
{
  if(($i%3 ==0) &&($i%5 ==0))
  echo "FizzBuzz"." ";
  elseif(($i%3 ==0))
  echo "Fizz"." ";
  elseif(($i%5 ==0))
  echo "Buzz"." ";
  else
  echo($i)." ";
 
}

} 
fizzBuzz();
echo "<br>"."*********************"."<br>";



//Question no.12
function Floyd( $number){
        $count = 1;
    for ($i =$number; $i > 0; $i--) 
    {
      for ($j = $i; $j < $number + 1; $j++) 
       {
        echo $count." ";
         $count++;
       } 
        echo "<br>";
       }
}
Floyd(5);
echo "<br>"."*********************"."<br>";



//Question no.13
function letter_A(){
for($i=0 ; $i<= 9; $i++){
    for($j=0 ; $j<= 8; $j++){  
     if(( ($j==1 || $j==8) && ($i!=0)) || ( ($i==0 || $i==5) && ($j>1 && $j< 8)))   
     echo "*";
     else
     echo "&nbsp;"." ";
    }
    echo "<br>";
  }
}
letter_A();
echo "<br>"."*********************"."<br>";

//Question no.14
function letter_B(){
    for($i=0 ; $i<= 10; $i++){
        for($j=0 ; $j<= 11; $j++){  
         if( $j==1 ||  (($i ==0 || $i ==5 || $i ==10 ) && ($j<10 && $j>1)) || ($j ==10 && ( $i !=0 &&  $i !=5 &&  $i !=10))) 
         echo "*";
         else
         echo "&nbsp;"." ";
        }
        echo "<br>";
      }
    }
letter_B();
echo "<br>"."*********************"."<br>";

//Question no.15
function letter_C(){
    for($i=0 ; $i< 11; $i++){
        for($j=0 ; $j< 11; $j++){  
         if (($j == 1 && ($i != 0 && $i != 10)) || (($i == 0 || $i == 10) && ($j > 1 && $j < 9)) || ($j == 9 && ($i == 1 or $i == 9)))

         echo "*";
         else
         echo "&nbsp;"." ";
        }
        echo "<br>";
      }
    }
letter_C();
 echo "<br>"."*********************"."<br>";

 
//Question no.16
function patternAlpa(){
 $alpha = range('A', 'Z');  
  for ($i=1; $i<= 5; $i++) {    
      for($j=5; $j>$i; $j--) {    
        echo '&nbsp;';  
      }  
     
    for ($k=1; $k <= $i; $k++) {    
        echo " ".$alpha[$k-1];   
    }    
     echo "<br>";  
    } 
  for ($i=1; $i<= 5; $i++)
   {    
        for($j=0; $j<=$i; $j++) {    
          echo '&nbsp;';  
        }  
       
      for ($k=1; $k <=5-$i; $k++) {    
          echo " ".$alpha[$k-1];   
      }    
       echo "<br>";  
    }  
}
patternAlpa();
 echo "<br>"."*********************"."<br>";

?>
</table>
</table>
</body> 
</html>




















