.PHONY: help

COLOR_RESET   = \033[0m
COLOR_INFO    = \033[32m
COLOR_COMMENT = \033[33m
COLOR_TITLE = \033[0;31m

help:
		@echo " ${COLOR_TITLE}> GENERAL COMMANDS:${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}# make${COLOR_RESET} ${COLOR_INFO}build${COLOR_RESET} (Docker command)"
		@echo " ${COLOR_TITLE}> LIST OF DESIGN PATTERNS AVAILABLE WITH HELP COMMANDS:${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Abstract Factory:${COLOR_RESET}   ${COLOR_INFO}# make abstract-factory${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make abstract-factory-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Adapter:${COLOR_RESET}           ${COLOR_INFO}# make adapter${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make adapter-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Builder:${COLOR_RESET}           ${COLOR_INFO}# make builder${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make builder-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Composite:${COLOR_RESET}         ${COLOR_INFO}# make composite${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make composite-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Decorator:${COLOR_RESET}         ${COLOR_INFO}# make decorator${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make decorator-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Facade:${COLOR_RESET}            ${COLOR_INFO}# make facade${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make facade-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Factory Method:${COLOR_RESET}    ${COLOR_INFO}# make factory-method${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make factory-method-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Flyweight:${COLOR_RESET}         ${COLOR_INFO}# make flyweight${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make flyweight-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Iterator:${COLOR_RESET}          ${COLOR_INFO}# make iterator${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make iterator-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Memento:${COLOR_RESET}           ${COLOR_INFO}# make memento${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make memento-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Money:${COLOR_RESET}             ${COLOR_INFO}# make money${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make money-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Null Object:${COLOR_RESET}       ${COLOR_INFO}# make null-object${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make null-object-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Observer:${COLOR_RESET}          ${COLOR_INFO}# make observer${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make observer-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Prototype:${COLOR_RESET}         ${COLOR_INFO}# make prototype${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make prototype-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Proxy:${COLOR_RESET}             ${COLOR_INFO}# make proxy${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make proxy-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Singleton:${COLOR_RESET}         ${COLOR_INFO}# make singleton${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make singleton-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}State:${COLOR_RESET}             ${COLOR_INFO}# make state${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make state-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Strategy:${COLOR_RESET}          ${COLOR_INFO}# make strategy${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make strategy-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Template Method:${COLOR_RESET}   ${COLOR_INFO}# make template-method${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make template-method-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Command:${COLOR_RESET}           ${COLOR_INFO}# make command${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make command-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Interpreter:${COLOR_RESET}       ${COLOR_INFO}# make interpreter${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make interpreter-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Bridge:${COLOR_RESET}       	   ${COLOR_INFO}# make bridge${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make bridge-help${COLOR_RESET}"
		@echo "   ${COLOR_COMMENT}Visitor:${COLOR_RESET}       	   ${COLOR_INFO}# make visitor${COLOR_RESET} ${COLOR_COMMENT}OR${COLOR_RESET} ${COLOR_INFO}# make visitor-help${COLOR_RESET}"

# Design Patterns Section
build:
	docker-compose build

strategy:
	docker-compose run web php /app/example/strategy.php

template-method:
	docker-compose run web php /app/example/template_method.php

adapter:
	docker-compose run web php /app/example/adapter.php

null-object:
	docker-compose run web php /app/example/null_object.php

facade:
	docker-compose run web php /app/example/facade.php

builder:
	docker-compose run web php /app/example/builder.php

observer:
	docker-compose run web php /app/example/observer.php

decorator:
	docker-compose run web php /app/example/decorator.php

money:
	docker-compose run web php /app/example/money.php

factory-method:
	docker-compose run web php /app/example/factory_method.php

abstract-factory:
	docker-compose run web php /app/example/abstract_factory.php

proxy:
	docker-compose run web php /app/example/proxy.php

singleton:
	docker-compose run web php /app/example/singleton.php

memento:
	docker-compose run web php /app/example/memento.php

flyweight:
	docker-compose run web php /app/example/flyweight.php

composite:
	docker-compose run web php /app/example/composite.php

state:
	docker-compose run web php /app/example/state.php

prototype:
	docker-compose run web php /app/example/prototype.php

iterator:
	docker-compose run web php /app/example/iterator.php

command:
	docker-compose run web php /app/example/command.php

interpreter:
	docker-compose run web php /app/example/interpreter.php

bridge:
	docker-compose run web php /app/example/bridge.php

visitor:
	docker-compose run web php /app/example/visitor.php


# Help Section

abstract-factory-help:
		@echo "${COLOR_INFO}\n\t> The Abstract Factory pattern provides a way to encapsulate a group of individual factories that have a common theme.${COLOR_RESET}\n"

adapter-help:
		@echo "${COLOR_INFO}\n\t> The Adapter pattern converts the interface of a class into another interface the clients expect.${COLOR_RESET}\n"

builder-help:
		@echo "${COLOR_INFO}\n\t> The Builder pattern separates the construction of a complex object from its representation.${COLOR_RESET}\n"

composite-help:
		@echo "${COLOR_INFO}\n\t> The Composite pattern composes objects into tree structures to represent part-whole hierarchies.${COLOR_RESET}\n"

decorator-help:
		@echo "${COLOR_INFO}\n\t> The Decorator pattern dynamically adds/overrides behaviour in an existing method of an object.${COLOR_RESET}\n"

facade-help:
		@echo "${COLOR_INFO}\n\t> The Facade pattern provides a simplified interface to a larger body of code.${COLOR_RESET}\n"

factory-method-help:
		@echo "${COLOR_INFO}\n\t> The Factory Method pattern defines an interface for creating an object, but lets subclasses decide which class to instantiate.${COLOR_RESET}\n"

flyweight-help:
		@echo "${COLOR_INFO}\n\t> The Flyweight pattern minimizes memory use by sharing as much data as possible with other similar objects.${COLOR_RESET}\n"

iterator-help:
		@echo "${COLOR_INFO}\n\t> The Iterator pattern provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.${COLOR_RESET}\n"

memento-help:
		@echo "${COLOR_INFO}\n\t> The Memento pattern provides the ability to restore an object to its previous state.${COLOR_RESET}\n"

money-help:
		@echo "${COLOR_INFO}\n\t> The Money pattern helps in avoiding floating point arithmetic issues when dealing with money.${COLOR_RESET}\n"

null-object-help:
		@echo "${COLOR_INFO}\n\t> The Null Object pattern provides an object as a surrogate for the lack of an object of a given type.${COLOR_RESET}\n"

observer-help:
		@echo "${COLOR_INFO}\n\t> The Observer pattern defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified.${COLOR_RESET}\n"

prototype-help:
		@echo "${COLOR_INFO}\n\t> The Prototype pattern specifies the kind of object to create using a prototypical instance and creates new objects by copying this prototype.${COLOR_RESET}\n"

proxy-help:
		@echo "${COLOR_INFO}\n\t> The Proxy pattern provides a surrogate or placeholder for another object to control access to it.${COLOR_RESET}\n"

singleton-help:
		@echo "${COLOR_INFO}\n\t> The Singleton pattern ensures a class only has one instance, and provides a global point of access to it.${COLOR_RESET}\n"

state-help:
		@echo "${COLOR_INFO}\n\t> The State pattern allows an object to alter its behavior when its internal state changes.${COLOR_RESET}\n"

strategy-help:
		@echo "${COLOR_INFO}\n\t> The Strategy pattern defines a family of algorithms, encapsulate each one, and make them interchangeable.${COLOR_RESET}\n"

template-method-help:
		@echo "${COLOR_INFO}\n\t> The Template Method pattern defines the skeleton of an algorithm in an operation, deferring some steps to subclasses.${COLOR_RESET}\n"

command-help:
		@echo "${COLOR_INFO}\n\t> The Command pattern encapsulates a request as an object, thereby allowing users to parameterize other objects with queues, requests, and operations.${COLOR_RESET}\n"

interpreter-help:
		@echo "${COLOR_INFO}\n\t> The Interpreter pattern implements a specialized language.${COLOR_RESET}\n"

bridge-help:
		@echo "${COLOR_INFO}\n\t> The Bridge pattern decouples an abstraction from its implementation so that the two can vary independently. It promotes composition over inheritance.${COLOR_RESET}\n"

visitor-help:
		@echo "${COLOR_INFO}\n\t> The Visitor pattern defines a new operation to a class without change.${COLOR_RESET}\n"