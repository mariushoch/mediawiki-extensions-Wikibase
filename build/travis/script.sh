#! /bin/bash

set -x

cd ../phase3/tests/phpunit

#php phpunit.php --group Wikibase #--exclude-group GetEntitiesTest
php phpunit.php --group GetEntitiesTest
