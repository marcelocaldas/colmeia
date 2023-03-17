<?php

namespace SettingsPa;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [
            'required_fields' => []
        ];

        parent::__construct($config);
    }


    public function _init()
    {
        $app = App::i();

        $self = $this;

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
