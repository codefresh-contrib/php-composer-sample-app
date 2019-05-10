# Codefresh Php example

Original source: https://laravel-news.com/multi-stage-docker-builds-for-laravel

## Build locally

Normal docker build 

`docker build . -t php-sample-app`


## Run locally

`docker run -p 8080:80 php-sample-app`

and then visit in your browser

* http://localhost:8080/

## Build in Codefresh

Example pipeline:

* [Simple pipeline](codefresh.yml)


Read https://codefresh.io/docs/docs/learn-by-example/php/ for more details



