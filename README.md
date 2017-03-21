Yii 2 Advanced Sandbox Project
===============================

WIP
---

This repository based on [Yii2 Advanced Template](https://github.com/yiisoft/yii2-app-advanced).

MAIN GOAL
---------

Provide the example of the complicated application based on reusable packages with implementation common features of a web application.

Features for implementation:

- standard admin interface (UI)
- user management (registration, auth, RBAC)
- cms
- REST API
- i18n and multi languages
- catalog (taxonomies, filters etc.)
- multi site

PACKAGES
--------

- [dektrium/yii2-user](https://github.com/dektrium/yii2-user)


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```


INSTALLATION
------------

- At first please check [official documentation for advance template installation](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md)

- Run migration for all needed modules and application migrations (or `make db-migrate`)

to be continued ..
