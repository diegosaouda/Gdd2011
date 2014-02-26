#!/bin/bash

#Uso do PHP CS Fixer
vendor/bin/php-cs-fixer fix src/ -vv

#uso do phpmd (mess detector)
vendor/bin/phpmd src/ text codesize,controversial,design,naming,unusedcode

#Verificar codigos duplicados (copy paste)
vendor/bin/phpcpd src/

#Uso do phpcs (validar a qualidade do codigo escrito segundo a PSR)
#Eh preciso instalar o php_CodeSniffer
phpcs --standard=PSR2 src/
