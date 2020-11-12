# Hyper-V-Webpanel
Quick and dirty attempt at a Hyper-V connected webpanel using PHP&PowerShell

# Features:

Create Virtual machines using a sysprepped image of desired OS (VHDX file)
Monitor Virtual Machines CPU/RAM/UPTIME
Delete / Start / Stop Virtual Machines

This was made as a quicky and dirty demo several years ago
Therefor it should be obvious that you should never use this :)

# Setup
Change Database settings in /inc/db.php
Change Login details for the admin account in /inc/panel.php

# Features that were never added
Mysql based registration and login
Security surrounding execution of PowerShell scripts (They should never be placed in the web directory)
Realtime monitoring (Currently using PowerShell to dump a json file)
Custom ISO support
IP-Address output
And so much more.
 
