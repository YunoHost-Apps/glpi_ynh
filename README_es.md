<!--
Este archivo README esta generado automaticamente<https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
No se debe editar a mano.
-->

# GLPI para Yunohost

[![Nivel de integración](https://apps.yunohost.org/badge/integration/glpi)](https://ci-apps.yunohost.org/ci/apps/glpi/)
![Estado funcional](https://apps.yunohost.org/badge/state/glpi)
![Estado En Mantención](https://apps.yunohost.org/badge/maintained/glpi)

[![Instalar GLPI con Yunhost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Leer este README en otros idiomas.](./ALL_README.md)*

> *Este paquete le permite instalarGLPI rapidamente y simplement en un servidor YunoHost.*  
> *Si no tiene YunoHost, visita [the guide](https://yunohost.org/install) para aprender como instalarla.*

## Descripción general

GLPI stands for Gestionnaire Libre de Parc Informatique is a Free Asset and IT Management Software package, that provides ITIL Service Desk features, licenses tracking and software auditing.

### Features:

- Inventory of computers, peripherals, network printers and any associated components through an interface, with inventory tools such as: FusionInventory or OCS Inventory
- Data Center Infrastructure Management (DCIM)
- Item lifecycle management
- Licenses management (ITIL compliant)
- Management of warranty and financial information (purchase order, warranty and extension, damping)
- Management of contracts, contacts, documents related to inventory items
- Incidents, requests, problems and changes management
- Knowledge base and Frequently-Asked Questions (FAQ)
- Asset reservation


**Versión actual:** 10.0.18~ynh1

## Capturas

![Captura de GLPI](./doc/screenshots/screenshot.png)

## Documentaciones y recursos

- Sitio web oficial: <https://glpi-project.org>
- Documentación administrador oficial: <https://glpi-install.readthedocs.io/en/latest/>
- Repositorio del código fuente oficial de la aplicación : <https://github.com/glpi-project/glpi>
- Catálogo YunoHost: <https://apps.yunohost.org/app/glpi>
- Reportar un error: <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Información para desarrolladores

Por favor enviar sus correcciones a la [rama `testing`](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

Para probar la rama `testing`, sigue asÍ:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
o
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Mas informaciones sobre el empaquetado de aplicaciones:** <https://yunohost.org/packaging_apps>
