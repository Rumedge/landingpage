<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="external/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="external/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="external/jquery-ui/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="external/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="media/icons/rumedge-icon.png">
    <script type="text/javascript" src="external/jquery/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="external/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="external/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <title>RUMEDGE</title>
</head>
<body>
    <!--navbar-->
    <header>    
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.html" class="navbar-left" style="color:white; font-size: 18px; font-type: Neuzeit; font-weight: 700; text-decoration:none;"><img src="media/icons/rumedge-icon.png" style="height:70px;">RUMEDGE</a>
                <!--<a class="navbar-brand" href="#"><img src="media/icons/rumedge-icon.png">RUMEDGE</a>-->
            </div
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Sign In</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    
    <section id="search_hero"> 
           <div class="container text-center">
               <div class="row">
                   <form class="form-inline" action="php/search_result.php" >
                                    <div class="form-group">
                                        <div class="input-group ui-widget">
                                            <div class="input-group-addon">Criteria</div>
                                            <input type="text" id="tags" class="form-control" placeholder="Any Criteria" data-role="tagsinput">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Location</div>
                                            <input type="text" class="form-control" placeholder="Any Location" data-role="tagsinput">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
           </div>
    </section>
    
    <section id="how_it_works">
         <div class="container">
             <div class="row text-center">
                    <h1>Finding "the" perfect candidate, at the tip of your fingers...</h1>
                    <p>Imagine living in a World where connecting humans to accomplish things that matter, is as simple as counting 1 to 3...</p>
                    <p>At <strong>RUMEDGE</strong>, we provide you with: </p>
            </div>    
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <i class="fa fa-globe fa-5x icon-center"></i>
                    <h2>Candidate Search Engine</h2>
                    <p>A multi-dimensional search engine that allows you to search for the perfect candidate, based on a wide range of <strong>validated</strong> skill, performance, character and geo-location criteria.</p>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <i class="fa fa-check-square fa-5x icon-center"></i>
                    <h2>Data Validation Feature</h2>
                    <p>A data validation feature that verifies, validates and cross-checks each candidate profile against issuer institutions or establishments using our validation API.</p>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <i class="fa fa-paper-plane fa-5x icon-center"></i>
                    <h2>Online Onboarding Module</h2>
                    <p>An online contract-onboarding module that allows for an agile and rapid hiring by automating various onboarding and job billing workflows</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="register_panel">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Hiring User</h3>
                    </div>
                    <div class="panel-body">
                              <button type="button" class="btn btn-warning center-block" data-toggle="modal" data-target="#signupModal" data-whatever="@mdo">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Job Seeking User</h3>
                    </div>
                    <div class="panel-body">
                            <button type="button" class="btn btn-warning center-block" data-toggle="modal" data-target="#signupModal" data-whatever="@mdo">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!-----Moda-->
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">User Registration Form</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="first-name" class="control-label">First Name:</label>
                        <input type="text" class="form-control" id="first-name">
                      </div>
                      <div class="form-group">
                        <label for="last-name" class="control-label">Last Name:</label>
                        <input type="text" class="form-control" id="last-name">
                      </div>
                      <div class="form-group">
                        <label for="emailAddress" class="control-label">Email Address:</label>
                        <input type="email" class="form-control" id="emailAddress">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Sign Up</button>
                  </div>
                </div>
              </div>
            </div>
    
    </section>

<footer>
</footer>
 
</body>
</html>