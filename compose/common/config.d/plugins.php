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
                'inciso2_enabled' => true,
                'project_id' => 3,
                'inciso1_opportunity_id' => 9,
                'inciso2_opportunity_ids' => []
            ],
        ],
        'AldirBlancRedirects' => [
            'namespace' => 'AldirBlancRedirects',
            'config' => [
                'condition' => function() {
                    $app = MapasCulturais\App::i();

                    // só pode acessar as demais urls quem tiver controle sobre o agente da SECULT
                    $secult = $app->repo('Agent')->find(env('SECULT_AGENT_ID', 7));
                    if ($secult) {
                        return !$secult->canUser('@control');
                    } else {
                        return false;
                    }

                }
            ]
        ],
    ]
];
