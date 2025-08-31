# Behavioral Patterns

## Template Method

```mermaid
classDiagram
    class AbstractClass {
        +templateMethod(): void
        #primitiveOperation1(): void
        #primitiveOperation2(): void
        #hook(): void
    }

    class ConcreteClassA {
        +primitiveOperation1(): void
        +primitiveOperation2(): void
        +hook(): void
    }

    class ConcreteClassB {
        +primitiveOperation1(): void
        +primitiveOperation2(): void
        +hook(): void
    }

    AbstractClass <|-- ConcreteClassA
    AbstractClass <|-- ConcreteClassB
```

---

## Strategy

```mermaid
classDiagram
    class Context {
        -strategy: Strategy
        +setStrategy(Strategy)
        +execute(): void
    }

    class Strategy {
        <<interface>>
        +doAlgorithm(): void
    }

    class ConcreteStrategyA {
        +doAlgorithm(): void
    }

    class ConcreteStrategyB {
        +doAlgorithm(): void
    }

    Context o-- Strategy : uses
    Strategy <|.. ConcreteStrategyA
    Strategy <|.. ConcreteStrategyB
```

---

## Iterator

```mermaid
classDiagram
    class Aggregate {
        <<interface>>
        +createIterator(): Iterator
    }

    class ConcreteAggregate {
        +createIterator(): Iterator
    }

    class Iterator {
        <<interface>>
        +first()
        +next()
        +isDone(): bool
        +currentItem()
    }

    class ConcreteIterator {
        +first()
        +next()
        +isDone(): bool
        +currentItem()
    }

    Aggregate <|.. ConcreteAggregate
    Iterator <|.. ConcreteIterator
    ConcreteAggregate o-- ConcreteIterator : creates
```

---

## Memento

```mermaid
classDiagram
    class Originator {
        -state
        +save(): Memento
        +restore(m: Memento): void
    }

    class Memento {
        -state
    }

    class Caretaker {
        -history: Memento[]
        +backup(m: Memento)
        +undo(): Memento
    }

    Originator --> Memento : creates
    Caretaker o-- Memento : stores
    Caretaker ..> Originator : restores with
```

---

## Money

```mermaid
classDiagram
    class Money {
        -amount: int|float
        -currency: string
        +add(m: Money): Money
        +subtract(m: Money): Money
        +equals(m: Money): bool
        +convertTo(c: string, r: ExchangeRateProvider): Money
    }

    class ExchangeRateProvider {
        <<interface>>
        +rate(from: string, to: string): float
    }

    Money ..> ExchangeRateProvider : uses for conversion
```

---

## Null Object

```mermaid
classDiagram
    class Service {
        <<interface>>
        +operation(): void
    }

    class RealService {
        +operation(): void
    }

    class NullService {
        +operation(): void
    }

    Service <|.. RealService
    Service <|.. NullService
```

---

## Observer

```mermaid
classDiagram
    class Subject {
        +attach(o: Observer)
        +detach(o: Observer)
        +notify(): void
    }

    class ConcreteSubject {
        -state
        +getState()
        +setState(s)
    }

    class Observer {
        <<interface>>
        +update(s: Subject): void
    }

    class ConcreteObserverA {
        +update(s: Subject): void
    }

    class ConcreteObserverB {
        +update(s: Subject): void
    }

    Subject <|-- ConcreteSubject
    Subject o-- Observer : notifies
    Observer <|.. ConcreteObserverA
    Observer <|.. ConcreteObserverB
```

---

## State

```mermaid
classDiagram
    class Context {
        -state: State
        +setState(State)
        +request(): void
    }

    class State {
        <<interface>>
        +handle(Context): void
    }

    class ConcreteStateA {
        +handle(Context): void
    }

    class ConcreteStateB {
        +handle(Context): void
    }

    Context o-- State : delegates
    State <|.. ConcreteStateA
    State <|.. ConcreteStateB
```

---

## Command

```mermaid
classDiagram
    class Invoker {
        -command: Command
        +setCommand(Command)
        +execute(): void
    }

    class Command {
        <<interface>>
        +execute(): void
    }

    class ConcreteCommand {
        -receiver: Receiver
        +execute(): void
    }

    class Receiver {
        +action(): void
    }

    Invoker o-- Command
    Command <|.. ConcreteCommand
    ConcreteCommand o-- Receiver
```

---

## Chain of Responsibility

```mermaid
classDiagram
    class Handler {
        <<interface>>
        +setNext(h: Handler): Handler
        +handle(r): void
    }

    class AbstractHandler {
        -next: Handler
        +setNext(h: Handler): Handler
        +handle(r): void
    }

    class ConcreteHandlerA {
        +handle(r): void
    }

    class ConcreteHandlerB {
        +handle(r): void
    }

    Handler <|-- AbstractHandler
    AbstractHandler <|-- ConcreteHandlerA
    AbstractHandler <|-- ConcreteHandlerB
    AbstractHandler o-- Handler : forwards to
```

---

## Interpreter

```mermaid
classDiagram
    class Context {
        +lookup(name): any
    }

    class AbstractExpression {
        <<interface>>
        +interpret(Context): any
    }

    class TerminalExpression {
        +interpret(Context): any
    }

    class NonterminalExpression {
        -expressions: AbstractExpression[]
        +interpret(Context): any
    }

    AbstractExpression <|.. TerminalExpression
    AbstractExpression <|.. NonterminalExpression
    NonterminalExpression o-- AbstractExpression : contains
```

---

## Mediator

```mermaid
classDiagram
    class Mediator {
        <<interface>>
        +notify(sender: Colleague, event: string)
    }

    class ConcreteMediator {
        +notify(sender: Colleague, event: string)
    }

    class Colleague {
        <<abstract>>
        -mediator: Mediator
        +setMediator(Mediator)
    }

    class ConcreteColleagueA {
        +trigger(): void
    }

    class ConcreteColleagueB {
        +trigger(): void
    }

    Mediator <|.. ConcreteMediator
    Colleague <|-- ConcreteColleagueA
    Colleague <|-- ConcreteColleagueB
    ConcreteMediator o-- Colleague : coordinates
```

---

## Visitor

```mermaid
classDiagram
    class Element {
        <<interface>>
        +accept(v: Visitor): void
    }

    class ConcreteElementA {
        +accept(v: Visitor): void
        +operationA(): void
    }

    class ConcreteElementB {
        +accept(v: Visitor): void
        +operationB(): void
    }

    class Visitor {
        <<interface>>
        +visitConcreteElementA(e: ConcreteElementA): void
        +visitConcreteElementB(e: ConcreteElementB): void
    }

    class ConcreteVisitor1 {
        +visitConcreteElementA(e: ConcreteElementA): void
        +visitConcreteElementB(e: ConcreteElementB): void
    }

    class ConcreteVisitor2 {
        +visitConcreteElementA(e: ConcreteElementA): void
        +visitConcreteElementB(e: ConcreteElementB): void
    }

    Element <|.. ConcreteElementA
    Element <|.. ConcreteElementB
    Visitor <|.. ConcreteVisitor1
    Visitor <|.. ConcreteVisitor2
    ConcreteElementA ..> Visitor : accepts
    ConcreteElementB ..> Visitor : accepts
```

