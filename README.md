<img src="./logo.png" alt="Logo - PHP 8 Design Patterns"  width="80%" height="80%">

![Licence](https://img.shields.io/badge/licence-MIT-blue)
![Package Stars](https://img.shields.io/badge/stars-%E2%98%85%E2%98%85%E2%98%85%E2%98%85%E2%98%85-yellow)

Everyweek a new Pattern + Article on www.medium.com/@anhaia.gabriel and www.medium.com/mestredev

# PHP 8 - Design Patterns

This repository was created to show the implementation of a variety of Design Patterns using PHP 8. There is no
dependency on a framework, and the examples are the most real as possible based on my own experiences solving real-life
problems. Once you learn the design pattern and its concept, it will be effortless to apply it in any PHP project.

## Patterns implemented + Article

| 📖 Pattern              |   ✍️ Article / Post 📚                                                                                        |
| -----------          | -----------                                                                                          |
| Template Method      | [LEARN HERE 📖 ](https://medium.com/mestredev/template-method-php-8-a357f3665a4b)                    |
| Strategy             | [LEARN HERE 📖 ](https://medium.com/mestredev/strategy-in-php-8-design-patterns-2044e5ef54ed)        |
| Adapter              | [LEARN HERE 📖 ](https://medium.com/mestredev/adapter-php-8-75e00034ae48)                            |
| Facade               | [LEARN HERE 📖 ](https://medium.com/mestredev/facade-php-8-design-patterns-40b1ef8566b5)                                                       |
| Factory Method             | Soon |

## Coming soon

- Null Object
- Command
- Observer
- Abstract Factory
- Builder
- State
- Decorator
- Object Pool
- Prototype
- Singleton
- Bridge
- Composite
- Fly weight
- Proxy
- Chain of Responsability
- Interpreter
- Iterator
- Mediator
- Money
- Memento
- Visitor

## Dependencies

- Docker

## Running the project

I strongly recommend that you follow the articles (links above) and run it with Docker. It will be much easier, and you
need to install Docker on your computer, independent of the OS you are using. With a few commands, you will run/test all
the Design Patterns implemented through the course.

Build de container:

```# docker build -t design-patterns .``` or if you prefer ```# make build```

Run the following command in order to test the design patterns:

```# make help``` and then you will see the list of commands

You just need to run the command with the pattern you want to test, for example:

```# make strategy```

## Additional Information

- If you take a look at the examples into the blog, or inside the folders `/src/{$pattern_name}/` you will notice that
  all the examples contain a folder called `components`, those folders are the files/classes used to demonstrate how to
  use each pattern. Never consider what is in there as part of the pattern! They are not to be followed in your
  applications.
