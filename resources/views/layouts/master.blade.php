@include('partials.headcontent')

<body>

@include('partials.navbar')


<div class="content" style="margin-top:10px;">

    @yield('content')

</div>

@include('partials.footercontent')