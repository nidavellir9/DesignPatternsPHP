# Trainning Abstract Factory Pattern
Abstract Factory es un patrón de diseño creacional que nos permite producir familias de objetos relacionados sin especificar sus clases concretas.

El patrón Abstract Factory puede implementarse utilizando el patrón Factry Method. El objeto ConcreteFactory se puede implementar como Singleton ya que solo se necesita una instancia del objeto ConcreteFactory.

Utiliza el patrón Abstract Factory cuando tu código deba funcionar con varias familias de productos relacionados, pero no desees que dependa de las clases concretas de esos productos, ya que puede ser que no los conozcas de antemano o sencillamente quieras permitir una futura extensibilidad.