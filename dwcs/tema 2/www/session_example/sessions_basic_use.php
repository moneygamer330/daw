<?php
	session_start();
	if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
      } else {
        $_SESSION['count']++;
      }
	echo "Hi " .$_SESSION['count'];
	echo "<br><a href='sessions_basic_use2.php'>Siguiente</a>";
    ?>