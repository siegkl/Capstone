<!--create_tables.php -->
<!--Kyle Siegfried -->
<!-- 4/5/2-17 -->

<!DOCTYPE html>
<html>
<head>
<title>SLOA Create Tables Results</title> </head>
<body>
<h1>SLOA Create Tables Results</h1>
<?php
echo "\t\t\t<a href = \"newbook.html\">(Add a new book)</a><t><t>\t\t\t";
echo "\t\t\t<a href = \"search.html\">(Search for a book)</a><t><t>\t\t\t";
echo "\t\t\t<a href = \"show_tables.php\">(Show Tables)</a><t><t>\t\t\t";

echo "<br/><br/>";
function create_table($sql, $msg, $mysqli) {
  if ($mysqli->query($sql) == TRUE) {
      echo "<p>Table $msg created.</p>"; } else {
      echo "<p>An error has occurred.<br/>
      The item was not added=".$mysqli->error." </p>";
  }
}
/* have to create a field for course lead & then include in rest of project*/

$mysqli = new mysqli("localhost", "bookorama", "bookorama123", "sloabooks");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//1 //done
$query1 = "CREATE TABLE IF NOT EXISTS `Semester` (
`SemesterID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`Description` VARCHAR(6) NOT NULL,
`Season` VARCHAR(10) NOT NULL
)";
create_table($query1, 'Semester', $mysqli);

//2 //done
$query2 = "CREATE TABLE IF NOT EXISTS `Course` (
CourseID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Course_Number VARCHAR(6),
Title VARCHAR(30)
)";
create_table($query2, 'Course', $mysqli);

//3 //done
$query3 = "CREATE TABLE IF NOT EXISTS `Faculty` (
FacultyID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(25),
Initial VARCHAR(3)
)";
create_table($query3, 'Faculty', $mysqli);

//4 //done
$query4 = "CREATE TABLE IF NOT EXISTS `Book` (
BookID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
ISBN CHAR(13) NOT NULL,
Title VARCHAR(50),
Note VARCHAR(50)
)";
create_table($query4, 'Book', $mysqli);

//5 //done
$query5 = "CREATE TABLE IF NOT EXISTS `Course_Faculty` (
CourseFacultyID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
FacultyID_FK INT UNSIGNED NOT NULL,
CourseID_FK INT UNSIGNED NOT NULL,

FOREIGN KEY (FacultyID_FK) REFERENCES Faculty(FacultyID),
FOREIGN KEY (CourseID_FK) REFERENCES Course(CourseID)
)";
create_table($query5, 'Course_Faculty', $mysqli);

//6 //done
$query5 = "CREATE TABLE IF NOT EXISTS `Course_Book` (
CourseBookID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
BookID_FK INT UNSIGNED NOT NULL,
CourseID_FK INT UNSIGNED NOT NULL,

FOREIGN KEY (BookID_FK) REFERENCES Book(BookID),
FOREIGN KEY (CourseID_FK) REFERENCES Course(CourseID)
)";
create_table($query5, 'Course_Book', $mysqli);

//7 //done
$query5 = "CREATE TABLE IF NOT EXISTS `Login` (
  LoginID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Login VARCHAR(40),
  Name VARCHAR(25)
)";
create_table($query5, 'Login', $mysqli);

//8 //done
$query5 = "CREATE TABLE IF NOT EXISTS `Session` (
SessionID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Session VARCHAR(200),
LoginID_FK INT UNSIGNED NOT NULL,

FOREIGN KEY (LoginID_FK) REFERENCES Login(LoginID)
)";
create_table($query5, 'Session', $mysqli);

//9 //done
$query5 = "CREATE TABLE IF NOT EXISTS `Textbook_History` (
BookID INT PRIMARY KEY REFERENCES Book(BookID),
QueryTime DATETIME NOT NULL,
Semester_FK INT UNSIGNED NOT NULL,
Course_FK INT UNSIGNED NOT NULL,

FOREIGN KEY (Semester_FK) REFERENCES Semester (SemesterID),
FOREIGN KEY (Course_FK) REFERENCES Course (CourseID)
)";
create_table($query5, 'Textbook_History', $mysqli);

$insert_book_query =
"INSERT INTO Book VALUES
  (NULL, '0-672-31745-1', 'Java for Dipshits', 'This is a note...'),
  (NULL, '1-111-11111-1', 'Lua: Lucifer\'s Language', 'moar notez'),
  (NULL, '1-111-11111-2', 'TPS Reports by Monday', 'Note: Authored by Bill Lumbergh');
  (NULL, '1-111-11111-3', 'TacoScript Cookbook', 'Note: coding never tasted so good');
  (NULL, '1-111-11111-4', 'C# is Boring', 'Note: Authored by Bill Gates');";
  create_table($insert_book_query, 'insertbookquery'
  , $mysqli);

  $insert_course_query = "INSERT INTO Course VALUES
    ('NULL', 'CSC666', 'Lua Programming'),
    ('NULL', 'CSC000', 'Compuer Science 0'),
    ('NULL', 'CIS900', 'Advanced TPS Reporting'),
    ('NULL', 'CSC505', 'Programming in TacoScript'),
    ('NULL', 'CSC264', 'Capstone');";
    create_table($insert_course_query, 'insertcourse', $mysqli);

    /*$insert_courseBook_query = "INSERT INTO Course_Book (BookID_FK, CourseID_FK) VALUES
      ((SELECT BookID from Book WHERE Title='Java for Dipshits'),(SELECT CourseID from Course WHERE Title='Computer Science 0')),

      ((SELECT BookID from Book WHERE Title='Lua: Lucifer\'s Language'),(SELECT CourseID from Course WHERE Title='Lua Programming')),

      ((SELECT BookID from Book WHERE Title='TPS Reports by Monday'),(SELECT CourseID from Course WHERE Title='Advanced TPS Reporting')),

      ((SELECT BookID from Book WHERE Title='TacoScript Cookbook'),(SELECT CourseID from Course WHERE Title='Programming in TacoScript')),

      ((SELECT BookID from Book WHERE Title='C# is Boring'),(SELECT CourseID from Course WHERE Title='Capstone'));"
      create_table($insert_courseBook_query, 'insertcourseBook', $mysqli);
      $insert_faculty_query = "INSERT INTO Faculty VALUES
        (NULL, 'Professor Timmy Chuckles'),
        (NULL, 'Bill Lumbergh'),
        (NULL, 'DJ Frankie Knuckles');"
        create_table($insert_faculty_query, 'insertfacult', $mysqli);

        $insert_courseFaculty_query = "INSERT INTO Course_Faculty (CourseID_FK, FacultyID_FK) VALUES
         ((SELECT CourseID from Course WHERE Title='Lua Programming'), (SELECT FacultyID from Faculty WHERE Name='DJ Frankie Knuckles')),

         ((SELECT CourseID from Course WHERE Title='Compuer Science 0'), (SELECT FacultyID from Faculty WHERE Name='Professor Timmy Chuckles')),

         ((SELECT CourseID from Course WHERE Title='Advanced TPS Reporting'), (SELECT FacultyID from Faculty WHERE Name='Bill Lumbergh')),

         ((SELECT CourseID from Course WHERE Title='Programming in TacoScript'), (SELECT FacultyID from Faculty WHERE Name='DJ Frankie Knuckles')),

         ((SELECT CourseID from Course WHERE Title='Capstone'), (SELECT FacultyID from Faculty WHERE Name='Professor Timmy Chuckles'));"
         create_table($insert_courseFaculty_query, 'insertcourseFaculty', $mysqli);

         $insert_login_query = "INSERT INTO Login VALUES
           (NULL, 'kyle27', 'Kyle'),
           (NULL, 'mohammed1', 'Mohammed'),
           (NULL, 'Kalyani11', 'Kalyani');"
           create_table($insert_login_query, 'insertlogin', $mysqli);

          $insert_semester_query = "INSERT INTO Semester VALUES
            (NULL, '201653', 'Smmr 2016'),
            (NULL, '201751', 'Fall 2016')
            (NULL, '201752', 'Sprng2017');"
          create_table($insert_semester_query, 'insertsemester', $mysqli);

          $insert_textbookHistory_query = "INSERT INTO Textbook_History (QueryTime, Semester_FK, Course_FK) VALUES
           ('20120618 10:34:09 AM', (SELECT SemesterID from Semester WHERE Description='201653'), (SELECT CourseID from Course WHERE Course_Number='CSC666')),

            ('20160618 10:34:09 AM', (SELECT SemesterID from Semester WHERE Description='201751'), (SELECT CourseID from Course WHERE Course_Number='CSC505'));"
          create_table($insert_textbookHistory_query, 'insertTextHist', $mysqli);
          */
/* close connection */
$mysqli->close();

?>
</body>
</html>
