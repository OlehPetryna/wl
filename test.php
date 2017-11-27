<?php
namespace project;
require_once "Cat.php";

$cat = new Cat("garfield");

var_export($cat->getName() === "garfield");
var_export($cat->meow() === "Cat garfield is saying meow");