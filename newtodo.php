<?php

echo '<pre';
var_dump($_POST);
echo '<?pre>';

$todoName = $_POST['todo_name'] ?? false;
$todoName = trim($todoName);


if ($todoName) {
 file_put_contents('todo.json');
}