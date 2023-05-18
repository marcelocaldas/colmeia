FROM hacklab/mapasculturais:v5.6.16

COPY compose/common/config.php /var/www/html/protected/application/conf/config.php
COPY compose/common/config.d /var/www/html/protected/application/conf/conf-common.d
COPY compose/production/config.d /var/www/html/protected/application/conf/config.d

COPY themes /var/www/html/protected/application/themes
COPY plugins /var/www/html/protected/application/plugins

COPY compose/common/config-csv-inciso1.php /var/www/html/protected/application/plugins/AldirBlancDataprev/config-csv-inciso1.php
COPY compose/common/config-csv-inciso2.php /var/www/html/protected/application/plugins/AldirBlancDataprev/config-csv-inciso2.php
COPY compose/common/config-ppg10x.php /var/www/html/protected/application/plugins/AldirBlanc/config-ppg10x.php
COPY compose/common/config-cnab240-inciso1.php /var/www/html/protected/application/plugins/AldirBlanc/config-cnab240-inciso1.php
COPY compose/common/config-cnab240-inciso2.php /var/www/html/protected/application/plugins/AldirBlanc/config-cnab240-inciso2.php
COPY compose/common/config-import-cnab240.php /var/www/html/protected/application/plugins/AldirBlanc/config-import-cnab240.php
COPY compose/common/deParaContas.csv /var/www/html/protected/application/plugins/AldirBlanc/CSV/deParaContas.csv
COPY compose/common/ppgIdMap.csv /var/www/html/protected/application/plugins/AldirBlanc/CSV/ppgIdMap.csv
COPY compose/common/location.php /var/www/html/protected/application/themes/BaseV1/layouts/parts/singles/location.php
COPY compose/common/lgpd-terms /var/www/html/protected/application/conf/lgpd-terms
COPY compose/common/agent-form-1.php /var/www/html/protected/application/themes/BaseV1/layouts/parts/singles/agent-form-1.php
COPY compose/common/agent-form-2.php /var/www/html/protected/application/themes/BaseV1/layouts/parts/singles/agent-form-2.php

COPY compose/common/php-ini.d /usr/local/etc/php/conf.d

RUN curl https://raw.githubusercontent.com/opauth/facebook/master/FacebookStrategy.php > /var/www/html/protected/application/plugins/MultipleLocalAuth/Facebook/FacebookStrategy.php
