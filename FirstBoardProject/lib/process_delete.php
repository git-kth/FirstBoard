<script type="text/javascript">
  function error_db(){
    alert("db error!\nRetry!")
    location.href = "../delete.php";
  }
</script>
<?php
    require('connect.php');
    $sql = "DELETE FROM List WHERE id=".$_GET['id'];
    if(mysqli_query($conn,$sql)){
      echo "<script>
      alert('Scuucess')
      location.href = '../index.php'
      </script>";
    }else{
      echo "<script>error_db()</script>";
    }
?>
