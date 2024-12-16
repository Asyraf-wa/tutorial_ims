# Tutorial Project - Intern Management System

A sample tutorial project that create a web application for Intern Management System. This system will process the application details and present it in a formal correspondence. The Correspondence also can be download as PDF.

## Author

-   [@Asyraf-wa](https://github.com/Asyraf-wa)

## Documentation

[Documentation](https://linktodocumentation)

## Run Locally

Clone the project

```bash
  git clone https://github.com/Asyraf-wa/tutorial_ims.git
```

Create database in `phpmyadmin`

Configure database

```bash
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => '',
            'database' => 'ims',
            'url' => env('DATABASE_URL', null),
        ],
```

Database migration

```bash
  bin/cake migrations migrate
```

Database seeding

```bash
  bin/cake migrations seed
```

Default account Info

```bash
  admin@localhost.com | 123456
```

## Acknowledgements

-   [ReCRUD](https://github.com/Asyraf-wa/recrud)
-   [Code The Pixel Youtube](https://www.youtube.com/@codethepixel)
-   [Code The Pixel](https://codethepixel.com/)

## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)

## Screenshots

[![Watch the tutorial video](https://www.youtube.com/watch?v=EzOlN2Uc0Vs)](https://www.youtube.com/watch?v=EzOlN2Uc0Vs)
