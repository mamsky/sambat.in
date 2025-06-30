<?php 
session_start();
    $text='Hello World';
    echo $text;
    
    $number = 12;
    echo $number;
    
    $bool = true;
    echo $bool;
    
    define('test', 'tesing testing');
    echo test;

    function privateName(){
        $name = 'Paste';
        return $name;
    }
    echo privateName();

    function globalNum (){
        global $number;
        $number = 2 + $number;   
        
    }
    globalNum();
    echo $number;

    $arr = array(
         1,2,3,4,5,6
    );
    
    for($i = 0; $i < count($arr); $i++){
        $temp = array(' ');
        for($j = 0; $j <  $i; $j++){
            array_push($temp, $arr[$j]);
            array_push($temp, ' ');
        }
        echo implode($temp);
        echo ' </br>';
    }

    function dump ($isi){
        echo '<pre>';
        var_dump($isi);
        echo '</pre>';
    }

    dump(__FUNCTION__);

?>