    
<html>
<!-- 
we can write comments here to each other
-->
<?php 
session_start();
?>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="djduuu7.png">
  <style>
  body{
    font-family:Darker Grotesque, sans-serif;
    font-size:20px;
    background-image: linear-gradient(to bottom right, #94ffca, #94a8ff);
  }
  #button{
    opacity:1;
    padding:5px;
    background-color:transparent;
    border:none;
    font-size: 25px;
    font-family:Darker Grotesque;
  }
p{opacity:1;
  font-size:30px;
}
label{opacity:1;
  padding:4px;
}
ul {   box-shadow: 0 15px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19);
  opacity:1;
  list-style-type: none;
  margin:-10px;
  overflow: hidden;
  color:#949494;
  background-color:  #000000;
  position:relative;
  opacity:1;
  padding:1%;
}

li {opacity:1;
  float: left;
}

li a {opacity:1;
  position:relative;
  display: block;
  color:#949494;
  padding: 14px ;
  text-decoration: none;
}

li a:hover {opacity:1;
  color: #ffffff;
}
div{opacity:1;
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
p{opacity:1;
  position:absolute;
  left:50%;
  top:90%;
  color:white;
  padding:0;
}
#signup{opacity:1;
  

}
form{opacity:1;
  position:absolute;
  ####border-style:solid;
  padding:200px;
  padding-left:120px;
  padding-right:120px;
  padding-top:50px;
  padding-bottom:50px;
background-color:white;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  top:150px;
  left:420px;
}
.p{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-width:thin;
  border-radius:1px;
}
#me{
  color:black;
  font-size:15px;
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
  <li><a href="">Forum</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="art.php">Art</a></li>
  <li><a href="contactus.php">Contact us</a></li>
  </div>

</ul><form method="POST" action="check.php">

DJDU INC <br/><center><br/>
<?php echo $_SESSION['incorrect'];
$_SESSION['incorrect']='';
?><br/>
    <input class="p" name="user" type="text" placeholder="Username"required><br/><br/>
    <input class="p" name="password" placeholder="Password"type="password" minlength="8"><br/><br/>
    <br/><button type="submit" id="button"required>Log in</button>
    <a id="me"href="iforgot.php"><br/>Forgot Password?</a>
    <?php 
    if( $_COOKIE['user']!=''){
      header('location:welcome.php');
    }
    ?>

<center>
  </body>
</html>
</span>