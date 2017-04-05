#!/usr/bin/make -f
#
# Build website with environment
#
#

# Detect OS
OS = $(shell uname -s)

# Defaults
ECHO = echo

# Make adjustments based on OS
# http://stackoverflow.com/questions/3466166/how-to-check-if-running-in-cygwin-mac-or-linux/27776822#27776822
ifneq (, $(findstring CYGWIN, $(OS)))
	ECHO = /bin/echo -e
endif

# Colors and helptext
NO_COLOR	= \033[0m
ACTION		= \033[32;01m
OK_COLOR	= \033[32;01m
ERROR_COLOR	= \033[31;01m
WARN_COLOR	= \033[33;01m

# Which makefile am I in?
WHERE-AM-I = $(CURDIR)/$(word $(words $(MAKEFILE_LIST)),$(MAKEFILE_LIST))
THIS_MAKEFILE := $(call WHERE-AM-I)

# Echo some nice helptext based on the target comment
HELPTEXT = $(ECHO) "$(ACTION)--->" `egrep "^\# target: $(1) " $(THIS_MAKEFILE) | sed "s/\# target: $(1)[ ]*-[ ]* / /g"` "$(NO_COLOR)"



# Theme
#LESS 		 = theme/style_anax-flat.less
#LESS_OPTIONS = --strict-imports --include-path=theme/mos-theme/style/
#FONT_AWESOME = theme/font-awesome/fonts/
LESS 		 = theme/style.less
LESS_OPTIONS = --strict-imports --include-path=theme/modules/
NPMBIN       = theme/node_modules/.bin



# target: help                - Displays help.
.PHONY:  help
help:
	@$(call HELPTEXT,$@)
	@$(ECHO) "Usage:"
	@$(ECHO) " make [target] ..."
	@$(ECHO) "target:"
	@egrep "^# target:" Makefile | sed 's/# target: / /g'



# target: clean-cache         - Clean the cache, might need sudo.
.PHONY: clean-cache
clean-cache:
	@$(call HELPTEXT,$@)

	@$(ECHO) "$(ACTION)Remove and re-create the directory for the cache items$(NO_COLOR)"
	[ ! -d cache ] || rm -rf cache/ 
	install -d -m 777 cache/cimage cache/anax



# target: cimage-create       - Update and create basis for cimage.
.PHONY: cimage-create

define CIMAGE_CONF
<?php
return [
	'mode'         => 'development',
	'image_path'   =>  __DIR__ . '/../img/',
	'cache_path'   =>  __DIR__ . '/../../cache/cimage/',
];
endef
export CIMAGE_CONF

cimage-create:
	@$(call HELPTEXT,$@)

	@$(ECHO) "$(ACTION)Copy from CImage$(NO_COLOR)"
	install -d htdocs/cimage
	rsync -a vendor/mos/cimage/webroot/imgd.php htdocs/cimage/imgd.php
	rsync -a vendor/mos/cimage/icc/ htdocs/cimage/icc/
	@echo "$$CIMAGE_CONF" > htdocs/cimage/imgd_config.php



# target: site-build          - Copy default structure from Anax Flat.
.PHONY: site-build
site-build: cimage-create
	@$(call HELPTEXT,$@)

	@$(ECHO) "$(ACTION)Copy from anax-flat$(NO_COLOR)"
	rsync -a vendor/mos/anax-flat/htdocs/ htdocs/
	rsync -a vendor/mos/anax-flat/config/ config/
	rsync -a vendor/mos/anax-flat/content/ content/
	rsync -a vendor/mos/anax-flat/view/ view/

	@$(ECHO) "$(ACTION)Create the directory for the cache items$(NO_COLOR)"
	install -d -m 777 cache/cimage cache/anax



# target: site-build-dbwebb   - Make site look like dbwebb.se.
.PHONY: site-build-dbwebb
site-build-dbwebb: site-build
	@$(call HELPTEXT,$@)
	rsync -a vendor/mos/anax-flat/example/dbwebb.se/ ./



# target: site-update         - Make composer update and copy latest files.
.PHONY: site-update
site-update:
	@$(call HELPTEXT,$@)
	composer update

	@$(ECHO) "$(ACTION)Copy Makefile$(NO_COLOR)"
	rsync -av vendor/mos/anax-flat/Makefile .



# target: prepare-build       - Clear and recreate the build directory.
.PHONY: prepare-build
prepare-build:
	@$(call HELPTEXT,$@)
	rm -rf build
	install -d build/css build/lint



# target: less                - Compiling LESS stylesheet.
.PHONY: less
less: prepare-build
	@$(call HELPTEXT,$@)
	$(NPMBIN)/lessc $(LESS_OPTIONS) $(LESS) build/css/style.css
	$(NPMBIN)/lessc --clean-css $(LESS_OPTIONS) $(LESS) build/css/style.min.css
	cp build/css/style.min.css htdocs/css/
	#@cp build/css/style.css htdocs/css/

	#@rsync -a $(FONT_AWESOME) htdocs/fonts/



# target: less-lint           - Linting LESS/CSS stylesheet.
.PHONY: less-lint
less-lint: less
	@$(call HELPTEXT,$@)
	$(NPMBIN)/lessc --lint $(LESS_OPTIONS) $(LESS) > build/lint/style.less
	- $(NPMBIN)/csslint build/css/style.css > build/lint/style.css
	ls -l build/lint/
