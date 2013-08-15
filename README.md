bardump-shortcut
================

Nette framework shortcut for Nette\Diagnostics\Debugger::barDump function


Requirements
------------

BarDump shortcut requires PHP 5.3.13 or later and Nette Framework 2.0.10 or later.


Installation
------------

The best way to install is using [Composer](http://getcomposer.org/):

```
composer require snake-aas/bardump-shortcut
```


Usage
-----

Just call function bardump($args) and the content of a variable will be printed into Nette DebugBar.
You can print more variables at once. In that case just divide variables with comma.
