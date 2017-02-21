<?php
return [
    'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => [
        'description' => 'Tipos de Pagamentos',
        'collection' => [
            'description' => 'Coleção de tipos de pagamentos',
            'GET' => [
                'description' => 'Lista todos os tipos de pagamentos',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes"
       },
       "first": {
           "href": "/ptypes?page={page}"
       },
       "prev": {
           "href": "/ptypes?page={page}"
       },
       "next": {
           "href": "/ptypes?page={page}"
       },
       "last": {
           "href": "/ptypes?page={page}"
       }
   }
   "_embedded": {
       "ptypes": [
           {
               "_links": {
                   "self": {
                       "href": "/ptypes[/:ptypes_id]"
                   }
               }
               "id": "id do tipo de pagamento",
              "name": "Nome do tipo de pagamento"
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Cria um tipo de pagamento',
                'request' => '{
   "name": "Nome do tipo de pagamento"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
    "id": "id do tipo de pagamento",
   "name": "Nome do tipo de pagamento"
}',
            ],
        ],
        'entity' => [
            'description' => 'Entidade tipo de Pagamento',
            'GET' => [
                'description' => 'Retorna  o tipo de pagamento',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
    "id": "id do tipo de pagamento",
   "name": "Nome do tipo de pagamento"
}',
            ],
            'PATCH' => [
                'description' => 'Atualiza parcialmente um tipo de pagamento',
                'request' => '{
   "id": "id do tipo de pagamento",
   "name": "Nome do tipo de pagamento"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
    "id": "id do tipo de pagamento",
   "name": "Nome do tipo de pagamento"
}',
            ],
        ],
    ],
];
