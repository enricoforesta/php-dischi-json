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
        <ul>
            <li v-for="cd in cds">
                <h3> {{ cd.name}}</h3>
                <span>{{cd.artist}}</span>
                <h5>{{cd.years}}</h5>
            </li>
        </ul>
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