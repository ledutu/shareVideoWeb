<?php
  session_start();

?>
<div class="header"> 
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <a href="#" class="btn btn-lg navbar-brand" id="headerMenu">
                <i class="fa fa-bars glyphicon fa-lg"></i>
            </a>
            <a (href="home.php" href="../home/home.php") class="navbar-brand title">Betoyou</a>

            <?php
                if(!isset($_SESSION["username"]))
                {
                  
            ?>
                <li class="navbar-brand nav" id="login" style="display: none;">
                    <a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span></a>
                </li>
            <?php
                }
                
            ?>
            
            <form action="home.php" action="../home/home.php" method="POST" role="form" class="navbar-brand nav" style="display:none;" id="miniSearch" enctype="multipart/form-data">
            
                <div class="form-group" style="float: left;">
                    <input type="text" class="form-control" id="text" placeholder="Search">
                </div>
            
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
        
        </div>
        

        <div class="collapse navbar-collapse navbar-ex1-collapse" >
            
            <form class="navbar-form navbar-left searchInput" action="home.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group" id="search">
                    <input type="text" id="text" name="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>

            <?php
                if(!isset($_SESSION["username"]))
                {
                  
            ?>
            <!-- right -->
            <ul class="nav navbar-nav navbar-right" id="iconRight">
                <li><a href="../upload/upload.php"><span class="glyphicon glyphicon-facetime-video"></span> Video up</a></li>
                <li><a href="../register/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

            <?php
                }
                else
                {
            ?>
            
            <ul class="nav navbar-nav navbar-right" id="avatar">
                <li><a href="../upload/upload.php"><span class="glyphicon glyphicon-facetime-video"></span> Video up</a></li>
                <li>
                    <img src="<?php echo $_SESSION["image"] ?>" width="40px" class="img-circle avt" alt="Image">
                </li>
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>

            <?php
                }
            ?>

        </div><!-- /.navbar-collapse -->
    </nav>
</div>  <!-- finish header menu -->


<style>

    img.img-circle.avt {
        width: 40px;
        margin-top: 5px
    }

</style>




