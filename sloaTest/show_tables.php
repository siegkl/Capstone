<!-- show_tables.php -->
<!-- Kyle Siegfried -->
<!-- 4/5/2-17 -->

<!DOCTYPE html>
<html>
<head>
<title>Show sloabooks Tables</title>
 <link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
</head>
<body>
<h1>Show sloabooks Table</h1> <?php
echo "\t\t\t<a href = \"newbook.html\">(Add a new book)</a><t><t>\t\t\t";
echo "\t\t\t<a href = \"search.html\">(Search for a book)</a><t><t>\t\t\t";

echo "<br/><br/>";
$con=mysqli_connect("localhost","bookorama","bookorama123","sloabooks"); if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$sql="show tables;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount); echo "<br />";
  foreach ($result as $each)
  {
    foreach ($each as $one)
    {
      printf ("%s:\n", $one);
      echo "<br />";
    }
  }
mysqli_free_result($result);


          /*SHOW TABLES for SLOABOOKS*/
}
//----BEGIN - (((Book))) table ----//
echo "<br/><br/><strong>Book</strong><br />";
echo "<table>";
    ///--<th>--///
$sql="select column_name from information_schema.columns where table_name='book';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from book;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//----(Book) table - END ----//



//----BEGIN - (((Course))) table ----//
echo "<br/><br/><strong>Course</strong><br />";
echo "<table>";
///--<th>--///
$sql="select column_name from information_schema.columns where table_name='course';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from course;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//---- (course table) - END ----//



//---- BEGIN - (((Faculty))) table ----//
echo "<br/><br/><strong></strong><br />";
echo "<table>";
    ///--<th>--///
$sql="select column_name from information_schema.columns where table_name='faculty';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from faculty;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//---- (Faculty) table - END ----//



//---- BEGIN - (((Semester))) table ----//
echo "<br/><br/><strong>Semester</strong><br />";
echo "<table>";
    ///--<th>--///
$sql="select column_name from information_schema.columns where table_name='semester';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
      ///--</th>--///
$sql="select * from semester;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//---- (Semester) table - END ----//



//----BEGIN - (((Course_Book))) table ----//
echo "<br/><br/><strong>Course_Book</strong><br />";
echo "<table>";
    ///--<th>--///
$sql="select column_name from information_schema.columns where table_name='course_book';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from course_book;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//---- (Course_Book) table - END ----//



//----BEGIN - (((Course_Faculty))) table ----//
echo "<br/><br/><strong>Course_Faculty</strong><br />";
echo "<table>";
    ///--<th>--//
$sql="select column_name from information_schema.columns where table_name='course_faculty';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from course_faculty;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//---- (course_faculty) table - END ----//



//---- BEGIN - (((Textbook_History))) table ----//
echo "<br/><br/><strong>Textbook_History</strong><br />";
echo "<table>";
    ///--<th>--////
$sql="select column_name from information_schema.columns where table_name='Textbook_History';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from Textbook_History;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//----(Textbook_History) table - END ----//



//---- BEGIN - (((Login))) table ----//
echo "<br/><br/><strong>Login</strong><br />";
echo "<table>";
    ///--<th>--////
$sql="select column_name from information_schema.columns where table_name='Login';";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  echo "<tr>";
  foreach ($result as $each) {
    foreach ($each as $one) {
        echo "<th>";
        printf ("%s\n", $one);
        echo "</th>";
    }
  }
  echo "</tr>";
  mysqli_free_result($result);
}
    ///--</th>--///
$sql="select * from Login;";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result); printf("Result set has %d rows.\n",$rowcount);
  foreach ($result as $each) {
    echo "<tr>";
    foreach ($each as $one) {
      echo "<td>";
      printf ("%s\n", $one);
      echo "</td>";
    }
    echo "</tr>";
  }
  mysqli_free_result($result);
}
echo "</table>";
//----(Login) table - END ----//



mysqli_close($con); ?>
</body> </html>
