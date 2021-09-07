<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About view</title>
</head>

<body>


  <h1>About view</h1>

  <?php if($data && gettype($data) == 'array') : ?>

  <?php foreach ($data as $key=>$value) : ?>
  <br>
  <?=$key .' ' ?>
  <?=$value ?>
  <?php endforeach;?>

  <?php endif; ?>

  <?php if($data && gettype($data) == 'string') : ?>

  <?= "<h3>$data</h3>" ?>

  <?php endif; ?>


</body>

</html>