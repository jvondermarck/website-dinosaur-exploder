<h1 align="center"><img src="https://cdn.pixabay.com/photo/2021/03/05/22/44/dinosaur-6072475_960_720.png" width="224px"/><br/>
  Dinosaur Exploder Website
</h1>
<p align="center">Dinosaur Exploder is a free, open source shoot 'em up video game <br> written in Java using JavaFX and the FXGL game development library 🦖.</p>
<p align="center">This repository is the website of the main project, written in PHP with the Laravel framework🦖.</p>

<div align="center">
  <img align="center" src="https://img.shields.io/discord/946130675034095667?label=DISCORD&style=for-the-badge">
  <img align="center" src="https://img.shields.io/github/contributors/dylan-power/dinosaur-exploder?style=for-the-badge">
  <img align="center" src="https://img.shields.io/github/license/dylan-power/dinosaur-exploder?style=for-the-badge">
 <img >
</div>

# 📃 Table of content

- [🧑‍💻 Installation](#-installation)
- [🙏Contributing](#contributing)
- [🌍 Support](#-support)
- [✍️ Licence](#️-licence)
- [👨 Creators](#-creators)

# 🧑‍💻 Installation

> You need to make sure that [Laravel](https://laravel.com/) + the [composer](https://getcomposer.org/download/) and [PHP PHP 7.4.28](https://www.php.net/) are installed on your local computer before installing the project.
- To install our project locally, `fork` our repository, and in an empty directory,
  type the following command to `clone` your fork :

```console
$> git clone git@github.com: <user>/git@github.com:jvondermarck/website-dinosaur-exploder.git
```

- Don't forget to configure the .env file to setup your database :
```
DB_CONNECTION=database.sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_FOREIGN_KEYS=true
DB_USERNAME=root
DB_PASSWORD=
```
- Create a file named "database.sqlite" in this [folder](https://github.com/jvondermarck/website-dinosaur-exploder/tree/main/database)
- Update the project with this command to write in the terminal : `composer update`
- Then, tap the following command : `php artisan migrate` (to setup the database)
- And to run the website : `php artisan serve`
- Go to : http://localhost:8000/

> If you have an issue, I advice you to delete the folder [bootstrap](https://github.com/jvondermarck/website-dinosaur-exploder/tree/main/bootstrap) and re-create it.

# 🙏Contributing

> We are very much open to contributions - please read our [code of conduct](https://github.com/jvondermarck/website-dinosaur-exploder/blob/main/CODE_OF_CONDUCT.md) and [contribution guidelines](https://github.com/jvondermarck/website-dinosaur-exploder/blob/main/CONTRIBUTING.md) first.

# 🌍 Support
 
**Any question ? 🦖 Feel free to write us something :** 
- You can ask any question on [GitHub Discussion](https://github.com/dylan-power/dinosaur-exploder/discussions).
- To be updated of everything, follow us on [Twitter](https://twitter.com/DinosaurExplod1).
- You can post an article on our [Website blog](https://dinosaur-exploder.freecluster.eu/forum).
- For quick communication, feel free to join our [Discord server](https://discord.com/invite/nkmCRnXbWm).
- For any issues relating to harassment, please contact us on our [Mail](dinosaurexploder.conduct@gmail.com).

# ✍️ Licence

> This project is licensed under the MIT License - see the [LICENSE.md](https://github.com/jvondermarck/website-dinosaur-exploder/blob/main/LICENSE) file for details.

# 👨 Creators

<p align="center"> We are a group of three creators.</p>

<table align="center">
  <tr>
    <th><img src="https://avatars.githubusercontent.com/u/69395248?v=4?size=115" width="115"><br><strong>@dylan-power</strong></th>
    <th><img  src="https://avatars.githubusercontent.com/u/62793491?v=4?size=115" width="115"><br><strong>@jvondermarck</strong></th>
    <th><img  src="https://avatars.githubusercontent.com/u/52742597?v=4?size=115" width="115"><br><strong>@NoahAldahan</strong></th>
  </tr>
  <tr align="center">
    <td><b>@dylan-power</b> is handling project management and documentation.</td>
    <td><b>@jvondermarck</b> is responsible for web development and help <b>@NoahAldahan</b> with the game programming.</td>
    <td><b>@NoahAldahan</b> is responsible for the game programming.</td>
  </tr>
</table>
