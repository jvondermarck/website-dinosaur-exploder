<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dino Exploder</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
        <link rel="icon" href="{{ url('img/lol.ico') }}">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @include('shared.nav')
    </head>
    <body>
        <main role="main" style="padding-top: 20px;">
            <section class="jumbotron text-center">
                <div class="container">
                    <img class="card-img-top" style="width: 15rem;" src="{{ asset('img/background.png') }}" alt="Card image cap">
                    <h1 class="jumbotron-heading">Dinosaur Exploder</h1>
                    <p class="lead text-muted">Dinosaur Exploder is a free, open source video game written in Java and is inspired by classic shoot em' ups such as asteroids.</p>
                    <p>
                        <button type="button" onclick="window.location='https://github.com/dylan-power/dinosaur-exploder'" class="btn btn-primary my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            Our GitHub
                        </button>
                    </p>
                </div>
            </section>
        
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">News</h5>
                          <p class="card-text"><li>Release of Dinosaur-Exploder 1.0.1 [ 2022 March 01 ]</li></p>
                          <a href="#" class="btn btn-primary">Checkout the releases</a>
                        </div>
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

