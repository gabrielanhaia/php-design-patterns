.PHONY: help

COLOR_RESET   = \033[0m
COLOR_INFO    = \033[32m
COLOR_COMMENT = \033[33m
COLOR_TITLE = \033[0;31m

help:
		@echo " ${COLOR_TITLE}> GENERAL COMMANDS:${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}build${COLOR_RESET} (Docker command)"
		@echo " ${COLOR_TITLE}> LIST OF DESIGN PATTERNS AVAILABLE:${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}abstract-factory${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}adapter${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}builder${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}decorator${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}facade${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}factory-method${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}flyweight${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}memento${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}money${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}null-object${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}observer${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}proxy${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}singleton${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}strategy${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}template-method${COLOR_RESET}"

build:
	docker build -t design-patterns .

strategy:
	docker run -it design-patterns php /app/example/strategy.php

template-method:
	docker run -it design-patterns php /app/example/template_method.php

adapter:
	docker run -it design-patterns php /app/example/adapter.php

null-object:
	docker run -it design-patterns php /app/example/null_object.php

facade:
	docker run -it design-patterns php /app/example/facade.php

builder:
	docker run -it design-patterns php /app/example/builder.php

observer:
	docker run -it design-patterns php /app/example/observer.php

decorator:
	docker run -it design-patterns php /app/example/decorator.php

money:
	docker run -it design-patterns php /app/example/money.php

factory-method:
	docker run -it design-patterns php /app/example/factory_method.php

abstract-factory:
	docker run -it design-patterns php /app/example/abstract_factory.php

proxy:
	docker run -it design-patterns php /app/example/proxy.php

singleton:
	docker run -it design-patterns php /app/example/singleton.php

memento:
	docker run -it design-patterns php /app/example/memento.php

flyweight:
	docker run -it design-patterns php /app/example/flyweight.php