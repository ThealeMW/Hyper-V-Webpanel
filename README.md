# Hyper-V-Webpanel
Quick and dirty attempt at a Hyper-V connected webpanel using PHP&PowerShell

# Features:

1. Create Virtual machines using a sysprepped image of desired OS (VHDX file)
1. Monitor Virtual Machines CPU/RAM/UPTIME
1. Delete / Start / Stop Virtual Machines

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
- [x]. IP-Address output
#### And so much more.
