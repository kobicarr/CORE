#!/bin/bash
set -e 

echo "Migrating databaseee 'php artisan migrate --force'..."
php artisan migrate --force