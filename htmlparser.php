<?php
$doc = new DOMDocument();
$doc->loadHTMLFile("ize.html");
$table = $doc->getElementsByTagName('table');
var_dump ($table);
if ($table->length<1){echo 'No TAble !!!';}
if ($table->length>1){echo 'More than ONE table  !!!';}

$rows = $table->item(0)->getElementsByTagName('tr');
//echo 'close this bable+clsing sine!!';
echo '<table border="2">';
foreach ($rows as $book) {
    echo'<tr>';
 //$current=   $book->nodeValue;
//if ($current=='11_td_11') {$current= 'strtoupper($current)';}
 $cols = $book->getElementsByTagName('td');
//$tds= $book->item(0)->getElementsByTagName('td');
//echo '<br>','<br>';
   // var_dump($book);
  foreach($cols as $td){
   //   var_dump($td);
      echo '<td>',$td->nodeValue,'</td>';
  } 

//echo $book->nodeName,' ',$book->textContent, PHP_EOL;
     echo'</tr>';
}
echo '</table>';


foreach ($rows as $book) {
    echo'<tr>';
 //$current=   $book->nodeValue;
//if ($current=='11_td_11') {$current= 'strtoupper($current)';}
 $cols = $book->getElementsByTagName('td');
//$tds= $book->item(0)->getElementsByTagName('td');
echo '<br>','<br>';
    //var_dump($book);


$comma_helper=1;
echo "insert into TABLE (optional) VALUES (";
  foreach($cols as $td){

      if ($comma_helper){$comma_helper--; }else {echo', ';  ;}
    //  var_dump($td);
      echo ' \'',$td->nodeValue,'\'';
  } 
  
echo ');',PHP_EOL;
//echo $book->nodeName,' ',$book->textContent, PHP_EOL;
     echo'</tr>';
}