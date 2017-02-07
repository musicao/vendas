(function () {
    'use strict';

    angular
            .module('app')
            .factory('LoginService', LoginService);

    LoginService.$inject = [ '$timeout', '$http', '$q'];

    function LoginService($timeout, $http, $q) {


        return {


                postLogar: function (login, password) {

                var deferred = $q.defer();

                $http({
                    method: 'post',
                    url: "/login/logar" ,
                    timeout: 10000,
                    data: {
                        login: login,
                        password: password

                    }
                })
                        .then(function (response) {
                            deferred.resolve(response.data);
                        }, function (error) {
                            console.log(" Retorno" + error);
                            deferred.resolve("timeout");
                        });

                return deferred.promise;
            }


             

        }
    }
})();