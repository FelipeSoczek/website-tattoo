<header>
	
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light border">


		<div class="container">
			<a href="/home" class="navbar-brand">
				<img src="../img/alien.png" width="80">
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
    		</button>

			<p class="text-dark mr-auto mt-3 ml-3 font-italic font-weight-bold">Jhony Tattoo's</p>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="/home" class="btn btn-secondary btn-lg ml-1">Home</a>
					</li>

					<li class="nav-item">
						<a href="/portfolio" class="btn btn-secondary btn-lg ml-1">Portfólio</a>
					</li>

					<li class="nav-item">
						<a href="/estilos" class="btn btn-secondary btn-lg ml-1">Estilos</a>

					</li>
					@if( auth()->check() )
		                <li class="nav-item">
		                    <a class="nav-link" href="#">Olá, {{ auth()->user()->name }}</a>
		                </li>

		                <li class="nav-item">
		                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
		                </li>
		                
            		@endif
				</ul>
			</div>
		</div>
	</nav>

</header>