<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users#edit</title>
  </head>
  <body>
    <h1>Edit User Page (Registration/Sign up)</h1>
    <form action="/users/update/<?= $user['id'] ?>" method="post">
      <input type="text" value="<?= $user['first_name'] ?>" name="first_name">
      <input type="text" value="<?= $user['last_name'] ?>" name="last_name">
      <input type="submit" value="update">
    </form>
    <a href="/users/destroy/<?= $user['id'] ?>">Destroy User</a>
    <a href="/users/show/<?= $user['id'] ?>">Back to <?= $user['first_name'] ?></a>
    <a href="/">Back to all users</a>
  </body>
</html>
