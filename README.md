# Wraith

Wraith is built using the Roots stack of [Bedrock](https://roots.io/bedrock/) and [Sage](https://roots.io/sage/) (no Trellis).

## Features

- Better folder structure, based on Laravel's folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))
- Automatic compiling and syntax validation with [Bud](https://bud.js.org/)
- Hot reloading in local evironment with proxy URL
- Easy package management with [Yarn](https://yarnpkg.com/)
- Templating with [Laravel Blade](https://laravel.com/docs/10.x/blade)
- Utility based [Tailwind CSS](https://tailwindcss.com/) - v3.x
- SVG & JS based [Fontawesome](https://fontawesome.com/docs/web/setup/packages) included as standard
- Smaller dist css files with Tailwind JIT engine
- Cleaner WordPress outputted markup & more nice features with [Soil plugin](https://roots.io/plugins/soil/)
- Laravel components with [Acorn](https://roots.io/acorn/)

## Requirements

- PHP >= 8.1
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- [Node.js](https://nodejs.org/en/) >=16 (recommend 16.14.2)
- [Yarn](https://yarnpkg.com/)
- Local database server (recommend MySQL Brew package)

## Key differences in new version

- Compiling is now handled by [Bud](https://github.com/roots/bud), replacing Laravel mix. It’s now even faster
- No more `webpack.mix.js` file, instead there is a new `bud.config.js` file where you specify a proxy URL for your local server
- PHP 8.1 is now the minimum requirement
- Node 16 is now the minimum requirement
- `yarn dev` is now the default command to start watching files
- `yarn build` now works for both staging and production environments, no more need for `yarn build:production`
- The landing page and holding page (Spectre) flexible content blocks have now been incorporated into the global blocks and default page template, now with more blocks as standard. There are also 2 default pages setup for a landing page (e.g. PPC campaign) and holding page
- It’s now possible to build Laravel components into websites using the [Acorn](https://roots.io/acorn/) plugin from Roots
- All tailwind spacing classes now use the default values e.g. 1 = .25rem, 4 = 1rem etc.
- all `^-grey-` tailwind classes are now `^-gray-`

## Quick Install

**Requirements**
- [Gitub CLI](https://github.com/cli/cli#installation)
- GitHub Command Line Tools (installed from GitHub Desktop app)
- [wp dotenv CLI](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
- [Laravel Valet](https://laravel.com/docs/10.x/valet)
- Local MySQl server - [guide for installing with brew](https://flaviocopes.com/mysql-how-to-install/)

We have created a terminal command to help you get started with a new working repo in a few minutes. It's recommended to set this up as a bash command, so you can specify a project name to run all commands programmatically. Some elements of these commands will change depending on your OS, folder structure and text editor of choice, but here's an example:

`wraith-create your-repository-name`

```
gh repo create teamicaal/$1 --private
cd ~/Local\ Sites
git clone --bare https://github.com/teamicaal/wraith.git
cd wraith.git
git push --mirror https://github.com/teamicaal/$1.git
cd ..
rm -rf wraith.git
git clone https://github.com/teamicaal/$1.git
cd $1
valet link $1
valet secure $1
valet isolate php@8.1 --site=$s1
wp dotenv init --template=.env.example --with-salts
wp dotenv set DB_NAME local_$1 --quote-single
wp dotenv set DB_USER root --quote-single
wp dotenv set DB_PASSWORD root --quote-single
wp dotenv set WP_HOME http://$1.test --quote-single
wp dotenv set ACF_PRO_KEY b3JkZXJfaWQ9Njc4NzZ8dHlwZT1wZXJzb25hbHxkYXRlPTIwMTUtMTEtMDIgMTI6MDY6MjI= --quote-single
composer install
cd web/app/themes/wraith
composer install
yarn
```

Once this is done, you just need to set up a local database, configure your `bud.config.js` file and run `yarn dev` in the theme directory.

## Manual Installation

1. Create a new empty repository for your project in teamicaal. Make sure it's set to private.
2. Go to the repository settings > Collaborators & Teams, and add the Dev team as with admin permissions
3. In Terminal, cd into your local GitHub create a bare clone of this repository
  ```
  git clone --bare https://github.com/teamicaal/wraith.git
  ```
4. Mirror-push to the new repository
  ```
  cd wraith.git
  git push --mirror https://github.com/teamicaal/new-repository.git
  ```
5. Remove the temporary local repository you created earlier
  ```
  cd ..
  rm -rf wraith.git
  ```
6. Visit your new repository. Set the default branch to master, and remove any unnecessary branches
7. Clone your new repository to your local projects folder
8. Create a local database for your project and import it from the [theme dev site](https://wraith.icaal.dev)
- If you're using [Laravel Valet](https://laravel.com/docs/8.x/valet)
  ```
  cd new-repository
  valet link your-domain
  valet secure your-domain
  valet isolate php@8.1 --site=your-domain
  ```
- If you're not using Valet, you will need to create a local host for your project, e.g. through Mamp, Xamp or another local PHP server.
9. Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed. Note that we use `wr_` as the database prefix, as opposed to the default `wp_`

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [Bedrock WordPress salts generator](https://roots.io/salts.html)

**Optional** - If you need to host your database on a public server (e.g. s1.icaal.co.uk) set your `DB_HOST` to `127.0.0.1:5555`. You'll then need to open up an SSH tunnel to forward localhost requests to the server
```
ssh -N -L 5555:127.0.0.1:3306 dev@s1.icaal.co.uk -vv
```

10. Update `bud.config.js` with your local domain
11. In your project directory, install dependencies
  ```
  composer install
  ```
12. Add the `uploads` folder from the [theme dev site](https://wraith.themes.icaal.co.uk)
13. In your theme directory, install dependencies
  ```
  cd web/app/themes/your-theme
  composer install
  ```
14. Import the starting database from the [theme dev site](https://wraith.themes.icaal.co.uk)
15. Build theme theme package with Yarn and start developing. Bud will create a proxy server at example.test:3000 and will start watching for file changes. Bud hot reloads the proxy URL on file change, and injects new styling and scripts on the fly.
  ```
  yarn
  yarn dev
  ```
16. Access WordPress admin at `https://example.test/wr-admin/`

17. Update the password for the default WordPress user

18. Configure the WordPress settings as you would with any other website e.g. site title, tagline, search engine visibility, default categories etc.

19. Run a search & replace on the database to update all instances of the old URL

20. Refresh your permalinks in Settings > Permalinks

21. You can run the following command in the theme directory to prep the files for distribution
- `yarn build` - Build theme for distribution (for staging or production)

22. Happy building!

## Documentation

Bedrock documentation is available at [https://roots.io/bedrock/docs/installation/](https://roots.io/bedrock/docs/installation/).
Sage documentation is available at [https://roots.io/sage/docs/installation/](https://roots.io/sage/docs/installation/).
