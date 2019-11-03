<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betoyou</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="application">

        <div class="header"> 
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a href="#" class="btn btn-lg navbar-brand" id="headerMenu">
                        <i class="fa fa-bars glyphicon fa-lg"></i>
                    </a>
                    <a href="#" class="navbar-brand title">Betoyou</a>
                    
                    <li class="navbar-brand nav" id="login" style="display: none;"><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                    <a href="#" class="btn navbar-brand" id="searchSeccondButton" style="display: none" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </div>

                
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                    <form class="navbar-form navbar-left searchInput" role="search">
                        <div class="form-group" id="search">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <a href="#" class="btn" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </form>

                    <!-- right -->
                    <ul class="nav navbar-nav navbar-right" id="iconRight">
                        <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Video up</a></li>
                        <li><a href="loginScreen.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>  <!-- finish header menu -->
        


        <div class="contentWrapper" style="margin-top: 70px">
            <div class="container-fluid">

                <div class="row">

                    <!-- left menu -->
                    <div class="col-lg-2 leftMenu" id="leftMenu">
                        <a href="" style="display: block" ><i class="fa fa-home fa-lg"></i> Home</a> 
                        <a href="" style="display: block" ><i class="fa fa-info fa-lg"></i> About</a> 
                        <a href="" style="display: block" ><i class="fa fa-fire fa-lg"></i> Service</a> 
                        <a href="" style="display: block" ><i class="fa fa-address-book fa-lg"></i> Contact</a> 
                        
                    
                    </div>  <!-- finish left menu -->
                    
                    <!-- content -->
                    <div class="col-lg-10 content">
                        <div class="container">

                            <!-- create item wrapper -->
                            <?php
                            for($i=0; $i < 3; $i++)
                            {
                            ?>
                            <div class="row">
                                
                                <div class="row sectionRow">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <h2>Đề xuất <?php echo $i ?></h2>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                        <h2><button class="btn btn-default">Read more</button></h2>
                                    </div>

                                </div>

                                <!-- to create 8 items -->
                                <?php
                                for($j=0; $j<8; $j++)
                                {
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="item">
                                        <img src="https://picsum.photos/id/<?php echo $i*10+$j+10 ?>/600/600" alt="Image" class="img-responsive">
                                        <h3><a href="">Tran danh hay nhat lich su</a></h3>
                                        <p>Nguoi dang</p>
                                        <p style="float: left">160N Luot xem - </p>
                                        <p>1 nam truoc</p>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                
                            </div>  <!-- End row -->
                            <?php
                            }
                            ?>
                        </div>  <!-- End container -->
                    </div>  <!-- End content -->
                </div>

            </div>
        </div>

        
        
        

    </div>
    <script src="../utils/menuToggle.js"></script>
</body>
</html>