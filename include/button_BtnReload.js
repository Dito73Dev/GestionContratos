Runner.buttonEvents["BtnReload"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnReload';
	
	if ( !pageObj.buttonEventBefore['BtnReload'] ) {
		pageObj.buttonEventBefore['BtnReload'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnReload'] ) {
		pageObj.buttonEventAfter['BtnReload'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload();
		}
	}
	
	$('a[id="BtnReload"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnReload" + "_" + Runner.genId();
		
		// create object
		var button_BtnReload = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnReload"
		});
		
		// init
		button_BtnReload.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

