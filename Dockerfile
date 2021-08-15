# This is the the code used to build the Dockerfile.

FROM ubuntu:latest

RUN apt-get -y update

RUN apt-get install -y git

ENV TZ=Europe/Minsk

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt update && apt-get install -y apache2 curl

RUN git clone https://github.com/Vahech/luckystar.git

WORKDIR luckystar

COPY ./ /var/www/html/ 

ENTRYPOINT ["/usr/sbin/apache2ctl"]

EXPOSE 80

CMD ["-D", "FOREGROUND"]

# The following are the commands used to build it.

# docker build -t apacheserver .

# docker run -d --name apache1 apacheserver

# docker exec apache1 curl localhost
