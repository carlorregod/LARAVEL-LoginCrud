@include('templates/header')
    @yield('estilos_css')
    <title>
        @yield('titulo')
    </title>
</head>
<body>
    {{-- Card --}}
    <div class="card border-success mx-auto my-5 align-items-center" style="width: 18rem;">    
        <div class="card-body border-success">
            @yield('formulario-cardbody')
        </div>
        <div class="card-footer border-success">
            @yield('formulario-cardfooter')
        </div>
    </div>
<hr>   
<div>@yield('body-principal')</div>
<hr>
@include('templates/footer')
    @yield('javascript')
</body>
</html>

