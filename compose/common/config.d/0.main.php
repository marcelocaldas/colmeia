<?php
use MapasCulturais\i;

if (env('REDIS_CACHE', false)) {
    $redis = new \Redis();
    $redis->connect('redis');
    $cache = new \Doctrine\Common\Cache\RedisCache;
    $cache->setRedis($redis);

    $redis = new \Redis();
    $redis->connect('redis');
    $mscache = new \Doctrine\Common\Cache\RedisCache;
    $mscache->setRedis($redis);
} else {
    $cache = new \Doctrine\Common\Cache\ApcuCache;
    $mscache = new \Doctrine\Common\Cache\ApcuCache;
}

return [
    'app.cache' => $cache,
    'app.mscache' => $mscache,
    'app.siteName' => env('SITE_NAME', 'Mapa da Cultura Brasileira'),
    'app.siteDescription' => i::__("O Mapas Culturais é uma plataforma colaborativa que reúne informações sobre agentes, espaços, eventos, projetos culturais e oportunidades"),

    'themes.active' => env('ACTIVE_THEME', 'MapasCulturais\Themes\BaseV2'),

    'app.lcode' => env('APP_LCODE', 'pt_BR,es_ES'),

    'registration.autosaveTimeout' => env('REGISTRATION_AUTOSAVE_INTERVAL', MINUTE_IN_SECONDS * 1000),

    'doctrine.database' => [
        'host'           => env('DB_HOST', 'db'),
        'dbname'         => env('DB_NAME', 'mapas'),
        'user'           => env('DB_USER', 'mapas'),
        'password'       => env('DB_PASS', 'mapas'),
        'server_version' => env('DB_VERSION', 10),
    ],
    'ini.set' => json_decode(env('PHP_INI_SET', '[]'))
];