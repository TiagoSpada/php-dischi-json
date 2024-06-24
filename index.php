<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Dischi più venduti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="main.scss">
</head>
<body>
    <div id="app">
        <header class="container-lg py-4">
            <h1 class="text-center">I 10 dischi più venduti di sempre</h1>
            <hr class="w-100">
        </header>
        <div class="container-lg">
            <div class="row justify-content-center">
                <div  class="col-6 px-4" v-for="(album,index) in ListAlbum" :class="[bottomRanks(index) ? 'col-lg-3' : 'col-lg-4 mb-5']">
                    <div class="content ">
                            <div class="img">
                                <img :src="`./img/${album.img}`" :alt="album.name" class="w-100 rounded"></div>
                            <div class="info">
                                <h3 class="name">{{ album.name }}</h3>
                                <div class="artist">{{ album.artist }}</div>
                                <div class="release">{{ album.release }}</div>
                                <div class="copiesSold">Copie vendute: {{ album.nCopiesSold }}</div>
                                <div class="position">{{index+1}}</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="main.js"></script>
</body>
</html>