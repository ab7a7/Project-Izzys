<?php 
  include("login.php"); 
?>

<html>
<body>
    <nav class="meny navbar-toggleable-md navbar navbar-right" style="height:200px;">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav">
                    <li><a href="Greenberg.php" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</a></li>
                    <li class="dropdown">
                        <a href="#" class="button dropdown-toggle" data-toggle="dropdown" role="button">BACKBURNERS<br>Idle Projects</a>
                        <ul class="dropdown-menu">
                            <li><a href="wota.php">WAR OF<br>THE ANGELS</a></li>
                            <li><a href="gol.php">GANGS<br>OF LETUM</a></li>  
                        </ul>
                    </li>
                    <li><a href="dead.php" class="button" style="button">GRAVEYARD:<br>Dead Projects</a></li>
                    <li><button onclick="login()" class="button" style="button" id="mebutton"></button></li>
                    <li><button onclick="register()" class="button" style="button" id="me2button"></button></li>
                </ul>
           
        </div><!-- /.container-fluid -->
    </nav>
</body>
<script>

         /* if (user is logged on{
             document.getElementById("mebutton").innerHTML = "MY<br>PROFILE";
            document.getElementById("me2button").innerHTML = "LOG<br>OUT";
          function me(){
            window.location.href = "profile.php";
          }
        
        } else {*/
            document.getElementById("mebutton").innerHTML = "SIGN<br>UP";
              function login(){
                      $(document).ready(function(){
                        $("#mebutton").click(function(){
                          $("#registrymodal").modal();
                        });
                      });
              }
            document.getElementById("me2button").innerHTML = "LOG<br>IN";
                function register(){
                      $(document).ready(function(){
                        $("#me2button").click(function(){
                          $("#loginmodal").modal();
                        });
                      });
                
                }
    //}
</script>