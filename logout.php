<?php
session_start();
session_destroy();

	header('Location:index.php?error=1');
	?>