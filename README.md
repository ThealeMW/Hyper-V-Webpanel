# Hyper-V-Webpanel
Quick and dirty attempt at a Hyper-V connected webpanel using PHP&PowerShell 
<br> ![ForTheBadge uses-html](http://ForTheBadge.com/images/badges/uses-html.svg) ![ForTheBadge uses-css](http://ForTheBadge.com/images/badges/uses-css.svg) ![ForTheBadge uses-js](http://ForTheBadge.com/images/badges/uses-js.svg)<img src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/>

# Features:

1. Create Virtual machines using a sysprepped image of desired OS (VHDX file)
1. Monitor Virtual Machines CPU/RAM/UPTIME
1. Delete / Start / Stop Virtual Machines
1. Based on bootstrap

#### This was made as a quicky and dirty demo several years ago
#### Therefor it should be obvious that you should never use this :)

# Setup
#### Change Database settings in /inc/db.php
#### Change Login details for the admin account in /inc/panel.php

# Features that were never added
- [x] Mysql based registration and login
- [x] Security surrounding execution of PowerShell scripts (They should never be placed in the web directory)
- [x] Realtime monitoring (Currently using PowerShell to dump a json file)
- [x] Custom ISO support
- [x] IP-Address output
#### And so much more.