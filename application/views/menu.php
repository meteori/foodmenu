<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="text-center">FOOD MENU</h1>
    <hr>

    <div class="container">

    <a href="<?php echo base_url('index.php/menu/create'); ?>" class="btn btn-default">添加菜品</a>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>名称</th>
          <th>价格</th>
          <th>评分</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($menus as $key => $menu): ?>
        <tr>
          <td><?php echo $key + 1; ?></td>
          <td><?php echo $menu->name; ?></td>
          <td><?php echo $menu->price; ?></td>
          <td><?php echo $menu->rating; ?></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>

    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo base_url(); ?>static/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>