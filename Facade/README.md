# Trainnig Facade Pattern

Facade es un patrón de diseño estructural que proporciona una interfaz simplificada (pero limitada) a un sistema complejo de clases, bibliotecas o frameworks.

Cuando llamas a una tienda para hacer un pedido por teléfono, un operador es tu fachada a todos los servicios y departamentos de la tienda. El operador te proporciona una sencilla interfaz de voz al sistema de pedidos, pasarelas de pago y varios servicios de entrega.

Facade define una nueva interfaz para objetos existentes, mientras que Adapter intenta hacer que la interfaz existente sea utilizable. Normalmente Adapter sólo envuelve un objeto, mientras que Facade trabaja con todo un subsistema de objetos.

Facade y Mediator tienen trabajos similares: ambos intentan organizar la colaboración entre muchas clases estrechamente acopladas.

Facade define una interfaz simplificada a un subsistema de objetos, pero no introduce ninguna nueva funcionalidad. El propio subsistema no conoce la fachada. Los objetos del subsistema pueden comunicarse directamente.
Mediator centraliza la comunicación entre componentes del sistema. Los componentes conocen únicamente el objeto mediador y no se comunican directamente.