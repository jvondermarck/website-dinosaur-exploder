@extends('layouts.app2')

@section('title','Documentation')

@section('body')
	<div class="jumbotron jumbotron-fluid" style="margin-top: 10px;"">
		<div class="container">
		  <h1 class="display-4">Documentation Dino Exploder</h1>
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
				</ul>
				<div class="tab-content d-flex align-items-center justify-content-center" id="pills-tabContent" >
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="card text-center" style="padding: 40px">
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
							  <a href="https://github.com/dylan-power/dinosaur-exploder" target="_blank" class="btn btn-dark">Download</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="card text-center" style="padding: 40px">
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
							  <code>$ java -jar dinosaur-exploder.jar</code><br>
							  <a href="https://github.com/dylan-power/dinosaur-exploder" target="_blank" class="btn btn-dark" style="margin-top: 20px">Download</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header class="docs-header" style="margin-top: 50px">
				<h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2019-06-01</span></h1>
				<section class="docs-intro">
					<p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
				</section><!--//docs-intro-->
				
				<h5>Github Code Example:</h5>
				<p>You can <a class="theme-link" href="https://gist.github.com/"  target="_blank">embed your code snippets using Github gists</a></p>
				<div class="docs-code-block">
					<!-- ** Embed github code starts ** -->
					<script src="https://gist.github.com/xriley/fce6cf71edfd2dadc7919eb9c98f3f17.js"></script>
					<!-- ** Embed github code ends ** -->
				</div><!--//docs-code-block-->
			</header>

			<section class="docs-section" id="item-1-1">
				<h2 class="section-heading">Section Item 1.1</h2>
				<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. </p>
				<p>Code Example: <code>npm install &lt;package&gt;</code></p>
				<h5>Unordered List Examples:</h5>
				<ul>
					<li><strong class="me-1">HTML5:</strong> <code>&lt;div id="foo"&gt;</code></li>
					<li><strong class="me-1">CSS:</strong> <code>#foo { color: red }</code></li>
					<li><strong class="me-1">JavaScript:</strong> <code>console.log(&#x27;#foo\bar&#x27;);</code></li>
				</ul>
				<h5>Ordered List Examples:</h5>
				<ol>
					<li>Download lorem ipsum dolor sit amet.</li>
					<li>Click ipsum faucibus venenatis.</li>
					<li>Configure fermentum malesuada nunc.</li>
					<li>Deploy donec non ante libero.</li>
				</ol>
			</section><!--//section-->
		</div>
	</div>
@endsection
