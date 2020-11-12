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
    <title>MOVServer.info | VM-Panel</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-favicon.png">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="libs/jquery.scrollbar/jquery.scrollbar.css" rel="stylesheet">
    <link href="css/right.dark.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="framed main-scrollable">
    <div class="wrapper">
      <nav class="navbar navbar-static-top header-navbar">
        <div class="header-navbar-mobile">
          <div class="header-navbar-mobile__menu">
            <button class="btn" type="button"><i class="fa fa-bars"></i></button>
          </div>
          <div class="header-navbar-mobile__title"><span>MOVServer.info</span></div>
          <div class="header-navbar-mobile__settings dropdown"><a class="btn dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-power-off"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Log Out</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-header"><a class="navbar-brand" href="">
            <div class="logo text-nowrap">
              <div class="logo__img"><img src="../img/logo.png"></i></div>
            </div></a></div>
        <div class="topnavbar">
          <ul class="userbar nav navbar-nav">
            <li class="dropdown"><a class="userbar__settings dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-power-off"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Log Out</a></li>
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
                <div class="sidebar__title">Navigation</div>
                <ul class="nav nav-menu">
                  <li><a href="dashboard.php">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-home"></i></div>
                      <div class="nav-menu__text"><span>Dashboard</span></div></a></li>
                  <li><a href="settings.php">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-cog"></i></div>
                      <div class="nav-menu__text"><span>Settings</span></div></a></li>
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
                          <h3 class="panel-title">Running VM(s)</h3>
                        </div>
                        <div class="panel-body">
                          <div class="scrollable scrollbar-macosx"><table id="" class="table table_sortable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>VMName</th>
            <th>State</th>
            <th>Generation</th>
            <th>Ram</th>
            <th>CPU%</th>
            <th>Uptime</th>
            <th>VM Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>MOV-DC01</td>
            <td>Running</td>
            <td>2</td>
            <td>4096MB</td>
            <td>1</td>
            <td>02:00:45</td>
            <td><button type="submit" name="checker" class="btn btn-success">Start</button><button type="submit" name="checker" class="btn btn-danger">Stop</button></td>
        </tr>
    </tbody>
</table>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Create VM</h3>
                        </div>
                        <div class="panel-body">
                          <form id="createvm" onsubmit="return ray.ajax()" method="post" />
                           <div class="form-group">
                            <label for="hostname">Hostname</label>
                            <input type="hostname" name="hostname" class="form-control" required="" id="hostname" placeholder="Hostname">
                          </div>
                          <div class="form-group">
                              <label class="control-label">CPU Cores</label>
                                <select class="selectpicker form-control" name="cores" placeholder="Select">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>4</option>
                                </select>
                            </div>
                          <div class="form-group">
                              <label class="control-label">Operating System</label>
                                <select class="selectpicker form-control" name="os" placeholder="Select">
                                  <option>Windows Server 2019</option>
                                  <option>Ubuntu</option>
                                  <option>CentOS</option>
                                </select>
                            </div>
                             <div class="form-group">
                              <label class="control-label">RAM</label>
                                <select class="selectpicker form-control" name="ram" placeholder="Select">
                                  <option>1024MB</option>
                                  <option>2048MB</option>
                                  <option>3072MB</option>
                                  <option>4096MB</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Storage (SSD)</label>
                                <select class="selectpicker form-control" name="disk" placeholder="Select">
                                  <option>50GB</option>
                                  <option>100GB</option>
                                  <option>150GB</option>
                                  <option>200GB</option>
                                </select>
                            </div>
                            <br>
							<?php
							if (isset($_POST['createvm']))
							{
							$hostname =  $_POST['hostname'];
							$cores =  $_POST['cores'];
							$os =  $_POST['os'];
							$ram =  $_POST['ram'];
							$disk =  $_POST['disk'];
							#shell_exec('powershell -ExecutionPolicy Bypass -NoProfile -File "C:\xampp\htdocs\inc\ps\new-vm.ps1" -hostname ' . $hostname -cores $cores -ram $ram');
						 	echo exec('C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\powershell.exe C:\\xampp\\htdocs\\inc\\ps\\new-vm.ps1 -hostname ' . $hostname . ' -cores ' . $cores . ' -ram ' . $ram . '');
							echo "<h6 style='color:white;'><center><i style='color:green;' class='fa fa-check'></i> Server Details: Hostname: $hostname - Cores: $cores - OS: $os - RAM: $ram - DISK: $disk</center></h6><br>";
							}
							else
							{
							}


							?>
							<center><div id="load" style="display:none;"><i class="fa fa-spinner fa-spin"></i> Creating VM...</div></center>
							<br>
                            <button type="submit" name="createvm" class="btn btn-block btn-success">Create VM</button>
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
      </div>
    </div>
    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
	},
show:function(el)
	{
		this.getID(el).style.display='';
	},
getID:function(el)
	{
		return document.getElementById(el);
	}
}
</script>	
  </body>
</html>