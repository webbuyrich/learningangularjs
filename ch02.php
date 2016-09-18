<!doctype html>
<html ng-app="firstApp">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CH02 - Basic AngularJS Application - First App</title>
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
                <h1>Creating a Basic AngularJS Application</h1>
            </div>
            <div class="container row" ng-controller="FirstController">
                <h2></h2><hr>
                <div class="row">
                	<div class="col-md-4 col-md-offset-4">
                		<form >
                			<div class="form-group">
                				<input type="text" ng-model="first" placeholder="First Name" class="form-control">
                			</div>
                			<div class="form-group">
                				<input type="text" ng-model="last" placeholder="Last Name" class="form-control">
                			</div>
                			<button type="submit" class="btn btn-success" ng-click="updateMessage()">Sign in</button>
                			<button type="submit" class="btn btn-danger" ng-click="clearEverything()">Clear Data</button>
                		</form>
                	</div> 
                </div>
                <hr>
                <div class="row">
                	<div class="col-md-4 col-md-offset-4">
                		{{ heading + message }}
                	</div>  	
                </div>    
            </div>
        </div>
		
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
        <script src="https://code.angularjs.org/1.2.9/angular.min.js"></script>
        <script src="js/first.js"></script>
    </body>
</html>