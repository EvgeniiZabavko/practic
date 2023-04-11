1.Задача<br>
<?php 
$age = 370;
if($age<18) {
echo 'Вы совершеннолетний';
} elseif($age>=18 && $age<=65) {
echo 'Вы взрослый';
} elseif($age>65) {
echo 'Вы пенсионер';
}
?><br>


2.Задача<br>
<?php
$num = 27;
if($num%2==0) {
echo 'Число является четным';
} elseif($num%1==0) {
echo 'Число является нечетным';
}
?><br>

3.Задача<br>
<?php
$dayOfWeek=3;
    switch ($dayOfWeek) { 
    case 1:     
    echo "Monday";     
    break; 
    case 2:     
    echo "Tuesday";     
    break; 
    case 3:     
    echo "Wednesday";     
    break;
    case 4:     
    echo "Thursday";    
    break;  
    case 5:     
    echo "Friday";      
    break; 
    case 6:    
    echo "Saturday";    
    break;
    case 7:     
    echo "Sunday";    
    break;
}
?><br>

4.Задача<br>
<?php
$month=2;
switch ($month) { 
case 2:    
echo "В этом месяце 28 дней";    
break;
case 4:case 6:case 9:case 11:   
echo "В этом месяце 30 дней";     
break; 
default:     
echo "В этом месяце 31 день";     
break;
}
?><br>

5.Задача<br>
<?php
$string = 'level'; 
$result = match (strrev($string)) { 
$string=>'Является полиндромом',
default=>'НЕ является полиндромом'
}; 
echo $result; 
?><br>

6.Задача<br>
<?php
$number = 10; 
$result = match (true) { 
$number%2==0=>'Четное',
$number%3==0=>'Не четное',
$number%5==0=>'Кратное 5',
default=>'Результат не найден'
}; 
echo $result; 
?><br>

7.Задача<br>
<?php
$num = 10; 
$sum = 0; 
$i = 0;
while($i<$num){	
if($i%2==1){
$sum+=$i;	
}
$i++;
}
echo$sum
?><br>

8.Задача<br>
<?php
$i =1;
while(true){
if($i%7==0){
echo$i;
break;
}
$i++;
}
?><br>

9.Задача<br>
<?php
$numbers = [1, 2, 3, 4, 5]; 
$sum = 0;
for ($i = 0; $i < count($numbers); $i++)
$sum = $sum + $numbers[$i];
echo $sum;
?><br>

10.Задача<br>
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$evenNumbers = [];
for ($i = 0; $i < count($numbers); $i++){
if($i%2==1){
echo $numbers[$i];
}}
?><br>


11.Задача<br>
<?php
$eat= ['1' => 'apple','2' => 'banana','3' => 'mango'];
$eat += ['4' =>'kiwi'];
foreach($eat as $key=> $value){
echo  "$key=> $value";
}
?><br>

12.Задача<br>
<?php
$fruits= ['1' =>'apple', '2' => 'banana', '3' => 'mango'];
$vegetables = ['4'=>'cabbage','5'=>'cucumber'];
$result = array_merge($fruits, $vegetables);
foreach($result as $key => $value){
echo "$key => $value";
}
?><br>