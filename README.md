# PHP 8 - Design Patterns

This repository was created to show the implementation of a variety of Design Patterns using PHP 8.
There is no dependency on a framework, and the examples are the most real as possible based on my own experiences solving real-life problems. Once you learn the design pattern and its concept, it will be effortless to apply it in any PHP project.

## Patterns

- Template Method
- Strategy
- Adapter
- Null Object

## Dependencies

- Docker

## Running the project

I strongly recommend that you follow the course instructions and run it with Docker. It will be much easier, and you need to install Docker on your computer, independent of the OS you are using.
With a few commands, you will run/test all the Design Patterns implemented through the course.

Build de container:

```# docker build -t design-patterns .```

Run the following command in order to test the design patterns:

```# make help``` and then you will see the list of commands

You just need to run the command with the pattern you want to test, for example:

```# make strategy```
