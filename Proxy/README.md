# Trainnig Proxy Pattern

Proxy es un patrón de diseño estructural que proporciona un objeto que actúa como sustituto de un objeto de servicio real utilizado por un cliente. Un proxy recibe solicitudes del cliente, realiza parte del trabajo (control de acceso, almacenamiento en caché, etc.) y después pasa la solicitud a un objeto de servicio.

El objeto proxy tiene la misma interfaz que un servicio, lo que lo hace intercambiable con un objeto real cuando se pasa a un cliente.

Una tarjeta de crédito es un proxy de una cuenta bancaria, que, a su vez, es un proxy de un manojo de billetes. Ambos implementan la misma interfaz, por lo que pueden utilizarse para realizar un pago. El consumidor se siente genial porque no necesita llevar un montón de efectivo encima. El dueño de la tienda también está contento porque los ingresos de la transacción se añaden electrónicamente a la cuenta bancaria de la tienda sin el riesgo de perder el depósito o sufrir un robo de camino al banco.

El patrón Proxy sugiere que crees una nueva clase proxy con la misma interfaz que un objeto de servicio original. Después actualizas tu aplicación para que pase el objeto proxy a todos los clientes del objeto original. Al recibir una solicitud de un cliente, el proxy crea un objeto de servicio real y le delega todo el trabajo.

Si necesitas ejecutar algo antes o después de la lógica primaria de la clase, el proxy te permite hacerlo sin cambiar esa clase. Ya que el proxy implementa la misma interfaz que la clase original, puede pasarse a cualquier cliente que espere un objeto de servicio real.

Adapter proporciona una interfaz diferente al objeto envuelto, Proxy le proporciona la misma interfaz y Decorator le proporciona una interfaz mejorada.

## Aplicabilidad
Ejecución local de un servicio remoto (proxy remoto). Es cuando el objeto de servicio se ubica en un servidor remoto.
En este caso, el proxy pasa la solicitud del cliente por la red, gestionando todos los detalles desagradables de trabajar con la red.

Solicitudes de registro (proxy de registro). Es cuando quieres mantener un historial de solicitudes al objeto de servicio.
El proxy puede registrar cada solicitud antes de pasarla al servicio.