# Use Alpine Linux
FROM alpine:edge

ADD ./php7.runit /etc/service/php7/run

RUN echo "@community http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories && \
    echo "@testing http://nl.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories && \
    apk update && \
    apk upgrade && \
    apk add --update \
        runit@community=2.1.2-r3 \
        curl \
        git \
        openssh-client \
        php7@community=7.0.14-r2 \
        php7-dev@community=7.0.14-r2 \
        php7-opcache@community=7.0.14-r2 \
        php7-openssl@community=7.0.14-r2 \
        php7-phar@community=7.0.14-r2 \
        php7-mcrypt@community=7.0.14-r2 \
        php7-mbstring@community=7.0.14-r2 \
        php7-json@community=7.0.14-r2 \
        php7-common@community=7.0.14-r2 \
        php7-session@community=7.0.14-r2 \
        php7-ctype@community=7.0.14-r2 \
        php7-dom@community=7.0.14-r2 \
        php7-bcmath@community=7.0.14-r2 \
        php7-xdebug@community=2.5.0-r1 && \
    sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php7/php.ini && \
    echo "xdebug.remote_enable=1" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_handler=dbgp" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_mode=req" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_port=9001" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_autostart=1" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_connect_back=1" >> /etc/php7/conf.d/xdebug.ini && \
    echo "xdebug.remote_host="`/sbin/ip route|awk '/default/ { print $6 }'` >> /etc/php7/conf.d/xdebug.ini && \
    ln -sf /usr/bin/php7 /usr/bin/php && \
    curl --insecure -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/bin/composer && \
    adduser -u 1000 docker -D -s /bin/ash && \
    chown -R docker:docker /home/docker && \
    mkdir /www && \
    chown -R docker:docker /www && \
    mkdir -p /etc/service && \
    chmod a+x /etc/service/php7/run && \
    apk del tzdata && \
    rm -fr /tmp/*.apk && \
    rm -rf /var/cache/apk/*

# Set Workdir
WORKDIR /www

CMD ["sh", "-c", "exec /sbin/runsvdir -P /etc/service/"]