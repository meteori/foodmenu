<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

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

    <?php echo form_open('restaurant/add',array('id'=>'form-add-restaurant')); ?>

    <div class="form-group">
      <?php echo form_label('Restaurant Name', 'restaurant_name', array('class'=>'control-label')); ?>
      <?php echo form_input(array('name'=>'restaurant_name', 'id'=>'restaurant_name', 'class'=>'form-control')); ?>
    </div>

    <?php echo form_close(); ?>

    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>