<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="kyle">
        <title>Page Title</title>

        <?= $this->assets->outputCss('style') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <ul class="list-group">

        <?php foreach ($all as $user) { ?>
            <li class="list-group-item">
                <?= $user->id ?>
                <?= $user->email ?>
            </li>
        <?php } ?>

    </ul>
</div>

    <?= $this->assets->outputJs('script') ?>
    </body>
</html>