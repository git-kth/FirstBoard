<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Board</title>
    <style media="screen">
      #title{
        font-size:45px;
        margin-top:10px;
      }

      .content{
        font-size:25px;
      }
      .query{
        font-size:20px;
      }
      li{
        font-size:30px;
      }
      .box{
        border: 15px solid red;
        width: 300px;
        margin-left:600px;
        margin-top:30px;
        margin-bottom:30px;
      }
      .nosize{
        resize:none;
      }
      input{
        padding-top:6px;
        padding-bottom:6px;
      }

    </style>
  </head>
  <body style="text-align:center">
    <h1 style="font-size:45px;"><a style='color:black; text-decoration: none;' href="index.php">Board</a></h1>
    <?php
      require("lib/list.php");
     ?>
     <button class="query" onclick='location.href="insert.php"'>create</button><br><br>
     <!-- <a class="query" href="update.php">update</a>
     <a class="query" href="delete.php">delete</a> -->
    <?php
      if(isset($_GET['id'])){
        echo '<button class="query" onclick="location.href=' . "'index.php?control=update&id=" . $_GET['id'] . "'" . '">update</button>';
        echo '&nbsp;';
        echo '<button class="query" onclick="location.href=' . "'index.php?control=delete&id=" . $_GET['id'] . "'" . '">delete</button>';
        $sql = 'SELECT * FROM List WHERE id='.$_GET['id'];
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo "<div class='box'><b><br><span class='content'>Title: </span><span id='title'>".$row['title']."</span>";
        echo "<br><span class='content'>Content: </span><span class='content'>".$row['content']."</span></b></div>";
      }
      if(isset($_GET['control'])){
        $control = $_GET['control'];
        if($control == 'update'){
          echo '<form action="lib/process_update.php?id='. $_GET['id'] .'" method="post">';
          echo '<span class="insert">
              Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="new_title" value="'.$row['title'];
          echo'">
          <br><br>
              Content:&nbsp;&nbsp;<textarea class="nosize" name="new_content" rows="6" cols="40"></textarea><br>

              <input type="submit" value="Update">
            </span>
          </form>
          ';
        }else if($control == 'delete'){
          echo "
          <script>var bool = confirm('Title:" . $row['title'] . " delete?')
          if(bool){
            location.href = 'lib/process_delete.php?id=". $_GET['id'] ."'
          }
          </script>
          ";
        }
      }

     ?>

  </body>
</html>
