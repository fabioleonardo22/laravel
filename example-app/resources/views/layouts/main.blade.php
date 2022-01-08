<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tittle')</title>

        <!-- fonte do goggle -->
        <link href = "https: //fonts.googleapis.com/css2? family = Roboto"rel =" stylesheet ">
        <link rel="stylesheet" href="/css/style.css">
        <script scr="/js/scripts.js"></script>
       

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
<body>
    <header>
       <nav class="nav.navbar.navbar-expand-lg.navbar-light" > 
        <div class="div.collapse.navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">cadastrar</a>
                </li>
            </ul>
        </div>    
       </nav>
    </header>
   @yield('content') 
    <footer>
        <p>HDC Events &copy; 2022 </p>
    </footer>

</body>
</html>
