<!--
Важно: этот README был автоматически сгенерирован <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Он НЕ ДОЛЖЕН редактироваться вручную.
-->

# GLPI для YunoHost

[![Уровень интеграции](https://apps.yunohost.org/badge/integration/glpi)](https://ci-apps.yunohost.org/ci/apps/glpi/)
![Состояние работы](https://apps.yunohost.org/badge/state/glpi)
![Состояние сопровождения](https://apps.yunohost.org/badge/maintained/glpi)

[![Установите GLPI с YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Прочтите этот README на других языках.](./ALL_README.md)*

> *Этот пакет позволяет Вам установить GLPI быстро и просто на YunoHost-сервер.*  
> *Если у Вас нет YunoHost, пожалуйста, посмотрите [инструкцию](https://yunohost.org/install), чтобы узнать, как установить его.*

## Обзор

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


**Поставляемая версия:** 10.0.18~ynh1

## Снимки экрана

![Снимок экрана GLPI](./doc/screenshots/screenshot.png)

## Документация и ресурсы

- Официальный веб-сайт приложения: <https://glpi-project.org>
- Официальная документация администратора: <https://glpi-install.readthedocs.io/en/latest/>
- Репозиторий кода главной ветки приложения: <https://github.com/glpi-project/glpi>
- Магазин YunoHost: <https://apps.yunohost.org/app/glpi>
- Сообщите об ошибке: <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Информация для разработчиков

Пришлите Ваш запрос на слияние в [ветку `testing`](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

Чтобы попробовать ветку `testing`, пожалуйста, сделайте что-то вроде этого:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
или
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Больше информации о пакетировании приложений:** <https://yunohost.org/packaging_apps>
