var app = angular.module('angularApp', []);

app.controller('mainCtrl', ['$scope', function ($scope) {

    
}]);


app.controller('carouselCtrl', ['$scope', '$interval', function ($scope, $interval) {
    
    $scope.slides = document.getElementsByClassName('slide');
    $scope.slide = $scope.slides[0];
    $scope.activeSlide = 0;
    
    $scope.slides[$scope.activeSlide].classList.add('active');

    
    $scope.setActive = function(index) {
        
        $scope.activeSlide = index;
        
        angular.forEach($scope.slides, function(value, index){
            value.classList.remove('active');        
        });
        
        $scope.slides[$scope.activeSlide].classList.add('active');
        
    }
    
    $interval(
        function (){
            
            angular.forEach($scope.slides, function(value, index){
                value.classList.remove('active');        
            });
            
            if ($scope.activeSlide < ($scope.slides.length - 1)){
                    $scope.activeSlide ++;
                    
            } else {
                    $scope.activeSlide = 0;
            }
            
            $scope.slides[$scope.activeSlide].classList.add('active');
            console.log($scope.activeSlide);

        }, 7000
    );
    

    
}]);