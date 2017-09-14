<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../external/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../external/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="../external/jquery-ui/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../external/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../media/icons/rumedge-icon.png">
    <script type="text/javascript" src="../external/jquery/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../external/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../external/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="../js/treemap.js"></script>
    <script type='text/javascript' src='https://api.stackexchange.com/js/2.0/all.js'></script>
    <title>RUMEDGE</title>
</head>
<body>
    
    <header>
       <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a href="../index.php" class="navbar-left" style="color:white; font-size: 18px; font-type: Neuzeit; font-weight: 700; text-decoration:none;"><img src="../media/icons/rumedge-icon.png" style="height:70px;">RUMEDGE</a>
                    <!--<a class="navbar-brand" href="#"><img src="media/icons/rumedge-icon.png">RUMEDGE</a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-center" role="search">
                        <div class="form-group">
                            <div class="input-group ui-widget">
                                            <div class="input-group-addon">Criteria</div>
                                            <input type="email" id="tags" class="form-control" placeholder="Any Criteria" data-role="tagsinput">
                                        </div>
                            <div class="input-group">
                                            <div class="input-group-addon">Location</div>
                                            <input type="password" class="form-control" placeholder="Any Location" data-role="tagsinput">
                                        </div>
                              <button type="submit" class="btn btn-default">Search</button>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Sign In</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>    
    </header>
    
    <section id="search_result_hero">
        
        <div class="well well-lg">
        <div class="row">
            
                <div class="col-md-3">
                    <a href="profile.php">
                    <img src="../media/images/einstein.png" class="img-responsive" alt="Einstein">
                    </a>
                </div>
                <div class="col-md-9">
                    <div id="chart1_div" style="width: 1200px; height: 400px;"></div>
                </div>
            </div>
        </div>   
        
        
        <div class="well well-lg">
        <div class="row">
            
                <div class="col-md-3">
                    <img src="../media/images/einstein.png" class="img-responsive" alt="Einstein">
                </div>
                <div class="col-md-9">
                    <div id="chart2_div" style="width: 1200px; height: 400px;"></div>
                </div>
            </div>
        </div>   
        
        
        <div class="well well-lg">
        <div class="row">
            
                <div class="col-md-3">
                    <img src="../media/images/einstein.png" class="img-responsive" alt="Einstein">
                </div>
                <div class="col-md-9">
                    <div id="chart3_div" style="width: 1200px; height: 400px;"></div>
                </div>
            </div>
        </div> 
    
        
    </section>
    

    
 
<div id="footer">
<div style="background-color:#dddddd; width:99%; padding:0.5% 1% 1%" align="center">
        <h3>GET CONNECTED....GET RumEDGED</h3>
        <div class="containt">
            <img src="../media/images/profile page/footer.png" width="95%">
        </div>
    </div>
</div>
 
</body>
</html>