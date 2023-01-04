<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<table>
<thead>
<tr ><th colspan="6">Задание 1. Таблица истинности PHP</th></tr>
<tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
</thead>
<tbody>
<tr>
<td>0</td>
<td>0</td>
<td>
<?php
  $a=0;
    if(!$a){
      echo "True";
    }
    else{
      echo "False";
    }
?>
</td>
<td>
<?php
  $a=0;
  $b=0;
    if($a||$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a||$b);
?>
</td>
<td>
<?php
  $a=0;
  $b=0;
    if($a&&$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a&&$b);
?>
</td>
<td>
  <?php
    $a=0;
    $b=0;
      if($a xor $b){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump($a xor $b);
  ?>
</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>
<?php
  $a=0;
    if(!$a){
      echo "True";
    }
    else{
      echo "False";
    }
?>
</td>
<td>
<?php
  $a=0;
  $b=1;
    if($a||$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a||$b);
?>
</td>
<td>
<?php
  $a=0;
  $b=1;
    if($a&&$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a&&$b);
?>
</td>
<td>
  <?php
    $a=0;
    $b=1;
      if($a xor $b){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump($a xor $b);
  ?>
</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>
<?php
  $a=1;
    if(!$a){
      echo "True";
    }
    else{
      echo "False";
    }
?>
</td>
<td>
<?php
  $a=1;
  $b=0;
    if($a||$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a||$b);
?>
</td>
<td>
<?php
  $a=1;
  $b=0;
    if($a&&$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a&&$b);
?>
</td>
<td>
  <?php
    $a=1;
    $b=0;
      if($a xor $b){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump($a xor $b);
  ?>
</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>
<?php
  $a=1;
    if(!$a){
      echo "True";
    }
    else{
      echo "False";
    }
?>
</td>
<td>
<?php
  $a=1;
  $b=1;
    if($a||$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a||$b);
?>
</td>
<td>
<?php
  $a=1;
  $b=1;
    if($a&&$b){
      echo "True";
    }
    else{
      echo "False";
    }
    //var_dump($a&&$b);
?>
</td>
<td>
  <?php
    $a=1;
    $b=1;
      if($a xor $b){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump($a xor $b);
  ?>
</td>
</tr>
</tbody>
</table>



<br>

<table style="table-layout: fixed; width: 900px; margin: auto;">
<thead>
<tr ><th colspan="9">Гибкое сравнение == в PHP</th></tr>
<tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
</thead>
<tbody>
<tr>
<td style="background-color: #f5f5f5;"><strong>true</strong></td>
<td> 
  <?php
    if(true == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == true);
  ?>
</td>
<td>
  <?php
    if(false == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == false);
  ?>
</td>
<td>
<?php
    if(1 == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == true);
  ?>
</td>
<td>
<?php
    if(0 == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == true);
  ?>
</td>
<td>
<?php
    if(-1 == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == true);
  ?>
</td>
<td>
<?php
    if("1" == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == true);
  ?>
</td>
<td>
<?php
    if(null == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == true);
  ?>
</td>
<td>
<?php
    if("php" == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == true);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>false</strong></td>
<td> 
  <?php
    if(true == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == false);
  ?>
</td>
<td>
  <?php
    if(false == true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == false);
  ?>
</td>
<td>
<?php
    if(1 == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == false);
  ?>
</td>
<td>
<?php
    if(0 == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == false);
  ?>
</td>
<td>
<?php
    if(-1 == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == false);
  ?>
</td>
<td>
<?php
    if("1" == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == false);
  ?>
</td>
<td>
<?php
    if(null == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == false);
  ?>
</td>
<td>
<?php
    if("php" == false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == false);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>1</strong></td>
<td> 
  <?php
    if(true == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == 1);
  ?>
</td>
<td>
  <?php
    if(false == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == 1);
  ?>
</td>
<td>
<?php
    if(1 == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == 1);
  ?>
</td>
<td>
<?php
    if(0 == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == 1);
  ?>
</td>
<td>
<?php
    if(-1 == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == 1);
  ?>
</td>
<td>
<?php
    if("1" == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == 1);
  ?>
</td>
<td>
<?php
    if(null == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == 1);
  ?>
</td>
<td>
<?php
    if("php" == 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == 1);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>0</strong></td>
<td> 
  <?php
    if(true == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == 0);
  ?>
</td>
<td>
  <?php
    if(false == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == 0);
  ?>
</td>
<td>
<?php
    if(1 == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == 0);
  ?>
</td>
<td>
<?php
    if(0 == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == 0);
  ?>
</td>
<td>
<?php
    if(-1 == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == 0);
  ?>
</td>
<td>
<?php
    if("1" == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == 0);
  ?>
</td>
<td>
<?php
    if(null == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == 0);
  ?>
</td>
<td>
<?php
    if("php" == 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == 0);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
<td> 
  <?php
    if(true == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == -1);
  ?>
</td>
<td>
  <?php
    if(false == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == -1);
  ?>
</td>
<td>
<?php
    if(1 == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == -1);
  ?>
</td>
<td>
<?php
    if(0 == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == -1);
  ?>
</td>
<td>
<?php
    if(-1 == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == -1);
  ?>
</td>
<td>
<?php
    if("1" == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == -1);
  ?>
</td>
<td>
<?php
    if(null == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == -1);
  ?>
</td>
<td>
<?php
    if("php" == -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == -1);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
<td> 
  <?php
    if(true == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == "1");
  ?>
</td>
<td>
  <?php
    if(false == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == "1");
  ?>
</td>
<td>
<?php
    if(1 == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == "1");
  ?>
</td>
<td>
<?php
    if(0 == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == "1");
  ?>
</td>
<td>
<?php
    if(-1 == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == "1");
  ?>
</td>
<td>
<?php
    if("1" == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == "1");
  ?>
</td>
<td>
<?php
    if(null == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == "1");
  ?>
</td>
<td>
<?php
    if("php" == "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == "1");
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>null</strong></td>
<td> 
  <?php
    if(true == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == null);
  ?>
</td>
<td>
  <?php
    if(false == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == null);
  ?>
</td>
<td>
<?php
    if(1 == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == null);
  ?>
</td>
<td>
<?php
    if(0 == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == null);
  ?>
</td>
<td>
<?php
    if(-1 == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == null);
  ?>
</td>
<td>
<?php
    if("1" == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == null);
  ?>
</td>
<td>
<?php
    if(null == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == null);
  ?>
</td>
<td>
<?php
    if("php" == null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == null);
  ?>
</td>
</tr>
<tr>
<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
<td> 
  <?php
    if(true == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true == "php");
  ?>
</td>
<td>
  <?php
    if(false == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false == "php");
  ?>
</td>
<td>
<?php
    if(1 == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 == "php");
  ?>
</td>
<td>
<?php
    if(0 == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 == "php");
  ?>
</td>
<td>
<?php
    if(-1 == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 == "php");
  ?>
</td>
<td>
<?php
    if("1" == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" == "php");
  ?>
</td>
<td>
<?php
    if(null == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null == "php");
  ?>
</td>
<td>
<?php
    if("php" == "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" == "php");
  ?>
</td>
</tr>
</tbody>
</table>


<br>

<br>

<table style="table-layout: fixed; width: 900px; margin: auto;">
<thead>
<tr ><th colspan="9">Жесткое сравнение === в PHP</th></tr>
<tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
</thead>
<tbody>
<tr>
<td style="background-color: #f5f5f5;"><strong>true</strong></td>
<td> 
  <?php
    if(true === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === true);
  ?>
</td>
<td>
  <?php
    if(false === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === false);
  ?>
</td>
<td>
<?php
    if(1 === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === true);
  ?>
</td>
<td>
<?php
    if(0 === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === true);
  ?>
</td>
<td>
<?php
    if(-1 === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === true);
  ?>
</td>
<td>
<?php
    if("1" === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === true);
  ?>
</td>
<td>
<?php
    if(null === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === true);
  ?>
</td>
<td>
<?php
    if("php" === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === true);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>false</strong></td>
<td> 
  <?php
    if(true === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === false);
  ?>
</td>
<td>
  <?php
    if(false === true){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === false);
  ?>
</td>
<td>
<?php
    if(1 === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === false);
  ?>
</td>
<td>
<?php
    if(0 === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === false);
  ?>
</td>
<td>
<?php
    if(-1 === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === false);
  ?>
</td>
<td>
<?php
    if("1" === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === false);
  ?>
</td>
<td>
<?php
    if(null === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === false);
  ?>
</td>
<td>
<?php
    if("php" === false){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === false);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>1</strong></td>
<td> 
  <?php
    if(true === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === 1);
  ?>
</td>
<td>
  <?php
    if(false === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === 1);
  ?>
</td>
<td>
<?php
    if(1 === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === 1);
  ?>
</td>
<td>
<?php
    if(0 === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === 1);
  ?>
</td>
<td>
<?php
    if(-1 === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === 1);
  ?>
</td>
<td>
<?php
    if("1" === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === 1);
  ?>
</td>
<td>
<?php
    if(null === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === 1);
  ?>
</td>
<td>
<?php
    if("php" === 1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === 1);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>0</strong></td>
<td> 
  <?php
    if(true === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === 0);
  ?>
</td>
<td>
  <?php
    if(false === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === 0);
  ?>
</td>
<td>
<?php
    if(1 === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === 0);
  ?>
</td>
<td>
<?php
    if(0 === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === 0);
  ?>
</td>
<td>
<?php
    if(-1 === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === 0);
  ?>
</td>
<td>
<?php
    if("1" === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === 0);
  ?>
</td>
<td>
<?php
    if(null === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === 0);
  ?>
</td>
<td>
<?php
    if("php" === 0){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === 0);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
<td> 
  <?php
    if(true === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === -1);
  ?>
</td>
<td>
  <?php
    if(false === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === -1);
  ?>
</td>
<td>
<?php
    if(1 === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === -1);
  ?>
</td>
<td>
<?php
    if(0 === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === -1);
  ?>
</td>
<td>
<?php
    if(-1 === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === -1);
  ?>
</td>
<td>
<?php
    if("1" === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === -1);
  ?>
</td>
<td>
<?php
    if(null === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === -1);
  ?>
</td>
<td>
<?php
    if("php" === -1){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === -1);
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
<td> 
  <?php
    if(true === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === "1");
  ?>
</td>
<td>
  <?php
    if(false === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === "1");
  ?>
</td>
<td>
<?php
    if(1 === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === "1");
  ?>
</td>
<td>
<?php
    if(0 === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === "1");
  ?>
</td>
<td>
<?php
    if(-1 === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === "1");
  ?>
</td>
<td>
<?php
    if("1" === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === "1");
  ?>
</td>
<td>
<?php
    if(null === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === "1");
  ?>
</td>
<td>
<?php
    if("php" === "1"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === "1");
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>null</strong></td>
<td> 
  <?php
    if(true === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === null);
  ?>
</td>
<td>
  <?php
    if(false === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === null);
  ?>
</td>
<td>
<?php
    if(1 === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === null);
  ?>
</td>
<td>
<?php
    if(0 === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === null);
  ?>
</td>
<td>
<?php
    if(-1 === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === null);
  ?>
</td>
<td>
<?php
    if("1" === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === null);
  ?>
</td>
<td>
<?php
    if(null === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === null);
  ?>
</td>
<td>
<?php
    if("php" === null){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === null);
  ?>
</td>
</tr>
<tr>
<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
<td> 
  <?php
    if(true === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(true === "php");
  ?>
</td>
<td>
  <?php
    if(false === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(false === "php");
  ?>
</td>
<td>
<?php
    if(1 === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(1 === "php");
  ?>
</td>
<td>
<?php
    if(0 === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(0 === "php");
  ?>
</td>
<td>
<?php
    if(-1 === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(-1 === "php");
  ?>
</td>
<td>
<?php
    if("1" === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("1" === "php");
  ?>
</td>
<td>
<?php
    if(null === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump(null === "php");
  ?>
</td>
<td>
<?php
    if("php" === "php"){
        echo "True";
      }
      else{
        echo "False";
      }
      //var_dump("php" === "php");
  ?>
</td>
</tr>
</tbody>
</table>
</body>
</html>