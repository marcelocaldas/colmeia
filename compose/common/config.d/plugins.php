<?php
return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'AldirBlanc' => [
            'namespace' => 'AldirBlanc',
            'config' => [
                'project_id' => 3,
                'inciso2_default' => (array) json_decode('{"avatar":"aldirblanc-para.png","seal":2,"shortDescription":"Benef\u00edcio para auxiliar espa\u00e7os e organiza\u00e7\u00f5es culturais a manter suas atividades durante o isolamento social ocasionado pela pandemia covid-19 - orientada pela Lei Aldir Blanc (Lei n\u00ba 14.017)."}'),
                'inciso2' => 
                [
                    (object) ["owner" => 4156, "city" => "Conceição do Araguaia"],
                    (object) ["owner" => 4159, "city" => "Igarapé-Miri"],
                    (object) ["owner" => 4203, "city" => "Abel Figueired"],
                    (object) ["owner" => 3977, "city" => "Acará"],
                    (object) ["owner" => 2157, "city" => "Augusto Correa"],
                    (object) ["owner" => 4153, "city" => "Bragança"],
                    (object) ["owner" => 2137, "city" => "Breu Branco"],
                    (object) ["owner" => 4155, "city" => "Capitação Poço"],
                    (object) ["owner" => 2125, "city" => "Castanhal"],
                    (object) ["owner" => 3981, "city" => "Ananindeua"],
                    (object) ["owner" => 4139, "city" => "Bagre"],
                    (object) ["owner" => 4145, "city" => "Baião"],
                    (object) ["owner" => 4134, "city" => "Barcarena"],
                    (object) ["owner" => 4130, "city" => "Capanema"],
                    (object) ["owner" => 2126, "city" => "Colares"],
                    (object) ["owner" => 4158, "city" => "Curuçá"],
                    (object) ["owner" => 4171, "city" => "Medicilândia"],
                    (object) ["owner" => 4172, "city" => "Melgaço"],
                    (object) ["owner" => 4181, "city" => "Nova Ipixuna"],
                    (object) ["owner" => 2182, "city" => "Ourém"],
                    (object) ["owner" => 4183, "city" => "Pacajá"],
                    (object) ["owner" => 4185, "city" => "Paragominas"],
                    (object) ["owner" => 4191, "city" => "Placas"],
                    (object) ["owner" => 4198, "city" => "Sapucaia"],
                    (object) ["owner" => 2174, "city" => "Viseu"],
                    (object) ["owner" => 2177, "city" => "Garrafão do Norte"],
                    (object) ["owner" => 2130, "city" => "Igarapé-Açu"],
                    (object) ["owner" => 2199, "city" => "Jacareacanga"],
                    (object) ["owner" => 4160, "city" => "Juruti"],
                    (object) ["owner" => 4161, "city" => "Limoeiro do Ajuru"],
                    (object) ["owner" => 4167, "city" => "Mãe do Rio"],
                    (object) ["owner" => 4170, "city" => "Magalhães Barata"],
                    (object) ["owner" => 5592, "city" => "Marabá"],
                    (object) ["owner" => 2122, "city" => "Mojuí dos Campos"],
                    (object) ["owner" => 4173, "city" => "Monte Alegre"],
                    (object) ["owner" => 2141, "city" => "Muaná"],
                    (object) ["owner" => 4179, "city" => "Nova Esperança do Piriá"],
                    (object) ["owner" => 4184, "city" => "Palestina do Pará"],
                    (object) ["owner" => 4186, "city" => "Pau D\'Arco"],
                    (object) ["owner" => 4187, "city" => "Peixe-Boi"],
                    (object) ["owner" => 4189, "city" => "Piçarra"],
                    (object) ["owner" => 2143, "city" => "Ponta de Pedras"],
                    (object) ["owner" => 2208, "city" => "Porto de Moz"],
                    (object) ["owner" => 4192, "city" => "Rio Maria"],
                    (object) ["owner" => 4193, "city" => "Santarém"],
                    (object) ["owner" => 4194, "city" => "São Domingos do Araguaia Pará"],
                    (object) ["owner" => 4195, "city" => "São Domingos do Capim"],
                    (object) ["owner" => 2117, "city" => "São Felix do Xingu"],
                    (object) ["owner" => 4196, "city" => "São Francisco do Pará"],
                    (object) ["owner" => 2132, "city" => "São Miguel do Guamá"],
                    (object) ["owner" => 2150, "city" => "São Sebastião da Boa Vista"],
                    (object) ["owner" => 4199, "city" => "Terra Alta"],
                    (object) ["owner" => 2197, "city" => "Tomé-Açu"],
                    (object) ["owner" => 2159, "city" => "Tracuateua"],
                    (object) ["owner" => 4201, "city" => "Trairão"],
                    (object) ["owner" => 4202, "city" => "Ulianópolis"],
                    (object) ["owner" => 5604, "city" => "Floresta do Araguaia"],
                    (object) ["owner" => 5605, "city" => "Tucumã"],
                    (object) ["owner" => 5606, "city" => "Xinguara "],
                    (object) ["owner" => 5607, "city" => "Curuá"],
                    (object) ["owner" => 5608, "city" => "Óbidos"],
                    (object) ["owner" => 5609, "city" => "São João do Araguaia"],
                    (object) ["owner" => 5610, "city" => "Marapanim"],
                    (object) ["owner" => 5611, "city" => "São Caetano de Odivelas"],
                    (object) ["owner" => 5612, "city" => "Vigia"],
                    (object) ["owner" => 5614, "city" => "Cachoeira do Arari"],
                    (object) ["owner" => 5615, "city" => "Curralinho"],
                    (object) ["owner" => 5616, "city" => "Gurupá"],
                    (object) ["owner" => 5617, "city" => "Portel"],
                    (object) ["owner" => 5619, "city" => "Santa Cruz do Arari"],
                    (object) ["owner" => 5621, "city" => "Nova Timboteua"],
                    (object) ["owner" => 5622, "city" => "Santa Luzia do Pará"],
                    (object) ["owner" => 5623, "city" => "Concordia do Pará"],
                    (object) ["owner" => 5624, "city" => "Ipixuna do Pará"],
                    (object) ["owner" => 5625, "city" => "Irituia"],
                    (object) ["owner" => 5626, "city" => "Rondon do Pará"],
                    (object) ["owner" => 5627, "city" => "Aveiro"],
                    (object) ["owner" => 5628, "city" => "Novo Progresso"],
                    (object) ["owner" => 5629, "city" => "Moju "],
                    (object) ["owner" => 5931, "city" => "Belterra"],
                    (object) ["owner" => 5932, "city" => "Faro"],
                    (object) ["owner" => 5933, "city" => "Primavera"],
                    (object) ["owner" => 5934, "city" => "Quatipuru"],
                    (object) ["owner" => 5935, "city" => "Rurópolis"],
                    (object) ["owner" => 5936, "city" => "Vitória do Xingu"],
                    (object) ["owner" => 5636, "city" => "Alenquer"],
                    (object) ["owner" => 6284, "city" => "Canaã do Carajás"],
                    (object) ["owner" => 6285, "city" => "Breves"],
                    (object) ["owner" => 6286, "city" => "Cametá"],
                    (object) ["owner" => 6287, "city" => "Tailândia"],
                    (object) ["owner" => 6452, "city" => "Redenção"],
                    (object) ["owner" => 7012, "city" => "Município de Ourilândia do Norte"],
                    (object) ["owner" => 7015, "city" => "Dom Eliseu"],
                    (object) ["owner" => 7644, "city" => "Município Bom Jesus do Tocantins"],
                    (object) ["owner" => 7956, "city" => "Santa Barbara do Pará"],
                    (object) ["owner" => 8997, "city" => "Jacunda"],
                    (object) ["owner" => 13480, "city" => "Oriximiná"],
                    (object) ["owner" => 13481, "city" => "Itaituba"],
                    (object) ["owner" => 15172, "city" => " Parauapebas "],
                    (object) ["owner" => 15173, "city" => " Prainha "],

                ],
                'inciso1_opportunity_id' => 9,
                'inciso2_opportunity_ids' => (array) json_decode(env('AB_INCISO2_OPPORTUNITY_IDS', '{}')),
                'msg_inciso2_disabled' => 'Em breve!',
                'link_suporte' => 'https://tawk.to/chat/5f47c17bcc6a6a5947af53ba/default',
                'msg_inciso2_disabled' => 'A solicitação deste benefício será lançada em breve. Acompanhe a divulgação pelas instituições responsáveis pela gestão da cultura em seu município!',
                'prefix_project' =>  'Lei Aldir Blanc | ',
                'mediados_owner' => 7036,
                'mediadores_prolongar_tempo' => true,
                'homologacao_requer_validacao' => ['dataprev'],
                'lista_mediadores' => [
                    'mediador1@hacklab.com.br'=> [9],
                    'mediador3cidade@hacklab.com.br' => [12,13,14],
                    'mediador1cidade@hacklab.com.br' => [15],
                    'mediatudo@hacklab.com.br' => [],
                    'carlos.savr@hotmail.com' => [ ],
                    'muruesurui@hotmail.com' => [ ],
                    'mayanelimmaa@gmail.com' => [ ],
                    'jheyciellenaira@gmail.com' => [ ],
                    'ana.modesto@unifesspa.edu.br' => [ ],
                    'paulamenezes002016@gmail.com' => [ ],
                    'wesleysales.dearaujo@gmail.com' => [ ],
                    'Rayssakallil@gmail.com ' => [ ],
                    'iarafeitosa360@gmail.com' => [ ],
                    'ramosnatan7@gmail.com' => [ ],
                    'elenjaqueline2009@hotmail.com' => [ ],
                    'luanna.psicol@hotmail.com' => [ ],
                    'amanda.poca@gmail.com' => [ ],
                    'alannejoaojose@gmail.com' => [ ],
                    'larispsap@hotmail.com' => [ ],
                    'vitergill@gmail.com' => [ ],
                    'evilaaragao2020@gmail.com' => [ ],
                    'pame.revelesm@gmail.com' => [ ],
                    'elisandra2401@gmail.com' => [ ],
                    'victor_mirandaleao@yahoo.com.br' => [ ],
                    'msueyla@gmail.com' => [ ],
                    'joyce.kdsf@hotmail.com' => [ ],
                    'rafapeniche@hotmail.com' => [ ],
                    'adson.alfa@gmail.com' => [ ],
                    'pauloricardo.pr573@gmail.com' => [ ],
                    'francineliadepaula@gmail.com' => [ ],
                    'marcelo.arapucu@gmail.com' => [ ],
                    'jonasmkw@hotmail.com' => [ ],
                    'karomunduruku@gmail.com' => [ ],

                ],

                // define os ids para dataprev e avaliadores genericos
                'avaliadores_dataprev_user_id' => (array) json_decode(env('AB_AVALIADORES_DATAPREV_USER_ID', '["9757"]')),
                'avaliadores_genericos_user_id' => (array) json_decode(env('AB_AVALIADORES_GENERICOS_USER_ID', '["11283", "9758"]')),

                // define a exibição do resultado das avaliações para cada status (1, 2, 3, 8, 10)
                'exibir_resultado_padrao' => (array) json_decode(env('AB_EXIBIR_RESULTADO_PADRAO', '["1", "3", "10"]')),
                'exibir_resultado_dataprev' => (array) json_decode(env('AB_EXIBIR_RESULTADO_DATAPREV', '["2"]')),
                'exibir_resultado_generico' => (array) json_decode(env('AB_EXIBIR_RESULTADO_GENERICO', '[]')),
                'exibir_resultado_avaliadores' => (array) json_decode(env('AB_EXIBIR_RESULTADO_AVALIADORES', '["3", "10"]')),

                // mensagens de status padrao
                'msg_status_sent' => env('AB_STATUS_SENT_MESSAGE', 'Consulte novamente em outro momento.'), // STATUS_SENT = 1
                'msg_status_invalid' => env('AB_STATUS_INVALID_MESSAGE', 'Sua inscrição foi invalidada pelo Dataprev.'), // STATUS_INVALID = 2
                'msg_status_approved' => env('AB_STATUS_APPROVED_MESSAGE', 'Sua inscrição foi validada pelo Dataprev, homologada pela Secult.'), // STATUS_APPROVED = 10
                'msg_status_notapproved' => env('AB_STATUS_NOTAPPROVED_MESSAGE', 'Sua inscrição foi validada pelo Dataprev, mas não homologada pela Secult por pendência de documentos.'), // STATUS_NOTAPPROVED = 3
                'msg_status_waitlist' => env('AB_STATUS_WAITLIST_MESSAGE', 'Os recursos disponibilizados já foram destinados. Para sua solicitação ser aprovada será necessário aguardar possível liberação de recursos. Em caso de aprovação, você também será notificado por e-mail. Consulte novamente em outro momento.'), //STATUS_WAITLIST = 8

                // informacoes para recurso das inscrições com status 2 e 3
                'email_recurso' => env('AB_EMAIL_RECURSO', 'suportemapaculturalpa@gmail.com'),
                'msg_recurso' => env('AB_MENSAGEM_RECURSO', 'Você pode entrar com recurso em até 5 dias úteis, enviando os documentos pendentes exclusivamente para o e-mail suportemapaculturalpa@gmail.com com o assunto: Recurso - pa-00000000 (número da sua inscrição).'),

                // mensagem para reprocessamento do Dataprev, para ignorar a mensagem retornada pelo Dataprev e exibir a mensagem abaixo
                'msg_reprocessamento_dataprev' => env('AB_MENSAGEM_REPROCESSAMENTO_DATAPREV', 'Seu status foi alterado de Selecionado(a) para Não Selecionado(a). Isso aconteceu por erro da DataPrev, sistema disponibilizado pelo Governo Federal para cruzamento de dados dos CPF´s, que averigua se solicitantes do auxílio emergencial cumprem os critérios previstos na Lei 14.017/2020.<br><br> 
De acordo com o sistema, seu CPF foi identificado como "titular de benefício previdenciário ou assistencial; ou beneficiário do seguro desemprego; ou contemplado com benefício emergencial".<br><br> 
A Secult lamenta o grave erro do Governo Federal, mas reitera que não é possível homologar o acesso ao auxílio sem a validação da DataPrev.'),

            ],
        ],

        'AldirBlancDataprev' => [
            'namespace' => 'AldirBlancDataprev',
            'config' => [
                'exportador_requer_homologacao' => false,
                'consolidacao_requer_homologacao' => true,
                'consolidacao_requer_validacoes' => ['financeiro', 'generico']
            ]
        ],

        'SECULT' => [
            'namespace' => 'AldirBlancValidador',
            'config' => [
                // slug utilizado como id do controller e identificador do validador
                'slug' => 'secult',

                // nome apresentado na interface
                'name' => 'SECULT',

                'forcar_resultado' => true,

                'consolidacao_requer_homologacao' => false,

                // indica que só deve exportar as inscrições já homologadas
                'exportador_requer_homologacao' => true,

                // indica que a exportação não requer nenhuma validação
                'exportador_requer_validacao' => [],

                // indica que só deve consolidar o resultado se a inscrição
                // já tiver sido processada pelo Dataprev
                'consolidacao_requer_validacoes' => [],

                'inciso1' => [
                    'AVALIACAO' => function ($registration, $key) {
                        return $registration->consolidatedResult;
                    }
                ],
            ]
        ],

        'PreDataprev' => [
            'namespace' => 'AldirBlancValidador',
            'config' => [
                // slug utilizado como id do controller e identificador do validador
                'slug' => 'pre_dataprev',

                // nome apresentado na interface
                'name' => 'Pré-processamento Dataprev',

                'forcar_resultado' => true,

                'consolidacao_requer_homologacao' => false,

                // invalidada a exportação pq não faz sentido
                'exportador_requer_validacao' => ['nao-exportar'],

                'consolidacao_requer_validacoes' => [],

                'inciso1' => [],
            ]
        ],

        'RegistrationPayments' => [ 'namespace' => 'RegistrationPayments' ],
        
        'Financeiro' => [
            'namespace' => 'AldirBlancValidadorFinanceiro',
            'config' => [
                'exportador_requer_validacao' => ['dataprev'],
                'consolidacao_requer_homologacao' => false,
                'consolidacao_requer_validacoes' => []
            ],
        ],
    ]
];