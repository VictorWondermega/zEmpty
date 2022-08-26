
// version: 1

// ザガタ。六 /////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

function zEmpty(za,a,n) {
	/* Zagata.Request */

	this.za = (typeof(za)=='undefined')?false:za; // core
	var a = (typeof(a)=='undefined')?false:a; // attr
	this.n = (typeof(n)=='undefined')?'zEmpty':n; // name
	
	///////////////////////////////
	// funcs


	///////////////////////////////
	// ini

	this.za.msg('dbg','zEmpty','i am '+this.n+'(zEmpty)');

};

////////////////////////////////////////////////////////////////
if(typeof(zlo)=='object') {
	zlo.da('zEmpty');
} else {
  console.log('zEmpty');
}
