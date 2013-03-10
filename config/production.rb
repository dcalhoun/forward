# This file is only loaded for the production environment
# Customize it and rename it as production.rb

# Where should the site deploy to?
set :deploy_to, "/home/115810/users/.home/domains/davidcalhoun.me/capistrano_deployments/forward"
set :user,      "davidcalhoun.me"
set :use_sudo, false

# Now configure the servers for this environment

# OPTION 1

role :web, "s115810.gridserver.com"
# role :web, "second web server here"
# role :web, "third web server here, etc"

# role :memcached, "your memcached server IP address or hostname here"
# role :memcached, "second memcached server here, etc"

# OPTION 2

# If your web servers are the same as your memcached servers,
# comment out all the "role" lines and use "server" lines:

# server "your web/memcached server IP address or hostname here", :web, :memcached
# server "second web/memcached server here", :web, :memcached
