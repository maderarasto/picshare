#!/usr/bin/env bash

php artisan migrate --force
npm run prod
