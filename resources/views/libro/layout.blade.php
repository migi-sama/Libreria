<!DOCTYPE html>
<html lang="es">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('titulo','Libreria MALTIN POLAR')</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    	<style>
    		body{
				background-color: #fff;
			}
			.container{
    			margin-top: 4%;
    			background: #e9ecef;
    			padding: 1%;
    			border-radius: 0.5rem;
    		}
    		.headerP{
    			display:flex;
    			align-items:center;
      			justify-content:center;
    		}

			.containe{
				max-width: 1140px
			}
			
			#sticky-footer {
 			 flex-shrink: none;
			}
    	</style>
		<script>
		</script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">
			Maltin Polar
		</a>		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('libro.index') }}">Inicio<span class="sr-only">Inicio</span></a>
				</li>
			</ul>
		<div>
			<span>Bienvenido, Compatriota.</span>
		</div>
	</nav>
	<div class="container">
    	<br><br><br>
		<header class="headerP">
			@yield('encabezado')
		</header>
		@yield('contenido')
	</div>

</body>
</html>
