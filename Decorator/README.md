# Trainning Decorator Pattern

Decorator es un patrón de diseño estructural que te permite añadir funcionalidades a objetos colocando estos objetos dentro de objetos encapsuladores especiales que contienen estas funcionalidades.

The Decorator attaches additional responsibilities to an object dynamically. The ornaments that are added to pine are examples of Decorators. Lights, garland, candy canes, glass ornaments, etc., can be added to a tree to give it a festive look. The ornaments do not change the tree itself which is recognizable as a Christmas tree regardless of particular ornaments used. As an example of additional functionality, the addition of lights allows one to "light up" a Christmas tree.

In the Decorator pattern, a class will add functionality to another class, without changing the other classes' structure.

Vestir ropa es un ejemplo del uso de decoradores. Cuando tienes frío, te cubres con un suéter. Si sigues teniendo frío a pesar del suéter, puedes ponerte una chaqueta encima. Si está lloviendo, puedes ponerte un impermeable. Todas estas prendas “extienden” tu comportamiento básico pero no son parte de ti, y puedes quitarte fácilmente cualquier prenda cuando lo desees.

Decorator is a useful pattern that will make adding new functionality to your code easier.

Decorator has the following elements (in Sells example):
- Component (Product): defines an interface of elements that can be decorated
- Concrete component (TV, Shirt ): implementation of Component
- Decorator (ProductDecorator ): defines an interface of Decorators
- Concrete Decorator (SummerSale, WinterSale ): implementations of Decorator