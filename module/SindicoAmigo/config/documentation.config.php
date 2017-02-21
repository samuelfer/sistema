<?php
return [
    'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
        'description' => 'CRUD de configuração',
    ],
    'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => [
        'description' => 'Tipo de Funcionários',
        'collection' => [
            'description' => 'Coleção de Tipos de Funcionários',
            'GET' => [
                'description' => 'Lista todos os tipos de funcionários',
            ],
        ],
        'entity' => [
            'description' => 'Entidade   Tipo de Funcionários',
            'GET' => [
                'description' => 'Retorna o tipo de funcionário',
                'response' => '{
   "_links": {
       "self": {
           "href": "/tipo_funcionarios[/:tipo_funcionarios_id]"
       }
   }
   "id_tipo_funcionarios":"id do tipo de funcionario",
   "de_tipo_funcionarios": "Nome do tipo de funcionario"
}',
            ],
            'PATCH' => [
                'description' => 'Atualiza parcialmente um tipo de funcionario',
                'request' => '{
   "id_tipo_funcionarios":"id do tipo de funcionario"
   "de_tipo_funcionarios": "Nome do tipo de funcionario"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/tipo_funcionarios[/:tipo_funcionarios_id]"
       }
   }
    "id_tipo_funcionarios":"id do tipo de funcionario"
   "de_tipo_funcionarios": "Nome do tipo de funcionario"
}',
            ],
        ],
    ],
    'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/cbo"
       },
       "first": {
           "href": "/cbo?page={page}"
       },
       "prev": {
           "href": "/cbo?page={page}"
       },
       "next": {
           "href": "/cbo?page={page}"
       },
       "last": {
           "href": "/cbo?page={page}"
       }
   }
   "_embedded": {
       "cbo": [
           {
               "_links": {
                   "self": {
                       "href": "/cbo[/:cbo_id]"
                   }
               }
              "id_cbo":"Id do cob",
              "de_cbo": "Descrição do cob"
           }
       ]
   }
}',
            ],
        ],
    ],
    'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => [
        'description' => 'Tabela de Grupos',
        'entity' => [
            'description' => 'Entidade de Grupo',
        ],
    ],
];
