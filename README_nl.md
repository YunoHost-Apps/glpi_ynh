<!--
NB: Deze README is automatisch gegenereerd door <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Hij mag NIET handmatig aangepast worden.
-->

# GLPI voor Yunohost

[![Integratieniveau](https://dash.yunohost.org/integration/glpi.svg)](https://ci-apps.yunohost.org/ci/apps/glpi/) ![Mate van functioneren](https://ci-apps.yunohost.org/ci/badges/glpi.status.svg) ![Onderhoudsstatus](https://ci-apps.yunohost.org/ci/badges/glpi.maintain.svg)

[![GLPI met Yunohost installeren](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Deze README in een andere taal lezen.](./ALL_README.md)*

> *Met dit pakket kun je GLPI snel en eenvoudig op een YunoHost-server installeren.*  
> *Als je nog geen YunoHost hebt, lees dan [de installatiehandleiding](https://yunohost.org/install), om te zien hoe je 'm installeert.*

## Overzicht

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


**Geleverde versie:** 10.0.17~ynh1

## Schermafdrukken

![Schermafdrukken van GLPI](./doc/screenshots/screenshot.png)

## Documentatie en bronnen

- Officiele website van de app: <https://glpi-project.org>
- Officiele beheerdersdocumentatie: <https://glpi-install.readthedocs.io/en/latest/>
- Upstream app codedepot: <https://github.com/glpi-project/glpi>
- YunoHost-store: <https://apps.yunohost.org/app/glpi>
- Meld een bug: <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Ontwikkelaarsinformatie

Stuur je pull request alsjeblieft naar de [`testing`-branch](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

Om de `testing`-branch uit te proberen, ga als volgt te werk:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
of
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Verdere informatie over app-packaging:** <https://yunohost.org/packaging_apps>
