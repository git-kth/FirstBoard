<script type="text/javascript">
  function error(){
    alert("Retry! title or content is null!")
    location.href = "../insert.php";
  }
  function error_db(){
    alert("db error!\nRetry!")
    location.href = "../insert.php";
  }
</script>
<?php
  require('connect.php');
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['title'];
    $content = $_POST['content'];
    if($title || !$content){
      echo "<script>error()</script>";
    }else{
      $sql = "INSERT INTO List (title,content)
      VALUES ('$title','$content')";
      if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Scuucess')
        location.href = '../index.php'
        </script>";
      }
    }
  }
  else{
    echo "<script>error_db()</script>";
  }

?>
