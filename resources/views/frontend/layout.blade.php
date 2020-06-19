<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-frontend.head/>
</head>
<body>

<x-frontend.top/>
<!-- Header Section Begin -->
<x-frontend.header/>
<!-- Header Section End -->
@yield("content")
<!-- Footer Section Begin -->
<x-frontend.footer/>
<!-- Footer Section End -->
<!-- Js Plugins -->
</body>
<x-frontend.scripts/>
</html>
