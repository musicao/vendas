(function () {
    'use strict';
    angular
        .module('app', ['ui.router'])

        .config(['$interpolateProvider','$stateProvider', function($interpolateProvider,$stateProvider) {

            $interpolateProvider.startSymbol('%%');
            $interpolateProvider.endSymbol('%%');

            var helloState = {
                name: 'hello',
                url: '/hello',
                template: '<h3>hello world!</h3>'
            }

            var aboutState = {
                name: 'about',
                url: '/about',
                template: '<h3>Its the UI-Router hello world app!</h3>'
            }

            var login = {
                name: 'login',
                url: '/login',
                views:{
                    '@': {
                        templateUrl:'template/app/login/views/login.html'
                    }
                }
            }

            $stateProvider.state(helloState);
            $stateProvider.state(aboutState);
            $stateProvider.state(login);


        }]);




})();

