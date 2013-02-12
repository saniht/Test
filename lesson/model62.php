<?php

function transformComentsToArray (){
    $filename = "comments.txt";
    $string = file_get_contents($filename);
    $delimiter = "\n";
    $array = explode("\n", $string);
    $result =array ();
    for ($i=0; $i<count($array);$i++){
        $delimiter1 = ";";
        $data = explode(";", $array[$i]);
        $result[$i]["name"] = $data[0];
        $result[$i]["comment"] = $data[1];
    }
    return $result;
}

function addComment ($name, $comment){
    $filename = "comments.txt";
    $string = file_get_contents($filename)."\n$name;$comment";
    file_put_contents($filename, $string);
}
?>
