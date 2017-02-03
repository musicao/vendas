(function () {
    'use strict';

    angular
        .module('app')
        .controller('LoginController', LoginController);

    LoginController.$inject = ['LoginService'];

    function LoginController( LoginService) {
        var vm = this;

        vm.frase = 'lucas é um ';
        vm.getDadosUsuarios = function() {

            LoginService.postDatasUsers()
                .then(function (data) {

                    if (data.error) {

                    } else if (data == "timeout"){

                    }else{
                        vm.nome  = data.data;


                    }



                });
        };

        vm.getDadosUsuarios();

    }

})();