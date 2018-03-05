<!DOCTYPE html>
<html>
<head>
	<title>vamC</title>
        
        <link rel="stylesheet" type="text/css" href="styling.css" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
        	body{
          background-color:rgb(249, 71, 6);
     }
        </style>
</head>
<body bgcolor="orange">
                 
                   <div class="nav-icon">

	            		<li id="a"><a href="#home" class="top_item">HOME</a></li>
	            		<li id="b"><a href="#about" class="top_item">ABOUT</a></li>
	            		<li id="c"><a href="#projects" class="top_item">PROJECTS</a></li>
	            		<li id="d"><a href="#contact" class="top_item">CONTACT</a></li>
	            		<li id="f"><a href="#echo" class="top_item">ECHO</a></li>
	               </div>

	<div class="container">
	      <header class="sidebar">
                <nav class="sidebar_sidenav" id="list">
                    <li id="aa"><a href="#home" class="sidenav_item">HOME</a></li>
                	<li id="ba"><a href="#about" class="sidenav_item">ABOUT</a></li>
                	<li id="ca"><a href="#projects" class="sidenav_item">PROJECTS</a></li>
                	<li id="da"><a href="#contact" class="sidenav_item">CONTACT</a></li>
                	<li id="fa"><a href="#echo" class="sidenav_item">ECHO</a></li>
                </nav>
	      	    <footer class="sidebar_footer">
		  	         <div class="footer_legal">
		  	         	&copy; 2018 by Ranga Vamsi.<br>All Rights Reserved 
		  	         </div>
		       </footer>
	      </header>
		  <main class="main_content">
		      <img src="icons/batman.jpg" width="100%" height="100%" z-index="-2">
		      <div class="main_headbox">
		           <div class="main_heading">
		           	     	 Hi, i'm < Vamsi > , Welcome to roost
		           </div>
		      	
		      </div>
		  	  <div class="touch" id="about">
		  	       <div class="divide">
		  	       	 <div class="box1">
		  	       	    <h1>A little ABOUT ME :</h1>
		  	       	    <p class="para">I'm a web developing enthusiast focused on front-end skills and game designing<br>
                        B.Tech_NIT_Trichy_CSE<br>
                        chicken connoisseur<br>
                        love for batman</p>
		  	       	  </div>
		  	       	 <div class="box2">
		  	       	 	<h1>Skills :-</h1>
                        <p class="para">C , C++ ,Javascript, CSS, HTML, Jqeury ,PHP</p>
		  	       	 </div>
		  	       </div>
		  	  </div>
		  	  <div class="touch2" id="projects">
		  	  	   <canvas id="bats" class="canvas""></canvas>
               <div id="include_home_projects"></div>
		  	  </div>
		  	  <div class="touch3" id="contact">
		  	       <p class="paragraph">
		  	       	   SHOOT A MAIL<br>
		  	       	   rangavamsi5@gmail.com<img widht="50px" height="50px" src="icons/gmail.jpg">
		  	       </p>
		  	  	   <div class="icons">
		  	  	   	  <li id="#e"><a href="https://github.com/sirbrucewayne" class="btn-social" target="_blank">
                              <img alt="github" width="50px" height="50px" src="icons/github.png">
		  	  	   	  </a></li>
		  	  	   	  <li id="#e"><a href="https://www.facebook.com/ranga.vamsi" class="btn-social" target="_blank">
                              <img alt="facebook" width="50px" height="50px" src="icons/facebook.png">
		  	  	   	  </a></li>
		  	  	   	  <li id="#e"><a href="https://www.linkedin.com/in/ranga-vamsi-c-8bb4b5155/" class="btn-social" target="_blank">
                              <img alt="linkedin"  width="50px" height="50px" src="icons/linkedin.png">
		  	  	   	  </a></li>
		  	  	   	  <li id="#e"><a href="https://github.com/sirbrucewayne" class="btn-social" target="_blank">
                              <img alt="instagram"  width="60px" height="60px" src="icons/instagram.jpg">
		  	  	   	  </a></li>
		  	  	   </div>
		  	  </div>
		  	  <div class="touch4" id="echo">
		  	  	  <div class="box">
		  	  	  	  <form action="dbh.php/form.php" method="post">
		  	  	  	  	   <div class="box_left">
		  	  	  	  	   	    <div class="form_input">
		  	  	  	  	   	    	<input type="text" name="name" placeholder="YOUR NAME"><br>
		  	  	  	  	   	    </div>
		  	  	  	  	   	    <div class="form_input">
		  	  	  	  	   	    	<input type="text" name="email" placeholder="EMAIL"><br>
		  	  	  	  	   	    </div>
		  	  	  	  	   	    <div class="form_input">
		  	  	  	  	   	    	<input type="text" name="college" placeholder="YOUR COLLEGE">
		  	  	  	  	   	    </div>
		  	  	  	  	   	    <div class="form_radio">
		  	  	  	  	   	    	<div class="radio_btn1">
                                            <input type="radio" class="dc" name="btn" value="dc">DC<br>
                                     </div>
                                     <div class="radio_btn2">
                                            <input type="radio" class="marvel" name="btn" value="marvel">MARVEL

		  	  	  	  	   	    	</div>
		  	  	  	  	   	    </div>
		  	  	  	  	   </div>
		  	  	  	  	   <div class="box_right">
		  	  	  	  	   	     <div class="comments">
		  	  	  	  	   	     	 <textarea type="textarea"  name="note" placeholder="your reply goes here..."></textarea>
		  	  	  	  	   	     </div>
		  	  	  	  	   	     <div class="send-btn">
		  	  	  	  	   	     	<button type="submit" name="send">SEND</button>
		  	  	  	  	   	     </div>
		  	  	  	  	   </div>
		  	  	  	  </form>
		  	  	  </div>
		  	  </div>
		  </main>
		  
	</div>

</body>

<script>
    $(document).ready(function(){
    $("#about,#projects,#contact,#echo").hide();
    $("#a,#aa").click(function(){
        $("#about,#projects,#contact,#echo").hide();
    });
    $("#b,#ba").click(function(){
        $("#about").show();
        $("#projects,#contact,#echo").hide();
    });
    $("#c,#ca").click(function(){
        $("#projects").show();
        $("#about,#contact,#echo").hide();
    });
    $("#d,#da").click(function(){
        $("#contact").show();
        $("#projects,#about,#echo").hide();
    });
     $("#f,#fa").click(function(){
        $("#echo").show();
        $("#projects,#about,#contact").hide();
    });
     
      $("#include_home_projects").load("home_projects.html");
});
  
   
</script>
</html>
