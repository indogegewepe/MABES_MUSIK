<?php
require_once "../config/function.php";

session_destroy();

header('location: ../index.php');
