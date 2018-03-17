app.controller('createHeroesController', function($scope) {

/*
|--------------------------------------------------------------------------
| INIT VARIABLES
|--------------------------------------------------------------------------
|
*/

    $scope.sides = [

        {id: 1, name: 'Light'},
        {id: 2, name: 'Dark'},
    ];


    $scope.user = {
        select: $scope.sides[0]
    };


    $scope.user.select = $scope.sides[0]; //set default side to light


    console.log('create heroes controller');


});