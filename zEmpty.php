<?php
// version: 1
namespace za\zEmpty;

// ザガタ。六 /////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

class zEmpty {
	/* Zagata.Request */

	///////////////////////////////
	// funcs

	/////////////////////////////// 
	// ini
	function __construct($za,$a=false,$n=false) {
		$this->za = $za;
		$this->n = (($n)?$n:'zEmpty');
		// $this->za->msg('dbg','zEmpty','i am '.$this->n.'(zEmpty)');

	}
}

// ザガタ。六 /////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

if(class_exists('\zlo')) {
	\zlo::da('zEmpty');
} elseif(realpath(__FILE__) == realpath($_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'])) {
	header("content-type: text/plain;charset=utf-8");
	exit('zEmpty');
} else {}

?>