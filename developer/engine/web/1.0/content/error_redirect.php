<?php
  header("HTTP/1.0 404 Not found");
  header('Refresh: 5;url=/');
  echo "<html><head><title>Not Found</title></head><body><a href='/'>This page was not found.  Continue on to home page</a></body></html>";
	//header("Location: /");
	exit;
?>