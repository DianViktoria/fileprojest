<?php

$html='<title>asd</title>';
if (preg_match('{^<title>[a-z0-9]*</title>$}', $html)) {
echo "The page has a title!\n",'<br>';
}else {echo "Doesn't have a title!",'<br>';}

/*
$staff="1) Gödel
2) Escher
3) Bach";
echo $staff,'<br>';
$records = preg_split('/[0-9]+\) /', $staff);
var_dump($records);
*/
$example="INSERT INTO Customers (CustomerName, City, Country)VALUES ('Cardinal', 'Stavanger', 'Norway'); INSERT INTO Customers (CustomerName, City, Country)VALUES ('Cardinal22', 'Stavanger22', 'Norway22');";

$rcount = preg_match_all('{INSERT INTO(.*)\);}U', $example,$records);
//var_dump($records);
echo $records[0][0],'<br>',$records[0][1];