#!/bin/bash

echo "###############################################################"
echo "Installing the dependencies..."
echo "###############################################################"

echo "Installing wordpress plugins from composer.json"

# Activate the composer plugins
wp plugin activate --all --allow-root

echo "Installing ${WP_THEME_NAME} theme"

# Activate the composer theme
wp theme activate ${WP_THEME_NAME} --allow-root

echo "Replacing all instances of ${WP_PROD_SITE} in DB with ${WP_LOCAL_SITE}"

# Search/Replace URL in DB to rename to local URL
wp search-replace ${WP_PROD_SITE} ${WP_LOCAL_SITE} --allow-root