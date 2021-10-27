<?php
// Check if there is no sessions. if there is no session, start a new one.
if(session_status() !== PHP_SESSION_ACTIVE) {

  session_start();
}

?>