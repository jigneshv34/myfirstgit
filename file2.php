<?php

include_once('file1.php');

foo\bar() // output: from bar

<<<<<<< HEAD
echo 'This is file2';
=======
echo "This is file 2";

echo 'this is edited second time';
>>>>>>> master

?>
