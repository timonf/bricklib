BrickLib
========

This is a small library written in PHP to utilize LEGO brick lists. It can be used as Command Line Interface (see
Usage) or as a library for your bricks project.

Usage
-----

First of all you have to run `composer install` (to enable autoloading).

### From LXFML (Exported LEGO Digital Designer XML)

1. In LDD (LEGO Digital Designer) click on `File` → `Export model` and save as `LXFML-File`
2. Run `php bin/lxfml2xml [exported LXFML file] > bricklink.xml`
3. Upload the `bricklink.xml` to BrickLink

### From LDD CSV

1. In LDD click on `File` → `Export BOM` and save as `Microsoft Office Open XML Workbook`
2. Open Excel file and export it as CSV file.
3. Run `php bin/csv2xml [exported CSV file] > bricklink.xml`
4. Upload the `bricklink.xml` to BrickLink


Disclaimer
==========

LEGO® is a trademark of the LEGO Group of companies which does not sponsor, authorize, or endorse this project.
