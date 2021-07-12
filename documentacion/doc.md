# Documentación

Documentación perteneciente al control maestro.

## Vista Previa

### Screenshot

![Concept admin dashboard template preview](https://colorlib.com/wp/wp-content/uploads/sites/2/concept-free-admin-dashboard-panel.jpg)

#### Versión Actual
**Version: Alpha 0.1.0**


## -- Pantalla "Recepción" --
##### Vista base
![Concept admin dashboard template preview](imgdocs\recepcion.png)

> Tabla Expedientes







| Expediente | Fecha de apertura | Acto Juridico | Responsable | Instrumento | Fechaa Firma | OBservaciones |
|------------|-------------------|---------------|-------------|-------------|--------------|---------------|



> Tabla Otorgantes  

|   Expediente   | Comparecientes |
|----------------|----------------|


## -- Pantalla "Proyectista" --

##### Vista base
![Concept admin dashboard template preview](imgdocs\proyectista.png)

>Tabla Expedientes

>> TIpo de declaranot *Campo nuevo*
>> En rppc *Campo nuevo*
>> Fecha Firma Trabajador *Campo nuevo*
>> Fecha Firma INFONAVIT *Campo nuevo*
>> Fecha Detonación *Campo Nuevo*

| Expedientes | No. Expediente | Responsable | Acto | No. Escritura | Fecha Firma | Monto de operación | Act. Vulnerable | Objeto de aviso | Anexo 5 o UIF | Declaranot | Tipo de declaranot* | En rppc * | Firma Trabajador* | Firma INFONAVIT* | Fecha Detonación* | Lleva ISAI | OBservaciones |
|-------------|----------------|-------------|------|---------------|-------------|--------------------|-----------------|-----------------|---------------|------------|---------------------|-----------|-------------------|------------------|-------------------|------------|---------------|


## -- Pantalla "ISAI y RPPC" --

##### Vista base
![Concept admin dashboard template preview](imgdocs\isai_rpppc.png)

> Tabla Expedientes

| Expedientes | No. Expediente | Responsable | Acto | No. Escritura | Fecha Firma | Monto de operación | Act. Vulnerable | Objeto de aviso | Anexo 5 o UIF | Declaranot | Tipo de declaranot* | En rppc * | Firma Trabajador* | Firma INFONAVIT* | Fecha Detonación* | Lleva ISAI | OBservaciones |
|-------------|----------------|-------------|------|---------------|-------------|--------------------|-----------------|-----------------|---------------|------------|---------------------|-----------|-------------------|------------------|-------------------|------------|---------------|


> Tabla dependenciasexp

| Folio | Fecha Presentado | Fecha Certificado | Clave Catastral |
|-------|------------------|-------------------|-----------------|



> dependeciasesc


| PPPC | Se presena en | Fecha de Ingreso | Inscrita | Partida |
|------|---------------|------------------|----------|---------|

## -- Pantalla "Terminación" --

##### Vista base
![Concept admin dashboard template preview](imgdocs\terminacion.png)


>Tabla Expedientes
>> Fecha pasado a protocolo *nuevo*

| PPPC | Se presena en | Fecha de Ingreso | Inscrita | Partida |
|------|---------------|------------------|----------|---------|


>Operaciones

| Operacion  | traslativa |
|------------|------------|


## -- Reporte "Protocolo" --

##### Vista base
![Concept admin dashboard template preview](imgdocs\protocolo.png)

Esta pantalla mostrara la información capturada en las pantallas anteriores en el formato que se muestra de acuerdo al volumen y la fecha de apertura y cierre del protocolo capturado y obtendrá de manera automática  el numero de instrumentos, instrumentos que no pasaron, instrumentos autorizados, instrumentos pendientes de firma, instrumentos pendientes de autorizar y los folios inutilizados


## -- Reporte "Por Escritura" --

##### Vista base
![Concept admin dashboard template preview](imgdocs\repxesc.png)

Esta pantalla mostrara la información capturada en las diferentes pantallas  ordenada por numero de escritura

## -- Pantalla "Carolina" --

> Tabla Expedientes
>> No. Expediente
>> Responsable  
>> Acto
>> No. Escritura
>> Fecha Aviso anexo5 o uif *nuevo*
>> fecha presupuesto infonavit *nuevo*
>> fecha de dictaminado *nuevo*
>> observaciones

> Tabla actexp
>> Actividad
>> Expediente
>> Fecha de conclusión

## -- Pantalla "Aracely" --

> Tabla Expediente
>> Fecha Aviso *nuevo*
>> Fecha Pagado/Presentado *nuevo*
>> Fecha Acuse / aceptado *nuevo*

## -- Reporte "Acumalado" --
Esta pantalla mostrara si un compareciente excede el limite de la acumulación en las operaciones realizadas de 6 meses 


## -- Pantalla "Monica" --

Esta pantalla mostrara toda la informacion capturada por los diferentes usuarios en las pantallas anteriores (color gris) y se podra capturar la fecha de pago de isai, monto pagado isai, fecha de pago en rpp, honorarios, si la comision fue pagada o no y si ya se finalizo la operación.


> Tabla impuestospres
>> Fecha Pago ISAI (FechaSalida)
>> TotalImpuestos
>> ISAI = 19  RPPC = 20

>presupuestos
>>Honorarios [MPAL]

> Tabla Expedientes
>> Comision(Si/no) *nuevo*
>> Finalizada[Estatus]
>>Observaciones

#### Historial de cambios

**Version: Alpha 0.1.0**

- Comit Inicial del proyecto

>Doc by EriKVanLeonard for ATINET



