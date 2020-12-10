#
# To build this docker container run this in the root directory of repo:
#
# docker build --tag wdpr_demo_php:latest --file Dockerfile .
#
# To run the docker container:
#
# docker run --rm -p 80:80 -it --name wdpr_demo_php wdpr_demo_php:latest
#

FROM php:7.4-apache

WORKDIR /var/www/html/

COPY app .

EXPOSE 80