<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users#show</title>
  </head>
  <body>
    <h1>Users Show Page</h1>
    <p>
      Users show page displays information on one particular user aka profile page
    </p>
    <h2><?= $user['first_name'] ?> <?= $user['last_name'] ?></h2>
    <a href="/users/edit/<?= $user['id'] ?>">Edit User</a>
    <a href="/">Back to all users</a>
  </body>
</html>
