<?php

session_start();
$_SESSION["name"] = "session Kyaw Kyaw";
$userName = "Aung Aung";

echo $_SESSION["name"]."<br>";
echo $userName."<br>";
echo "session store success!";