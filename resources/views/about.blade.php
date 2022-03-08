@extends('layouts.app2')

@section('title','About')

@section('body')
	@parent
  <main role="main">
    <div class="album py-5">
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                  <h3 class="card-title">Description</h3>
                  <p class="card-text">...</p>
                  <div class="d-flex flex-wrap align-self-stretch justify-content-center">
                    <div class="card" style="width:300px; margin:10px; max-height:500px;" class="row">
                      <!-- le corps -->
                        <div class="card-body">
                          <h4 class="card-title">Feature</h4>
                          <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                            ....
                          </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3" style="width:300px; margin:10px; max-height:500px;" class="row">
                      <!-- le corps -->
                        <div class="card-body">
                          <h4 class="card-title">Open Source</h4>
                          <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                            ....
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width:300px; margin:10px; max-height:500px;" class="row">
                      <!-- le corps -->
                        <div class="card-body">
                          <h4 class="card-title">Contribution</h4>
                          <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                            ....
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width:300px; margin:10px; max-height:500px;" class="row">
                      <img class="card-img-top" width="300" height="180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22298%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20298%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f6b731097%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A15pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f6b731097%22%3E%3Crect%20width%3D%22298%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22110.59238052368164%22%20y%3D%2297.2%22%3E298x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Screnshoot of the game</h5>
                        <p class="card-text">...</p>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    {{-- MEET THE TEAM --}}
    <div class="album py-5">
      <div class="container">
          <div class="card mb-3">
              <div class="card-body">
                <h3 class="card-title">Meet the team</h3>
                <p class="card-text">We are a group of three people.</p>
                <div class="d-flex flex-wrap align-self-stretch justify-content-center">
                  <div class="card border-success mb-3" style="width:300px; margin:10px; max-height:500px;" class="row">
                    <!-- le corps -->
                      <div class="card-body">
                        <h4 class="card-title">Dylan Power</h4>
                        <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                          Dylan is handling project management and documentation.
                        </div>
                        <a href="https://github.com/dylan-power" class="btn btn-success">Dylan's GitHub</a>
                      </div>
                  </div>
                  <div class="card border-dark  mb-3" style="width:300px; margin:10px; max-height:500px;" class="row">
                    <!-- le corps -->
                      <div class="card-body">
                        <h4 class="card-title">Julien Von Der Marck</h4>
                        <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                          Julien is responsible for web development and help Maxime with the game programming.
                        </div>
                        <a href="https://github.com/jvondermarck" class="btn btn-dark">Julien's GitHub</a>
                      </div>
                  </div>
                  <div class="card border-warning mb-3" style="width:300px; margin:10px; max-height:500px;" class="row">
                    <!-- le corps -->
                      <div class="card-body">
                        <h4 class="card-title">Maxime Aldahan</h4>
                        <div class="card-text" style ="min-height: 52px; max-height: 52px; overflow: hidden; margin-bottom: 10px;" >
                          Maxime is handling game programming.
                        </div>
                        <a href="https://github.com/DatBoiSaix" class="btn btn-warning">Maxime's GitHub</a>
                      </div>
                  </div>
              </div>
              <button type="button" onclick="window.location='https://twitter.com'" class="btn btn-primary my-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
                Follow us on Twitter
            </button>
            </div>
      </div>
  </div>
  </main>
    
@endsection
