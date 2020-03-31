<script type="text/javascript">
  function error(){
    alert("Retry! title or content is null!")
    location.href = "../update.php";
  }
  function error_db(){
    alert("db error!\nRetry!")
    location.href = "../update.php";
  }
</script>
<?php
  require('connect.php');
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['new_title'];
    $content = $_POST['new_content'];
    if(!$title || !$content){
      echo "<script>error()</script>";
    }
    $sql = "UPDATE list SET title='$title',content='$content' WHERE id=".$_GET['id'];
    // UPDATE list SET title='DB' content='DB P' WHERE id=4;
    if(mysqli_query($conn,$sql)){
      echo "<script>
      alert('Scuucess')
      location.href = '../index.php'
      </script>";
    }else{
      echo "<script>error_db()</script>";
    }
  }
?>
