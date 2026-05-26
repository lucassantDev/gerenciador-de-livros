<?php

    require "dados.php";

    $id = $_REQUEST['id'];
    
    $filtrado = array_filter($livros, fn($l) => $l['id'] == $id);
    $livro = array_pop($filtrado);

    // carregando view
    view('livro', compact('livro'));
  
?>
