<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dischi 2</title>
    <link rel="stylesheet" href="../milestone-1/style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <header>
        <div class="header__container">
            <div class="header__logo_icon">LOGO SPOTIFY</div>
        </div>
    </header>
    <main id="root">
        <div class="album_container">
            <div v-for="albums in album">
                <div class="img_container">
                    <img :src="albums.poster" alt="">
                </div>

                <h2>{{ albums.title }}</h2>
                <p>{{ albums.author }}</p>
                <p>{{ albums.year }}</p>
                <p>{{ albums.genre }}</p>
            </div>
        </div>
    </main>
    <script src="./js/script.js"></script>
</body>
Ì

</html>