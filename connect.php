<?php
$con = new mysqli('localhost', 'root', 'zarinmim5!', 'crudoperation');

if (!$con) {
    die(mysqli_error($con));
}
