<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dist/main.css">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    <meta name="jwt" content="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJpZCI6MTMzNywidXNlcm5hbWUiOiJqb2huLmRvZSJ9EvTdOJS-fbffGHLyND3BMDwWE22zUBOCRspPZEHlNEw">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script>
        window.appConfig = {};
        window.appConfig = {
            authorization: 'Bearer' + document.querySelector('meta[name="jwt"]').getAttribute('content'),
            mobileVersion: false
        };
    </script>
</head>