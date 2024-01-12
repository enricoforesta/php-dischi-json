<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- /MY CSS -->
</head>

<body>
    <div id="app">
        <header>
            <h1>Top {{cds.length}} Brani</h1>
        </header>
        <main>
            <ul>
                <li v-for="(cd, index) in cds">
                    <div class="img">
                        <img :src="cd.img" :alt="cd.name">
                    </div>
                    <div>
                        <button @click=getDetails(index)>Dettagli</button>
                        <h3> {{ cd.name}}</h3>
                        <span>{{cd.artist}}</span>
                        <h5>{{cd.years}}</h5>
                    </div>
                </li>
            </ul>
            <div v-if="currentcd" class="result">
                <h3> {{ currentcd.name}}</h3>
                <span>{{currentcd.artist}}</span>
                <h5>{{currentcd.years}}</h5>
                <p>{{currentcd.info}}</p>
            </div>
        </main>

    </div>
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /VUE -->
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /AXIOS -->
    <!-- MY JS -->
    <script src="./js/index.js"></script>
    <!-- /MY JS -->
</body>

</html>