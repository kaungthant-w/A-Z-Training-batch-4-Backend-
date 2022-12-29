<?php

$conn = mysqli_connect("localhost", 'root', '', 'todo_list');

if(!$conn) {
    echo "Connection fail...".mysqli_connect_error();
}