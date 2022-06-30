<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <div id="app">

        <header>
            <img src="assets/img/spotify-logo.png" alt="spotify-logo">
        </header>

        <main>
            <div id="content-container">
                <div v-for="disco in dischi">
                    <img :src="disco.poster" :alt="disco.title +'-logo'">
                    <h3>{{disco.title}}</h3>
                    <span>{{disco.author}}</span>
                    <span>{{disco.year}}</span>
                </div>
            </div>
          </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>