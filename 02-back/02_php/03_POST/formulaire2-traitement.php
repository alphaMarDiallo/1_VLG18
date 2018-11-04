<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<hr>";

if (!empty($_POST)) {
    echo 'Ville : ' . $_POST['ville'] . '<br>';
    echo 'Code postal : ' . $_POST['cp'] . '<br>';
    echo 'adresse : ' . $_POST['adresse'] . '<br>';
}
?>