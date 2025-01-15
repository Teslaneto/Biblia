<?php
require_once 'vendor/autoload.php'; // Certifique-se de carregar o autoload

use App\Controllers\VersusController;

$livro = $_POST['livro'];

// Instancia o controlador e chama o método view
$controller = new VersusController();
if(!empty($livro)){
    $controller->viewLivro($livro);
}else{
    $controller->view();
}