(function () {
    'use strict';
    angular
        .module('app', ['ui.router'])

        .config(['$interpolateProvider','$stateProvider', function($interpolateProvider,$stateProvider) {

            $interpolateProvider.startSymbol('%%');
            $interpolateProvider.endSymbol('%%');



            var login = {
                name: 'login',
                url: '/login',
                controllers: 'LoginController',
                controllerAs: 'vm',
                views:{
                    '@': {
                        templateUrl:'template/app/login/views/login.html'
                    }
                }
            }

            var registrar = {
                name: 'registrar',
                url: '/registrar',
                controllers: 'LoginController',
                controllerAs: 'vm',
                views:{
                    '@': {
                        templateUrl:'template/app/login/views/registrar.html'
                    }
                }
            }


            $stateProvider.state(login);
            $stateProvider.state(registrar);




        }]);




})();

