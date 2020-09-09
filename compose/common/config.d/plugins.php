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
                'inciso1_enabled' => true,
                'inciso2_enabled' => env('INCISO2_ENABLED', false),
                'project_id' => 3,
                'inciso1_opportunity_id' => 9,
                'inciso2_opportunity_ids' => ["Castanhal" => 20, "Mojuí dos campos" => 19 ],
                'msg_inciso2_disabled' => 'Em breve!',
                'link_suporte' => 'https://tawk.to/chat/5f47c17bcc6a6a5947af53ba/default',
                'msg_inciso2_disabled' => 'A solicitação deste benefício será lançada em breve. Acompanhe a divulgação pelas instituições responsáveis pela gestão da cultura em seu município!',

            ],
        ],
        'AldirBlancRedirects' => [
            'namespace' => 'AldirBlancRedirects',
            'config' => [
                'condition' => function() {
                    $app = MapasCulturais\App::i();
                    if ($app->user->is('admin')) {
                        return true;
                    }

                    if ($app->user->is('guest')) {
                        return false;
                    }

                    // só pode acessar as demais urls quem tiver controle sobre o agente da SECULT
                    $secult = $app->repo('Agent')->find(env('SECULT_AGENT_ID', 7));
                    if ($secult) {
                        return $secult->canUser('@control');
                    } else {
                        return false;
                    }

                }
            ]
        ],
    ]
];
