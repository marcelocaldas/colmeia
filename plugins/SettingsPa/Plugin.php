<?php

namespace SettingsPa;

use MapasCulturais\App;
use MapasCulturais\Entities\Agent;
use MapasCulturais\i;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [
            'required_fields' => [],
            // Título que aparece na homr
            "title_home" => env("HC_TEXT_HOME", ""),

            // Imagens que aparece na home. Preencher como um array Ex.: ["homeContent/img/img1.png", "homeContent/img/img2.png"]
            "images_home" => env("HC_IMAGES_HOME", ""),

            // Tamanho da imagem em percentual %
            "images_size_home" => env("HC_IMAGES_SIZE_HOME", null),

            // Texto que aparece na home
            "text_home" => env("HC_TEXT_HOME", ""),

            // Texto do botão de ação que aparece na home
            "action_home_text" => env("HC_TEXT_ACTIONS_HOME", ""),

            "action_home_link" => env("HC_LINK_ACTIONS_HOME", "#"),
        ];

        parent::__construct($config);
    }


    public function _init()
    {
        $app = App::i();

        $self = $this;

        $app->hook('template(<<*>>.<<*>>.main-footer-logo):before', function () use($app) {
            /** @var \MapasCulturais\Themes\BaseV2\Theme $this */

            $this->part('pa-footer-support');
        });

        $app->hook("registrationFieldTypes.saveToEntity", function($entity_field, $value) use ($app){
            if($entity_field == '@terms:segmento') {
                $this->terms['segmento'] = $value;
            }
        });

        $app->hook("registrationFieldTypes.fetchFromEntity", function($entity_field, &$value){
            if($entity_field == '@terms:segmento') {
                $value = $this->terms['segmento'];
            }
        });

        $app->hook("registrationFieldTypes--agent-<<owner|collective>>-field-config-fields_labels", function(&$fields_labels){
            $fields_labels['@terms:segmento'] = " " . i::__('Segmento cultural');
        });

        $app->hook("template(embedtools.formbuilder.registrationFieldTypes--agent-<<owner|collective>>-field-config):after", function($agent_fields){
            $this->part('registration-fields/agent-fields-config', ['agent_fields' => $agent_fields]);
        });

        $app->hook("template(embedtools.registrationform.registrationFieldTypes--agent-<<owner|collective>>-field):after", function(){
            $this->part('registration-fields/agent-fields-form');
        });

        $app->hook("template(agent.<<edit|single>>.header-content):after",function() use ($app){
            /** @var Theme $this */
            $this->addTaxonoyTermsToJs("segmento");
        });

        /**
         * Insere conteúdo na HOME
         */
        $app->hook('template(site.index.home-search):end', function () use ($self) {
            /** @var Theme $this */
            $this->part('HomeContent/home-search', ["config" => $self->config]);
        });

        $app->hook("app.register:after", function () use ($self){
            $metadata = $this->getRegisteredMetadata('MapasCulturais\Entities\Agent');
            foreach($self->config['agent_required_fields'] as $field => $bool){
                $metadata[$field]->is_required = $bool;
            }
        }, 10000);

        $app->hook("<<GET|POST|PATCH|PUT>>(agent.<<*>>):before", function () use ($app, $self) {
            $entity = $this->requestedEntity;

            if($entity && $entity->type && $entity->type->id == 1){
                $metadata = $app->getRegisteredMetadata('MapasCulturais\Entities\Agent');
                foreach($self->config['agent1_required_fields'] as $field => $bool){
                    $metadata[$field]->is_required = $bool;
                }
            }
           
        }, 10000);
    }

    public function register()
    {
        $this->registerTaxonomies();
    }

    public function registerTaxonomies()
    {
        $app = App::i();

        $def = new \MapasCulturais\Definitions\Taxonomy(55, 'segmento','Segmento cultural',  [
                "Artes Visuais",
                "Artesanato",
                "Audiovisual",
                "Circo",
                "Cultura Alimentar",
                "Cultura Digital",
                "Cultura Gospel",
                "Cultura Urbana e Periférica",
                "Culturas Afro-Brasileiras",
                "Culturas Indígenas",
                "Culturas Populares",
                "Dança",
                "Livro e Leitura",
                "Moda e Design",
                "Museus e Memoriais de Base Comunitária",
                "Música",
                "Outros",
                "Patrimônio Cultural Imaterial",
                "Patrimônio Cultural Material",
                "Pontos e Pontões de Cultura",
                "Teatro",
            ]
        );

        $app->registerTaxonomy(Agent::class, $def);
        
    }
}
