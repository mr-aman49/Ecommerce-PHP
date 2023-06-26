<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1
    .0">
    <title>Documents</title>
    <?=$this->include("bootstrap")?>
    <link rel="stylesheet" href="<?= base_url()?>/public/css/style.css">
  </head>
  <body>
    <?= $this->include('navbar')?>
    <?= $this->renderSection('content')?>
  </body>
</html>