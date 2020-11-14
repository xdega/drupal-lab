# Drupal Lab (Docker + Composer)

This is a simple repo for investigating development workflows, experimenting with backend edits, and general exploration with the framework. It is designed to be quick and easy to spin up a development workflow with the power of Docker, and Composer.

This default provides a good baseline install from which to rapidly try out new code projects (particularly themes and modules). Avoids a lot of hassle of setting up portable development environments with external tools, has better cross-platform support (especially Linux), and serves as an easy template for version-controlled projects.

## Getting Started

You must have Docker installed on the host machine.

While this comes with the required themes and modules installed, you should run `composer install` from the project root. 

If you don't have composer installed natively (preferred) you may use the Docker image (https://hub.docker.com/_/composer) (unsupported)

Then you can simply run:

`docker-compose up`

You should wait approx *10 seconds* for the SQL backup script to complete before the website will be accessible.

The website should be running at: **localhost:8080/web**

PHP My Admin is available at: **localhost:8001**


## Contributing

Pull requests should only be to improve the Docker development environment and should be fully portable to work on Windows, Linux, and Mac.

## Using Premade Install

This project is a pre-installed version of Drupal, with the following credentials for admin login:

**username:** `drupal` **password:** `guest`
