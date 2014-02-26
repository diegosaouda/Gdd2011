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

php php-cs-fixer.phar fix src/ --fixers=linefeed,short_tag,indentation,phpdoc_params,unused_use,trailing_spaces,return,visibility,php_closing_tag,braces,extra_empty_lines,function_declaration,include,controls_spaces,psr0,elseif,eof_ending
