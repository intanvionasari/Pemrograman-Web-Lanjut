<html>
<head>
    <title>master</title>
</head>
<body>
    
    <header>
    ini header
    </header>
    <hr/>
    <br/>

    <h3>@yield('judul')</h3>

    <!--side bar-->

    @section('sidebar')
    Ini adalah sidebar.
    @show
    <hr/>

    <!--konten-->
    Ini adalah konten
    @yield('content')
    <br/>

    <hr/> 

    <!--footer-->
     <footer>
     Ini adalah footer 
     </footer>
</body>
</html>