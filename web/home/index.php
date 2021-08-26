<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index view</title>
</head>

<body>
  <h1>Index view</h1>

  <?php if($data) : ?>

  <?php foreach ($data as $key=>$value) : ?>
  <br>
  <?=$value ?>
  <?php endforeach;?>
  <?php endif; ?>


</body>

</html>