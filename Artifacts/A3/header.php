<!DOCTYPE html>
<html lang="en">
  <head>
    <title>evO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profilePage.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
          <a class="navbar-brand" href="#">evO</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="col-sm-4 col-md-8 col-sm-offset-3 col-md-offset-1">
            <form class="navbar-form" role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="Search">
                <div class="input-group-btn">
                  <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
          </div>
          <ul class="nav navbar-nav navbar-right pull-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span <span class="glyphicon glyphicon-user"></span></a>
              <ul id="register-dp" class="dropdown-menu">
                <div class="row">
                  <div class="col-md-26">
                    <form id="form_register" class="form" role="form" method="post" action="register" accept-charset="UTF-8" id="register-nav">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputPassword2">Name</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Name" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputEmail2">Surname</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Surname" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputPassword2">Email Address</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Email Address" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputPassword2">Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputPassword2">Repeat Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat Password" required>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                    </form>
                  </div>
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="glyphicon glyphicon-log-in"></span></a>
              <ul id="login-dp" class="dropdown-menu">
                <div class="row">
                  <div class="col-md-26">
                    <form id="form_login" class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputEmail2">Email Address</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label for="exampleInputPassword2">Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                     </form>
                  </div>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
  </header>
    <div class="content">