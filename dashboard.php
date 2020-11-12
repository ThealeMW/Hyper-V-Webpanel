<?php 
session_start(); 
if(!isset($_SESSION['auth'])) 
{ 
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOVServer.info | VM-Panel
    </title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-favicon.png">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="libs/jquery.scrollbar/jquery.scrollbar.css" rel="stylesheet">
    <link href="css/right.dark.css" rel="stylesheet">
    <link href="css/toastr.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="framed main-scrollable">
    <div class="wrapper">
      <nav class="navbar navbar-static-top header-navbar">
        <div class="header-navbar-mobile">
          <div class="header-navbar-mobile__menu">
            <button class="btn" type="button">
              <i class="fa fa-bars">
              </i>
            </button>
          </div>
          <div class="header-navbar-mobile__title">
            <span>MOVServer.info
            </span>
          </div>
          <div class="header-navbar-mobile__settings dropdown">
            <a class="btn dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-power-off">
              </i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="inc/logout.php">Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            <div class="logo text-nowrap">
              <div class="logo__img">
                <img src="../img/logo.png">
                </i>
            </div>
            </div>
          </a>
        </div>
      <div class="topnavbar">
        <ul class="userbar nav navbar-nav">
          <li class="dropdown">
            <a class="userbar__settings dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-power-off">
              </i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="inc/logout.php">Log Out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      </nav>
    <div class="dashboard">
      <div class="sidebar">
        <div class="scrollable scrollbar-macosx">
          <div class="sidebar__cont">
            <div class="sidebar__menu">
              <div class="sidebar__title">Navigation
              </div>
				<ul class="nav nav-menu">
                  <li><a href="dashboard.php">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-home"></i></div>
                      <div class="nav-menu__text"><span>Dashboard</span></div></a></li>
                  <li><a href="shop.php">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-shopping-cart"></i></div>
                      <div class="nav-menu__text"><span>Shop</span></div></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="main">
        <div class="main__scroll scrollbar-macosx">
          <div class="main__cont">
            <div class="container-fluid half-padding">
              <div class="template template__blank">
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        <h3 class="panel-title">Running VM(s)
                        </h3>
                      </div>
                      <div class="panel-body">
                        <div class="scrollable scrollbar-macosx">
<?php include 'inc/vmstatus.php'; ?>
<?php
error_reporting(0);
if (isset($_POST['Delete-VM']))
{
$hostname =  $_POST['deletehost'];
$date = date("Y-m-d-h:i:sa");
echo exec('C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\powershell.exe C:\\xampp\\htdocs\\inc\\ps\\remove-vm.ps1 -server ' . $hostname . ' -key mov2019topsecretlul');
echo "<br><h6 style='color:white;'><center><i style='color:red;' class='fa fa-check'></i> Server: $hostname was deleted - $date</center></h6>";
}else{}
?>
<?php
error_reporting(0);
if (isset($_POST['Start-VM']))
{
$hostname2 =  $_POST['starthost'];
echo exec('C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\powershell.exe C:\\xampp\\htdocs\\inc\\ps\\start-vm.ps1 -server ' . $hostname2 . ' -key mov2019topsecretlul');
echo "<br><h6 style='color:white;'><center><i style='color:green;' class='fa fa-check'></i> Server: $hostname2 is starting!</center></h6>";
}else{}
?>
<?php
error_reporting(0);
if (isset($_POST['Stop-VM']))
{
$hostname3 =  $_POST['stophost'];
echo exec('C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\powershell.exe C:\\xampp\\htdocs\\inc\\ps\\stop-vm.ps1 -server ' . $hostname3 . ' -key mov2019topsecretlul');
echo "<br><h6 style='color:white;'><center><i style='color:red;' class='fa fa-check'></i> Server: $hostname3 is shutting down! </center></h6>";
}else{}
?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        <h3 class="panel-title">Create VM
                        </h3>
                      </div>
                      <div class="panel-body">
                        <form id="createvm" onsubmit="return ray.ajax()" method="post" />
                        <div class="form-group">
                          <label for="hostname">Hostname
                          </label>
                          <input type="hostname" name="hostname" class="form-control" required="" id="hostname" placeholder="Hostname">
                        </div>
                        <div class="form-group">
                          <label class="control-label">CPU Cores
                          </label>
                          <select class="selectpicker form-control" name="cores" placeholder="Select">
                            <option>1
                            </option>
                            <option>2
                            </option>
                            <option>4
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Operating System
                          </label>
                          <select class="selectpicker form-control" name="os" placeholder="Select">
                            <option>Windows Server 2019
                            </option>
                            <option>Ubuntu
                            </option>
                            <option>CentOS
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">RAM
                          </label>
                          <select class="selectpicker form-control" name="ram" placeholder="Select">
                            <option>1024MB
                            </option>
                            <option>2048MB
                            </option>
                            <option>3072MB
                            </option>
                            <option>4096MB
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Storage (SSD)
                          </label>
                          <select class="selectpicker form-control" name="disk" placeholder="Select">
                            <option>50GB
                            </option>
                            <option>100GB
                            </option>
                            <option>150GB
                            </option>
                            <option>200GB
                            </option>
                          </select>
                        </div>
                        <br>
                        <?php
error_reporting(0);
if (isset($_POST['createvm']))
{
$hostname =  $_POST['hostname'];
$cores =  $_POST['cores'];
$os =  $_POST['os'];
$ram =  $_POST['ram'];
$disk =  $_POST['disk'];
#shell_exec('powershell -ExecutionPolicy Bypass -NoProfile -File "C:\xampp\htdocs\inc\ps\new-vm.ps1" -hostname ' . $hostname -cores $cores -ram $ram');
echo exec('C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\powershell.exe C:\\xampp\\htdocs\\inc\\ps\\new-vm.ps1 -hostname ' . $hostname . ' -cores ' . $cores . ' -ram ' . $ram . ' -key mov2019topsecretlul');
echo "<h6 style='color:white;'><center><i style='color:green;' class='fa fa-check'></i> Server Details: Hostname: $hostname - Cores: $cores - OS: $os - RAM: $ram - DISK: $disk</center></h6><br>";
}else{}
?>
                        <center>
                          <div id="create" style="display:none;">
                            <i class="fa fa-spinner fa-spin">
                            </i> Creating VM...
                          </div>
                        </center>
                        <br>
                        <button type="submit" name="createvm" class="btn btn-block btn-success"><i class="fa fa-server"></i> Create VM
                        </button>
                        </form>                  
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <div class="modal fade" id="removemodal" tabindex="-1" role="dialog" aria-labelledby="removemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Title">Delete VM
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
        </div>
        <div class="modal-body">
          <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-align-justify"></i> <b class="caret"></b></a><ul class="dropdown-menu"></ul></li>
            <li class="active" role="presentation"><a href="#Start-VM" aria-controls="Start-VM" role="tab" data-toggle="tab" aria-expanded="true">Start-VM</a></li>
            <li role="presentation" class=""><a href="#Stop-VM" aria-controls="Stop-VM" role="tab" data-toggle="tab" aria-expanded="false">Stop-VM</a></li>
            <li role="presentation" class=""><a href="#Delete-VM" aria-controls="Delete-VM" role="tab" data-toggle="tab" aria-expanded="false">Delete-VM</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="Start-VM" role="tabpanel">
            <form id="Start-VM" method="post" />
            <div class="form-group">
            <label for="hostname">Hostname
            </label>
            <input type="input" name="starthost" class="form-control" required="" id="starthost" placeholder="Hostname">                 
            <br>        
            <button type="submit" name="Start-VM" class="btn btn-block btn-success"><i class="fa fa-power-off"></i> Start VM
            </button>
            </form>
            </div>
          </div>
            <div class="tab-pane" id="Stop-VM" role="tabpanel">
            <form id="Stop-VM" method="post" />
            <div class="form-group">
            <label for="hostname">Hostname
            </label>
            <input type="input" name="stophost" class="form-control" required="" id="stophost" placeholder="Hostname">               
            <br>        
            <button type="submit" name="Stop-VM" class="btn btn-block btn-danger"><i class="fa fa-power-off"></i> Stop VM
            </button>
            </form>
            </div>
          </div>
            <div class="tab-pane" id="Delete-VM" role="tabpanel">
              <form id="remove-vm" method="post" />
            <div class="form-group">
            <label for="hostname">Hostname
            </label>
            <input type="server" name="deletehost" class="form-control" required="" id="deletehost" placeholder="Hostname">
            <br>
            <label for="hostname">Are you sure you want to delete? 
              <input type="checkbox" class="chkbx" id="areyousure" name="areyousure" required="" >
            </label>                 
            <br>                   
            <button type="submit" name="Delete-VM" class="btn btn-block btn-danger"><i class="fa fa-trash"></i> Delete VM
            </button>
            </form>
            </div>
          </div>
        </div>                               
      </div>
    </div>
  </div>
  </div>
</div>
<script src="libs/jquery/jquery.min.js">
</script>
<script src="libs/bootstrap/js/bootstrap.min.js">
</script>
<script src="js/main.js" type="text/javascript">
</script>
<script src="libs/jquery.scrollbar/jquery.scrollbar.min.js">
</script>
<script src="libs/bootstrap-tabdrop/bootstrap-tabdrop.min.js">
</script>
<script src="js/toastr.min.js">
</script>
<script src="js/resp.js">
</script>
<script type="text/javascript">
  var ray={
    ajax:function(st)
    {
      this.show('create');
    }
    ,
    show:function(el)
    {
      this.getID(el).style.display='';
    }
    ,
    getID:function(el)
    {
      return document.getElementById(el);
    }
  }
</script>
</body>
</html>
