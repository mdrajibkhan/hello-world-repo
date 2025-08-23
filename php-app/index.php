<?php
echo "<h1>Hello from PHP on Linux 9!</h1>";
echo "Hostname: " . gethostname() . "<br>";
echo "PHP: " . phpversion() . "<br>";
echo "<p>Deployed via GitHub Actions ➜ SSH ➜ Apache</p>";
echo "<p><a href='info.php'>phpinfo()</a></p>";
