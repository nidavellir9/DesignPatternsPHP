# Trainnig State Pattern

State and Strategy are quite similar in implementation but different in motivation. In the State Pattern, an object changes its behavior depending on the intrinsic state it’s in. In the case of Strategy, the behavior of an object is dependent on the provided algorithm. In both use cases, employed states and algorithms are encapsulated in separate classes.
State and Strategy are both behavioral patterns. Behavioral design patterns are focused on communication and sharing responsibilities between objects.

People do things in different ways depending on the mood they are in. If you are happy you do a lot of things differently than when you are sad and depressed. Let’s try to model this in code. There is a Person class that represents a real person. Our person can introduce himself, get insulted or hugged. Insulting makes him angry and a hug makes him happier — a real-world example indeed.

State pattern has three elements:
Context (Person)- uses states and defines the interface for clients
State (Mood)- an interface of each state
Concrete State (Happy, Neutral, Angry)- implementation of State