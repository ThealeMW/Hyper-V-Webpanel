<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>MOVServer.info | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/beercss.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="js/pace.js"></script>
    <style type="text/css">
        .background-blur {
                        content: "";
                        position: fixed;
                        z-index: -1;
                        display: block;
                        <?php $rand=mt_rand(1, 4);
                        if($rand==1) {
                            ?>background-image: url('img/bg.jpg');
                            <?php
                        }
                        elseif($rand==2) {
                            ?>background-image: url('img/bg2.jpg');
                            <?php
                        }
                        elseif($rand==3) {
                            ?>background-image: url('img/bg3.jpg');
                            <?php
                        }
                        elseif($rand==4) {
                            ?>background-image: url('img/bg4.jpg');
                            <?php
                        }
                        ?> background-repeat:no-repeat;
                        width: 100%;
                        height: 100%;
                        -webkit-filter: blur(8px);
                        -moz-filter: blur(8px);
                        -o-filter: blur(8px);
                        -ms-filter: blur(8px);
                        filter: blur(0px);
                        transform: scale(1.1);
                    }
    </style>
</head>

<body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a target="_blank" href="#"><i class="fa fa-facebook-square" style="color:#3F5C9A;"></i></a>
                    </li>
                    <li> <a target="_blank" href="#"><i class="fa fa-instagram" style="color:#FFFFFF;"></i></a>
                    </li>
                    <li> <a target="_blank" href="#"><i class="fa fa-twitter-square" style="color:#5EA9DD;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <div class="background-blur"></div>
    <div class="main">
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <h1 class="logo cursive">
            <a href="/"><img src="img/logo.png" style="width: 100%; max-width: 400px;"></a>
        </h1>
            <div class="content">
                <h4 class="motto">Login to Panel</h4>
                <div class="subscribe">
                    <center>
                        <form id="login" action="inc/panel.php" method="post" />
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" class="form-control" required="" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required="" id="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberme">
                            <label class="form-check-label" for="rememberme">Remember me</label>
                        </div>
                        <button type="submit" name="checker" class="btn cstmbtn btn-success">Login</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>