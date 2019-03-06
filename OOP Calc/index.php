<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP Calculator</title>
  </head>
  <body>
    <form action="calc.php" method="post">
      <input type="text" name="num1" value="1">
      <input type="text" name="num2" value="1">
      <select name="cal">
        <option value="add">Add</option>
        <option value="sub">Substract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
      </select>
      <button type="submit">Calculate</button>
    </form>
  </body>
</html>
