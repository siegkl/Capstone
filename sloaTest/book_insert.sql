<!--book_insert.sql-->
<!--kyle siegfried-->
<!-- 4/5/2-17 -->

USE sloabooks;

INSERT INTO Book VALUES
  (NULL, '0-672-31745-1', 'Java for Dipshits', 'This is a note...'),
  (NULL, '1-111-11111-1', 'Lua: Lucifer\'s Language', 'moar notez'),
  (NULL, '1-111-11111-2', 'TPS Reports by Monday', 'Note: Authored by Bill Lumbergh'),
  (NULL, '1-111-11111-3', 'TacoScript Cookbook', 'Note: coding never tasted so good'),
  (NULL, '1-111-11111-4', 'C# is Boring', 'Note: Authored by Bill Gates');

INSERT INTO Course VALUES
  ('NULL', 'CSC666', 'Lua Programming'),
  ('NULL', 'CSC000', 'Compuer Science 0'),
  ('NULL', 'CIS900', 'Advanced TPS Reporting'),
  ('NULL', 'CSC505', 'Programming in TacoScript'),
  ('NULL', 'CSC264', 'Capstone');

INSERT INTO Course_Book (BookID_FK, CourseID_FK) VALUES
  ((SELECT BookID from Book WHERE Title='Java for Dipshits'),(SELECT CourseID from Course WHERE Title='Computer Science 0')),

  ((SELECT BookID from Book WHERE Title='Lua: Lucifer\'s Language'),(SELECT CourseID from Course WHERE Title='Lua Programming')),

  ((SELECT BookID from Book WHERE Title='TPS Reports by Monday'),(SELECT CourseID from Course WHERE Title='Advanced TPS Reporting')),

  ((SELECT BookID from Book WHERE Title='TacoScript Cookbook'),(SELECT CourseID from Course WHERE Title='Programming in TacoScript')),

  ((SELECT BookID from Book WHERE Title='C# is Boring'),(SELECT CourseID from Course WHERE Title='Capstone'));

INSERT INTO Faculty VALUES
  (NULL, 'Professor Timmy Chuckles','ptc'),
  (NULL, 'Bill Lumbergh','bl'),
  (NULL, 'DJ Frankie Knuckles', 'dfk');

INSERT INTO Course_Faculty (CourseID_FK, FacultyID_FK) VALUES
 ((SELECT CourseID from Course WHERE Title='Lua Programming'), (SELECT FacultyID from Faculty WHERE Name='DJ Frankie Knuckles')),

 ((SELECT CourseID from Course WHERE Title='Compuer Science 0'), (SELECT FacultyID from Faculty WHERE Name='Professor Timmy Chuckles')),

 ((SELECT CourseID from Course WHERE Title='Advanced TPS Reporting'), (SELECT FacultyID from Faculty WHERE Name='Bill Lumbergh')),

 ((SELECT CourseID from Course WHERE Title='Programming in TacoScript'), (SELECT FacultyID from Faculty WHERE Name='DJ Frankie Knuckles')),

 ((SELECT CourseID from Course WHERE Title='Capstone'), (SELECT FacultyID from Faculty WHERE Name='Professor Timmy Chuckles'));

INSERT INTO Login VALUES
  (NULL, 'kyle27', 'Kyle'),
  (NULL, 'mohammed1', 'Mohammed'),
  (NULL, 'Kalyani11', 'Kalyani');

INSERT INTO Semester VALUES
  (NULL, '201653', 'Smmr 2016'),
  (NULL, '201751', 'Fall 2016'),
  (NULL, '201752', 'Sprng2017');

INSERT INTO Session VALUES
  ();

INSERT INTO Textbook_History (QueryTime, Semester_FK, Course_FK) VALUES
 ('20120618 10:34:09 AM', (SELECT SemesterID from Semester WHERE Description='201653'), (SELECT CourseID from Course WHERE Course_Number='CSC666')),

  ('20160618 10:34:09 AM', (SELECT SemesterID from Semester WHERE Description='201751'), (SELECT CourseID from Course WHERE Course_Number='CSC505'));
