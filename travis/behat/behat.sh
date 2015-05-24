#!/bin/bash
FILE_PATH=$(dirname $(readlink -f "$0"))
php $FILE_PATH/vendor/behat/behat/bin/behat --config $FILE_PATH/travis/behat/behat.yml --profile cli
