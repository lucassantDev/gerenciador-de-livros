<?php

    $livros = [
        ['id' => 1, 'titulo' => 'Senhor dos Anéis', 'Autor' => 'Fulano 1', 'Descricao' => 'História de Fulano 1'],
        ['id' => 2, 'titulo' => 'George Foreman', 'Autor' => 'Fulano 2', 'Descricao' => 'História de Fulano 2'],
        ['id' => 3, 'titulo' => '8 mile', 'Autor' => 'Fulano 3', 'Descricao' => 'História de Fulano 3'],
        ['id' => 4, 'titulo' => 'Prenda-me se for capaz', 'Autor' => 'Fulano 4', 'Descricao' => 'História de Fulano 4'],
        ['id' => 5, 'titulo' => 'As Aventuras de Pi', 'Autor' => 'Fulano 5', 'Descricao' => 'História de Fulano 5']
    ]
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
        <form class="w-full flex space-x-2 mt-6">
            <input 
                type="text"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                placeholder="Pesquisar..."
            >
            <button type="submit">🔍</button>
        </form>

        <!-- lista de livros -->
        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grind-cols-3">
            <!-- Livro -->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/livro.php" class="fon-semibold">Título</href>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>

        </section>
    </main>

</body>
</html>