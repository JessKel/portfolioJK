# Mon Portfolio

## Presentation

Bienvenue sur le dépôt GitHub de mon portfolio ! 🚀

Explorez mon univers créatif, découvrez mes compétences variées, et plongez dans les projets passionnants que j'ai réalisés. Ce portfolio est bien plus qu'une simple vitrine de mes travaux ; c'est une invitation à découvrir l'intersection entre la technologie, la créativité et l'innovation.

Pourquoi explorer ce portfolio ?
🌐 Découvrez une diversité de projets allant de sites web captivants à des applications innovantes.
💡 Explorez mes compétences techniques, de la programmation aux technologies émergentes.
🎨 Plongez dans un design soigné et une expérience utilisateur optimale.
Que vous soyez un recruteur cherchant un talent polyvalent ou un curieux passionné par la technologie, je suis convaincu que mon portfolio saura captiver votre attention. N'hésitez pas à explorer, partager et me contacter pour discuter de futures collaborations !

## BDD
Vous trouvez la modélisation de la base de données selon le modèle MLD ci-après : http://localhost:8080/build/images/Modéalisation_MLD.82836cbb.png.

## WIFRAMES
Vous trouverez ci-dessous les liens vers les wireframes du site :
Format desktop : http://localhost:8080/build/images/Wireframes_portfolio_JK.3c54f1ac.png
Format mobile partie 1 : http://localhost:8080/build/images/Wireframes_portfolio_JK_mobile1.8fa7d938.png
Format mobile partie 2 : http://localhost:8080/build/images/Wireframes_portfolio_JK_mobile2.0aecb19b.png

## BACKLOG
Vous trouvez ci-après le lien vers mon backlog : http://localhost:8080/build/images/Backlog_Portfolio_JK.c874800d.pdf

## Getting Started

### Prerequisites

1. Check composer is installed
2. Check yarn & node are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`
4. Run `yarn encore dev` to build assets

### Working

1. Run `symfony server:start` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets (or `yarn dev-server` do the same with Hot Module Reload activated)

### Testing

1. Run `php ./vendor/bin/phpcs` to launch PHP code sniffer
2. Run `php ./vendor/bin/phpstan analyse src --level max` to launch PHPStan
3. Run `php ./vendor/bin/phpmd src text phpmd.xml` to launch PHP Mess Detector

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command:

`git config --global core.autocrlf true`

The `.editorconfig` file in root directory do this for you. You probably need `EditorConfig` extension if your IDE is VSCode.

### Run locally with Docker

1. Fill DATABASE_URL variable in .env.local file with
`DATABASE_URL="mysql://root:password@database:3306/<choose_a_db_name>"`
2. Install Docker Desktop an run the command:
```bash
docker compose up -d
```
3. Wait a moment and visit http://localhost:8000


## Deployment

Some files are used to manage automatic deployments (using Docker, GitHub Action to a Traefik environment). Please do not modify them.

* [docker-compose.yml](/docker-compose.yml) Docker configuration for local development
* [docker-compose.prod.yml](/docker-compose.prod.yml) Docker configuration for production
* [.github/workflows/deploy-traefik.yml](/.github/workflows/deploy-traefik.yml) GitHub Action workflow to deploy Traefik
* [Dockerfile](/Dockerfile) Web app configuration for Docker container
* [docker-entry.sh](/docker-entry.sh) shell instruction to execute when docker image is built
* [nginx.conf](/ginx.conf) Nginx server configuration
* [php.ini](/php.ini) Php configuration


## Built With

* [Symfony](https://github.com/symfony/symfony)
* [GrumPHP](https://github.com/phpro/grumphp)
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHPStan](https://github.com/phpstan/phpstan)
* [PHPMD](http://phpmd.org)
* [Sass-Lint](https://github.com/sasstools/sass-lint)


## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning


## Authors

Jessica Keller / Wild Code School

## License

MIT License

Copyright (c) 2019 aurelien@wildcodeschool.fr

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

## Acknowledgments

