# Configuration file for Docker
FROM IMAGE

# Install wp-cli
RUN curl \
    -o /usr/bin/wp-cli \
    https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod a+x /usr/bin/wp-cli
