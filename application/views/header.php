<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <title>Online Judge</title>
  <link rel="stylesheet" href="/ci/css/bootstrap.min.css">
  <link rel="stylesheet" href="/ci/css/bootstrap-responsive.css">

  <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
  <script src="/ci/js/bootstrap.js"></script>
</head>
<body style="background-image: url(../tttt.jpg); background-position: initial initial; background-repeat: initial initial;">

 <div class="navbar ">
  <div class="navbar-inner">

    <ul class="nav">
     <li  id="index"><a class="brand" href="/ci/index.php/login/home">Online Judge</a></li>
     <li id="contest"><a href="/ci/index.php/login/contest">Contests</a></li>
     <li id="problem" ><a href="/ci/index.php/login/p">Problems</a></li>
     <li id="rank"><a href="/ci/index.php/login/rank">Ranks</a></li>
     <li id="status"><a href="/ci/index.php/login/status">Status</a></li>
     <li id="blog"><a href="#">Blog</a></li>
     <li id="about"><a href="/ci/index.php/login/about">About</a></li>     


   </ul>
   <ul class="nav pull-right" >
    <?php
    if(!$this->session->userdata('is_logged_in'))
    {
      
     
      echo '
    <form action="/ci/index.php/site/validate_credentials" method="POST" class="navbar-search pull-left" >

    <input name="username" type="text" class="search-query span2" placeholder="Username">
    <input name="password" type="password" class=" search-query span2" placeholder="Password">

    <button name="login" type="submit" class="btn  btn-mini">Sign In</button>
    </form>

          <li><a  href="/ci/index.php/login/problem" data-toggle="tooltip" data-container="false" data-placement="bottom" title="Signup if you are new user">Signup</a></li>
    ';
  }
    else
    {
      $r=$this->session->userdata('username');
//mkdir('/var/www/ci/application/submissions/'.$this->session->userdata('username'), 0777);
      echo '<ul class="nav pull-right">

    <li class="divider-vertical"></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> '; echo $r;  echo '<b class="caret"></b></a>
    <ul class="dropdown-menu">
    <li><a href="/ci/index.php/login/account">My Account</a></li>
    <li><a href="/ci/index.php/site/logout">Logout</a></li>


    </ul>';
  }
    ?>
  </ul>


</div>
</div>

