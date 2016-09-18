var firstApp = angular.module('firstApp', []);

firstApp.controller('FirstController', function($scope){
	
	$scope.message = 'Enter your name above to see this message change!';
	$scope.heading = "Message: ";

	//function to update the message when updateMessage() button is clicked
	$scope.updateMessage = function(){
		$scope.message = 'Hello ' + $scope.first + ' ' + $scope.last + '!';
	};

	//function to update the message when updateMessage() button is clicked
	$scope.clearEverything = function(){
		$scope.first ='';
		$scope.last = '';
		$scope.message = 'Enter your name above to see this message change!';
	};
});