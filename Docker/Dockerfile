# syntax=docker/dockerfile:1.4

FROM --platform=$BUILDPLATFORM php:7.4-apache as builder

CMD ["apache2-foreground"]

FROM builder as dev-envs

RUN <<EOF
apt-get update
apt-get install -y --no-install-recommends git
EOF

RUN <<EOF
useradd -s /bin/bash -m vscode
groupadd docker
usermod -aG docker vscode
EOF
# install Docker tools (cli, buildx, compose)
COPY --from=gloursdocker/docker / /

RUN a2enmod rewrite
RUN a2enmod headers

CMD ["apache2-foreground"]