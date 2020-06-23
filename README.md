# PHPPresentation

Форк библиотеки для создания файлов презентаций. 

Документация доступна [в официальном README](https://github.com/PHPOffice/PHPPresentation/blob/master/README.md).

__Что исправлено:__

* Исправлена древняя ошибка с построением диаграмм для PowerPoint 2013 и выше. Теперь слайды с диаграммами не будут "крошиться" и требовать восстановления.
* Исправлена ошибка с применением паттернов к диаграммам. Используйте для заливки константы класса `\PhpOffice\PhpPresentation\Style\FillChart` с префиксом `FILL_CH_`.
* Добавлена возможность вывода данных в столбчатой диаграмме в процентах. Для этого установите для `Series` свойство `percentFormat` в `true`:

```php
$series->setPercentFormat(true);
```
* Добавлена возможность заливать колонки гистограммы разными цветами. Для этого для `Series` передайте массив цветов колонок в метод `setDataPointFills()`. Ключи массива - номера колонок, значения - цвета. Н-р:

```php
$series->setDataPointFills([
    0 => new Color('dddddd'),
    3 => new Color('eeeeee')
]);
```

* Произведен переход с `PHPExcel` на `PhpSpreadsheet`.

__Как поставить этот форк в проект?__

В файл `composer.json` добавьте в блок `require` оригинальную либу:

```json
"require": {
    "phpoffice/phppresentation": "dev-master"
  },
```

а в блок `repositories` ссылку на этот форк:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://gitlab.efko.ru/a.yu.kirilenko/phppresentation"
    }
],
```
