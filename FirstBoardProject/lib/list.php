<?php
  require("connect.php");
  $sql = "SELECT * FROM List";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          // echo "id: " . $row["id"]. "<br> - Title: " . $row["title"]. "<br> - Content: " . $row["content"]. "<br>";
          $id = $row['id'];
          $title = $row['title'];
          echo "<p class='content'><a href='".$_SERVER['PHP_SELF']."?id=$id'>";
          echo $title."</a></p>";
      }
  } else {
      echo "0 results";
  }
 ?>
