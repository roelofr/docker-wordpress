###
#
# Makefile for Docker files
#
# Just run make
#
###

.PHONY: build deploy

build: Dockerfile docker-build config.php
	./docker-build

deploy: Dockerfile docker-deploy config.php
	./docker-deploy
