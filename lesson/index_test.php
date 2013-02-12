<?php
function printResultSet ($result_set) {
    echo "Количество записей:".$result_set->num_rows."<br/>";
    while (($row = $result_set->fetch_assoc()) !=FALSE){
        print_r($row);
        echo "<br/>";
    }
    echo "-------------------<br/>";
}

$mysqli = new mysqli("localhost", "root", "", "lesson");
        $mysqli->query("SET NAMES 'utf8'");
        $result_set = $mysqli->query("SELECT * FROM `lesson_menu` ");
        printResultSet($result_set);
        $mysqli->close();
?>
