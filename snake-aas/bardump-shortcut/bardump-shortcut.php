<?php

function bardump($var) {
	foreach (func_get_args() as $arg) {
		Nette\Diagnostics\Debugger::barDump($arg);
	}
}