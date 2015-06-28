#! /bin/bash

set -x

cd ../phase3

cat vendor/composer/autoload_classmap.php

php maintenance/update.php --quick
