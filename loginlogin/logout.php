<?php
include("TUTOR/Tutor_PWeb-main/conn.php");
session_start();
session_destroy();

header('Location: ../index.php');
