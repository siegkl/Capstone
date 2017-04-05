<!--newbook.php-->
<!--kyle siegfried-->
<!-- 4/5/2-17 -->

<html>
<head>
  <title>sloa - New Book Entry</title>
</head>
<body>

  <?php
    phpinfo();
  ?>
  <h1>sloa - New Book Entry</h1>

  <form action="insert_book.php" method="post">
    <table border="0">
      <tr>

        <td>ISBN</td>
         <td><input type="text" name="isbn" maxlength="13" size="13"></td>
      </tr>
      <tr>
        <td>Title</td>
        <td> <input type="text" name="author" maxlength="30" size="30"></td>
      </tr>
      <tr>
        <td>Note</td>
        <td> <input type="text" name="note" maxlength="60" size="30"></td>
      </tr>

      <tr>
        <td colspan="2"><input type="submit" value="Register"></td>
      </tr>

    </table>
  </form>
</body>
</html>
