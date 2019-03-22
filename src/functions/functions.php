<?php
function cleanInput($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
$data = filter_var($data,FILTER_SANITIZE_SPECIAL_CHARS);
return $data;
}