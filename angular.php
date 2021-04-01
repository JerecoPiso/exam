<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="myApp">

<div  ng-controller="customersCtrl">

<table>
  <tr ng-repeat="x in names">
    <td>{{ x.id }}</td>
    <td>{{x.subject}}</td>
   
  </tr>
</table>

</div>

<script>
var app = angular.module('myApp', []);

app.controller('customersCtrl', function($scope, $http) {
 // $scope.getData = function(){
    $http.get("php.php")
    .then(function (response)
     
     {      
     $scope.names = response.data
    //alert(JSON.stringify(response.data))


    });
    //alert($scope.names)
  //}
});
</script>

</body>
</html>
