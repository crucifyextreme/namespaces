appClient
    .factory('modelClient', function ($resource, $http) {
        return {
            consulta_dados: function () {
                $http.get('rotas.php/buscaClientes');
            }

        }

    });
