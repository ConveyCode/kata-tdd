# https://tech.davis-hansson.com/p/make/

SHELL := bash
.SHELLFLAGS := -eu -o pipefail -c

ifeq ($(origin .RECIPEPREFIX), undefined)
  $(error This Make does not support .RECIPEPREFIX. Please use GNU Make 4.0 or later)
endif
.RECIPEPREFIX = >

.DEFAULT_GOAL := help

DC = docker compose -f docker-compose.yml

help:
> @grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) \
> | sed -n 's/^\(.*\): \(.*\)##\(.*\)/\1\3/p' \
> | column -t  -s ' '
.PHONY: help

build: ## Build containers.
> @$(DC) build
.PHONY: build

install: ## Install things.
> @$(DC) run --rm php composer install
.PHONY: install

php: ## Enter php cli.
> @$(DC) run --rm php bash
.PHONY: php
