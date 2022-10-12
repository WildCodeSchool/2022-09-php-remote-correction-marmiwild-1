<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = $_POST; //nettoyage, vérifications, contrôle des valeurs

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';