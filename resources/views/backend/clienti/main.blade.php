<!DOCTYPE HTML>
<!--[if IE 7 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it" class="ie9"> <![endif]-->
<html lang="it-IT">
<head>
    @include('backend.clienti.partials._head')
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img alt="DRTADV" src="">
				</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ url('backend/clienti') }}">CLIENTI</a></li>
				<li><a href="{{ url('backend/lavori') }}">LAVORI</a></li>
			</ul>
		</div>
	</nav>
    <div id="wrapper">
        <div class="container">
            @include('backend.clienti.partials._messages')

            @yield('content')
        </div>
    </div>

    @include('backend.clienti.partials._footer')
    </body>
</html>