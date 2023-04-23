<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Smashing HTML5!</title>

    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lte IE 7]>
    <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body id="index" class="home">

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    
    <div x-data="{ open: false }">
        <button @click="open = true">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>

</body>
</html>