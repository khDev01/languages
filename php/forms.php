<html>
<body>
  <a href="../forms.html">back</a>

Welcome <?php echo $_POST["pname"]; ?><br>

Welcome <?php echo $_GET["gname"]; ?><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

</body>
</html>
