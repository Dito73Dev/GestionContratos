Runner.buttonEvents["BtnInformeSup"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnInformeSup';
	
	if ( !pageObj.buttonEventBefore['BtnInformeSup'] ) {
		pageObj.buttonEventBefore['BtnInformeSup'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnInformeSup'] ) {
		pageObj.buttonEventAfter['BtnInformeSup'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var message = result["p_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/ctprocess/mpdf60/mod/_gen_infosup.php?inf_id='+result["p_id"],
  width: 960,
  height: 600,
  header: 'INFORME DE SUPERVISIÓN'
});

		}
	}
	
	$('a[id="BtnInformeSup"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnInformeSup" + "_" + Runner.genId();
		
		// create object
		var button_BtnInformeSup = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnInformeSup"
		});
		
		// init
		button_BtnInformeSup.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

