<header id="app_header">
    <div class="container-md d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <nav class="nav justify-content-center">
            <a class="nav-link text-black {{Route::currentRouteName()=== 'home' ? 'bg-primary text-white' : ''}} " href="{{route('home')}}" aria-current="page">CHARACTERS</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== 'comix' ? 'bg-primary text-white' : ''}}" href="{{route('comix')}}" aria-current="page">COMICS</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">MOVIES</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">TV</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">GAMES</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">COLLECTIBLES</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">VIDEOS</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">FANS</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">NEWS</a>
            <a class="nav-link text-black {{Route::currentRouteName()=== '#' ? 'bg-primary text-white' : ''}}" href="#" aria-current="page">SHOP</a>
        </nav>
    </div>
</header>