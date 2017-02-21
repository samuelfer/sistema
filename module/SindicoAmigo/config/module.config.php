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
            'sindico-amigo.rest.tipo-conta' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_conta[/:tipo_conta_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.condominio' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/condominio[/:condominio_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Condominio\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.pessoa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/pessoa[/:pessoa_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Pessoa\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.perfil' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/perfil[/:perfil_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Perfil\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-perfil' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_perfil[/:tipo_perfil_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-pessoa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_pessoa[/:tipo_pessoa_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-situacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_situacao[/:tipo_situacao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-grupo-perfil' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_grupo_perfil[/:tipo_grupo_perfil_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-visitante' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_visitante[/:tipo_visitante_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-upload' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_upload[/:tipo_upload_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-situacao-imovel' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_situacao_imovel[/:tipo_situacao_imovel_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-receita' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_receita[/:tipo_receita_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-prestador-servico' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_prestador_servico[/:tipo_prestador_servico_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-ocorrencia' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_ocorrencia[/:tipo_ocorrencia_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-movimento' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_movimento[/:tipo_movimento_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-documento' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_documento[/:tipo_documento_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-dependente' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_dependente[/:tipo_dependente_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-chaves' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_chaves[/:tipo_chaves_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-area' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_area[/:tipo_area_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-agenda' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_agenda[/:tipo_agenda_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.proprietario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/proprietario[/:proprietario_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.funcionarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/funcionarios[/:funcionarios_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Funcionarios\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.visitante' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/visitante[/:visitante_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Visitante\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.area-pai' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/area_pai[/:area_pai_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.setor-garagem' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/setor_garagem[/:setor_garagem_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.termo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/termo[/:termo_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Termo\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.restricao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/restricao[/:restricao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Restricao\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.garagem' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/garagem[/:garagem_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Garagem\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.imagem' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/imagem[/:imagem_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Imagem\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.prestadorservico' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/prestadorservico[/:prestadorservico_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Prestadorservico\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.comunicacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/comunicacao[/:comunicacao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Comunicacao\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.anuncio' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/anuncio[/:anuncio_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Anuncio\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.correspondencia' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/correspondencia[/:correspondencia_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Correspondencia\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.reserva' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/reserva[/:reserva_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Reserva\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.ocorrenciamorador' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ocorrenciamorador[/:ocorrenciamorador_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Ocorrenciamorador\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.ocorrenciaporteiro' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ocorrenciaporteiro[/:ocorrenciaporteiro_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Ocorrenciaporteiro\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.inadimplentes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/inadimplentes[/:inadimplentes_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Inadimplentes\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.aviso' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/aviso[/:aviso_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Aviso\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.agendacompromisso' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/agendacompromisso[/:agendacompromisso_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Agendacompromisso\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.bloco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/bloco[/:bloco_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Bloco\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.imovel' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/imovel[/:imovel_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Imovel\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.faleconosco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/faleconosco[/:faleconosco_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Faleconosco\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.chaves' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/chaves[/:chaves_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Chaves\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.achadosperdidos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/achadosperdidos[/:achadosperdidos_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Achadosperdidos\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.banco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/banco[/:banco_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Banco\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.animal' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/animal[/:animal_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Animal\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.fabricante' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/fabricante[/:fabricante_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.especie' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/especie[/:especie_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Especie\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.raca' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/raca[/:raca_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Raca\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.avaliacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/avaliacao[/:avaliacao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Avaliacao\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.orgao-expedidor' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/orgao_expedidor[/:orgao_expedidor_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.upload' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/upload[/:upload_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Upload\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.historico' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/historico[/:historico_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Historico\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.movimento' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/movimento[/:movimento_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Movimento\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.contacorrente' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contacorrente[/:contacorrente_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Contacorrente\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.tipo-multa-notificacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_multa_notificacao[/:tipo_multa_notificacao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.veiculomorador' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/veiculomorador[/:veiculomorador_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Veiculomorador\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.morador' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/morador[/:morador_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Morador\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.documentomorador' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/documentomorador[/:documentomorador_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Documentomorador\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.documentofuncionario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/documentofuncionario[/:documentofuncionario_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Documentofuncionario\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.consumogas' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/consumogas[/:consumogas_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Consumogas\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.leituragas' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/leituragas[/:leituragas_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Leituragas\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.multa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/multa[/:multa_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Multa\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.multaveiculo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/multaveiculo[/:multaveiculo_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Multaveiculo\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.modeloveiculo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/modeloveiculo[/:modeloveiculo_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Modeloveiculo\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.telefoneproprietario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/telefoneproprietario[/:telefoneproprietario_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Telefoneproprietario\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.multanotificacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/multanotificacao[/:multanotificacao_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Multanotificacao\\Controller',
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
            'sindico-amigo.rest.cbo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cbo[/:cbo_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Cbo\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.segusers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/segusers[/:segusers_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Segusers\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.seg-groups' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/seg_groups[/:seg_groups_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller',
                    ],
                ],
            ],
            'sindico-amigo.rest.bloqueioperiodo' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/bloqueioperiodo[/:bloqueioperiodo_id]',
                    'defaults' => [
                        'controller' => 'SindicoAmigo\\V1\\Rest\\Bloqueioperiodo\\Controller',
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
            4 => 'sindico-amigo.rest.tipo-conta',
            5 => 'sindico-amigo.rest.condominio',
            6 => 'sindico-amigo.rest.pessoa',
            7 => 'sindico-amigo.rest.perfil',
            8 => 'sindico-amigo.rest.tipo-perfil',
            9 => 'sindico-amigo.rest.tipo-pessoa',
            10 => 'sindico-amigo.rest.tipo-situacao',
            11 => 'sindico-amigo.rest.tipo-grupo-perfil',
            12 => 'sindico-amigo.rest.tipo-visitante',
            13 => 'sindico-amigo.rest.tipo-upload',
            14 => 'sindico-amigo.rest.tipo-situacao-imovel',
            15 => 'sindico-amigo.rest.tipo-receita',
            16 => 'sindico-amigo.rest.tipo-prestador-servico',
            17 => 'sindico-amigo.rest.tipo-ocorrencia',
            18 => 'sindico-amigo.rest.tipo-movimento',
            19 => 'sindico-amigo.rest.tipo-documento',
            20 => 'sindico-amigo.rest.tipo-dependente',
            21 => 'sindico-amigo.rest.tipo-chaves',
            22 => 'sindico-amigo.rest.tipo-area',
            23 => 'sindico-amigo.rest.tipo-agenda',
            24 => 'sindico-amigo.rest.proprietario',
            25 => 'sindico-amigo.rest.funcionarios',
            26 => 'sindico-amigo.rest.visitante',
            27 => 'sindico-amigo.rest.area-pai',
            28 => 'sindico-amigo.rest.setor-garagem',
            29 => 'sindico-amigo.rest.termo',
            30 => 'sindico-amigo.rest.restricao',
            31 => 'sindico-amigo.rest.garagem',
            32 => 'sindico-amigo.rest.imagem',
            33 => 'sindico-amigo.rest.prestadorservico',
            34 => 'sindico-amigo.rest.comunicacao',
            35 => 'sindico-amigo.rest.anuncio',
            36 => 'sindico-amigo.rest.correspondencia',
            37 => 'sindico-amigo.rest.reserva',
            38 => 'sindico-amigo.rest.ocorrenciamorador',
            39 => 'sindico-amigo.rest.ocorrenciaporteiro',
            40 => 'sindico-amigo.rest.inadimplentes',
            41 => 'sindico-amigo.rest.aviso',
            42 => 'sindico-amigo.rest.agendacompromisso',
            43 => 'sindico-amigo.rest.bloco',
            44 => 'sindico-amigo.rest.imovel',
            45 => 'sindico-amigo.rest.faleconosco',
            46 => 'sindico-amigo.rest.chaves',
            47 => 'sindico-amigo.rest.achadosperdidos',
            48 => 'sindico-amigo.rest.banco',
            49 => 'sindico-amigo.rest.animal',
            50 => 'sindico-amigo.rest.fabricante',
            52 => 'sindico-amigo.rest.especie',
            53 => 'sindico-amigo.rest.raca',
            54 => 'sindico-amigo.rest.avaliacao',
            55 => 'sindico-amigo.rest.orgao-expedidor',
            56 => 'sindico-amigo.rest.upload',
            57 => 'sindico-amigo.rest.historico',
            58 => 'sindico-amigo.rest.movimento',
            59 => 'sindico-amigo.rest.contacorrente',
            60 => 'sindico-amigo.rest.tipo-multa-notificacao',
            61 => 'sindico-amigo.rest.veiculomorador',
            62 => 'sindico-amigo.rest.morador',
            63 => 'sindico-amigo.rest.documentomorador',
            64 => 'sindico-amigo.rest.documentofuncionario',
            65 => 'sindico-amigo.rest.consumogas',
            66 => 'sindico-amigo.rest.leituragas',
            67 => 'sindico-amigo.rest.multa',
            68 => 'sindico-amigo.rest.multaveiculo',
            69 => 'sindico-amigo.rest.modeloveiculo',
            70 => 'sindico-amigo.rest.telefoneproprietario',
            71 => 'sindico-amigo.rest.multanotificacao',
            72 => 'sindico-amigo.rest.configuracao',
            74 => 'sindico-amigo.rest.cbo',
            75 => 'sindico-amigo.rest.segusers',
            76 => 'sindico-amigo.rest.seg-groups',
            77 => 'sindico-amigo.rest.bloqueioperiodo',
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
                2 => 'DELETE',
                3 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumCollection::class,
            'service_name' => 'areacomum',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoConta\\TipoContaResource',
            'route_name' => 'sindico-amigo.rest.tipo-conta',
            'route_identifier_name' => 'tipo_conta_id',
            'collection_name' => 'tipo_conta',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoConta\TipoContaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoConta\TipoContaCollection::class,
            'service_name' => 'tipo_conta',
        ],
        'SindicoAmigo\\V1\\Rest\\Condominio\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Condominio\CondominioResource::class,
            'route_name' => 'sindico-amigo.rest.condominio',
            'route_identifier_name' => 'condominio_id',
            'collection_name' => 'condominio',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Condominio\CondominioEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Condominio\CondominioCollection::class,
            'service_name' => 'condominio',
        ],
        'SindicoAmigo\\V1\\Rest\\Pessoa\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Pessoa\PessoaResource::class,
            'route_name' => 'sindico-amigo.rest.pessoa',
            'route_identifier_name' => 'pessoa_id',
            'collection_name' => 'pessoa',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Pessoa\PessoaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Pessoa\PessoaCollection::class,
            'service_name' => 'pessoa',
        ],
        'SindicoAmigo\\V1\\Rest\\Perfil\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Perfil\PerfilResource::class,
            'route_name' => 'sindico-amigo.rest.perfil',
            'route_identifier_name' => 'perfil_id',
            'collection_name' => 'perfil',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Perfil\PerfilEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Perfil\PerfilCollection::class,
            'service_name' => 'perfil',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoPerfil\\TipoPerfilResource',
            'route_name' => 'sindico-amigo.rest.tipo-perfil',
            'route_identifier_name' => 'tipo_perfil_id',
            'collection_name' => 'tipo_perfil',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoPerfil\TipoPerfilEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoPerfil\TipoPerfilCollection::class,
            'service_name' => 'tipo_perfil',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoPessoa\\TipoPessoaResource',
            'route_name' => 'sindico-amigo.rest.tipo-pessoa',
            'route_identifier_name' => 'tipo_pessoa_id',
            'collection_name' => 'tipo_pessoa',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoPessoa\TipoPessoaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoPessoa\TipoPessoaCollection::class,
            'service_name' => 'tipo_pessoa',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoSituacao\\TipoSituacaoResource',
            'route_name' => 'sindico-amigo.rest.tipo-situacao',
            'route_identifier_name' => 'tipo_situacao_id',
            'collection_name' => 'tipo_situacao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoSituacao\TipoSituacaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoSituacao\TipoSituacaoCollection::class,
            'service_name' => 'tipo_situacao',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\TipoGrupoPerfilResource',
            'route_name' => 'sindico-amigo.rest.tipo-grupo-perfil',
            'route_identifier_name' => 'tipo_grupo_perfil_id',
            'collection_name' => 'tipo_grupo_perfil',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoGrupoPerfil\TipoGrupoPerfilEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoGrupoPerfil\TipoGrupoPerfilCollection::class,
            'service_name' => 'tipo_grupo_perfil',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoVisitante\\TipoVisitanteResource',
            'route_name' => 'sindico-amigo.rest.tipo-visitante',
            'route_identifier_name' => 'tipo_visitante_id',
            'collection_name' => 'tipo_visitante',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoVisitante\TipoVisitanteEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoVisitante\TipoVisitanteCollection::class,
            'service_name' => 'tipo_visitante',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoUpload\\TipoUploadResource',
            'route_name' => 'sindico-amigo.rest.tipo-upload',
            'route_identifier_name' => 'tipo_upload_id',
            'collection_name' => 'tipo_upload',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoUpload\TipoUploadEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoUpload\TipoUploadCollection::class,
            'service_name' => 'tipo_upload',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\TipoSituacaoImovelResource',
            'route_name' => 'sindico-amigo.rest.tipo-situacao-imovel',
            'route_identifier_name' => 'tipo_situacao_imovel_id',
            'collection_name' => 'tipo_situacao_imovel',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoSituacaoImovel\TipoSituacaoImovelEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoSituacaoImovel\TipoSituacaoImovelCollection::class,
            'service_name' => 'tipo_situacao_imovel',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoReceita\\TipoReceitaResource',
            'route_name' => 'sindico-amigo.rest.tipo-receita',
            'route_identifier_name' => 'tipo_receita_id',
            'collection_name' => 'tipo_receita',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoReceita\TipoReceitaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoReceita\TipoReceitaCollection::class,
            'service_name' => 'tipo_receita',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\TipoPrestadorServicoResource',
            'route_name' => 'sindico-amigo.rest.tipo-prestador-servico',
            'route_identifier_name' => 'tipo_prestador_servico_id',
            'collection_name' => 'tipo_prestador_servico',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoPrestadorServico\TipoPrestadorServicoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoPrestadorServico\TipoPrestadorServicoCollection::class,
            'service_name' => 'tipo_prestador_servico',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\TipoOcorrenciaResource',
            'route_name' => 'sindico-amigo.rest.tipo-ocorrencia',
            'route_identifier_name' => 'tipo_ocorrencia_id',
            'collection_name' => 'tipo_ocorrencia',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoOcorrencia\TipoOcorrenciaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoOcorrencia\TipoOcorrenciaCollection::class,
            'service_name' => 'tipo_ocorrencia',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoMovimento\\TipoMovimentoResource',
            'route_name' => 'sindico-amigo.rest.tipo-movimento',
            'route_identifier_name' => 'tipo_movimento_id',
            'collection_name' => 'tipo_movimento',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoMovimento\TipoMovimentoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoMovimento\TipoMovimentoCollection::class,
            'service_name' => 'tipo_movimento',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoDocumento\\TipoDocumentoResource',
            'route_name' => 'sindico-amigo.rest.tipo-documento',
            'route_identifier_name' => 'tipo_documento_id',
            'collection_name' => 'tipo_documento',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoDocumento\TipoDocumentoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoDocumento\TipoDocumentoCollection::class,
            'service_name' => 'tipo_documento',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoDependente\\TipoDependenteResource',
            'route_name' => 'sindico-amigo.rest.tipo-dependente',
            'route_identifier_name' => 'tipo_dependente_id',
            'collection_name' => 'tipo_dependente',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoDependente\TipoDependenteEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoDependente\TipoDependenteCollection::class,
            'service_name' => 'tipo_dependente',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoChaves\\TipoChavesResource',
            'route_name' => 'sindico-amigo.rest.tipo-chaves',
            'route_identifier_name' => 'tipo_chaves_id',
            'collection_name' => 'tipo_chaves',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoChaves\TipoChavesEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoChaves\TipoChavesCollection::class,
            'service_name' => 'tipo_chaves',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoArea\\TipoAreaResource',
            'route_name' => 'sindico-amigo.rest.tipo-area',
            'route_identifier_name' => 'tipo_area_id',
            'collection_name' => 'tipo_area',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoArea\TipoAreaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoArea\TipoAreaCollection::class,
            'service_name' => 'tipo_area',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoAgenda\\TipoAgendaResource',
            'route_name' => 'sindico-amigo.rest.tipo-agenda',
            'route_identifier_name' => 'tipo_agenda_id',
            'collection_name' => 'tipo_agenda',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoAgenda\TipoAgendaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoAgenda\TipoAgendaCollection::class,
            'service_name' => 'tipo_agenda',
        ],
        'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Proprietario\ProprietarioResource::class,
            'route_name' => 'sindico-amigo.rest.proprietario',
            'route_identifier_name' => 'proprietario_id',
            'collection_name' => 'proprietario',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Proprietario\ProprietarioEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Proprietario\ProprietarioCollection::class,
            'service_name' => 'proprietario',
        ],
        'SindicoAmigo\\V1\\Rest\\Funcionarios\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosResource::class,
            'route_name' => 'sindico-amigo.rest.funcionarios',
            'route_identifier_name' => 'funcionarios_id',
            'collection_name' => 'funcionarios',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosCollection::class,
            'service_name' => 'funcionarios',
        ],
        'SindicoAmigo\\V1\\Rest\\Visitante\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Visitante\VisitanteResource::class,
            'route_name' => 'sindico-amigo.rest.visitante',
            'route_identifier_name' => 'visitante_id',
            'collection_name' => 'visitante',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Visitante\VisitanteEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Visitante\VisitanteCollection::class,
            'service_name' => 'visitante',
        ],
        'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\AreaPai\\AreaPaiResource',
            'route_name' => 'sindico-amigo.rest.area-pai',
            'route_identifier_name' => 'area_pai_id',
            'collection_name' => 'area_pai',
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
            'entity_class' => \SindicoAmigo\V1\Rest\AreaPai\AreaPaiEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\AreaPai\AreaPaiCollection::class,
            'service_name' => 'area_pai',
        ],
        'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\SetorGaragem\\SetorGaragemResource',
            'route_name' => 'sindico-amigo.rest.setor-garagem',
            'route_identifier_name' => 'setor_garagem_id',
            'collection_name' => 'setor_garagem',
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
            'entity_class' => \SindicoAmigo\V1\Rest\SetorGaragem\SetorGaragemEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\SetorGaragem\SetorGaragemCollection::class,
            'service_name' => 'setor_garagem',
        ],
        'SindicoAmigo\\V1\\Rest\\Termo\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Termo\\TermoResource',
            'route_name' => 'sindico-amigo.rest.termo',
            'route_identifier_name' => 'termo_id',
            'collection_name' => 'termo',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Termo\TermoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Termo\TermoCollection::class,
            'service_name' => 'termo',
        ],
        'SindicoAmigo\\V1\\Rest\\Restricao\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Restricao\RestricaoResource::class,
            'route_name' => 'sindico-amigo.rest.restricao',
            'route_identifier_name' => 'restricao_id',
            'collection_name' => 'restricao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Restricao\RestricaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Restricao\RestricaoCollection::class,
            'service_name' => 'restricao',
        ],
        'SindicoAmigo\\V1\\Rest\\Garagem\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Garagem\GaragemResource::class,
            'route_name' => 'sindico-amigo.rest.garagem',
            'route_identifier_name' => 'garagem_id',
            'collection_name' => 'garagem',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Garagem\GaragemEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Garagem\GaragemCollection::class,
            'service_name' => 'garagem',
        ],
        'SindicoAmigo\\V1\\Rest\\Imagem\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Imagem\ImagemResource::class,
            'route_name' => 'sindico-amigo.rest.imagem',
            'route_identifier_name' => 'imagem_id',
            'collection_name' => 'imagem',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Imagem\ImagemEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Imagem\ImagemCollection::class,
            'service_name' => 'imagem',
        ],
        'SindicoAmigo\\V1\\Rest\\Prestadorservico\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoResource::class,
            'route_name' => 'sindico-amigo.rest.prestadorservico',
            'route_identifier_name' => 'prestadorservico_id',
            'collection_name' => 'prestadorservico',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoCollection::class,
            'service_name' => 'prestadorservico',
        ],
        'SindicoAmigo\\V1\\Rest\\Comunicacao\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoResource::class,
            'route_name' => 'sindico-amigo.rest.comunicacao',
            'route_identifier_name' => 'comunicacao_id',
            'collection_name' => 'comunicacao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoCollection::class,
            'service_name' => 'comunicacao',
        ],
        'SindicoAmigo\\V1\\Rest\\Anuncio\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Anuncio\AnuncioResource::class,
            'route_name' => 'sindico-amigo.rest.anuncio',
            'route_identifier_name' => 'anuncio_id',
            'collection_name' => 'anuncio',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Anuncio\AnuncioEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Anuncio\AnuncioCollection::class,
            'service_name' => 'anuncio',
        ],
        'SindicoAmigo\\V1\\Rest\\Correspondencia\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaResource::class,
            'route_name' => 'sindico-amigo.rest.correspondencia',
            'route_identifier_name' => 'correspondencia_id',
            'collection_name' => 'correspondencia',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaCollection::class,
            'service_name' => 'correspondencia',
        ],
        'SindicoAmigo\\V1\\Rest\\Reserva\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Reserva\ReservaResource::class,
            'route_name' => 'sindico-amigo.rest.reserva',
            'route_identifier_name' => 'reserva_id',
            'collection_name' => 'reserva',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Reserva\ReservaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Reserva\ReservaCollection::class,
            'service_name' => 'reserva',
        ],
        'SindicoAmigo\\V1\\Rest\\Ocorrenciamorador\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorResource::class,
            'route_name' => 'sindico-amigo.rest.ocorrenciamorador',
            'route_identifier_name' => 'ocorrenciamorador_id',
            'collection_name' => 'ocorrenciamorador',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorCollection::class,
            'service_name' => 'ocorrenciamorador',
        ],
        'SindicoAmigo\\V1\\Rest\\Ocorrenciaporteiro\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroResource::class,
            'route_name' => 'sindico-amigo.rest.ocorrenciaporteiro',
            'route_identifier_name' => 'ocorrenciaporteiro_id',
            'collection_name' => 'ocorrenciaporteiro',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroCollection::class,
            'service_name' => 'ocorrenciaporteiro',
        ],
        'SindicoAmigo\\V1\\Rest\\Inadimplentes\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesResource::class,
            'route_name' => 'sindico-amigo.rest.inadimplentes',
            'route_identifier_name' => 'inadimplentes_id',
            'collection_name' => 'inadimplentes',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesCollection::class,
            'service_name' => 'inadimplentes',
        ],
        'SindicoAmigo\\V1\\Rest\\Aviso\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Aviso\AvisoResource::class,
            'route_name' => 'sindico-amigo.rest.aviso',
            'route_identifier_name' => 'aviso_id',
            'collection_name' => 'aviso',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Aviso\AvisoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Aviso\AvisoCollection::class,
            'service_name' => 'aviso',
        ],
        'SindicoAmigo\\V1\\Rest\\Agendacompromisso\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoResource::class,
            'route_name' => 'sindico-amigo.rest.agendacompromisso',
            'route_identifier_name' => 'agendacompromisso_id',
            'collection_name' => 'agendacompromisso',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoCollection::class,
            'service_name' => 'agendacompromisso',
        ],
        'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Bloco\\BlocoResource',
            'route_name' => 'sindico-amigo.rest.bloco',
            'route_identifier_name' => 'bloco_id',
            'collection_name' => 'bloco',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
                3 => 'POST',
                4 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SindicoAmigo\V1\Rest\Bloco\BlocoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Bloco\BlocoCollection::class,
            'service_name' => 'bloco',
        ],
        'SindicoAmigo\\V1\\Rest\\Imovel\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Imovel\ImovelResource::class,
            'route_name' => 'sindico-amigo.rest.imovel',
            'route_identifier_name' => 'imovel_id',
            'collection_name' => 'imovel',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Imovel\ImovelEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Imovel\ImovelCollection::class,
            'service_name' => 'imovel',
        ],
        'SindicoAmigo\\V1\\Rest\\Faleconosco\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoResource::class,
            'route_name' => 'sindico-amigo.rest.faleconosco',
            'route_identifier_name' => 'faleconosco_id',
            'collection_name' => 'faleconosco',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoCollection::class,
            'service_name' => 'faleconosco',
        ],
        'SindicoAmigo\\V1\\Rest\\Chaves\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Chaves\ChavesResource::class,
            'route_name' => 'sindico-amigo.rest.chaves',
            'route_identifier_name' => 'chaves_id',
            'collection_name' => 'chaves',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Chaves\ChavesEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Chaves\ChavesCollection::class,
            'service_name' => 'chaves',
        ],
        'SindicoAmigo\\V1\\Rest\\Achadosperdidos\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosResource::class,
            'route_name' => 'sindico-amigo.rest.achadosperdidos',
            'route_identifier_name' => 'achadosperdidos_id',
            'collection_name' => 'achadosperdidos',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosCollection::class,
            'service_name' => 'achadosperdidos',
        ],
        'SindicoAmigo\\V1\\Rest\\Banco\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Banco\\BancoResource',
            'route_name' => 'sindico-amigo.rest.banco',
            'route_identifier_name' => 'banco_id',
            'collection_name' => 'banco',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Banco\BancoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Banco\BancoCollection::class,
            'service_name' => 'banco',
        ],
        'SindicoAmigo\\V1\\Rest\\Animal\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Animal\AnimalResource::class,
            'route_name' => 'sindico-amigo.rest.animal',
            'route_identifier_name' => 'animal_id',
            'collection_name' => 'animal',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Animal\AnimalEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Animal\AnimalCollection::class,
            'service_name' => 'animal',
        ],
        'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Fabricante\\FabricanteResource',
            'route_name' => 'sindico-amigo.rest.fabricante',
            'route_identifier_name' => 'fabricante_id',
            'collection_name' => 'fabricante',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Fabricante\FabricanteEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Fabricante\FabricanteCollection::class,
            'service_name' => 'fabricante',
        ],
        'SindicoAmigo\\V1\\Rest\\Especie\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Especie\\EspecieResource',
            'route_name' => 'sindico-amigo.rest.especie',
            'route_identifier_name' => 'especie_id',
            'collection_name' => 'especie',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Especie\EspecieEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Especie\EspecieCollection::class,
            'service_name' => 'especie',
        ],
        'SindicoAmigo\\V1\\Rest\\Raca\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Raca\\RacaResource',
            'route_name' => 'sindico-amigo.rest.raca',
            'route_identifier_name' => 'raca_id',
            'collection_name' => 'raca',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Raca\RacaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Raca\RacaCollection::class,
            'service_name' => 'raca',
        ],
        'SindicoAmigo\\V1\\Rest\\Avaliacao\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoResource::class,
            'route_name' => 'sindico-amigo.rest.avaliacao',
            'route_identifier_name' => 'avaliacao_id',
            'collection_name' => 'avaliacao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoCollection::class,
            'service_name' => 'avaliacao',
        ],
        'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\OrgaoExpedidorResource',
            'route_name' => 'sindico-amigo.rest.orgao-expedidor',
            'route_identifier_name' => 'orgao_expedidor_id',
            'collection_name' => 'orgao_expedidor',
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
            'entity_class' => \SindicoAmigo\V1\Rest\OrgaoExpedidor\OrgaoExpedidorEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\OrgaoExpedidor\OrgaoExpedidorCollection::class,
            'service_name' => 'orgao_expedidor',
        ],
        'SindicoAmigo\\V1\\Rest\\Upload\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Upload\UploadResource::class,
            'route_name' => 'sindico-amigo.rest.upload',
            'route_identifier_name' => 'upload_id',
            'collection_name' => 'upload',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Upload\UploadEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Upload\UploadCollection::class,
            'service_name' => 'upload',
        ],
        'SindicoAmigo\\V1\\Rest\\Historico\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Historico\HistoricoResource::class,
            'route_name' => 'sindico-amigo.rest.historico',
            'route_identifier_name' => 'historico_id',
            'collection_name' => 'historico',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Historico\HistoricoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Historico\HistoricoCollection::class,
            'service_name' => 'historico',
        ],
        'SindicoAmigo\\V1\\Rest\\Movimento\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Movimento\MovimentoResource::class,
            'route_name' => 'sindico-amigo.rest.movimento',
            'route_identifier_name' => 'movimento_id',
            'collection_name' => 'movimento',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Movimento\MovimentoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Movimento\MovimentoCollection::class,
            'service_name' => 'movimento',
        ],
        'SindicoAmigo\\V1\\Rest\\Contacorrente\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteResource::class,
            'route_name' => 'sindico-amigo.rest.contacorrente',
            'route_identifier_name' => 'contacorrente_id',
            'collection_name' => 'contacorrente',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteCollection::class,
            'service_name' => 'contacorrente',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\TipoMultaNotificacaoResource',
            'route_name' => 'sindico-amigo.rest.tipo-multa-notificacao',
            'route_identifier_name' => 'tipo_multa_notificacao_id',
            'collection_name' => 'tipo_multa_notificacao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\TipoMultaNotificacao\TipoMultaNotificacaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\TipoMultaNotificacao\TipoMultaNotificacaoCollection::class,
            'service_name' => 'tipo_multa_notificacao',
        ],
        'SindicoAmigo\\V1\\Rest\\Veiculomorador\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorResource::class,
            'route_name' => 'sindico-amigo.rest.veiculomorador',
            'route_identifier_name' => 'veiculomorador_id',
            'collection_name' => 'veiculomorador',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorCollection::class,
            'service_name' => 'veiculomorador',
        ],
        'SindicoAmigo\\V1\\Rest\\Morador\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Morador\MoradorResource::class,
            'route_name' => 'sindico-amigo.rest.morador',
            'route_identifier_name' => 'morador_id',
            'collection_name' => 'morador',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Morador\MoradorEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Morador\MoradorCollection::class,
            'service_name' => 'morador',
        ],
        'SindicoAmigo\\V1\\Rest\\Documentomorador\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorResource::class,
            'route_name' => 'sindico-amigo.rest.documentomorador',
            'route_identifier_name' => 'documentomorador_id',
            'collection_name' => 'documentomorador',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorCollection::class,
            'service_name' => 'documentomorador',
        ],
        'SindicoAmigo\\V1\\Rest\\Documentofuncionario\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioResource::class,
            'route_name' => 'sindico-amigo.rest.documentofuncionario',
            'route_identifier_name' => 'documentofuncionario_id',
            'collection_name' => 'documentofuncionario',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioCollection::class,
            'service_name' => 'documentofuncionario',
        ],
        'SindicoAmigo\\V1\\Rest\\Consumogas\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Consumogas\ConsumogasResource::class,
            'route_name' => 'sindico-amigo.rest.consumogas',
            'route_identifier_name' => 'consumogas_id',
            'collection_name' => 'consumogas',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Consumogas\ConsumogasEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Consumogas\ConsumogasCollection::class,
            'service_name' => 'consumogas',
        ],
        'SindicoAmigo\\V1\\Rest\\Leituragas\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Leituragas\LeituragasResource::class,
            'route_name' => 'sindico-amigo.rest.leituragas',
            'route_identifier_name' => 'leituragas_id',
            'collection_name' => 'leituragas',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Leituragas\LeituragasEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Leituragas\LeituragasCollection::class,
            'service_name' => 'leituragas',
        ],
        'SindicoAmigo\\V1\\Rest\\Multa\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Multa\MultaResource::class,
            'route_name' => 'sindico-amigo.rest.multa',
            'route_identifier_name' => 'multa_id',
            'collection_name' => 'multa',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Multa\MultaEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Multa\MultaCollection::class,
            'service_name' => 'multa',
        ],
        'SindicoAmigo\\V1\\Rest\\Multaveiculo\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoResource::class,
            'route_name' => 'sindico-amigo.rest.multaveiculo',
            'route_identifier_name' => 'multaveiculo_id',
            'collection_name' => 'multaveiculo',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoCollection::class,
            'service_name' => 'multaveiculo',
        ],
        'SindicoAmigo\\V1\\Rest\\Modeloveiculo\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoResource::class,
            'route_name' => 'sindico-amigo.rest.modeloveiculo',
            'route_identifier_name' => 'modeloveiculo_id',
            'collection_name' => 'modeloveiculo',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoCollection::class,
            'service_name' => 'modeloveiculo',
        ],
        'SindicoAmigo\\V1\\Rest\\Telefoneproprietario\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioResource::class,
            'route_name' => 'sindico-amigo.rest.telefoneproprietario',
            'route_identifier_name' => 'telefoneproprietario_id',
            'collection_name' => 'telefoneproprietario',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioCollection::class,
            'service_name' => 'telefoneproprietario',
        ],
        'SindicoAmigo\\V1\\Rest\\Multanotificacao\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoResource::class,
            'route_name' => 'sindico-amigo.rest.multanotificacao',
            'route_identifier_name' => 'multanotificacao_id',
            'collection_name' => 'multanotificacao',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoCollection::class,
            'service_name' => 'multanotificacao',
        ],
        'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Configuracao\\ConfiguracaoResource',
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
        'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\Cbo\\CboResource',
            'route_name' => 'sindico-amigo.rest.cbo',
            'route_identifier_name' => 'cbo_id',
            'collection_name' => 'cbo',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Cbo\CboEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Cbo\CboCollection::class,
            'service_name' => 'cbo',
        ],
        'SindicoAmigo\\V1\\Rest\\Segusers\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Segusers\SegusersResource::class,
            'route_name' => 'sindico-amigo.rest.segusers',
            'route_identifier_name' => 'segusers_id',
            'collection_name' => 'segusers',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Segusers\SegusersEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Segusers\SegusersCollection::class,
            'service_name' => 'segusers',
        ],
        'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => [
            'listener' => 'SindicoAmigo\\V1\\Rest\\SegGroups\\SegGroupsResource',
            'route_name' => 'sindico-amigo.rest.seg-groups',
            'route_identifier_name' => 'seg_groups_id',
            'collection_name' => 'seg_groups',
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
            'entity_class' => \SindicoAmigo\V1\Rest\SegGroups\SegGroupsEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\SegGroups\SegGroupsCollection::class,
            'service_name' => 'seg_groups',
        ],
        'SindicoAmigo\\V1\\Rest\\Bloqueioperiodo\\Controller' => [
            'listener' => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoResource::class,
            'route_name' => 'sindico-amigo.rest.bloqueioperiodo',
            'route_identifier_name' => 'bloqueioperiodo_id',
            'collection_name' => 'bloqueioperiodo',
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
            'entity_class' => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoEntity::class,
            'collection_class' => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoCollection::class,
            'service_name' => 'bloqueioperiodo',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'SindicoAmigo\\V1\\Rest\\TipoFuncionarios\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoUser\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Condominio\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Pessoa\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Perfil\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Funcionarios\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Visitante\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Termo\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Restricao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Garagem\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Imagem\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Prestadorservico\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Comunicacao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Anuncio\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Correspondencia\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Reserva\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Ocorrenciamorador\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Ocorrenciaporteiro\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Inadimplentes\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Aviso\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Agendacompromisso\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Imovel\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Faleconosco\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Chaves\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Achadosperdidos\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Banco\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Animal\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Especie\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Raca\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Avaliacao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Upload\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Historico\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Movimento\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Contacorrente\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Veiculomorador\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Morador\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Documentomorador\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Documentofuncionario\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Consumogas\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Leituragas\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Multa\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Multaveiculo\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Modeloveiculo\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Telefoneproprietario\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Multanotificacao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Segusers\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => 'HalJson',
            'SindicoAmigo\\V1\\Rest\\Bloqueioperiodo\\Controller' => 'HalJson',
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
            'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Condominio\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Pessoa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Perfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Funcionarios\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Visitante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Termo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Restricao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Garagem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Imagem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Prestadorservico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Comunicacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Anuncio\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Correspondencia\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Reserva\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Ocorrenciamorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Ocorrenciaporteiro\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Inadimplentes\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Aviso\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Agendacompromisso\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Imovel\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Faleconosco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Chaves\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Achadosperdidos\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Banco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Animal\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Especie\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Raca\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Avaliacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Upload\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Historico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Movimento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Contacorrente\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Veiculomorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Morador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Documentomorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Documentofuncionario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Consumogas\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Leituragas\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multaveiculo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Modeloveiculo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Telefoneproprietario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multanotificacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Segusers\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Bloqueioperiodo\\Controller' => [
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
            'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Condominio\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Pessoa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Perfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Funcionarios\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Visitante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Termo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Restricao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Garagem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Imagem\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Prestadorservico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Comunicacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Anuncio\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Correspondencia\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Reserva\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Ocorrenciamorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Ocorrenciaporteiro\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Inadimplentes\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Aviso\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Agendacompromisso\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Imovel\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Faleconosco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Chaves\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Achadosperdidos\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Banco\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Animal\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Especie\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Raca\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Avaliacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Upload\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Historico\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Movimento\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Contacorrente\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Veiculomorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Morador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Documentomorador\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Documentofuncionario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Consumogas\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Leituragas\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multa\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multaveiculo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Modeloveiculo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Telefoneproprietario\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Multanotificacao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Segusers\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => [
                0 => 'application/vnd.sindico-amigo.v1+json',
                1 => 'application/json',
            ],
            'SindicoAmigo\\V1\\Rest\\Bloqueioperiodo\\Controller' => [
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
                'entity_identifier_name' => 'id_tipo_funcionarios',
                'route_name' => 'sindico-amigo.rest.tipo-user',
                'route_identifier_name' => 'tipo_user_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoUser\TipoUserCollection::class => [
                'entity_identifier_name' => 'id_tipo_funcionarios',
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
            \SindicoAmigo\V1\Rest\TipoConta\TipoContaEntity::class => [
                'entity_identifier_name' => 'id_tipo_conta',
                'route_name' => 'sindico-amigo.rest.tipo-conta',
                'route_identifier_name' => 'tipo_conta_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoConta\TipoContaCollection::class => [
                'entity_identifier_name' => 'id_tipo_conta',
                'route_name' => 'sindico-amigo.rest.tipo-conta',
                'route_identifier_name' => 'tipo_conta_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Condominio\CondominioEntity::class => [
                'entity_identifier_name' => 'id_condominio',
                'route_name' => 'sindico-amigo.rest.condominio',
                'route_identifier_name' => 'condominio_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Condominio\CondominioCollection::class => [
                'entity_identifier_name' => 'id_condominio',
                'route_name' => 'sindico-amigo.rest.condominio',
                'route_identifier_name' => 'condominio_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Pessoa\PessoaEntity::class => [
                'entity_identifier_name' => 'id_pessoa',
                'route_name' => 'sindico-amigo.rest.pessoa',
                'route_identifier_name' => 'pessoa_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Pessoa\PessoaCollection::class => [
                'entity_identifier_name' => 'id_pessoa',
                'route_name' => 'sindico-amigo.rest.pessoa',
                'route_identifier_name' => 'pessoa_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Perfil\PerfilEntity::class => [
                'entity_identifier_name' => 'id_perfil',
                'route_name' => 'sindico-amigo.rest.perfil',
                'route_identifier_name' => 'perfil_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Perfil\PerfilCollection::class => [
                'entity_identifier_name' => 'id_perfil',
                'route_name' => 'sindico-amigo.rest.perfil',
                'route_identifier_name' => 'perfil_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoPerfil\TipoPerfilEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-perfil',
                'route_identifier_name' => 'tipo_perfil_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoPerfil\TipoPerfilCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-perfil',
                'route_identifier_name' => 'tipo_perfil_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoPessoa\TipoPessoaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-pessoa',
                'route_identifier_name' => 'tipo_pessoa_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoPessoa\TipoPessoaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-pessoa',
                'route_identifier_name' => 'tipo_pessoa_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoSituacao\TipoSituacaoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-situacao',
                'route_identifier_name' => 'tipo_situacao_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoSituacao\TipoSituacaoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-situacao',
                'route_identifier_name' => 'tipo_situacao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoGrupoPerfil\TipoGrupoPerfilEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-grupo-perfil',
                'route_identifier_name' => 'tipo_grupo_perfil_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoGrupoPerfil\TipoGrupoPerfilCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-grupo-perfil',
                'route_identifier_name' => 'tipo_grupo_perfil_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoVisitante\TipoVisitanteEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-visitante',
                'route_identifier_name' => 'tipo_visitante_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoVisitante\TipoVisitanteCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-visitante',
                'route_identifier_name' => 'tipo_visitante_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoUpload\TipoUploadEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-upload',
                'route_identifier_name' => 'tipo_upload_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoUpload\TipoUploadCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-upload',
                'route_identifier_name' => 'tipo_upload_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoSituacaoImovel\TipoSituacaoImovelEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-situacao-imovel',
                'route_identifier_name' => 'tipo_situacao_imovel_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoSituacaoImovel\TipoSituacaoImovelCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-situacao-imovel',
                'route_identifier_name' => 'tipo_situacao_imovel_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoReceita\TipoReceitaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-receita',
                'route_identifier_name' => 'tipo_receita_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoReceita\TipoReceitaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-receita',
                'route_identifier_name' => 'tipo_receita_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoPrestadorServico\TipoPrestadorServicoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-prestador-servico',
                'route_identifier_name' => 'tipo_prestador_servico_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoPrestadorServico\TipoPrestadorServicoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-prestador-servico',
                'route_identifier_name' => 'tipo_prestador_servico_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoOcorrencia\TipoOcorrenciaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-ocorrencia',
                'route_identifier_name' => 'tipo_ocorrencia_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoOcorrencia\TipoOcorrenciaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-ocorrencia',
                'route_identifier_name' => 'tipo_ocorrencia_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoMovimento\TipoMovimentoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-movimento',
                'route_identifier_name' => 'tipo_movimento_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoMovimento\TipoMovimentoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-movimento',
                'route_identifier_name' => 'tipo_movimento_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoDocumento\TipoDocumentoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-documento',
                'route_identifier_name' => 'tipo_documento_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoDocumento\TipoDocumentoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-documento',
                'route_identifier_name' => 'tipo_documento_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoDependente\TipoDependenteEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-dependente',
                'route_identifier_name' => 'tipo_dependente_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoDependente\TipoDependenteCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-dependente',
                'route_identifier_name' => 'tipo_dependente_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoChaves\TipoChavesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-chaves',
                'route_identifier_name' => 'tipo_chaves_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoChaves\TipoChavesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-chaves',
                'route_identifier_name' => 'tipo_chaves_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoArea\TipoAreaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-area',
                'route_identifier_name' => 'tipo_area_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoArea\TipoAreaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-area',
                'route_identifier_name' => 'tipo_area_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoAgenda\TipoAgendaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-agenda',
                'route_identifier_name' => 'tipo_agenda_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoAgenda\TipoAgendaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-agenda',
                'route_identifier_name' => 'tipo_agenda_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Proprietario\ProprietarioEntity::class => [
                'entity_identifier_name' => 'id_proprietario',
                'route_name' => 'sindico-amigo.rest.proprietario',
                'route_identifier_name' => 'proprietario_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Proprietario\ProprietarioCollection::class => [
                'entity_identifier_name' => 'id_proprietario',
                'route_name' => 'sindico-amigo.rest.proprietario',
                'route_identifier_name' => 'proprietario_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosEntity::class => [
                'entity_identifier_name' => 'id_funcionarios',
                'route_name' => 'sindico-amigo.rest.funcionarios',
                'route_identifier_name' => 'funcionarios_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosCollection::class => [
                'entity_identifier_name' => 'id_funcionarios',
                'route_name' => 'sindico-amigo.rest.funcionarios',
                'route_identifier_name' => 'funcionarios_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Visitante\VisitanteEntity::class => [
                'entity_identifier_name' => 'id_visitante',
                'route_name' => 'sindico-amigo.rest.visitante',
                'route_identifier_name' => 'visitante_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Visitante\VisitanteCollection::class => [
                'entity_identifier_name' => 'id_visitante',
                'route_name' => 'sindico-amigo.rest.visitante',
                'route_identifier_name' => 'visitante_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\AreaPai\AreaPaiEntity::class => [
                'entity_identifier_name' => 'id_area_pai',
                'route_name' => 'sindico-amigo.rest.area-pai',
                'route_identifier_name' => 'area_pai_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\AreaPai\AreaPaiCollection::class => [
                'entity_identifier_name' => 'id_area_pai',
                'route_name' => 'sindico-amigo.rest.area-pai',
                'route_identifier_name' => 'area_pai_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\SetorGaragem\SetorGaragemEntity::class => [
                'entity_identifier_name' => 'id_setor',
                'route_name' => 'sindico-amigo.rest.setor-garagem',
                'route_identifier_name' => 'setor_garagem_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\SetorGaragem\SetorGaragemCollection::class => [
                'entity_identifier_name' => 'id_setor',
                'route_name' => 'sindico-amigo.rest.setor-garagem',
                'route_identifier_name' => 'setor_garagem_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Termo\TermoEntity::class => [
                'entity_identifier_name' => 'id_termo',
                'route_name' => 'sindico-amigo.rest.termo',
                'route_identifier_name' => 'termo_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Termo\TermoCollection::class => [
                'entity_identifier_name' => 'id_termo',
                'route_name' => 'sindico-amigo.rest.termo',
                'route_identifier_name' => 'termo_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Restricao\RestricaoEntity::class => [
                'entity_identifier_name' => 'id_restricao',
                'route_name' => 'sindico-amigo.rest.restricao',
                'route_identifier_name' => 'restricao_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Restricao\RestricaoCollection::class => [
                'entity_identifier_name' => 'id_restricao',
                'route_name' => 'sindico-amigo.rest.restricao',
                'route_identifier_name' => 'restricao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Garagem\GaragemEntity::class => [
                'entity_identifier_name' => 'id_garagem',
                'route_name' => 'sindico-amigo.rest.garagem',
                'route_identifier_name' => 'garagem_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Garagem\GaragemCollection::class => [
                'entity_identifier_name' => 'id_garagem',
                'route_name' => 'sindico-amigo.rest.garagem',
                'route_identifier_name' => 'garagem_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Imagem\ImagemEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.imagem',
                'route_identifier_name' => 'imagem_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Imagem\ImagemCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.imagem',
                'route_identifier_name' => 'imagem_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoEntity::class => [
                'entity_identifier_name' => 'id_prestador_servico',
                'route_name' => 'sindico-amigo.rest.prestadorservico',
                'route_identifier_name' => 'prestadorservico_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoCollection::class => [
                'entity_identifier_name' => 'id_prestador_servico',
                'route_name' => 'sindico-amigo.rest.prestadorservico',
                'route_identifier_name' => 'prestadorservico_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoEntity::class => [
                'entity_identifier_name' => 'id_comunicacao',
                'route_name' => 'sindico-amigo.rest.comunicacao',
                'route_identifier_name' => 'comunicacao_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoCollection::class => [
                'entity_identifier_name' => 'id_comunicacao',
                'route_name' => 'sindico-amigo.rest.comunicacao',
                'route_identifier_name' => 'comunicacao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Anuncio\AnuncioEntity::class => [
                'entity_identifier_name' => 'id_anuncio',
                'route_name' => 'sindico-amigo.rest.anuncio',
                'route_identifier_name' => 'anuncio_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Anuncio\AnuncioCollection::class => [
                'entity_identifier_name' => 'id_anuncio',
                'route_name' => 'sindico-amigo.rest.anuncio',
                'route_identifier_name' => 'anuncio_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaEntity::class => [
                'entity_identifier_name' => 'id_comunicacao',
                'route_name' => 'sindico-amigo.rest.correspondencia',
                'route_identifier_name' => 'correspondencia_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaCollection::class => [
                'entity_identifier_name' => 'id_comunicacao',
                'route_name' => 'sindico-amigo.rest.correspondencia',
                'route_identifier_name' => 'correspondencia_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Reserva\ReservaEntity::class => [
                'entity_identifier_name' => 'id_cadastro_reserva_area_comum',
                'route_name' => 'sindico-amigo.rest.reserva',
                'route_identifier_name' => 'reserva_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Reserva\ReservaCollection::class => [
                'entity_identifier_name' => 'id_cadastro_reserva_area_comum',
                'route_name' => 'sindico-amigo.rest.reserva',
                'route_identifier_name' => 'reserva_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorEntity::class => [
                'entity_identifier_name' => 'id_ocorrencia_morador',
                'route_name' => 'sindico-amigo.rest.ocorrenciamorador',
                'route_identifier_name' => 'ocorrenciamorador_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorCollection::class => [
                'entity_identifier_name' => 'id_ocorrencia_morador',
                'route_name' => 'sindico-amigo.rest.ocorrenciamorador',
                'route_identifier_name' => 'ocorrenciamorador_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroEntity::class => [
                'entity_identifier_name' => 'id_ocorrencia_porteiro',
                'route_name' => 'sindico-amigo.rest.ocorrenciaporteiro',
                'route_identifier_name' => 'ocorrenciaporteiro_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroCollection::class => [
                'entity_identifier_name' => 'id_ocorrencia_porteiro',
                'route_name' => 'sindico-amigo.rest.ocorrenciaporteiro',
                'route_identifier_name' => 'ocorrenciaporteiro_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesEntity::class => [
                'entity_identifier_name' => 'usuario',
                'route_name' => 'sindico-amigo.rest.inadimplentes',
                'route_identifier_name' => 'inadimplentes_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesCollection::class => [
                'entity_identifier_name' => 'usuario',
                'route_name' => 'sindico-amigo.rest.inadimplentes',
                'route_identifier_name' => 'inadimplentes_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Aviso\AvisoEntity::class => [
                'entity_identifier_name' => 'id_aviso',
                'route_name' => 'sindico-amigo.rest.aviso',
                'route_identifier_name' => 'aviso_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Aviso\AvisoCollection::class => [
                'entity_identifier_name' => 'id_aviso',
                'route_name' => 'sindico-amigo.rest.aviso',
                'route_identifier_name' => 'aviso_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoEntity::class => [
                'entity_identifier_name' => 'id_agenda',
                'route_name' => 'sindico-amigo.rest.agendacompromisso',
                'route_identifier_name' => 'agendacompromisso_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoCollection::class => [
                'entity_identifier_name' => 'id_agenda',
                'route_name' => 'sindico-amigo.rest.agendacompromisso',
                'route_identifier_name' => 'agendacompromisso_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Bloco\BlocoEntity::class => [
                'entity_identifier_name' => 'id_bloco',
                'route_name' => 'sindico-amigo.rest.bloco',
                'route_identifier_name' => 'bloco_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Bloco\BlocoCollection::class => [
                'entity_identifier_name' => 'id_bloco',
                'route_name' => 'sindico-amigo.rest.bloco',
                'route_identifier_name' => 'bloco_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Imovel\ImovelEntity::class => [
                'entity_identifier_name' => 'id_numero_imovel',
                'route_name' => 'sindico-amigo.rest.imovel',
                'route_identifier_name' => 'imovel_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Imovel\ImovelCollection::class => [
                'entity_identifier_name' => 'id_numero_imovel',
                'route_name' => 'sindico-amigo.rest.imovel',
                'route_identifier_name' => 'imovel_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoEntity::class => [
                'entity_identifier_name' => 'id_fale_conosco',
                'route_name' => 'sindico-amigo.rest.faleconosco',
                'route_identifier_name' => 'faleconosco_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoCollection::class => [
                'entity_identifier_name' => 'id_fale_conosco',
                'route_name' => 'sindico-amigo.rest.faleconosco',
                'route_identifier_name' => 'faleconosco_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Chaves\ChavesEntity::class => [
                'entity_identifier_name' => 'id_chaves',
                'route_name' => 'sindico-amigo.rest.chaves',
                'route_identifier_name' => 'chaves_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Chaves\ChavesCollection::class => [
                'entity_identifier_name' => 'id_chaves',
                'route_name' => 'sindico-amigo.rest.chaves',
                'route_identifier_name' => 'chaves_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosEntity::class => [
                'entity_identifier_name' => 'id_achados_perdidos',
                'route_name' => 'sindico-amigo.rest.achadosperdidos',
                'route_identifier_name' => 'achadosperdidos_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosCollection::class => [
                'entity_identifier_name' => 'id_achados_perdidos',
                'route_name' => 'sindico-amigo.rest.achadosperdidos',
                'route_identifier_name' => 'achadosperdidos_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Banco\BancoEntity::class => [
                'entity_identifier_name' => 'id_banco',
                'route_name' => 'sindico-amigo.rest.banco',
                'route_identifier_name' => 'banco_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Banco\BancoCollection::class => [
                'entity_identifier_name' => 'id_banco',
                'route_name' => 'sindico-amigo.rest.banco',
                'route_identifier_name' => 'banco_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Animal\AnimalEntity::class => [
                'entity_identifier_name' => 'id_animal',
                'route_name' => 'sindico-amigo.rest.animal',
                'route_identifier_name' => 'animal_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Animal\AnimalCollection::class => [
                'entity_identifier_name' => 'id_animal',
                'route_name' => 'sindico-amigo.rest.animal',
                'route_identifier_name' => 'animal_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Fabricante\FabricanteEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.fabricante',
                'route_identifier_name' => 'fabricante_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Fabricante\FabricanteCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.fabricante',
                'route_identifier_name' => 'fabricante_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Especie\EspecieEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.especie',
                'route_identifier_name' => 'especie_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Especie\EspecieCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.especie',
                'route_identifier_name' => 'especie_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Raca\RacaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.raca',
                'route_identifier_name' => 'raca_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Raca\RacaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.raca',
                'route_identifier_name' => 'raca_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoEntity::class => [
                'entity_identifier_name' => 'id_avaliacao',
                'route_name' => 'sindico-amigo.rest.avaliacao',
                'route_identifier_name' => 'avaliacao_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoCollection::class => [
                'entity_identifier_name' => 'id_avaliacao',
                'route_name' => 'sindico-amigo.rest.avaliacao',
                'route_identifier_name' => 'avaliacao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\OrgaoExpedidor\OrgaoExpedidorEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.orgao-expedidor',
                'route_identifier_name' => 'orgao_expedidor_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\OrgaoExpedidor\OrgaoExpedidorCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.orgao-expedidor',
                'route_identifier_name' => 'orgao_expedidor_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Upload\UploadEntity::class => [
                'entity_identifier_name' => 'id_upload',
                'route_name' => 'sindico-amigo.rest.upload',
                'route_identifier_name' => 'upload_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Upload\UploadCollection::class => [
                'entity_identifier_name' => 'id_upload',
                'route_name' => 'sindico-amigo.rest.upload',
                'route_identifier_name' => 'upload_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Historico\HistoricoEntity::class => [
                'entity_identifier_name' => 'id_historico',
                'route_name' => 'sindico-amigo.rest.historico',
                'route_identifier_name' => 'historico_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Historico\HistoricoCollection::class => [
                'entity_identifier_name' => 'id_historico',
                'route_name' => 'sindico-amigo.rest.historico',
                'route_identifier_name' => 'historico_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Movimento\MovimentoEntity::class => [
                'entity_identifier_name' => 'id_movimento',
                'route_name' => 'sindico-amigo.rest.movimento',
                'route_identifier_name' => 'movimento_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Movimento\MovimentoCollection::class => [
                'entity_identifier_name' => 'id_movimento',
                'route_name' => 'sindico-amigo.rest.movimento',
                'route_identifier_name' => 'movimento_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteEntity::class => [
                'entity_identifier_name' => 'nu_conta',
                'route_name' => 'sindico-amigo.rest.contacorrente',
                'route_identifier_name' => 'contacorrente_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteCollection::class => [
                'entity_identifier_name' => 'nu_conta',
                'route_name' => 'sindico-amigo.rest.contacorrente',
                'route_identifier_name' => 'contacorrente_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\TipoMultaNotificacao\TipoMultaNotificacaoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-multa-notificacao',
                'route_identifier_name' => 'tipo_multa_notificacao_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\TipoMultaNotificacao\TipoMultaNotificacaoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.tipo-multa-notificacao',
                'route_identifier_name' => 'tipo_multa_notificacao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorEntity::class => [
                'entity_identifier_name' => 'id_veiculo_morador',
                'route_name' => 'sindico-amigo.rest.veiculomorador',
                'route_identifier_name' => 'veiculomorador_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorCollection::class => [
                'entity_identifier_name' => 'id_veiculo_morador',
                'route_name' => 'sindico-amigo.rest.veiculomorador',
                'route_identifier_name' => 'veiculomorador_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Morador\MoradorEntity::class => [
                'entity_identifier_name' => 'id_morador',
                'route_name' => 'sindico-amigo.rest.morador',
                'route_identifier_name' => 'morador_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Morador\MoradorCollection::class => [
                'entity_identifier_name' => 'id_morador',
                'route_name' => 'sindico-amigo.rest.morador',
                'route_identifier_name' => 'morador_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorEntity::class => [
                'entity_identifier_name' => 'id_morador',
                'route_name' => 'sindico-amigo.rest.documentomorador',
                'route_identifier_name' => 'documentomorador_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorCollection::class => [
                'entity_identifier_name' => 'id_morador',
                'route_name' => 'sindico-amigo.rest.documentomorador',
                'route_identifier_name' => 'documentomorador_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioEntity::class => [
                'entity_identifier_name' => 'id_funcionarios',
                'route_name' => 'sindico-amigo.rest.documentofuncionario',
                'route_identifier_name' => 'documentofuncionario_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioCollection::class => [
                'entity_identifier_name' => 'id_funcionarios',
                'route_name' => 'sindico-amigo.rest.documentofuncionario',
                'route_identifier_name' => 'documentofuncionario_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Consumogas\ConsumogasEntity::class => [
                'entity_identifier_name' => 'id_consumo',
                'route_name' => 'sindico-amigo.rest.consumogas',
                'route_identifier_name' => 'consumogas_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Consumogas\ConsumogasCollection::class => [
                'entity_identifier_name' => 'id_consumo',
                'route_name' => 'sindico-amigo.rest.consumogas',
                'route_identifier_name' => 'consumogas_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Leituragas\LeituragasEntity::class => [
                'entity_identifier_name' => 'id_leitura',
                'route_name' => 'sindico-amigo.rest.leituragas',
                'route_identifier_name' => 'leituragas_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Leituragas\LeituragasCollection::class => [
                'entity_identifier_name' => 'id_leitura',
                'route_name' => 'sindico-amigo.rest.leituragas',
                'route_identifier_name' => 'leituragas_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Multa\MultaEntity::class => [
                'entity_identifier_name' => 'id_multa',
                'route_name' => 'sindico-amigo.rest.multa',
                'route_identifier_name' => 'multa_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Multa\MultaCollection::class => [
                'entity_identifier_name' => 'id_multa',
                'route_name' => 'sindico-amigo.rest.multa',
                'route_identifier_name' => 'multa_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoEntity::class => [
                'entity_identifier_name' => 'id_multa_veiculo',
                'route_name' => 'sindico-amigo.rest.multaveiculo',
                'route_identifier_name' => 'multaveiculo_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoCollection::class => [
                'entity_identifier_name' => 'id_multa_veiculo',
                'route_name' => 'sindico-amigo.rest.multaveiculo',
                'route_identifier_name' => 'multaveiculo_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoEntity::class => [
                'entity_identifier_name' => 'id_modelo_veiculo',
                'route_name' => 'sindico-amigo.rest.modeloveiculo',
                'route_identifier_name' => 'modeloveiculo_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoCollection::class => [
                'entity_identifier_name' => 'id_modelo_veiculo',
                'route_name' => 'sindico-amigo.rest.modeloveiculo',
                'route_identifier_name' => 'modeloveiculo_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioEntity::class => [
                'entity_identifier_name' => 'id_telefone_proprietario',
                'route_name' => 'sindico-amigo.rest.telefoneproprietario',
                'route_identifier_name' => 'telefoneproprietario_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioCollection::class => [
                'entity_identifier_name' => 'id_telefone_proprietario',
                'route_name' => 'sindico-amigo.rest.telefoneproprietario',
                'route_identifier_name' => 'telefoneproprietario_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoEntity::class => [
                'entity_identifier_name' => 'id_multa_notificacao',
                'route_name' => 'sindico-amigo.rest.multanotificacao',
                'route_identifier_name' => 'multanotificacao_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoCollection::class => [
                'entity_identifier_name' => 'id_multa_notificacao',
                'route_name' => 'sindico-amigo.rest.multanotificacao',
                'route_identifier_name' => 'multanotificacao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoEntity::class => [
                'entity_identifier_name' => 'id_configuracao',
                'route_name' => 'sindico-amigo.rest.configuracao',
                'route_identifier_name' => 'configuracao_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Configuracao\ConfiguracaoCollection::class => [
                'entity_identifier_name' => 'id_configuracao',
                'route_name' => 'sindico-amigo.rest.configuracao',
                'route_identifier_name' => 'configuracao_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Cbo\CboEntity::class => [
                'entity_identifier_name' => 'id_cbo',
                'route_name' => 'sindico-amigo.rest.cbo',
                'route_identifier_name' => 'cbo_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\Cbo\CboCollection::class => [
                'entity_identifier_name' => 'id_cbo',
                'route_name' => 'sindico-amigo.rest.cbo',
                'route_identifier_name' => 'cbo_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Segusers\SegusersEntity::class => [
                'entity_identifier_name' => 'login',
                'route_name' => 'sindico-amigo.rest.segusers',
                'route_identifier_name' => 'segusers_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Segusers\SegusersCollection::class => [
                'entity_identifier_name' => 'login',
                'route_name' => 'sindico-amigo.rest.segusers',
                'route_identifier_name' => 'segusers_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\SegGroups\SegGroupsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.seg-groups',
                'route_identifier_name' => 'seg_groups_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SindicoAmigo\V1\Rest\SegGroups\SegGroupsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'sindico-amigo.rest.seg-groups',
                'route_identifier_name' => 'seg_groups_id',
                'is_collection' => true,
            ],
            \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoEntity::class => [
                'entity_identifier_name' => 'id_bloqueio_periodo',
                'route_name' => 'sindico-amigo.rest.bloqueioperiodo',
                'route_identifier_name' => 'bloqueioperiodo_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoCollection::class => [
                'entity_identifier_name' => 'id_bloqueio_periodo',
                'route_name' => 'sindico-amigo.rest.bloqueioperiodo',
                'route_identifier_name' => 'bloqueioperiodo_id',
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
            'SindicoAmigo\\V1\\Rest\\TipoConta\\TipoContaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_conta',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller',
                'entity_identifier_name' => 'id_tipo_conta',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\TipoConta\\TipoContaResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPerfil\\TipoPerfilResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_perfil',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPessoa\\TipoPessoaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_pessoa',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacao\\TipoSituacaoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_situacao',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\TipoGrupoPerfilResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_grupo_perfil',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoVisitante\\TipoVisitanteResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_visitante',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoUpload\\TipoUploadResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_upload',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\TipoSituacaoImovelResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_situacao_imovel',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoReceita\\TipoReceitaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_receita',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\TipoPrestadorServicoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_prestador_servico',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\TipoOcorrenciaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_ocorrencia',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMovimento\\TipoMovimentoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_movimento',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDocumento\\TipoDocumentoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_documento',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoDependente\\TipoDependenteResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_dependente',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoChaves\\TipoChavesResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_chaves',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoArea\\TipoAreaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_area',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoAgenda\\TipoAgendaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_agenda',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\AreaPai\\AreaPaiResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'area_pai',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller',
                'entity_identifier_name' => 'id_area_pai',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\AreaPai\\AreaPaiResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\SetorGaragem\\SetorGaragemResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'setor_garagem',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller',
                'entity_identifier_name' => 'id_setor',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\SetorGaragem\\SetorGaragemResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\Termo\\TermoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'termo',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Termo\\Controller',
                'entity_identifier_name' => 'id_termo',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\Termo\\TermoResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\Bloco\\BlocoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'bloco',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Bloco\\Controller',
                'entity_identifier_name' => 'id_bloco',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\Bloco\\BlocoResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\Banco\\BancoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'banco',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Banco\\Controller',
                'entity_identifier_name' => 'id_banco',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\Banco\\BancoResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\Fabricante\\FabricanteResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'fabricante',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\Especie\\EspecieResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'especie',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Especie\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\Raca\\RacaResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'raca',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Raca\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\OrgaoExpedidorResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'orgao_expedidor',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\TipoMultaNotificacaoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'tipo_multa_notificacao',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SindicoAmigo\\V1\\Rest\\Configuracao\\ConfiguracaoResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'configuracao',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller',
                'entity_identifier_name' => 'id_configuracao',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\Configuracao\\ConfiguracaoResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\Cbo\\CboResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'cbo',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\Cbo\\Controller',
                'entity_identifier_name' => 'id_cbo',
                'table_service' => 'SindicoAmigo\\V1\\Rest\\Cbo\\CboResource\\Table',
            ],
            'SindicoAmigo\\V1\\Rest\\SegGroups\\SegGroupsResource' => [
                'adapter_name' => 'DbAdapter',
                'table_name' => 'seg_groups',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller',
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
        'SindicoAmigo\\V1\\Rest\\TipoConta\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoConta\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUpload\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoUpload\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoReceita\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoReceita\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDependente\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoDependente\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoChaves\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoChaves\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoArea\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoArea\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Proprietario\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Proprietario\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\AreaPai\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\AreaPai\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Termo\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Termo\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Bloco\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Condominio\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Condominio\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Reserva\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Reserva\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Imovel\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Imovel\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Banco\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Banco\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Fabricante\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Fabricante\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Especie\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Especie\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Raca\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Raca\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Upload\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Upload\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Configuracao\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Configuracao\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Cbo\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Cbo\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Areacomum\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Areacomum\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\Animal\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\Animal\\Validator',
        ],
        'SindicoAmigo\\V1\\Rest\\SegGroups\\Controller' => [
            'input_filter' => 'SindicoAmigo\\V1\\Rest\\SegGroups\\Validator',
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
        'SindicoAmigo\\V1\\Rest\\TipoConta\\Validator' => [
            0 => [
                'name' => 'de_tipo_conta',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPerfil\\Validator' => [
            0 => [
                'name' => 'de_tipoperfil',
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
            1 => [
                'name' => 'id_tipogrupoperfil',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoPessoa\\Validator' => [
            0 => [
                'name' => 'de_tipopessoa',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacao\\Validator' => [
            0 => [
                'name' => 'de_situacao',
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
                            'max' => '30',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoGrupoPerfil\\Validator' => [
            0 => [
                'name' => 'de_tipogrupoperfil',
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
                            'max' => '20',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoVisitante\\Validator' => [
            0 => [
                'name' => 'de_tipo_visitante',
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
                            'max' => '30',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoUpload\\Validator' => [
            0 => [
                'name' => 'de_tipo_upload',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoSituacaoImovel\\Validator' => [
            0 => [
                'name' => 'de_tipo_situacao_imovel',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoReceita\\Validator' => [
            0 => [
                'name' => 'de_tipo_receita',
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
        'SindicoAmigo\\V1\\Rest\\TipoPrestadorServico\\Validator' => [
            0 => [
                'name' => 'de_tipo_servico',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoOcorrencia\\Validator' => [
            0 => [
                'name' => 'de_tipo_ocorrencia',
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
        'SindicoAmigo\\V1\\Rest\\TipoMovimento\\Validator' => [
            0 => [
                'name' => 'de_tipo_movimento',
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
                            'max' => '30',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'de_tipo_movimento_sigla',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDocumento\\Validator' => [
            0 => [
                'name' => 'de_tipo_documento',
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
                            'max' => '20',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoDependente\\Validator' => [
            0 => [
                'name' => 'de_tipo_dependente',
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
                            'max' => '20',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoChaves\\Validator' => [
            0 => [
                'name' => 'de_tipo_chaves',
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
        'SindicoAmigo\\V1\\Rest\\TipoArea\\Validator' => [
            0 => [
                'name' => 'de_tipo_area',
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
        ],
        'SindicoAmigo\\V1\\Rest\\TipoAgenda\\Validator' => [
            0 => [
                'name' => 'de_tipo_agenda',
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
        'SindicoAmigo\\V1\\Rest\\Proprietario\\Validator' => [],
        'SindicoAmigo\\V1\\Rest\\AreaPai\\Validator' => [
            0 => [
                'name' => 'de_nome',
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
        'SindicoAmigo\\V1\\Rest\\SetorGaragem\\Validator' => [
            0 => [
                'name' => 'de_setor',
                'required' => true,
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
        ],
        'SindicoAmigo\\V1\\Rest\\Termo\\Validator' => [
            0 => [
                'name' => 'de_texto',
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
        ],
        'SindicoAmigo\\V1\\Rest\\Bloco\\Validator' => [
            0 => [
                'name' => 'no_bloco',
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
            1 => [
                'name' => 'id_condominio',
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
        ],
        'SindicoAmigo\\V1\\Rest\\Condominio\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\NotEmpty::class,
                        'options' => [
                            'message' => 'O campo não pode ser vazio',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\EmailAddress::class,
                        'options' => [
                            'message' => 'Por favor insira um e-mail válido!',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [
                            'allowAttribs' => 'Retirando tags',
                        ],
                    ],
                ],
                'name' => 'no_condominio',
                'description' => 'Nome do Condomínio',
                'field_type' => 'Texto',
                'error_message' => 'O campo do nome do condomínio não pode ser vazio!',
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Configuracao\\Validator' => [
            0 => [
                'name' => 'nu_dia_antecedencia',
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
            2 => [
                'name' => 'perm_varias_reserva_dia',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Reserva\\Validator' => [],
        'SindicoAmigo\\V1\\Rest\\Imovel\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [
                            'charlist' => 'O campo nao pode ter espaco',
                        ],
                    ],
                ],
                'name' => 'id_numero_imovel',
                'field_type' => 'Integer',
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Banco\\Validator' => [
            0 => [
                'name' => 'id_banco',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'de_banco',
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
            2 => [
                'name' => 'de_site',
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
        'SindicoAmigo\\V1\\Rest\\Fabricante\\Validator' => [
            0 => [
                'name' => 'de_fabricante',
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
                            'max' => '30',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Cbo\\Validator' => [
            0 => [
                'name' => 'de_cbo',
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
        'SindicoAmigo\\V1\\Rest\\Especie\\Validator' => [
            0 => [
                'name' => 'de_especie',
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
                            'max' => '30',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Raca\\Validator' => [
            0 => [
                'name' => 'de_raca',
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
        ],
        'SindicoAmigo\\V1\\Rest\\OrgaoExpedidor\\Validator' => [
            0 => [
                'name' => 'de_orgao_expedidor',
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
                            'max' => '70',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'de_sigla',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\Upload\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\File\Extension::class,
                        'options' => [
                            'extension' => 'Por favor escolha uma imagem com extensao jpg',
                            'message' => 'Por favor escolha uma imagem com extensao jpg',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'arquivo',
                'description' => 'Campo do tipo upload',
                'type' => \Zend\InputFilter\FileInput::class,
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\TipoMultaNotificacao\\Validator' => [
            0 => [
                'name' => 'de_tipo_multa_notificacao',
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
        ],
        'SindicoAmigo\\V1\\Rest\\Teste\\Validator' => [
            0 => [
                'name' => 'name',
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
        'SindicoAmigo\\V1\\Rest\\Areacomum\\Validator' => [],
        'SindicoAmigo\\V1\\Rest\\Animal\\Validator' => [],
        'SindicoAmigo\\V1\\Rest\\SegGroups\\Validator' => [
            0 => [
                'name' => 'description',
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
                            'max' => '64',
                        ],
                    ],
                ],
            ],
        ],
        'SindicoAmigo\\V1\\Rest\\BloqueioPeriodo\\Validator' => [
            0 => [
                'name' => 'id_bloco',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'DbAdapter',
                            'table' => 'bloco',
                            'field' => 'id_bloco',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'id_numero_imovel',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'DbAdapter',
                            'table' => 'imovel',
                            'field' => 'id_numero_imovel',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'dt_inicio',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'dt_fim',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'de_observacao',
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
        ],
    ],
    'service_manager' => [
        'factories' => [
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumResource::class => \SindicoAmigo\V1\Rest\Areacomum\AreacomumResourceFactory::class,
            \SindicoAmigo\V1\Rest\Areacomum\AreacomumRepository::class => \SindicoAmigo\V1\Rest\Areacomum\AreacomumRepositoryFactory::class,
            'SindicoAmigo\\V1\\Rest\\Areacomum\\AreacomumTableGateway' => \SindicoAmigo\V1\Rest\Areacomum\AreacomumTableGatewayFactory::class,
            \SindicoAmigo\V1\Rest\Condominio\CondominioResource::class => \SindicoAmigo\V1\Rest\Condominio\CondominioResourceFactory::class,
            \SindicoAmigo\V1\Rest\Condominio\CondominioRepository::class => \SindicoAmigo\V1\Rest\Condominio\CondominioRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Pessoa\PessoaResource::class => \SindicoAmigo\V1\Rest\Pessoa\PessoaResourceFactory::class,
            \SindicoAmigo\V1\Rest\Pessoa\PessoaRepository::class => \SindicoAmigo\V1\Rest\Pessoa\PessoaRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Perfil\PerfilResource::class => \SindicoAmigo\V1\Rest\Perfil\PerfilResourceFactory::class,
            \SindicoAmigo\V1\Rest\Perfil\PerfilRepository::class => \SindicoAmigo\V1\Rest\Perfil\PerfilRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Proprietario\ProprietarioResource::class => \SindicoAmigo\V1\Rest\Proprietario\ProprietarioResourceFactory::class,
            \SindicoAmigo\V1\Rest\Proprietario\ProprietarioRepository::class => \SindicoAmigo\V1\Rest\Proprietario\ProprietarioRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosResource::class => \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosResourceFactory::class,
            \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosRepository::class => \SindicoAmigo\V1\Rest\Funcionarios\FuncionariosRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Visitante\VisitanteResource::class => \SindicoAmigo\V1\Rest\Visitante\VisitanteResourceFactory::class,
            \SindicoAmigo\V1\Rest\Visitante\VisitanteRepository::class => \SindicoAmigo\V1\Rest\Visitante\VisitanteRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Restricao\RestricaoResource::class => \SindicoAmigo\V1\Rest\Restricao\RestricaoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Restricao\RestricaoRepository::class => \SindicoAmigo\V1\Rest\Restricao\RestricaoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Garagem\GaragemResource::class => \SindicoAmigo\V1\Rest\Garagem\GaragemResourceFactory::class,
            \SindicoAmigo\V1\Rest\Garagem\GaragemRepository::class => \SindicoAmigo\V1\Rest\Garagem\GaragemRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Imagem\ImagemResource::class => \SindicoAmigo\V1\Rest\Imagem\ImagemResourceFactory::class,
            \SindicoAmigo\V1\Rest\Imagem\ImagemRepository::class => \SindicoAmigo\V1\Rest\Imagem\ImagemRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoResource::class => \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoRepository::class => \SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoResource::class => \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoRepository::class => \SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Anuncio\AnuncioResource::class => \SindicoAmigo\V1\Rest\Anuncio\AnuncioResourceFactory::class,
            \SindicoAmigo\V1\Rest\Anuncio\AnuncioRepository::class => \SindicoAmigo\V1\Rest\Anuncio\AnuncioRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaResource::class => \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaResourceFactory::class,
            \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaRepository::class => \SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Reserva\ReservaResource::class => \SindicoAmigo\V1\Rest\Reserva\ReservaResourceFactory::class,
            \SindicoAmigo\V1\Rest\Reserva\ReservaRepository::class => \SindicoAmigo\V1\Rest\Reserva\ReservaRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorResource::class => \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorResourceFactory::class,
            \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorRepository::class => \SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroResource::class => \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroResourceFactory::class,
            \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroRepository::class => \SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesResource::class => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesResourceFactory::class,
            \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesRepository::class => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesTableGateway::class => \SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesTableGatewayFactory::class,
            \SindicoAmigo\V1\Rest\Aviso\AvisoResource::class => \SindicoAmigo\V1\Rest\Aviso\AvisoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Aviso\AvisoRepository::class => \SindicoAmigo\V1\Rest\Aviso\AvisoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoResource::class => \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoRepository::class => \SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Imovel\ImovelResource::class => \SindicoAmigo\V1\Rest\Imovel\ImovelResourceFactory::class,
            \SindicoAmigo\V1\Rest\Imovel\ImovelRepository::class => \SindicoAmigo\V1\Rest\Imovel\ImovelRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoResource::class => \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoRepository::class => \SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Chaves\ChavesResource::class => \SindicoAmigo\V1\Rest\Chaves\ChavesResourceFactory::class,
            \SindicoAmigo\V1\Rest\Chaves\ChavesRepository::class => \SindicoAmigo\V1\Rest\Chaves\ChavesRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosResource::class => \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosResourceFactory::class,
            \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosRepository::class => \SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Animal\AnimalResource::class => \SindicoAmigo\V1\Rest\Animal\AnimalResourceFactory::class,
            \SindicoAmigo\V1\Rest\Animal\AnimalRepository::class => \SindicoAmigo\V1\Rest\Animal\AnimalRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoResource::class => \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoRepository::class => \SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Upload\UploadResource::class => \SindicoAmigo\V1\Rest\Upload\UploadResourceFactory::class,
            \SindicoAmigo\V1\Rest\Upload\UploadRepository::class => \SindicoAmigo\V1\Rest\Upload\UploadRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Historico\HistoricoResource::class => \SindicoAmigo\V1\Rest\Historico\HistoricoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Historico\HistoricoRepository::class => \SindicoAmigo\V1\Rest\Historico\HistoricoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Movimento\MovimentoResource::class => \SindicoAmigo\V1\Rest\Movimento\MovimentoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Movimento\MovimentoRepository::class => \SindicoAmigo\V1\Rest\Movimento\MovimentoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteResource::class => \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteResourceFactory::class,
            \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteRepository::class => \SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorResource::class => \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorResourceFactory::class,
            \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorRepository::class => \SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Morador\MoradorResource::class => \SindicoAmigo\V1\Rest\Morador\MoradorResourceFactory::class,
            \SindicoAmigo\V1\Rest\Morador\MoradorRepository::class => \SindicoAmigo\V1\Rest\Morador\MoradorRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorResource::class => \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorResourceFactory::class,
            \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorRepository::class => \SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioResource::class => \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioResourceFactory::class,
            \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioRepository::class => \SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Consumogas\ConsumogasResource::class => \SindicoAmigo\V1\Rest\Consumogas\ConsumogasResourceFactory::class,
            \SindicoAmigo\V1\Rest\Consumogas\ConsumogasRepository::class => \SindicoAmigo\V1\Rest\Consumogas\ConsumogasRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Leituragas\LeituragasResource::class => \SindicoAmigo\V1\Rest\Leituragas\LeituragasResourceFactory::class,
            \SindicoAmigo\V1\Rest\Leituragas\LeituragasRepository::class => \SindicoAmigo\V1\Rest\Leituragas\LeituragasRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Multa\MultaResource::class => \SindicoAmigo\V1\Rest\Multa\MultaResourceFactory::class,
            \SindicoAmigo\V1\Rest\Multa\MultaRepository::class => \SindicoAmigo\V1\Rest\Multa\MultaRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoResource::class => \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoRepository::class => \SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoResource::class => \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoRepository::class => \SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioResource::class => \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioResourceFactory::class,
            \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioRepository::class => \SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoResource::class => \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoRepository::class => \SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Segusers\SegusersResource::class => \SindicoAmigo\V1\Rest\Segusers\SegusersResourceFactory::class,
            \SindicoAmigo\V1\Rest\Segusers\SegusersRepository::class => \SindicoAmigo\V1\Rest\Segusers\SegusersRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoResource::class => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoResourceFactory::class,
            \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoRepository::class => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoRepositoryFactory::class,
            \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoTableGateway::class => \SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoTableGatewayFactory::class,
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'SindicoAmigo\\V1\\Rest\\Bloco\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
