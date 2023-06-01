<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Discografia - Tião Carreiro e Pardinho 🤠</title>

</head>

<body>
    <div class="container-main">
        <header>
            <img src="{{ asset('css/images/logo.png') }}" alt="">
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
                @if (!empty($albums))
                    @foreach ($albums as $album)

                        <h2 class="album-name" >{{ $album['nome'] }}</h1>

                        <div class="title-table" >
                            <p class="music-ordem" >N°</p>
                            <h3 class="music-name" >musica</h2>
                            <p class="music-time" >Duração</p>
                        </div>

                        @foreach ($album['faixas'] as $music)
                            <div class="container-music" >
                                <p class="music-ordem" >{{ $music['ordem'] }}</p>
                                <h3 class="music-name" >{{ $music['nome'] }}</h2>
                                <p class="music-time" >Duration: {{ $music['duracao'] }}</p>
                            </div>
                        @endforeach

                    @endforeach
                @endif
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
    <!-- <script type="module" src="{{ asset('js/feedingAlbum.js') }}"></script> -->
</body>

</html>
