<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# GLPI YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/glpi.svg)](https://ci-apps.yunohost.org/ci/apps/glpi/) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/glpi.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/glpi.maintain.svg)

[![Instalatu GLPI YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek GLPI YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

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


**Paketatutako bertsioa:** 10.0.17~ynh1

## Pantaila-argazkiak

![GLPI(r)en pantaila-argazkia](./doc/screenshots/screenshot.png)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://glpi-project.org>
- Administratzaileen dokumentazio ofiziala: <https://glpi-install.readthedocs.io/en/latest/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/glpi-project/glpi>
- YunoHost Denda: <https://apps.yunohost.org/app/glpi>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
edo
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
