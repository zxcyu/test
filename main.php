<?php
include('Peartree.php');
include 'Appletree.php';

echo"количество груш в саду?";
$n=readline();
echo"количество яблонь в саду?";
$m=readline();
$aa=0;
$ee=array();
for ($i = 1; $i <=(int)$n; $i++) {
    $ff= (new Peartree)->Peartrees();
    $ee['дерево'.$i]=$ff;
    $aa=$aa+$ff;
}
$ab=0;
$eee=array();
for ($i = 1; $i <=(int)$m; $i++) {
    $ff= (new Appletree)->Appletrees();
    $eee['дерево'.$i]=$ff;
    $ab=$ab+$ff;
}

$treee['груши']=$ee;
$treee['яблоки']=$eee;
echo "яблок: ".$ab." штук".PHP_EOL;
echo "груш: ".$aa." штук";
