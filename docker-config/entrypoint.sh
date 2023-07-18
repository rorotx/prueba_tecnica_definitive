#!/bin/sh

# The application should have already been installed in the Dockerfile;
# no need to repeat it.

# Create key material if necessary.
# npm run dev --prefix /var/www/html/public

cd /var/www/html/public
php artisan migrate

# Run the main container command
exec "$@"