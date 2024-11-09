<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 GLPI

[![集成程度](https://dash.yunohost.org/integration/glpi.svg)](https://ci-apps.yunohost.org/ci/apps/glpi/) ![工作状态](https://ci-apps.yunohost.org/ci/badges/glpi.status.svg) ![维护状态](https://ci-apps.yunohost.org/ci/badges/glpi.maintain.svg)

[![使用 YunoHost 安装 GLPI](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=glpi)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 GLPI。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

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


**分发版本：** 10.0.17~ynh1

## 截图

![GLPI 的截图](./doc/screenshots/screenshot.png)

## 文档与资源

- 官方应用网站： <https://glpi-project.org>
- 官方管理文档： <https://glpi-install.readthedocs.io/en/latest/>
- 上游应用代码库： <https://github.com/glpi-project/glpi>
- YunoHost 商店： <https://apps.yunohost.org/app/glpi>
- 报告 bug： <https://github.com/YunoHost-Apps/glpi_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/glpi_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
或
sudo yunohost app upgrade glpi -u https://github.com/YunoHost-Apps/glpi_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
