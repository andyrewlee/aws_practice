<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users#index</title>
  </head>
  <body>
    <h1>All Users</h1>
    <p>
      Users index page lists out all the users. If you click on their name then it
      goes to their profile page
    </p>
<?php
        foreach($users as $user)
        { ?>
          <a href="users/show/<?= $user['id'] ?>">
            <?= $user['first_name'] ?>
          </a>
<?php
        } ?>
    <a href="users/new_user">New User</a>
    <p>
      New User link goes to the sign up page. Also known as registration page
    </p>
  </body>
</html>
