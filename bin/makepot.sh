#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/fork" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./fork/ ./fork/languages/fork.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"Fork\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/fork/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '