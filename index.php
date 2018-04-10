<?php

include_once "./template.php";
include_once "./sqlScript.php";

$s = new sqler;
if(!$s->initialize('test', 'local')){
    die($s->err);
}else{
    echo($s->err.'<br>');
}
$query = 'SELECT * FROM `one` WHERE 1;';
$query;
if(!$s->sendquery($query)){
    die($s->err);
}else{
    echo($s->err.'<br>');
    foreach($s->exec as $value){
        print_r('<p>'.$value.'</p>');
    }
    echo('<pre>');
    print_r($s->exec);
    echo('</pre>');
    // var_dump($s->exec);
}
$s->quit();
