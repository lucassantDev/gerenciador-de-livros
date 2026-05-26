<?  

// require 'dados.php';
  
$controller = "index";

//isset verifica se existe determinada chave no Array
if (isset($_SERVER["PATH_INFO"])){
    $controller = str_replace('/', '', $_SERVER["PATH_INFO"] );
}


if( ! file_exists("controllers/{$controller}.controller.php")){
    echo 'Página não existe';
    die();
};



require "controllers/{$controller}.controller.php";

?>