<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .insert{
        font-size:25px;
      }
      input{
        padding-top:6px;
        padding-bottom:6px;
      }
    </style>
  </head>
  <body>
    <h1 class="title"><a href="index.php">CREATE</a></h1>
    <form action="lib/process_insert.php" method="post">
      <span class="insert">
        Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="title">
        <br><br>
        Content: <textarea name="content" rows="8" cols="80"></textarea>
        <br><br>
        <input type="submit" value="Create">
      </span>
    </form>
  </body>
</html>
