<?php
$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return [
    'passa agentes com cadastro incompleto para rascunho' => function () use ($app, $conn) {
        if ($ag_ids = $conn->fetchAll("SELECT id FROM agent where status > 0")) {

            $fields = [
                'nomeCompleto',
                'raca',
                'genero',
                'emailPrivado',
                'telefone1',
                'En_Municipio',
                'En_Estado',
                'cpf',
                'cnpj'
            ];

            $count = count($ag_ids);
            foreach ($ag_ids as $key => $value) {
                $agent = $app->repo('Agent')->find($value['id']);
                foreach ($fields as $field) {
                    if (!$agent->$field) {
                        if (in_array($field, ['cpf,cnpj'])) {
                            if ($agent->type->id == 1 && $agent->cpf) {
                                continue;
                            } else if ($agent->type->id == 2 && $agent->cnpj) {
                                continue;
                            }
                        }

                        $k = $key+1;
                        $app->log->debug("{$k} de {$count} - Agente {$agent->id} passado para rascunho, campo {$field} não está preenchido");
                        $agent->status = 0;
                        break;
                    }
                }

                if(!$agent->getRevisions()){
                    $agent->_newCreatedRevision();
                    $app->log->debug("Revision do agente {$agent->id} Criada");
                }

                $agent->save(true);
                $app->em->clear();
            }
        }
    }
];
