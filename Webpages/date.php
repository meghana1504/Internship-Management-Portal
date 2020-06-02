<?PHP
$d=strtotime('October 11,2019 10:11:33 GMT');
$d2=strtotime("October 01,2019 10:01:32 GMT");
$d3 = $d2-$d;
echo $d3;
?>