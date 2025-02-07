<html>
<!-- 
Excerpts from the book
-->
<?php 
session_start();
?>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="djduuu7.png">
  <style>
  body{
    text-align:center;
    font-family:Darker Grotesque, sans-serif;
    font-size:20px;
  }
  #button{
    padding:5px;
    background-color:transparent;
    border:none;
    font-size: 25px;
    font-family:Darker Grotesque;
  }
p{
  font-size:30px;
}
label{
  padding:4px;
}
ul {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  list-style-type: none;
  margin: -10px;
  overflow: hidden;
  color:#949494;
  background-color:  #000000;
  position:relative;
  opacity:1;
  padding:1%;
}

li {
  float: left;
}

li a {
  position:relative;
  display: block;
  text-align: center;
  color:#949494;
  padding: 14px ;
  text-decoration: none;
}

li a:hover {
  color: #ffffff;
}
div{
  position:relative;
  right:-200px;
}
#qwerty{
  position:absolute;
  height:45%;
  width:3%;
  padding:0.5%;
  left:10%;
  opacity:0.7;

}
#qwerty:hover{
  opacity:1;
}
p{
  position:absolute;
  left:50%;
  top:90%;
  color:white;
  padding:0;
}
#random{
  align:right;
  font-family:Garamond;
  font-size:18px;

}
#userrr{
  margin-left:200px;
}
  </style>
    <title>DJDU BOOK OFFICIAL WEBSITE</title>
  </head>
  <body>

<ul>
<a href="index.php"><img src="djduuu7.png" id='qwerty'></img></a>
<div>
  <li><a href="excerpts.php">Excerpts</a></li>
   <?php 
    if( $_COOKIE['user']!=''){
      echo "<li><a href=\"signout.php\">Log Out</a></li>";
    }
    else{
       echo "<li><a href=\"signup.php\">Sign up</a></li>
  <li><a href=\"login.php\">Login</a></li>";
    }
    ?>
  <li><a href="forum.php">Forum</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="art.php">Art</a></li>
  <li><a href="contactus.php">Contact us</a></li>
  <?php
echo "<li id='userrr'><a href=\"welcome.php\">",$_COOKIE['user'],"</a></li>";?>
  </div>
</ul><br/>
Preface<br/>
<d id="random">
The DJ (duj) and Du were two kingdoms made long ago, to be exact 2 million years. They had unexplainable powers. <br/>The DJ were shapeshifters and the DU were persuasive enchanters. The DU could make you do anything, and  the DJ<br/> could become anything. They realized that their powers could be used to do anything together. Slowly they became <br/>greedy for power.  Their kingdoms joined forces to become the kingdom of DJDU. But it just wasn’t just a physical change,<br/> they also became magically corrupted. But there was a rebel group in the smallest corner of the earth. But soon they <br/>were discovered, and only one DJ and one DU survived. Every generation was protected by one DJ and one DU. They made <br/>sure that every generation was protected, and cast a spell that cost their freedom, and a lot of resources. It was the spell that <br/>killed the dinosaurs, and imprisoned all the  DJDU for good underground until…. </d>
<?php 
$_SESSION['incorrect']='';
?>
  </body>
</html>
