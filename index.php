<!-- index.php -->
<?php

require 'db.php';

$route = $_GET['route'] ?? '';

switch ($route) {
    case 'submit-assessment':
        require 'submit-assessment.php';
        break;
    case 'questions':
        require 'questions.php';
        break;
    default:
        require 'home.php';
}
?>
