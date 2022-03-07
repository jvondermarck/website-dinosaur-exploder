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
                        <a href="https://github.com/dylan-power/dinosaur-exploder" class="btn btn-primary my-2">Our GitHub</a>
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

