(function () {
    'use strict';

    angular
            .module('app')
            .factory('LoginService', LoginService);

    LoginService.$inject = [ '$timeout', '$http', '$q'];

    function LoginService($timeout, $http, $q) {


        return {

            postDatasUsers: function () {

                var deferred = $q.defer();

                $http({
                    method: 'GET',
                    url: "/lucas" ,
                    timeout: 10000,
                    data: {

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