<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <title>Discografia - Tião Carreiro e Pardinho 🤠</title>

</head>

<body>
    <div class="container-main">
        <header>
            <img src="<?php echo e(asset('css/images/logo.png')); ?>" alt="">
            <h1>Discografia</h1>
        </header>
        <main>
            <section class="container-search-bar">
                <label class="label-search-bar">Digite uma palavra chave:
                    <input class="search-input" type="text" placeholder="Escreva aqui!">
                    <input class="search-button" type="button" value="Procurar">
                </label>
            </section>
            <section class="container-albums">
                <?php if(!empty($albums)): ?>
                    <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <h2 class="album-name" ><?php echo e($album['nome']); ?></h1>

                        <div class="title-table" >
                            <p class="music-ordem" >N°</p>
                            <h3 class="music-name" >musica</h2>
                            <p class="music-time" >Duração</p>
                        </div>

                        <?php $__currentLoopData = $album['faixas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="container-music" >
                                <p class="music-ordem" ><?php echo e($music['ordem']); ?></p>
                                <h3 class="music-name" ><?php echo e($music['nome']); ?></h2>
                                <p class="music-time" >Duration: <?php echo e($music['duracao']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </section>

            <section>
                <!-- Botão para abrir o modal -->
                <button class="button-open"  onclick="openModal()">Editar</button>

                <!-- Modal -->
                <div id="myModal" class="modal" style="">
                    <div class="modal-content">
                        <button class="button-close" onclick="closeModal()">&times;</button>
                        <h2>Meu Modal</h2>
                        <p>Conteúdo do modal...</p>
                    </div>
                </div>

                <!-- Script para controlar o modal -->
                <script>
                function openModal() {
                    var modal = document.getElementById("myModal");
                    modal.style.display = "block";
                }

                function closeModal() {
                    var modal = document.getElementById("myModal");
                    modal.style.display = "none";
                }
                </script>
            </section>
        </main>
    </div>
    <!-- <script type="module" src="<?php echo e(asset('js/feedingAlbum.js')); ?>"></script> -->
</body>

</html>
<?php /**PATH C:\Users\gabriel\codigos\laravel02\laravel-php\resources\views/welcome.blade.php ENDPATH**/ ?>