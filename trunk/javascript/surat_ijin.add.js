document.observe("dom:loaded", function(){

new Ajax.Autocompleter("nama", "autocomplete_nama", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('nama').value = record.nama;
		$('kelamin').value = M_GENDER[record.kelamin];
		$('tempatLahir').value = record.tempat_lahir;
		$('tglLahir').value = record.tgl_lahir;
		$('alamat').value = record.alamat;
		$('pekerjaan').value = record.pekerjaan;
		$('kAgama').selectedIndex  = record.k_agama -1;
		}
	}
);


new Ajax.Autocompleter("namaIjin", "autocomplete_namaIjin", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('namaIjin').value = record.nama;
		$('kelaminIjin').value = M_GENDER[record.kelamin];
		$('tempatLahirIjin').value = record.tempat_lahir;
		$('tglLahirIjin').value = record.tgl_lahir;
		$('alamatIjin').value = record.alamat;
		$('pekerjaanIjin').value = record.pekerjaan;
		$('kAgamaIjin').selectedIndex  = record.k_agama -1;
		}
	}
);

var next = $('next');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});
	
});