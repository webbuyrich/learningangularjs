<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CH03 - AngularJS Dependency Injection</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet/less" href="css/style.less">
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
       
       <?php include('navmenu.php'); ?>

        <div class="container">
            <div class="starter-template">
                <h1>AngularJS Dependency Injection</h1>
                <p>Injecting a Built-in Provider into a controller.</p>
            </div>
            <hr>
            <div class="container row text-center" ng-controller="controllerA">
                <h3>This page has an alert</h3>
                <div class="row">
                </div>          
            </div>
        </div>
		
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
        <script src="https://code.angularjs.org/1.2.9/angular.min.js"></script>
        <script src="js/inject_builtin.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>