#!/usr/bin/bash
sqlite3 database/db.sqlite 'DROP TABLE instruments; DROP TABLE rehearsals; DROP TABLE users; DROP TABLE; locations;'
truncate -s 0 database/db.sqlite
php artisan migrate --force
php artisan db:seed