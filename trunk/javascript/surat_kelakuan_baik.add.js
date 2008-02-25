document.observe("dom:loaded", function(){

new Ajax.Autocompleter("nama", "autocomplete_nama", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('nama').value = record.nama;
		$('wargaNegara').value = M_WARGA[record.k_warga];
		$('alamat').value = record.alamat;
		$('kAgama').selectedIndex  = record.k_agama -1;
		$('pekerjaan').value = record.pekerjaan;
		$('umur').value = record.umur;
		}
	}
);


new Ajax.Autocompleter("namaOrtu", "autocomplete_namaOrtu", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('namaOrtu').value = record.nama;
		$('alamatOrtu').value = record.alamat;
		$('pekerjaanOrtu').value = record.pekerjaan;
		$('wargaNegaraOrtu').value = M_WARGA[record.k_warga];
		$('kAgamaOrtu').selectedIndex  = record.k_agama -1;
		$('umurOrtu').value = record.umur;
		}
	}
);

var next = $('next');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});
	
});