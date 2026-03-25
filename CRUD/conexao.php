<?php
$conect= new PDO("mysql:host=localhost;dbname=pw","root","");
$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);