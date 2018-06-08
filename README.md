BrickLib
========

This is a small library written in PHP to utilize LEGO brick lists. BrickLib is able to convert CSV files, LDD files and 
LDraw files into BrickLink XML file format.

Why?
----

BrickLink is also able to import LDD or LDraw files directly. But I got often errors like “Part not found in catalog. 
item No:28327” or “Please fix the following duplicates: Item No: 3001, Color: 85”. For this reason I developed my own
converter, which should avoid those errors. If you still get errors on BrickLink, please open an issue on GitHub!

Usage
-----

    bin/convert tests/data/rainbow.lxf > bricklinklist.xml
    
Make sure, you run `composer install` before (to enable autoloading).


Disclaimer
==========

LEGO® is a trademark of the LEGO Group of companies which does not sponsor, authorize, or endorse this project.
