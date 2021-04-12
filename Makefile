.PHONY: help

COLOR_RESET   = \033[0m
COLOR_INFO    = \033[32m
COLOR_COMMENT = \033[33m
COLOR_TITLE = \033[0;31m

help:
		@echo " ${COLOR_TITLE}> List of design patterns to run:${COLOR_RESET}"
		@echo " ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}strategy${COLOR_RESET}"
		@echo " ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}template-method${COLOR_RESET}"
		@echo " ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}adapter${COLOR_RESET}"
		@echo " ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}null-object{COLOR_RESET}"

strategy:
	docker run -it design-patterns php /app/example/strategy.php

template-method:
	docker run -it design-patterns php /app/example/template_method.php

adapter:
	docker run -it design-patterns php /app/example/adapter.php

null-object:
	docker run -it design-patterns php /app/example/null_object.php