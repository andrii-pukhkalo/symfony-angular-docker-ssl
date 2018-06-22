FROM nginx
MAINTAINER SYMFONY

COPY conf.d/* /etc/nginx/conf.d/

ENV REFRESHED_AT 2018-06-22

COPY html /usr/share/nginx/html

###############################################################################
#                                    START
###############################################################################

ADD ./start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh
CMD [ "/usr/local/bin/start.sh" ]
