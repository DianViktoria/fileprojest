<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
    $f= fopen('ize.txt','w');
    fwrite($f,'<table> <tr><td> data </dt></tr></table>');
     fclose($f);
         
         */
        $lines=0;
    //   $fr= fopen('https://www.youtube.com/user/blogilates/playlists','r');
        $fr=fopen('ize.txt','r');
       while(!feof($fr)) {
           $s = fgets($fr);
           $words= preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $s);
        if (is_array($words)){
         $counter=   count($words);
        }   
           $lines++;
  //  $s= rtrim($s);
           if ($s){
//echo $s.'db:'.$counter.$words[0].' ->'.$lines. "<br>";
               echo htmlspecialchars($s).'db:'.strlen($s).' ->'.$lines. "<br>";
           }
}
//fwrite($fr,"ujsor usjor".PHP_EOL);
//html parser!!!!!!
fclose($fr);
//$fini=fopen('ize_ini.ini','w');
//fclose($fini);
$config = parse_ini_file('ize_ini.ini');
var_dump($config);

//$status=22;
//(12 == $status) ? echo 'Status is good' : error_log('Problem with status!'); //error!!!!!
//(12 == $status) ? print 'Status is good' : error_log('Problem with status!');
?>
    </body>
</html>
