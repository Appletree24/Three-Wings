<?php
    session_start();
    unset($_SESSION["username"]);
    echo "<script>alert('ιεΊζε!');window.location='Login.html';</script>";
    ?>