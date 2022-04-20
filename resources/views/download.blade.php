@extends('layouts.app2')

@section('title','Download')

@section('body')
	<div class="jumbotron jumbotron-fluid" style="padding: 70px" >
		<div class="container">
		  <h1 class="display-4">Download Dino Exploder</h1>
		  <p class="lead">Feel free to contact the team if you encounter any issue.</p>
		</div>
	</div>

	<div class="docs-content">
		<div class="container">
			<div class="container" style="margin-top: 50px;">
				<ul class="nav nav-pills mb-3 d-flex justify-content-center " id="pills-tab" role="tablist" style="font-size: 20px">
					<li class="nav-item">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
							<path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
						</svg> Windows
					</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
						<img src="https://img.icons8.com/ios-filled/344/linux.png" alt="" width="30px" height="30px"> Linux
					</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-local-tab" data-toggle="pill" href="#pills-local" role="tab" aria-controls="pills-local" aria-selected="false">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-terminal-fill" viewBox="0 0 16 16">
								<path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146z"/>
							  </svg> Locally
						</a>
					</li>
				</ul>
				<div class="tab-content d-flex align-items-center justify-content-center" id="pills-tabContent" >
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="card text-center" style="padding: 20px">
							<div class="card-body">
							  <h5 class="card-title">WINDOWS JAR DOWNLOAD</h5>
							  <div class="d-flex align-items-center justify-content-center" style="margin-bottom: 10px;">
								  <img alt="Dino" src="img/icon_dino.ico" width="50px" height="50px">
								  <h6 style="margin-top: 10px; margin-left: 10px">  Dinosaur Exploder </h6>
								  <span style="margin-left: 10px">1.0.1</span>
								  <i class="fa-brands fa-linux"></i>

							  </div>
							  <p class="lead">
								Be aware to download <a href="https://www.java.com/download/ie_manual.jsp">Java</a> and the <a href="https://jdk.java.net/17/">Open JDK 17</a> before installing.
							  </p>
							  <a href="https://github.com/dylan-power/dinosaur-exploder" target="_blank" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
								<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
								<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
							  </svg>  Download</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="card text-center" style="padding: 20px">
							<div class="card-body">
							  <h5 class="card-title">LINUX JAR DOWNLOAD</h5>
							  <div class="d-flex align-items-center justify-content-center" style="margin-bottom: 10px;">
								  <img alt="Dino" src="img/icon_dino.ico" width="50px" height="50px">
								  <h6 style="margin-top: 10px; margin-left: 10px">  Dinosaur Exploder </h6>
								  <span style="margin-left: 10px">1.0.1</span>
								  <i class="fa-brands fa-linux"></i>
							  </div>
							  <p class="lead">
								Be aware to download <a href="https://www.java.com/download/ie_manual.jsp">Java</a> and the <a href="https://jdk.java.net/17/">Open JDK 17</a> before installing.
							  </p>
							  <kbd>Terminal</kbd> : <code>$ java -jar dinosaur-exploder.jar</code><br>
							  <a href="https://github.com/dylan-power/dinosaur-exploder" target="_blank" class="btn btn-dark" style="margin-top: 20px">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
									<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
									<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
								  </svg>  Download</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-local" role="tabpanel" aria-labelledby="pills-local-tab">
						<div class="card text-center" style="padding: 20px">
							<div class="card-body">
							  <h5 class="card-title">DOWNLOAD PROJECT LOCALLY</h5>
							  <p class="lead">
								To install our project locally, <kbd>fork</kbd> our repository, and in an empty directory, <br> type the following command to <kbd>clone</kbd> your fork:
							  </p>
							  <code>$ git clone git@github.com: *user*/dinosaur-exploder.git</code><br><br>
							 <p class="text-muted">You also need to make sure <a href="https://openjfx.io/openjfx-docs/#introduction">Java FX</a> and <a href="https://junit.org/junit5/">JUnit 5</a> <br>are installed on your local computer before installing the project.</p> 
							  <a href="https://github.com/dylan-power/dinosaur-exploder" target="_blank" class="btn btn-dark" style="margin-top: 20px">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
									<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
								</svg>  GitHub</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><p style="padding: 20px"></p>
		</div>
	</div>
@endsection