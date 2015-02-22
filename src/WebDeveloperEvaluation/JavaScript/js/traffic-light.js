(function() {
    var app = angular.module('trafficLight', []);
    var Light = {
        make: function (color) {
            var light = {
                color: color,
                poweredOn: false,
                mouseHovering: false,
                togglePower: function () {
                    light.poweredOn = false == light.poweredOn;
                },
                getPowerClass: function () {
                    var isOff = !(light.poweredOn || light.mouseHovering);
                    if (isOff) {
                        return 'off';
                    }
                    return '';
                },
                setMouseHovering: function (isHovering) {
                    light.mouseHovering = isHovering;
                }
            };
            return light;
        }
    }
    app.controller('TrafficLightController', ['$http', '$scope', function($http, $scope) {
        var robot = this;
        robot.size = $scope.size;
        robot.lights = [
            Light.make('red'),
            Light.make('yellow'),
            Light.make('green')
        ];
    }]);
    app.directive("robot", function() {
        return {
            restrict: "E",
            templateUrl: "robot.html",
            controller: "TrafficLightController",
            controllerAs: "robot",
            scope: { size: '@size' }
        };
    });
})();
