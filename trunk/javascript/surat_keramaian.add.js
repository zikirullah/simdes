document.observe("dom:loaded", function(){

new Ajax.Autocompleter("nama", "autocomplete_nama", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('nama').value = record.nama;
		$('umur').value = record.umur;
		$('pekerjaan').value = record.pekerjaan;
		$('kAgama').selectedIndex  = record.k_agama -1;
		}
	}
);


var next = $('next');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});
	
});