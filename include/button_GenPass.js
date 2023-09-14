Runner.buttonEvents["GenPass"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'GenPass';
	
	if ( !pageObj.buttonEventBefore['GenPass'] ) {
		pageObj.buttonEventBefore['GenPass'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['GenPass'] ) {
		pageObj.buttonEventAfter['GenPass'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/contratos/forgot_password_pop.php',
  width: 640,
  height: 480,
  header: 'GENERAR CONTRASEÑA'
});


		}
	}
	
	$('a[id="GenPass"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "GenPass" + "_" + Runner.genId();
		
		// create object
		var button_GenPass = new Runner.form.Button({
			id: this.id ,
			btnName: "GenPass"
		});
		
		// init
		button_GenPass.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

