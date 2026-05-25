<form class="w-full flex space-x-2 mt-6">
    <input 
        type="text"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        placeholder="Pesquisar..."
    >
    <button type="submit">🔍</button>
</form>

<!-- lista de livros -->
<section class="grid gap-4 grid-cols-1 md:grid grid-cols-2 lg:grid grid-cols-3">


<?php foreach($livros as $livro): ?>

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

<?php endforeach; ?>

</section>