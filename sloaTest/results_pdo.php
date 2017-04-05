
<!--results_pdo.php-->
<!--kyle siegfried-->
<!--
<html>
<head>
  <title>sloa Search Results</title>
</head>
<body>
<h1>sloa Search Results</h1>
<!--<?php-->/*
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo "You have not entered search details.  Please go back and try again.";
     exit;
  }

  // whitelist the searchtype
  switch ($searchtype) {
    case 'course_number':
    case 'semester':
    case 'course_lead':
              break;
    default:
              echo 'That is not a valid search type. Go back and try again.';
              exit;
  }

  // set up for using PDO
  $user = 'bookorama';
  $pass = 'bookorama123';
  $host = 'localhost';
  $db_name = 'sloabooks';

  // set up DSN
  $dsn = "mysql:host=$host;dbname=$db_name";

  // connect to database
  try {
    $db = new PDO($dsn, $user, $pass);

    /* Will have to create the query in the switch statement above bc query will change based on search terms given

    // perform query
    $query = "select * from book where $searchtype = :searchterm";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':searchterm', $searchterm);
    $stmt->execute();

    // get number of returned rows
    echo "<p>Number of books found: ".$stmt->rowCount()."</p>";

    // display each returned row
    while($result = $stmt->fetch(PDO::FETCH_OBJ)) {
      echo "<p><strong>Title: ".$result->title."</strong>";
      echo "<br />Author: ".$result->author;
      echo "<br />ISBN: ".$result->isbn;
      echo "<br />Price: ".$result->price."</p>";
    }

    // disconnect from database
    $db = NULL;
  } catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
    exit;
  }
?>
</body>
</html>
-->*/
