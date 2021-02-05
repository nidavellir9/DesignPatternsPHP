# Trainnig Strategy Pattern

Strategy es un patrón de diseño de comportamiento que te permite definir una familia de algoritmos, colocar cada uno de ellos en una clase separada y hacer sus objetos intercambiables.

State and Strategy are quite similar in implementation but different in motivation. In the State Pattern, an object changes its behavior depending on the intrinsic state it’s in. In the case of Strategy, the behavior of an object is dependent on the provided algorithm. In both use cases, employed states and algorithms are encapsulated in separate classes.
State and Strategy are both behavioral patterns. Behavioral design patterns are focused on communication and sharing responsibilities between objects.

This design pattern focuses on separating the used algorithm from the client. We want to transfer some data from the array to JSON, XML or a comma-separated string. In each case, we have to handle data in a different way and produce the result in the form of a string. The usage of this component should be as easy as possible. We could provide an instance of a concrete strategy to the __construct of our context or key representing the chosen algorithm.

Strategy pattern has three elements (FormatterExample):
Context (Context)- uses concrete strategies and defines the interface for clients
Strategy(OutputFormatter)- interface for used algorithms
Concrete Strategy (JSONFormatter, XMLFormatter, StringFormatter) -implementation of algorithms