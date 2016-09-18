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
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Learning AngularJS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Javascript</a></li>
                        <li class=""><a href="ch02.php">CH02</a></li>
                        <li class="active"><a href="ch03.php">CH03</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- NAVIGATION BAR -->

        <div class="container">
            <div class="starter-template">
                <h1>AngularJS Dependency Injection</h1>
                <p>Injecting a Built-in Provider into a controller.</p>
            </div>
            <hr>
            <div class="container row" ng-controller="controllerA">
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
    </body>
</html>