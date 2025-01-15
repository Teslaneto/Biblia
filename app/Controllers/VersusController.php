<?php
namespace App\Controllers;

use App\Models\VersusModel;

class VersusController
{
    
    public function view()
    {
        $versusBiblia = VersusModel::apiVersus();

        if(!empty($versusBiblia['verses'])){
            $this->render('index', ['versus' => $versusBiblia] );
        }else {
            //$this->render('404');
        }
    }
    public function viewLivro($livro)
    {
        $livroBiblia = VersusModel::apiLivro($livro);

        if(!empty($livroBiblia['verses'])){
            $this->render('index', ['versus' => $livroBiblia]);
        }else{
            //$this->render('404');
        }
    }

    private function render($view, $data = [])
    {
        extract($data);
        include_once("./app/Views/{$view}.php");
    }


}