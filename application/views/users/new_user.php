<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users#new</title>
  </head>
  <body>
    <h1>New User Page (Registration/Sign up)</h1>
    <form action="/users/create" method="post">
      <input type="text" name="first_name">
      <input type="text" name="last_name">
      <input type="submit" value="New User">
    </form>
  </body>
  <a href="/">Back to all users</a>
</html>
