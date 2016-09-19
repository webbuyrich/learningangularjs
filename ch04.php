<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CH04 - AngularJS Implemeting Scope as Data Model</title>
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
                <h1>Implemeting Scope as Data Model</h1>
                <p>Implemeting a Basic Controller That Uses Dependency Injection,<br>Initialized Scope Variables, and Implements Business Logic</p>
            </div>
            <hr>
            <div class="container row text-center" ng-controller="Counter">                
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <span>Change Amount:</span>
                        <input type="number" ng-model="change" >
                        <button ng-click='inc()' class="btn btn-primary"> + </button>
                        <button ng-click='dec()' class="btn btn-danger"> - </button>
                    </div>
                   
                </div>
                <div class="row">
                    <span>Starting Value:</span>
                    {{ start }}
                </div>
                <div class="row">
                    <span>Current Value:</span>
                    {{ current }}                     
                </div>
                <div class="row">
                    <span>Difference:</span>
                    {{ difference }}                     
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
		
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
        <script src="https://code.angularjs.org/1.2.9/angular.min.js"></script>
        <script src="js/scope_controller.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>