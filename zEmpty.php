<?php
// version: 1
namespace za\zEmpty;

// ザガタ。六 /////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

class zEmpty {
	/* Zagata.Empty */
	private $za = null;
	public $n = '';
		
	public $cd = '';
	public $dd = '/';

	///////////////////////////////
	// funcs

	/////////////////////////////// 
	// ini
	function __construct($za,$a=false,$n=false) {
		$this->za = $za;
		$this->n = (($n)?$n:'zEmpty');
		// $this->za->msg('dbg','zEmpty','i am '.$this->n.'(zEmpty)');

		$this->cd = realpath( __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR );
		$this->dd = DIRECTORY_SEPARATOR;

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