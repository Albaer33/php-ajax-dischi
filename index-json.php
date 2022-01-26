<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <header>
        LOGO
    </header>

    <div id="root">

        <main>
            <div class="wrapper">
                <div v-for="(album, index) in albums" :key="index" class="album">
                    <div class="album-img">
                        <img :src="album.poster" :alt="album.title">
                    </div>
                    <div class="album-text">
                        <div class="title">{{album.title}}</div>
                        <div class="author">{{album.author}}</div>
                        <div class="year">{{album.year}}</div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>