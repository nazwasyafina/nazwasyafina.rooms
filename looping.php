<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Looping</title>

<style>
body {
  font-family: Arial;
  background: #f5f5f5;
  padding: 40px;
}

.box {
  background: linear-gradient(to right, #2b6cb0, #4c8edb);
  color: white;
  padding: 20px;
  width: 350px;
  border-radius: 10px;
}
</style>
</head>

<body>

<div class="box">
<?php
for($i = 1; $i <= 1000; $i++){
  echo $i . ". Ini adalah hari ke-" . $i . " belajar PHP <br>";
}
?>
</div>

</body>
</html>
