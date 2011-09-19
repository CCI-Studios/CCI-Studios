# repository info
set :branch, "dev"

# This may be the same as your `Web` server
role :app, "dev.ccistudios.com"

# directories
set :deploy_to, "/home/ccistud/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[com_gridview plg_ie6 public template]
