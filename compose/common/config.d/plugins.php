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
                'project_id' => 22,
                'inciso2_default' => (array) json_decode('{"avatar":"aldirblanc-para.png","seal":2,"shortDescription":"Benef\u00edcio para auxiliar espa\u00e7os e organiza\u00e7\u00f5es culturais a manter suas atividades durante o isolamento social ocasionado pela pandemia covid-19 - orientada pela Lei Aldir Blanc (Lei n\u00ba 14.017)."}'),
                'inciso2' => 
                [
                    (object) ["owner" => 168, "city" => "Conceição do Araguaia"],
                    (object) ["owner" => 168, "city" => "Igarapé-Miri"],
                    (object) ["owner" => 168, "city" => "Abel Figueired"],
                    (object) ["owner" => 168, "city" => "Acará"],
                    (object) ["owner" => 168, "city" => "Augusto Correa"],
                    (object) ["owner" => 168, "city" => "Bragança"],
                    (object) ["owner" => 168, "city" => "Breu Branco"],
                    (object) ["owner" => 168, "city" => "Capitação Poço"],
                    (object) ["owner" => 168, "city" => "Castanhal"],
                    (object) ["owner" => 168, "city" => "Ananindeua"],
                    (object) ["owner" => 168, "city" => "Bagre"],
                    (object) ["owner" => 168, "city" => "Baião"],
                    (object) ["owner" => 168, "city" => "Barcarena"],
                    (object) ["owner" => 168, "city" => "Capanema"],
                    (object) ["owner" => 168, "city" => "Colares"],
                    (object) ["owner" => 168, "city" => "Curuçá"],
                    (object) ["owner" => 168, "city" => "Medicilândia"],
                    (object) ["owner" => 168, "city" => "Melgaço"],
                    (object) ["owner" => 168, "city" => "Nova Ipixuna"],
                    (object) ["owner" => 168, "city" => "Ourém"],
                    (object) ["owner" => 168, "city" => "Pacajá"],
                    (object) ["owner" => 168, "city" => "Paragominas"],
                    (object) ["owner" => 168, "city" => "Placas"],
                    (object) ["owner" => 168, "city" => "Sapucaia"],
                    (object) ["owner" => 168, "city" => "Viseu"],
                    (object) ["owner" => 168, "city" => "Garrafão do Norte"],
                    (object) ["owner" => 168, "city" => "Igarapé-Açu"],
                    (object) ["owner" => 168, "city" => "Jacareacanga"],
                    (object) ["owner" => 168, "city" => "Juruti"],
                    (object) ["owner" => 168, "city" => "Limoeiro do Ajuru"],
                    (object) ["owner" => 168, "city" => "Mãe do Rio"],
                    (object) ["owner" => 168, "city" => "Magalhães Barata"],
                    (object) ["owner" => 168, "city" => "Marabá"],
                    (object) ["owner" => 168, "city" => "Mojuí dos Campos"],
                    (object) ["owner" => 168, "city" => "Monte Alegre"],
                    (object) ["owner" => 168, "city" => "Muaná"],
                    (object) ["owner" => 168, "city" => "Nova Esperança do Piriá"],
                    (object) ["owner" => 167, "city" => "Palestina do Pará"],
                    (object) ["owner" => 167, "city" => "Pau D\'Arco"],
                    (object) ["owner" => 167, "city" => "Peixe-Boi"],
                    (object) ["owner" => 167, "city" => "Piçarra"],
                    (object) ["owner" => 167, "city" => "Ponta de Pedras"],
                    (object) ["owner" => 167, "city" => "Porto de Moz"],
                    (object) ["owner" => 167, "city" => "Rio Maria"],
                    (object) ["owner" => 167, "city" => "Santarém"],
                    (object) ["owner" => 167, "city" => "São Domingos do Araguaia Pará"],
                    (object) ["owner" => 167, "city" => "São Domingos do Capim"],
                    (object) ["owner" => 167, "city" => "São Felix do Xingu"],
                    (object) ["owner" => 167, "city" => "São Francisco do Pará"],
                    (object) ["owner" => 167, "city" => "São Miguel do Guamá"],
                    (object) ["owner" => 167, "city" => "São Sebastião da Boa Vista"],
                    (object) ["owner" => 167, "city" => "Terra Alta"],
                    (object) ["owner" => 167, "city" => "Tomé-Açu"],
                    (object) ["owner" => 167, "city" => "Tracuateua"],
                    (object) ["owner" => 167, "city" => "Trairão"],
                    (object) ["owner" => 167, "city" => "Ulianópolis"],
                    (object) ["owner" => 167, "city" => "Floresta do Araguaia"],
                    (object) ["owner" => 167, "city" => "Tucumã"],
                    (object) ["owner" => 167, "city" => "Xinguara "],
                    (object) ["owner" => 167, "city" => "Curuá"],
                    (object) ["owner" => 167, "city" => "Óbidos"],
                    (object) ["owner" => 167, "city" => "São João do Araguaia"],
                    (object) ["owner" => 167, "city" => "Marapanim"],
                    (object) ["owner" => 167, "city" => "São Caetano de Odivelas"],
                    (object) ["owner" => 167, "city" => "Vigia"],
                    (object) ["owner" => 167, "city" => "Cachoeira do Arari"],
                    (object) ["owner" => 167, "city" => "Curralinho"],
                    (object) ["owner" => 167, "city" => "Gurupá"],
                    (object) ["owner" => 167, "city" => "Portel"],
                    (object) ["owner" => 167, "city" => "Santa Cruz do Arari"],
                    (object) ["owner" => 167, "city" => "Nova Timboteua"],
                    (object) ["owner" => 167, "city" => "Santa Luzia do Pará"],
                    (object) ["owner" => 167, "city" => "Concordia do Pará"],
                    (object) ["owner" => 167, "city" => "Ipixuna do Pará"],
                    (object) ["owner" => 167, "city" => "Irituia"],
                    (object) ["owner" => 167, "city" => "Rondon do Pará"],
                    (object) ["owner" => 167, "city" => "Aveiro"],
                    (object) ["owner" => 167, "city" => "Novo Progresso"],
                    (object) ["owner" => 167, "city" => "Moju "],
                    (object) ["owner" => 167, "city" => "Alenquer"],
                    (object) ["owner" => 167, "city" => "Belterra"],
                    (object) ["owner" => 167, "city" => "Faro"],
                    (object) ["owner" => 167, "city" => "Primavera"],
                    (object) ["owner" => 167, "city" => "Quatipuru"],
                    (object) ["owner" => 167, "city" => "Rurópolis"],
                    (object) ["owner" => 167, "city" => "Vitória do Xingu"],
                    (object) ["owner" => 167, "city" => "Alenquer"],
                    (object) ["owner" => 167, "city" => "Canaã do Carajás"],
                    (object) ["owner" => 167, "city" => "Breves"],
                    (object) ["owner" => 167, "city" => "Cametá"],
                    (object) ["owner" => 167, "city" => "Tailândia"],
                    (object) ["owner" => 167, "city" => "Redenção"],
                    (object) ["owner" => 167, "city" => "Município de Ourilândia do Norte"],
                    (object) ["owner" => 167, "city" => "Dom Eliseu"],
                    (object) ["owner" => 167, "city" => "Município Bom Jesus do Tocantins"],
                    (object) ["owner" => 167, "city" => "Santa Barbara do Pará"],
                ],
                'inciso1_opportunity_id' => 9,
                'inciso2_opportunity_ids' => (array) json_decode(env('AB_INCISO2_OPPORTUNITY_IDS', '{}')),
                'msg_inciso2_disabled' => 'Em breve!',
                'link_suporte' => 'https://tawk.to/chat/5f47c17bcc6a6a5947af53ba/default',
                'msg_inciso2_disabled' => 'A solicitação deste benefício será lançada em breve. Acompanhe a divulgação pelas instituições responsáveis pela gestão da cultura em seu município!',
                'prefix_project' =>  'Lei Aldir Blanc | ' 

                 
            ],
        ],
        'AldirBlancRedirects' => [
            'namespace' => 'AldirBlancRedirects',
            'config' => [
                'condition' => function() {
                    $app = MapasCulturais\App::i();

                    if($app->user->is('guest')){
                        return false;
                    }

                    $plugin = $app->plugins['AldirBlanc'];

                    // só pode acessar as demais urls quem tiver controle sobre o agente da SECULT
                    $opportunities_ids = array_values($plugin->config['inciso2_opportunity_ids']);
                    $opportunities_ids[] = $plugin->config['inciso1_opportunity_id'];

                    $opportunities = $app->repo('Opportunity')->findBy(['id' => $opportunities_ids]);
                    
                    $evaluation_method_configurations = [];

                    foreach($opportunities as $opportunity) {
                        $evaluation_method_configurations[] = $opportunity->evaluationMethodConfiguration;
                        
                        if($opportunity->canUser('@control') || $opportunity->canUser('viewEvaluations') || $opportunity->canUser('evaluateRegistrations')) {
                            return true;
                        }
                    }

                    foreach ($evaluation_method_configurations as $emc) {
                        $param = [
                            'originType' => 'MapasCulturais\Entities\EvaluationMethodConfiguration',
                            'originId' => $emc->id, 
                            'destinationType' => 'MapasCulturais\Entities\Agent',
                            'destinationId' => $app->user->profile->id,
                        ];

                        if($request = $app->repo('RequestAgentRelation')->findOneBy($param)) {
                            return true;
                        }
                    }
                    return false;
                }
            ]
        ],
    ]
];
