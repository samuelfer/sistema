<?php
return [
    'router' => [
        'routes' => [
            'sindico-amigo.rest.tipo-funcionarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_funcionarios[/:tipo_funcionarios_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_user[/:tipo_user_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.areacomum' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/areacomum[/:areacomum_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.configuracao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/configuracao[/:configuracao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            1 => 'sindico-amigo.rest.tipo-funcionarios',
            0 => 'sindico-amigo.rest.tipo-user',
            2 => 'sindico-amigo.rest.areacomum',
            3 => 'sindico-amigo.rest.configuracao',
        ],
    ],
    'zf-rest' => [
        'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\TipoFuncionariosResource',
            'route_name' => 'sindico-amigo.rest.tipo-funcionarios',
            'route_identifier_name' => 'tipo_funcionarios_id',
            'collection_name' => 'tipo_funcionarios',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\TipoFuncionarios\TipoFuncionariosEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoFuncionarios\TipoFuncionariosCollection::class,
            'service_name' => 'tipo_funcionarios',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoUser\\TipoUserResource',
            'route_name' => 'sindico-amigo.rest.tipo-user',
            'route_identifier_name' => 'tipo_user_id',
            'collection_name' => 'tipo_user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\TipoUser\TipoUserEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoUser\TipoUserCollection::class,
            'service_name' => 'tipo_user',
        ],
        'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumResource::class,
            'route_name' => 'sindico-amigo.rest.areacomum',
            'route_identifier_name' => 'areacomum_id',
            'collection_name' => 'areacomum',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumCollection::class,
            'service_name' => 'areacomum',
        ],
        'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoResource::class,
            'route_name' => 'sindico-amigo.rest.configuracao',
            'route_identifier_name' => 'configuracao_id',
            'collection_name' => 'configuracao',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoCollection::class,
            'service_name' => 'configuracao',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \SindicoAmigo\V1\Rest\TipoFuncionarios\TipoFuncionariosEntity::class => [
                'entity_identifier_name' => 'id_tipo_funcionarios',
                'route_name' => 'sindico-amigo.rest.tipo-funcionarios',
                'route_identifier_name' => 'tipo_funcionarios_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoFuncionarios\TipoFuncionariosCollection::class => [
                'entity_identifier_name' => 'id_tipo_funcionarios',
                'route_name' => 'sindico-amigo.rest.tipo-funcionarios',
                'route_identifier_name' => 'tipo_funcionarios_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoUser\TipoUserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-user',
                'route_identifier_name' => 'tipo_user_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoUser\TipoUserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-user',
                'route_identifier_name' => 'tipo_user_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumEntity::class => [
                'entity_identifier_name' => 'id_cadastro_reserva_area_comum',
                'route_name' => 'sindico-amigo.rest.areacomum',
                'route_identifier_name' => 'areacomum_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumCollection::class => [
                'entity_identifier_name' => 'id_cadastro_reserva_area_comum',
                'route_name' => 'sindico-amigo.rest.areacomum',
                'route_identifier_name' => 'areacomum_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoEntity::class => [
                'entity_identifier_name' => 'id_configuracao',
                'route_name' => 'sindico-amigo.rest.configuracao',
                'route_identifier_name' => 'configuracao_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoCollection::class => [
                'entity_identifier_name' => 'id_configuracao',
                'route_name' => 'sindico-amigo.rest.configuracao',
                'route_identifier_name' => 'configuracao_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\TipoFuncionariosResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_funcionarios',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller',
                'entity_identifier_name' => 'id_tipo_funcionarios',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\TipoFuncionariosResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUser\\TipoUserResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_user',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoUser\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'SindicoAmigo\\V1\\Rest\\AreaComum\\Validator' => [
            0 => [
                'name' => 'id_area_pai',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'id_tipo_area',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'de_cadastro_reserva_area_comum',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'de_materiais',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'nu_valor',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'hr_inicio',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'hr_fim',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'tmp_duracao',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            8 => [
                'name' => 'st_horario_sn',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            9 => [
                'name' => 'ignora_qtd_reserva',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            10 => [
                'name' => 'nu_antecedencia_max',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            11 => [
                'name' => 'nu_antecedencia_min',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            12 => [
                'name' => 'qtd_reserva_mes',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            13 => [
                'name' => 'perm_varias_reserva_dia',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            14 => [
                'name' => 'qtd_reserva_mes_gratis',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            15 => [
                'name' => 'qtd_reserva_ano_gratis',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Validator' => [
            0 => [
                'name' => 'de_tipo_funcionarios',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUser\\Validator' => [
            0 => [
                'name' => 'de_tipo',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumResource::class => \SindicoAmigo\V1\Rest\Areacomum\AreacomumResourceFactory::class,
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumRepository::class => \SindicoAmigo\V1\Rest\Areacomum\AreacomumRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoResource::class => \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoResourceFactory::class,
            'SindicoAmigo\\V1\\Rest\\Configuracao\\ConfiguracaoRepository' => \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoRepositoryFactory::class,
        ],
    ],
];
