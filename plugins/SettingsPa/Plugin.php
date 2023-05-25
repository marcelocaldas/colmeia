<?php

namespace SettingsPa;

use MapasCulturais\App;

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
            $metadata = $app->getRegisteredMetadata('MapasCulturais\Entities\Agent',1);
            foreach($self->config['agent1_required_fields'] as $field => $bool){
                $metadata[$field]->is_required = $bool;
            }
        }, 10000);
    }

    public function register()
    {
    }
}
