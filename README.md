# PHPPresentation

Форк библиотека для создания файлов презентаций. 

Документация доступна [в официальном README](https://github.com/PHPOffice/PHPPresentation/blob/master/README.md).

__Что исправлено:__

* Исправлена древняя ошибка с построением диаграмм для PowerPoint 2013 и выше. Теперь слайды с диаграммами не будут "крошиться" и требовать восстановления.

__Как поставить этот форк в проект?__

В файл `composer.json` добавьте в блок `require` оригинальную либу:

```json
...
"require": {
    "phpoffice/phppresentation": "dev-master"
  },
...
```

а в блок `repositories` ссылку на этот форк:

```json
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://gitlab.efko.ru/composer/phppresentation"
    }
],
...
```
