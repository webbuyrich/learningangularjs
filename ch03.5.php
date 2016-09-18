<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CH03.5 - AngularJS Config and Run Blocks</title>
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
                <p>Implementing Configuration and Run Blocks in an AngularJS Module.</p>
            </div>
            <hr>           
            <div class="container row text-center" >
                <h3></h3>
                <div class="row" ng-controller="controllerA">
                    <h2>Config Time:</h2>
                    {{ configTime }}
                </div>
                <div class="row" ng-controller="controllerA">
                    <h2>Run Time:</h2>
                    {{ runTime }}
                </div>
                                 
            </div>
        </div>
		
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
        <script src="https://code.angularjs.org/1.2.9/angular.min.js"></script>
        <script src="js/config_run_blocks.js"></script>
    </body>
</html>