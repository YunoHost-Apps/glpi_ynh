<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# GLPI untuk YunoHost

[![Tingkat integrasi](https://apps.yunohost.org/badge/integration/glpi)](https://ci-apps.yunohost.org/ci/apps/glpi/)
![Status kerja](https://apps.yunohost.org/badge/state/glpi)
![Status pemeliharaan](https://apps.yunohost.org/badge/maintained/glpi)

[![Pasang GLPI dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang GLPI secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

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


**Versi terkirim:** 10.0.17~ynh2

## Tangkapan Layar

![Tangkapan Layar pada GLPI](./doc/screenshots/screenshot.png)

## Dokumentasi dan sumber daya

- Website aplikasi resmi: <https://glpi-project.org>
- Dokumentasi admin resmi: <https://glpi-install.readthedocs.io/en/latest/>
- Depot kode aplikasi hulu: <https://github.com/glpi-project/glpi>
- Gudang YunoHost: <https://apps.yunohost.org/app/glpi>
- Laporkan bug: <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
atau
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
