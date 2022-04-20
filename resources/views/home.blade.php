<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dino Exploder</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
        <link rel="icon" href="{{ url('img/icon_dino.ico') }}">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @include('shared.nav')
    </head>
    <body>
        <main role="main" style="padding-top: 40px;">
            <section class="jumbotron text-center">
                <div class="container">
                    <img class="card-img-top" style="width: 15rem;" src="{{ asset('img/background_dino.png') }}" alt="Card image cap">
                    <h1 class="jumbotron-heading">Dinosaur Exploder</h1>
                    <p class="lead text-muted">Dinosaur Exploder is a free, open source shoot 'em up video game written in Java using JavaFX and the FXGL game development library.</p>
                    <p>
                        <button type="button" target="_blank" onclick="window.open('https://github.com/dylan-power/dinosaur-exploder')" class="btn btn-dark my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            GitHub
                        </button><br>
                        <button type="button" onclick="window.open('https://twitter.com/DinosaurExplod1')" class="btn btn-primary my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                            Twitter
                        </button>
                        <button type="button" onclick="window.open('https://discord.gg/nkmCRnXbWm')" class="btn btn-light my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16" class="d-flex align-items-center">
                                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                            </svg>
                            Discord
                        </button>
                        
                    </p>
                </div>
            </section>
        
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">News</h5>
                          <p class="card-text"><li>Release of Dinosaur-Exploder 1.0.1 [ 2022 May ]</li></p>
                          <a href="https://github.com/dylan-power/dinosaur-exploder/releases" class="btn btn-primary">Checkout the releases</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <video height="600px" controls> 
                            <source src="{{ URL::asset('video/Clip_Presentation.mp4') }}" type="video/mp4"> 
                        </video>
                    </div>
                </div>
            </div>
        </main>
	</body>
    <footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Dinosaur Exploder is an Open-Source project hosted on GitHub. Feel free to contribute to our project !</p>
			<p>New as a contributor ? <a href="https://github.com/dylan-power/dinosaur-exploder">Visit our GitHub</a> or read our <a href="https://github.com/dylan-power/dinosaur-exploder/blob/main/CONTRIBUTING.md">contribution guidelines</a>.</p>
		</div>
	</footer>
</html> 

