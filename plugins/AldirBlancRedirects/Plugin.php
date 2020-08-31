<?php
namespace AldirBlancRedirects;
use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin {
    public function _init() {
        // enqueue scripts and styles

        // add hooks
    }

    public function register() {
        
        $app = App::i();
        $app->_config['routes']['default_controller_id'] = 'aldirblanc';
        
        $config = $this->config;
        $app->hook('GET(<<*>>):before', function() use($app, $config) {
            if(!in_array($this->id, ['aldirblanc', 'auth'])){
                if(!$config['condition']()){
                    $app->redirect($app->createUrl('aldirblanc', 'index'));
                }
            }
        });
    }
}