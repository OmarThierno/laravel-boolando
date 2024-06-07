<header>
  <div class="container">
    <nav>
      <div class="header-left">
        <ul>
          <li class="{{ Request::route()->getName() === 'home' ? 'active' : ''}}">
            <a href="{{route('home')}}">Home</a>
          </li>
          <li class="{{ Request::route()->getName() === 'woman' ? 'active' : ''}}">
            <a href="{{route('woman')}}">Donna</a>
          </li>
          <li class="{{ Request::route()->getName() === 'man' ? 'active' : ''}}">
            <a href="{{route('man')}}">Uomo</a>
          </li>
          <li class="{{ Request::route()->getName() === 'child' ? 'active' : ''}}">
            <a href="{{route('child')}}">Bambini</a>
          </li>
        </ul>
      </div>
      <div class="header-middle">
        <img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt="">
      </div>
      <div class="header-right">
        <i class="fa-regular fa-user"></i>
        <i class="fa-regular fa-heart"></i>
        <i class="fa-solid fa-bag-shopping"></i>
      </div>
    </nav>
  </div>
</header>