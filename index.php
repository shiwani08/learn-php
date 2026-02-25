<?php $user = "Shiwani"; ?>
<html>

<head></head>

<body>
  Hello <?php echo $user; ?>!
  <?php
  $foo = 10;   // $foo is an integer
  $bar = (bool) $foo;   // $bar is a boolean
  echo $bar;
  echo gettype($bar);
  echo $foo;
  print $bar;
  ?>
</body>

</html>