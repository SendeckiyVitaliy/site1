<?php

$a = ("This is our classroom. It is light clean and large. The room is nice Its ceiling and walls are white its floor is brown.");


 $a = preg_replace('/ {2,}/',' ',$a);

 $b = explode (" ",$a); //считаем количество пробелов

 $d = sizeof($b);

 $f = explode(". ", $a);

 $kol_strok = sizeof ($f);

 function count_b($a) 
{
return strlen(preg_replace('/[^a-z]/i', '', $a));
}
 
echo "Количество слов = ",$d,"<br />";
echo "Количество букв = ",count_b($a),"<br />";
echo "Средняя длина слова = ",(count_b($a)/$d),"<br />";
echo "Колличество предложений = ",$kol_strok,"<br />";
echo "Индекс тошноты = ","<br />";
 
function count_words($A)
 {
  $A = array_count_values(explode(' ',$A));
  unset($A['']);
  array_multisort($A, SORT_DESC);

   

implode(",",array_keys($A));
  return $A;
 }


$_R = count_words($a);
 

echo '<pre>';
print_R($_R);
echo '</pre>'; 
?>