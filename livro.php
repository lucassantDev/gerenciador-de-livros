<?php

    require 'dados.php';
    $id = $_REQUEST['id'];
    $filtrado = array_filter($livros, fn($l) => $l['id'] == $id);
    $livro = array_pop($filtrado);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Gerenciador</title>
</head>
<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-800 border-b-stone-800 ">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4" >
            <div class="font-bold text-xl trackin-wide">BOOK WISE</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-orange-400">Explorar</a></li>
                <li><a href="/mues-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <!-- mudando aqui -->

        <?=$livro['titulo'] ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-2">
                    <a href="/livro.php?id=<?=$livro['id']?>" class="fon-semibold hover:underline"><?=$livro['titulo']?></a>
                    <div class="text-xs italic"><?=$livro['Autor']?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?=$livro['Descricao'] ?>
            </div>
        </div>

    </main>

</body>
</html>