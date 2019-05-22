<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/main.css">
    <meta name="jwt" content="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJpZCI6MTMzNywidXNlcm5hbWUiOiJqb2huLmRvZSJ9EvTdOJS-fbffGHLyND3BMDwWE22zUBOCRspPZEHlNEw">
    <script>
        window.appConfig = {};
        window.appConfig = {
            authorization: 'Bearer' + document.querySelector('meta[name="jwt"]').getAttribute('content'),
        };
    </script>
</head>