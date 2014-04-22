<html lang="en">
<head>      
    <title>Laravel::My Static Web</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav">
            <li><a href="home">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="locate">Locate Us</a></li>
        </ul>
    </nav>
    <section id="container">
        @yield('content')
    </section>
</body>
</html>