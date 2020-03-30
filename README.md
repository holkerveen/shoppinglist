# VAStack

The name VAStack is derived from the JAM (Javascript, Api, Markup) stack for creating rich browser-based internet applications. VAStack stands for Vue & Api Stack. And yes, it is precisely that! This repository aims to be a decent starting point for new web projects or web apps using recent standards. It provides you with a basic setup to enable you to start coding quickly.

# Requirements

Docker. Any reasonable recent install containing docker-compose should do. Personally testing on Windows, but please do let me know if it is working on linux or osx as well. Pull requests are welcome!

# Getting started

In order to get started as quickly as possible, VAStack provides a `docker-compose.yml` file containing a frontend, backend and database server. Follow below instructions, replacing everything between brackets by your data.

```shell script
# Create an environment file to hold all configuration
echo "MYSQL_ROOT_PASSWORD=[your-password-here]" > .env

# Build your development containers
docker-compose build

# Install dependencies
docker-compose run frontend yarn
docker-compose run backend composer install

# Launch
docker-compose up
```

Be patient when launching your containers. It should not take too long, but do give the database container and frontend container a moment to initialize everything properly

# Deploying

TODO
