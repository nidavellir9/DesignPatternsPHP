# Trainning Chain of Responsability Pattern

Chain of Responsibility se basa en transformar comportamientos particulares en objetos autónomos llamados manejadores.

Decouple the sender from the receiver and make your code more flexible.

The chain of responsibility makes the sender of the request independent from the receiver. The request can be passed to multiple sequential classes that can process or validate data and pass it further to the final handler.
Each handler has custom logic but shares a common interface so handlers can be used interchangeably and their number and order can be defined at runtime.

One of the common examples of usage of the chain of responsibility is a set of requesting middlewares that process incoming HTTP requests. Depending on the configuration, we may like to check the user’s credentials, HTTP header, or body of requests.

Some routes might be public and we will only use basic validation but some should be available only to administrators and be thoroughly validated.
The chain of responsibility gives us a lot of flexibility and allows failing fast if our requests do not meet one of the requirements.

Control the order of processing. We can fail fast if some of the simple rules are not fulfilled and avoid more complex checks.
It is easier to separate the responsibilities of each handler (the single responsibility principle).
It is easier to add new rules without modifications to existing ones (open/closed principle).