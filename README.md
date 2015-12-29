Mission Columbia
================

This project has moved to [mission_columbia_baked](http://github.com/lmartin41/mission_columbia_baked)

Alright so here is the basics of getting it setup on your local system.

1) Clone repository into wherever your Apache server serves files.
    a) You should be able to go to localhost/MissionColumbia.
    b) You might be met with errors.

2) Make sure that app/tmp is recursively other writable or writable by the 
   group that Apache runs under.

3) Set up a database and a user to access that database in MySQL.

4) Edit app/Config/database.php to reflect that information.

5) In the root directory there is a file called mission_columbia.sql. Import
   that file into your database. It has all the tables I am using.

6) Since Cake is in debug mode right now, when you try to log in it will
   display the query at the bottom.  Use that query to insert a user into the
   database with a properly hashed password.

7) If that doesn't allow you to log in then send me an email and I will help
   out.
