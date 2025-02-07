<html>
<!-- 
Contains images of art from a book I created
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
  color:black;
}
label{
  padding:4px;
}
ul {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  height:52.5%;
  width:3%;
  padding:0.5%;
  left:10%;
  opacity:0.7;

}
#qwerty:hover{
  opacity:1;
}
p{
  color:black;
  padding:0;
}
.qwert{
  height:100%;
  width:100%;
}
.qwer{
  height:125%;
  width:50%;

}
.qwerr{
  position:relative;

}
#o1{
  left:25%;
  height:125%;
  width:50%;
}
#o2{
  left:-25%;
  top:-36em;
  height:125%;
  width:50%;
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
echo "<li id='userrr'><a href=\"welcome.php\">",$_COOKIE[user],"</a></li>";?>
  </div>
</ul>
<p>Submit your artwork to us! And you get to be feautured on the home page for the day if we like your work!</p>
<img src="autumnandrose.jpg" class="qwert"></img>
<img src="favicon.png" class="qwer"></img>
<img src="autumnandroseid1.png" class="qwert"></img>
<img src="rosesymbol.jpg" class="qwerr" id="o1"></img>
<br/>
<img src="autumnsymbol.png" class="qwerr" id="o2"></img>
<?php 
$_SESSION['incorrect']='';
?>
  </body>
</html>
</span>
