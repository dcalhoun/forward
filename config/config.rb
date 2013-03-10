# Customize this file, and then rename it to config.rb

set :application, "forward"
set :repository,  "git@github.com:dcalhoun/forward.git"
set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

# Using Git Submodules?
set :git_enable_submodules, 1

# Forward SSH agent
ssh_options[:forward_agent] = true

# This should be the same as :deploy_to in production.rb
set :production_deploy_to, '/home/115810/users/.home/domains/davidcalhoun.me/capistrano_deployments'

# The domain name used for your staging environment
set :staging_domain, 'staging.example.com'

# Database
# Set the values for host, user, pass, and name for both production and staging.
set :wpdb do
	{
		:production => {
			:host     => 'internal-db.s115810.gridserver.com',
			:user     => 'db115810',
			:password => '9VzPsw6ZYMDq',
			:name     => 'db115810_forward',
		},
		:staging => {
			:host     => 'STAGING DB HOST',
			:user     => 'STAGING DB USER',
			:password => 'STAGING DB PASS',
			:name     => 'STAGING DB NAME',
		}
	}
end

# You're not done! You must also configure production.rb and staging.rb
