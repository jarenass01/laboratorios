<!DOCTYPE html>
<html ng-app="myModule">
<head>
    <script src="angular.js"></script>
    <meta charset="UTF-8">

</head>
<body>
<div ng-controller="fessCntrl">Example
    <input type="text" ng-model="test" format="number" />
    {{ test }}

</div>

<script>
    var fessmodule = angular.module('myModule', []);
    fessmodule.controller('fessCntrl', function ($scope) {
        $scope.test = ''

    });

    fessmodule.$inject = ['$scope'];


    fessmodule.directive('format', ['$filter', function ($filter) {
        return {
            require: '?ngModel',
            link: function (scope, elem, attrs, ctrl) {
                if (!ctrl) return;


                ctrl.$formatters.unshift(function (a) {
                    return $filter(attrs.format)(ctrl.$modelValue)
                });


                ctrl.$parsers.unshift(function (viewValue) {
                    var plainNumber = viewValue.replace(/[^\d|\-+|\.+]/g, '');
                    elem.val($filter(attrs.format)(plainNumber));
                    return plainNumber;
                });
            }
        };
    }]);
</script>
</body>
</html>