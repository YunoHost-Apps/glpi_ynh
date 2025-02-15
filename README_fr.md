<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# GLPI pour YunoHost

[![Niveau d’intégration](https://apps.yunohost.org/badge/integration/glpi)](https://ci-apps.yunohost.org/ci/apps/glpi/)
![Statut du fonctionnement](https://apps.yunohost.org/badge/state/glpi)
![Statut de maintenance](https://apps.yunohost.org/badge/maintained/glpi)

[![Installer GLPI avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer GLPI rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

GLPI signifie Gestionnaire Libre de Parc Informatique. Il s'agit d'un progiciel gratuit de gestion des actifs et de l'informatique, qui fournit des fonctionnalités ITIL Service Desk, le suivi des licences et l'audit des logiciels.

### Caractéristiques :

- Inventaire des ordinateurs, périphériques, imprimantes réseau et de tous composants associés via une interface, avec des outils d'inventaire tels que : FusionInventory ou OCS Inventory
- Gestion de l'infrastructure du centre de données (DCIM)
- Gestion du cycle de vie des articles
- Gestion des licences (conforme ITIL)
- Gestion des informations de garantie et financières (bon de commande, garantie et extension, amortissement)
- Gestion des contrats, contacts, documents liés aux articles en stock
- Gestion des incidents, demandes, problèmes et changements
- Base de connaissances et foire aux questions (FAQ)
- Réservation d'actifs

**Version incluse :** 10.0.18~ynh1

## Captures d’écran

![Capture d’écran de GLPI](./doc/screenshots/screenshot.png)

## Documentations et ressources

- Site officiel de l’app : <https://glpi-project.org>
- Documentation officielle de l’admin : <https://glpi-install.readthedocs.io/en/latest/>
- Dépôt de code officiel de l’app : <https://github.com/glpi-project/glpi>
- YunoHost Store : <https://apps.yunohost.org/app/glpi>
- Signaler un bug : <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
ou
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
