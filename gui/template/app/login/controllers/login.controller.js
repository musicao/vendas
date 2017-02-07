(function () {
    'use strict';

    angular
        .module('app')
        .controller('LoginController', LoginController);

    LoginController.$inject = ['LoginService'];

    function LoginController( LoginService) {
        var vm = this;


        vm.logar = function () {

            LoginService.postLogar(vm.login,vm.password)
                .then(function (data) {

                    if (data.error) {
                        toastr.error(data.message, 'Clyck Login', {timeOut: 4000});
                    } else if (data == "timeout"){
                        toastr.warning("Sistema apresentando lentidão", 'Login', {timeOut: 4000});
                    }else{

                        toastr.success(data.message, 'Click Login', {timeOut: 4000});
                    }


                });

        }
    }

})();