<?php
  require "../../src/preload.php";

  session_destroy();
  header("Location: ../index.php");
?>