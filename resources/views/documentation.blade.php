<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<title>Dino Exploder</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <link rel="icon" href="{{ url('img/icon_dino.ico') }}">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @include('shared.nav')
    <link rel="stylesheet" href="https://stackedit.io/style.css" />
  </head>

  <body class="stackedit" style="padding-top: 50px;">
    <div class="stackedit__html"><h2 id="dinosaur-exploder-documentation">Dinosaur Exploder Documentation</h2>
  <blockquote>
  <p>Version: 1.0.1<br>
  Author(s): Dylan Power, Maxime Aldahan, Julien Von Der Marck<br>
  Published: April 20th, 2022<br>
  License: <a href="https://github.com/dylan-power/dinosaur-exploder/blob/main/LICENSE">MIT License</a></p>
  </blockquote>
  <p>This is the documentation for Dinosaur Exploder, a student-led open source shoot 'em up video game.</p>
  <h3 id="table-of-contents">Table of Contents</h3>
  <ul>
  <li><a href="#about-this-document">1 - About This Document</a>
  <ul>
  <li><a href="#disclaimer">1.1 Disclaimer</a></li>
  <li><a href="#versions">1.2 Versions</a></li>
  </ul>
  </li>
  <li><a href="#installation">2 - Installation</a>
  <ul>
  <li><a href="#installing-java-and-openjdk-17">2.1 Installing Java and OpenJDK 17</a></li>
  <li><a href="#running-on-linux">2.2 Running on Linux</a></li>
  <li><a href="#running-on-windows">2.3 Running on Windows</a></li>
  </ul>
  </li>
  <li><a href="#how-to-play">3 - How to Play</a>
  <ul>
  <li><a href="#controls">3.1 Controls</a></li>
  </ul>
  </li>
  <li><a href="#contributing">4 - Contributing </a>
  <ul>
  <li><a href="#setting-up-development-environment">4.1 Setting up Development Environment</a></li>
  <li><a href="#javafx--fxgl-setup">4.2 JavaFX &amp; FXGL Setup</a></li>
  <li><a href="#programming-guidelines">4.3 Programming Guidelines</a></li>
  <li><a href="#other-ways-to-contribute">4.4 Other Ways to Contribute</a></li>
  </ul>
  </li>
  </ul>
  <h3 id="about-this-document">1 - About This Document</h3>
  <h4 id="disclaimer">1.1 Disclaimer</h4>
  <p>Our team cannot be responsible for any issues you may encounter as a result of following the instructions and guides in this document. This document may contain errors. Please use at your own discretion.</p>
  <h4 id="versions">1.2 Versions</h4>
  <p>This is version 1.0.1 of the Dinosaur Exploder documentation. This matches the current development version of the game.</p>
  <p>The most recent version of this document can be found at <a href="https://dinosaur-exploder.freecluster.eu/documentation">https://dinosaur-exploder.freecluster.eu/documentation</a>.</p>
  <h3 id="installation">2 - Installation</h3>
  <h4 id="installing-java-and-openjdk-17">2.1 Installing Java and OpenJDK 17</h4>
  <p>Java 17 must be installed on your machine to run our game. Newer versions of Java may work but this has not been tested by our team. If you wish to contribute code changes, please run Java 17. If you want to run the game without making changes, Java 18+ may work but we do not take responsibility in the event it does not work.</p>
  <p>For Linux installation, we recommend using the synaptic package manager.<br>
  If you don’t have synaptic installed, open a terminal and run the following:</p>
  <blockquote>
  <p>sudo apt install synaptic</p>
  </blockquote>
  <p>After running this command, open synaptic. You may be prompted to enter a password before opening.</p>
  <p><img src="https://i.ibb.co/ypwjZFj/synaptic-scr1.png" alt="Synaptic home page"><br>
  Click search in the upper right corner and type in ‘openjdk’.<br>
  <img src="https://i.ibb.co/cybRwkb/synaptic-search.png" alt="Synaptic search"><br>
  Scroll down until you find openjdk-17-jdk. Right-click on it and select ‘Mark for Installation’. Finally, click ‘Apply’ near the top.<br>
  <img src="https://i.ibb.co/8Y68kZM/synaptic-apply.png" alt="">A ‘Summary’ window will pop up showing the proposed installation(s). Click ‘Apply’ to proceed.<br>
  <img src="https://i.ibb.co/KwrNsrD/synaptic-summary.png" alt="">Java is now installed on your Linux system. To check, run the following commands in a terminal:</p>
  <blockquote>
  <p>java --version<br>
  javac --version</p>
  </blockquote>
  <p><img src="https://i.ibb.co/WP6pnP2/java.png" alt=""></p>
  <p>For Windows installation, you’ll first have to download and install Java from here: <a href="https://www.java.com/download/ie_manual.jsp">https://www.java.com/download/ie_manual.jsp</a>. Then, navigate to <a href="https://jdk.java.net/17/">this site</a> and download the OpenJDK 17 windows zip file. Extract the folder to your desired directory. Open the folder, copy everything, create an empty folder on your local disk and paste everything into this folder.<br>
  <img src="https://i.ibb.co/1RTj6zY/windows1.png" alt=""><br>
  Next, search in control panel for System Environment Variables.<br>
  <img src="https://i.ibb.co/27BhqN8/windows2.png" alt=""><br>
  Select ‘Edit the system environment variables’, then select ‘Environment Variables’ -&gt; ‘New’ and put ‘JAVA_HOME’ in the ‘Variable name’ field. In the ‘Variable value’ field, insert the path of the folder where you extracted the contents of the zip file.<br>
  <img src="https://i.ibb.co/WsDyj8W/windows3.png" alt=""><br>
  Open a command prompt by searching ‘cmd’.<br>
  <img src="https://i.ibb.co/fQvbwj3/windows4.png" alt=""><br>
  To check if Java 17 and OpenJDK have been installed correctly, type the following command:</p>
  <blockquote>
  <p>java -version</p>
  </blockquote>
  <p><img src="https://i.ibb.co/V3bc5KK/windows5.png" alt=""></p>
  <h4 id="running-on-linux">2.2 - Running on Linux</h4>
  <p>Our game is packaged in a .jar file and you will need to have Java set up to run it. After downloading the file from our website, you will first need to edit permissions to allow for execution. Navigate to where the file is stored on your machine, right click and select ‘Properties’, then select the ‘Permissions’ tab. Enable ‘Allow executing file as program’ underneath ‘Execute’.<br>
  <img src="https://i.ibb.co/fXBZSK1/permissions.png" alt=""><br>
  After completing this, open a terminal and navigate to where the file is stored. Input the following command:</p>
  <blockquote>
  <p>java -jar dinosaur-exploder.jar</p>
  </blockquote>
  <h4 id="running-on-windows">2.3 - Running on Windows</h4>
  <p>First, make sure to have Java 17 installed on your system. Download the .jar file from our website. Open a command prompt and navigate to where the file is stored (e.g. downloads). Type the following command:</p>
  <blockquote>
  <p>java -jar dinosaur-exploder.jar</p>
  </blockquote>
  <h3 id="how-to-play">3 - How to Play</h3>
  <h4 id="controls">3.1 Controls</h4>
  <p>After running the .jar file, the game will take a few seconds to load. You’ll then see the spaceship along with the main game environment.<br>
  <img src="https://i.ibb.co/2ZnWRTR/game-intro.png" alt=""><br>
  The spaceship is controlled with the following keys:</p>
  <blockquote>
  <p>Left arrow - move left<br>
  Right arrow - move right<br>
  Up arrow - move up<br>
  Down arrow - move down</p>
  </blockquote>
  <p>The ships laser gun can be triggered by pressing the spacebar. Your current score at any given time during gameplay can be seen in the top left corner in green.</p>
  <p>Quitting the game can only be done by clicking the ‘X’ in the top right corner. We hope to develop a proper menu in future versions.</p>
  <h3 id="contributing">4 - Contributing</h3>
  <h4 id="setting-up-development-environment">4.1 Setting up Development Environment</h4>
  <p>All code by team members is written in the IntelliJ IDEA integrated development environment. You may use a different IDE but incompatibility and errors are a possibility. Due to this, we recommend using IntelliJ IDEA if you’re contributing code.</p>
  <p>IntelliJ can be downloaded <a href="https://www.jetbrains.com/idea/download/#section=windows">here</a>. Select your operating system and follow installation instructions. We recommend the community edition as it is free and doesn’t expire.</p>
  <h4 id="javafx--fxgl-setup">4.2 JavaFX &amp; FXGL Setup</h4>
  <p>JavaFX is a development platform used to create GUI applications. FXGL is a game development library created by Almas Baimagambetov. Both of these platforms are necessary to work on our project.</p>
  <p>To setup JavaFX, first navigate to this page - <a href="https://gluonhq.com/products/javafx/">https://gluonhq.com/products/javafx/</a> and scroll down to the ‘Downloads’ section near the end of the page. Select the SDK for your operating system.<br>
  <img src="https://i.ibb.co/pdnKn2t/download-sdk.png" alt=""><br>
  A .zip file download will start after clicking ‘Download’. Navigate to the location of the file and extract it to your desired location.</p>
  <p>Open your local copy of Dinosaur Exploder in IntelliJ. Select ‘File’ -&gt; ‘Project Structure’ and select ‘Libraries’ from the new window.<br>
  <img src="https://i.ibb.co/Zgzh33Y/javafx-scr1.png" alt="">Select ‘+’ in the top left corner, then select ‘Java’. In the new window, navigate to where you extracted the SDK files. Select the ‘lib’ folder. Click ‘OK’, then ‘Apply’ in the main window.<br>
  <img src="https://i.ibb.co/rHZkHFH/javafx-scr2.png" alt=""></p>
  <p>The final step is to add VM options. In IntelliJ, go to ‘Run’ -&gt; ‘Edit Configurations’.<br>
  <img src="https://i.ibb.co/KF7T6mj/javafx-scr3.png" alt="">Select ‘Modify options’ in the top right corner and under ‘Java’, select ‘Add VM options’. In the ‘Program arguments’ field, copy and paste the following:</p>
  <p>Windows:</p>
  <blockquote>
  <p>–module-path “\path\to\javafx-sdk-17.0.1\lib” --add-modules javafx.controls,javafx.fxml</p>
  </blockquote>
  <p>Linux/MacOS:</p>
  <blockquote>
  <p>–module-path /path/to/javafx-sdk-17.0.1/lib --add-modules javafx.controls,javafx.fxml</p>
  </blockquote>
  <p>FXGL is easily implemented in IntelliJ. The necessary dependencies should be present in the ‘pom.xml’ file:</p>
  <pre><code>&lt;dependency&gt;  
     &lt;groupId&gt;com.github.almasb&lt;/groupId&gt;  
     &lt;artifactId&gt;fxgl&lt;/artifactId&gt;  
     &lt;version&gt;17&lt;/version&gt;  
  &lt;/dependency&gt;
  </code></pre>
  <p>If this dependency is not present in your local version, copy the above and paste it anywhere between the <code>&lt;dependencies&gt; &lt;/dependencies&gt;</code> tags in pom.xml.</p>
  <h4 id="programming-guidelines">4.3 Programming Guidelines</h4>
  <p>There are a few rules you can follow to ensure the code you submit is up to our projects standards.</p>
  <ul>
  <li>
  <p>Reference existing variables and functions correctly. Check carefully for any syntax errors prior to submitting a pull request.</p>
  </li>
  <li>
  <p>When declaring new variables and/or functions, make the name meaningful and relevant to the problem you’re attempting to solve.</p>
  </li>
  <li>
  <p>Follow Java programming conventions. We recommend familiarizing yourself with the <a href="https://www.oracle.com/java/technologies/javase/codeconventions-introduction.html">Java code conventions</a> from Oracle.</p>
  </li>
  <li>
  <p>It’s a good idea to have some basic knowledge of JavaFX and FXGL so you can tackle issues in a timely manner. There are many resources for JavaFX such as <a href="https://www.youtube.com/watch?v=FLkOX4Eez6o">this series</a> from thenewboston. FXGL creator Almas Baimagambetov has many useful tutorials on his YouTube channel, such as this <a href="https://www.youtube.com/watch?v=48rVgdq0mFA&amp;t=260s">asteroids clone</a> tutorial.</p>
  </li>
  </ul>
  <h4 id="other-ways-to-contribute">4.4 Other Ways to Contribute</h4>
  <p>We know that not everyone is a programmer and believe there is a place for all skillsets in our community. Here are some alternative ways to contribute:</p>
  <ul>
  <li>
  <p>Documentation - our project is constantly changing and documentation needs to reflect this. You may assigned to fix a spelling error or write a whole new section.</p>
  </li>
  <li>
  <p>Monitoring issues - looking for potential bugs and opening issues when appropriate is essential in maintaining a decent project.</p>
  </li>
  <li>
  <p>Engaging in discussion - our <a href="https://github.com/dylan-power/dinosaur-exploder/discussions">discussions section</a> is a good place to interact with other community members and help generate ideas for the future.</p>
  </li>
  </ul>
  </div>
  </body>
</html>
