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

    <form action="<?php echo base_url(); ?>index.php/menu/create" method="POST" role="form">
      <legend>Create a menu</legend>
    
      <div class="form-group">
        <label for="food_name">名称</label>
        <input type="text" class="form-control" name="food_name" id="food_name" placeholder="菜名">
      </div>
    
      <div class="form-group">
        <label for="price">价格</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="价格">
      </div>
    
      <div class="form-group">
        <label for="rating">评分</label>
        <input type="text" class="form-control" name="rating" id="rating" placeholder="评分">
      </div>
    
      
    
      <button type="submit" class="btn btn-primary">提交</button>
    </form>

    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo base_url(); ?>static/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>