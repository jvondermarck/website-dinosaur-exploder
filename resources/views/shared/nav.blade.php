<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Dinosaur Exploder</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="{{ Route::is('home') ? 'nav-item active font-weight-bold' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
        
          <li class="{{ Route::is('giveLastestArticle') ? 'nav-item active font-weight-bold' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('giveLastestArticle') }}">Public article</a>
          </li>
      </ul>
    </div>

      <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @if(session()->get('user') != null)
            <li class="nav-item dropdown">
              <a href="{{ route('account') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
              <div class="dropdown-menu">
                <a href="{{ route('account') }}" class="dropdown-item">My account</a>
                <a href="{{ route('formpassword') }}" class="dropdown-item">Change password</a>
                <a href="{{ route('deleteuser') }}" class="dropdown-item">Delete my account</a>
                <a href="{{ route('signout') }}" class="dropdown-item">Sign out</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Article</a>
              <div class="dropdown-menu">
                  <a href="{{ route('addarticle') }}" class="dropdown-item">Add an article</a>
                  <a href="{{ route('seeArticle') }}" class="dropdown-item">See your articles</a>
              </div>
            </li>
            @endif
            @if(session()->get('user') != null)
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('signout') }}">Sign out</a>
              </li>
            @else 
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('signin') }}">Sign in</a>
              </li>
            @endif
        </ul>
    </div>
    </ul>
  </div>
</nav>