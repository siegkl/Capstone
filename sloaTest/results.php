<!--results.php-->
<!--kyle siegfried-->
<!-- 4/5/2-17 -->
<!--
  i.	The program will be able to keep a record of logins onto the server.
ii.	The user can view the data by course number, semester, or course faculty.
iii.	The admin can edit the database by adding in data or removing data. As well as setting permissions.
iv.	The user can save the viewable data and print the data
v.	The program cannot search tables by course name, faculty name, or book titles.

-->
<html>
<head>
  <title>SLOA Search Results</title>
</head>
<body>
<h1>SLOA Search Results</h1>

<?php
  echo "\t\t\t<a href = \"newbook.html\">(Add a new book)</a><t><t>\t\t\t";
  echo "\t\t\t<a href = \"search.html\">(Search for a book)</a><t><t>\t\t\t";
  echo "\t\t\t<a href = \"show_tables.php\">(Show Tables)</a><t><t>\t\t\t";
  echo "<br/><br/>";
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);
  echo $searchtype;
  echo$searchterm;
  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  // whitelist the searchtype
  switch ($searchtype) {
    case 'course_number':
            $query = "SELECT book.isbn FROM book, course, Course_Book where book.bookID = course_book.bookid_fk AND course.courseID = course_book.courseid_fk AND course.course_number = ?;";

      break;
    case 'semester':
              $query = "select Book.ISBN from Book, Textbook_History, semester where Book.BookID = Textbook_History.BookID and Textbook_History.Semester_FK = semester.semesterID and semester.description = ?;";
    break;
    /*This case does not currently work*/
    /*Need to clarify what search should return*/
    case 'course_faculty':
              $query = "select
                Book.ISBN
              from
                Course_Book, Course_Faculty, book, faculty
              where
                Faculty.FacultyID = ?
                  and
                Course_Faculty.CourseID = Course_Book.CourseID
                and
                course_faculty.FacultyID = Faculty.FacultyID";
              break;
              //exit;
    default:
              echo 'That is not a valid search type. Go back and try again.';
              exit;
  }
  echo $query;

  $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'sloabooks');
    if (mysqli_connect_errno()) {
       echo 'Error: Could not connect to database.  Please try again later.';
       exit;
     }

  $stmt = $db->prepare($query);
  $stmt->bind_param('s', $searchterm);
  $stmt->execute();
  $stmt->store_result();

$stmt->bind_result($bookid);//actually should be $isbn for current code

  echo "<p>Number of books found: ".$stmt->num_rows."</p>";
  //echo $stmt->result;
  while($stmt->fetch()) {
    echo $bookid."<br />";

    /*uncomment when these are binded instead of $bookid*/
    //echo "<p><strong>Title: ".$title."</strong>";
    //echo "<br />Note: ".$note;
    //echo "<br />ISBN: ".$isbn;
    //echo "<br />Price: ".$price."</p>";
  }

  $stmt->free_result();
  $db->close();

?>
</body>
</html>
