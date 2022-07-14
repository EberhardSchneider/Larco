#!/usr/bin/bash
truncate -s 0 database/db.sqlite
php artisan migrate --force
php artisan db:seed