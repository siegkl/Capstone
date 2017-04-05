<!--insert_book.php-->
<!--Kyle Siegfried -->

<html>
<head>
  <title>sloa Book Entry Results</title>
</head>
<body>
<h1>sloa Book Entry Results</h1>
<?php
    echo "\t\t\t<a href = \"newbook.html\">(Add a new book)</a><t><t>\t\t\t";
    echo "\t\t\t<a href = \"search.html\">(Search for a book)</a><t><t>\t\t\t";
    echo "\t\t\t<a href = \"show_tables.php\">(Show Tables)</a><t><t>\t\t\t";
    echo "<br/><br/>";
  $isbn = "";
  $author = "";
  $note = "";
  // create short variable names
  $isbn=$_POST['isbn'];
  $author=$_POST['author'];
  $note=$_POST['note'];

  if (!isset($_POST['isbn']) || !isset($_POST['author'])) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";

     exit;
  }

  /*FOR TESTING*/
  //echo $isbn."<br/>";
  //echo $author."<br/>";
  //echo $note;

  @ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'sloabooks');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into Book (isbn, title, note)
                        values (?,?,?);";
  $stmt = $db->prepare($query);
  if (!$stmt) {
    echo "Book already exists";
    exit;
  } else {
    $stmt->bind_param('sss', $isbn, $author, $note);
    $stmt->execute();
    //echo "Last inserted record has id %d ".mysql_insert_id($db);
  }


  if ($stmt->affected_rows > 0) {
      echo  "Book inserted into the database.";

  } else {
      echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
</body>
</html>
