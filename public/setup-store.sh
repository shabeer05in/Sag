# 0) make sure wp-cli can run
wp core is-installed --allow-root >/dev/null

# 1) Theme + plugins
wp theme install astra --activate --allow-root
wp plugin install woocommerce --activate --allow-root
wp plugin install megamenu --activate --allow-root
wp plugin install elementor --activate --allow-root
wp plugin install smash-balloon-instagram-feed --activate --allow-root || true

# 2) Create core pages …
# (paste the rest of your block here unchanged)
