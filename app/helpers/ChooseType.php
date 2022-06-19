<?php
require_once 'SelectedType.php';
$type = new SelectedType;
$type = setType($Book);
echo $type->displayInputs();