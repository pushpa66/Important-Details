.controller('homeCtrl', ['$scope', '$compile', '$ionicLoading', '$stateParams',function ($scope, $compile, $ionicLoading, $stateParams) {

  var marker;

  $scope.initialize = function() {


    navigator.geolocation.getCurrentPosition(function (pos) {

      $scope.myLatlng = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);

      console.log(pos.coords.latitude+" "+pos.coords.longitude);

      var mapOptions = {
        center: $scope.myLatlng,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("map"), mapOptions);

      var contentString = "<div><a ng-click='clickTest()'>Click me!</a></div>";
      var compiled = $compile(contentString)($scope);

      var infowindow = new google.maps.InfoWindow({
        content: compiled[0]
      });

      marker = new google.maps.Marker({
        position: $scope.myLatlng,
        map: map,
        title: 'You are here',
        animation: google.maps.Animation.DROP
      });

      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });

      $scope.map = map;

    }, function (error) {
      console.log('Unable to get location: ' + error.message);
    });
  }

  console.log("fuck you before");
  google.maps.event.addDomListener(window, 'load', $scope.initialize);

  console.log("fuck you after");

  $scope.show = function() {
    $ionicLoading.show({
      duration: 3000,
      animation: 'fade-in',
      showBackdrop: true,
      maxWidth: 200
    }).then(function(){
      console.log("The loading indicator is now displayed");
    });
  };

  $scope.hide = function(){
    $ionicLoading.hide().then(function(){
      console.log("The loading indicator is now hidden");
    });
  };


  $scope.centerOnMe = function() {
    if(!$scope.map) {
      return;
    }

    $scope.show();
    navigator.geolocation.getCurrentPosition(function(pos) {
      $scope.map.setCenter(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
      $scope.hide();
    }, function(error) {
      console.log('Unable to get location: ' + error.message);
    });
  };

  $scope.clickTest = function() {
    alert('Example of infowindow with ng-click');
  };

}])