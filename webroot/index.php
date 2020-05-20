<?php
	require "header.php";
?>

<main>

<body>
<nav>
<div class="main">

<div class = "box1" onclick="location.href='#aboutMe';" style="cursor: pointer;">
	<h3>About me</h3>
	<p> A brief introduction to me</p>
</div>
<div class = "box2" onclick="location.href='#skills';" style="cursor: pointer;">
	<h3>Skills and achievements</h3>
	<p> here is listed Some of my personal skills and achievements </p>
</div>
<div class = "box3" onclick="location.href='#education';" style="cursor: pointer;">
	<h3>Education and Qualifications</h3>
	<p> My education, and the qualifications I have acheived</p>
</div>
<div class = "box4" onclick="location.href='#experience';" style="cursor: pointer;">
	<h3>experience</h3>
	<p> Experience I have had, spending time at different companies and doing work</p>
</div>
<div class = "box5" onclick="location.href='#portfolio';" style="cursor: pointer;">
	<h3>Portfolio</h3>
	<p> Some key Portfolio elements</p>
</div>
<div class = "box6" onclick="location.href='#contact';" style="cursor: pointer;">
	<h3>contact info</h3>
	<p> Ways to reach out and contact me</p>
</div>

<div class = "box7" onclick="location.href='viewBlog.php';" style="cursor: pointer;">
	<h3>blog</h3>
	<p> view my blog</p>
</div>
</div>
</nav>

    <section id="about">
		<div class="container">
			<div class="row">
				<div class="col">
			<a name="aboutMe"><h3 class = "text-Title">About me:</h3></a>
			<p>My name is Gavriel Neuman, I am a 20 year old computer science undergraduate studying at queen mary university. My interest in programming began when I first started to play video games and wondered how on earth they where made in the first place. After discovering programming, I began to take online courses in python and blender(a 3-d modeling program), and my interest for computers as a whole grew. After completing my undergraduate, I hope to complete a masters degree specialising in machine learning, and to one day work at a major software development company as part of a large team.
			</p>
				</div>
				<div class="col-5">
					<div class="imgP">
						<img src="me.jpg">
					</div>	
				</div>
			</div>
		</div>
  </section>

     <section>
	 <div class="container">
			<div class="row">
				<div class="col">
      <a name="skills"><h3>Skills and achievements:</h3></a>
      <p>One of my favourite hobbies and past-times, is playing the guitar. I have played for over 11 years, starting of self-taught at the age of 9, I started recieving guitar lessons in high school. In year 13 i recieved a rock school grade 8 qualification, and began to take on students of my own, giving me practice and insight on mentoring and being a leader. Another achievemnt of mine is volentiering work done for a special needs service called "yachad" during my gap year. 
      </p>
		</div>

					<div class="imgP2">
						<img src="guitar.jfif">

				</div>
			</div>
		</div>	  
  </section>
  
       <section>
	   	 <div class="container">
			<div class="row">
				<div class="col">
      <a name="education"><h3>Education and Qualifications</h3></a>
      <p>I went to a jewish chariedy primary school called "Noam" in wembly, where the school day was split so that half the day was regular education and the other half was religious studies. My religious education continued when I attended the jewish modern orthodox highshool called "Hasomnean". It was there that I continued to study religious texts such as the talmud, refining my knowledge of biblical hebrew and arameic, and recieved two A's and a B at A-level, in biology, psychology, and computer science.  
      </p>
	  </div>
				<div class="col-5">
					<div class="imgP">
						<img src="education.jpg">
					</div>	
				</div>
			</div>
		</div>
  </section>
  
         <section>
	 <div class="container">
			<div class="row">
				<div class="col">
      <a name="experience"><h3>Experience</h3></a>
      <p>During summer holidays throughout highschool, I took opportunities to visit software development companies whenever i could, as it is something I am passionate about, and enjoy taking oppertunities to learn wherever I can. In year 11, I visited the games and software development company "Marmolade", for two weeks. I spent my time there speaking with developers, and working on level design for the game they where working on. In year 11, I went to the company "Hello games", developers of the game "No Mans Sky". I got to attend meatings and chat to developers which tought me allot about the development process.
	   </div>
				<div class="col-5">
					<div class="imgP">
						<img src="experience.jpg">
					</div>	
				</div>
			</div>
		</div>
  </section>
  
           <section>
		   	 <div class="container">
			<div class="row">
				<div class="col">
      <a name="portfolio"><h3>Portfolio</h3></a>
      <p>During summer holidays throughout highschool, I took opportunities to visit software development companies whenever i could, as it is something I am passionate about, and enjoy taking oppertunities to learn wherever I can. In year 11, I visited the games and software development company "Marmolade", for two weeks. I spent my time there speaking with developers, and working on level design for the game they where working on. In year 11, I went to the company "Hello games", developers of the game "No Mans Sky"
      </p>
	  	   </div>
				<div class="col-5">
					<div class="imgP">
						<img src="experience.jpg">
					</div>	
				</div>
			</div>
		</div>
  </section>



  
             <section>
			 		   	 <div class="container">
			<div class="row">
				<div class="col">
      <a name="contact"><h3>Contact info</h3></a>
      <p>Phone Number: 07505896975
      </p>
	  <p>
	  Email: gneuman.uk@gmail.com
	  </p>
	  <p>
	  instagram: Gavi45
	  </p>

	  </div>
	  </div>
	  </div>
  </section>
  <div>
  
  <aside>
  <a href="signup.php">Signup</a>
  </aside>

  
  </div>
    <?php
	if (isset($_SESSION['userId'])){
		echo '<form action="includes/logout.inc.php" method="post">
		<button type="submit" name="logout-submit">Logout</button>
		</form>';
	}
	else{
		echo '<form action="login.php" method="post">
		<button type="submit" name="login-submit">Login</button>
  </form>';
	}
  ?>
  
</body>

</main>

<?php
	require "footer.php";
?>