document.observe("dom:loaded", function(){

new Ajax.Autocompleter("nama", "autocomplete_nama", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('nama').value = record.nama;
		$('noKTP').value = record.no_ktp;
		$('alamat').value = record.alamat;
		$('pekerjaan').value = record.pekerjaan;
		$('kelamin').value = M_GENDER[record.kelamin];
		$('tempatLahir').value = record.tempat_lahir;
		$('wargaNegara').value = M_WARGA[record.k_warga];
		$('tglLahir').value = record.tgl_lahir;
		$('kAgama').selectedIndex  = record.k_agama -1;
		$('kKawin').selectedIndex  = record.k_kawin -1;
		$('pendidikan').value = record.pendidikan;
		$('umur').value = record.umur;
		}
	}
);


new Ajax.Autocompleter("pengikut_nama_1", "autocomplete_pengikut_1", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_1").value = record.nama;
		$("pengikut_kelamin_1").value = record.kelamin
		$("pengikut_kawin_1").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_1").value = record.pendidikan;
		$("pengikut_noKtp_1").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_2", "autocomplete_pengikut_2", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_2").value = record.nama;
		$("pengikut_kelamin_2").value = record.kelamin
		$("pengikut_kawin_2").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_2").value = record.pendidikan;
		$("pengikut_noKtp_2").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_3", "autocomplete_pengikut_3", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_3").value = record.nama;
		$("pengikut_kelamin_3").value = record.kelamin
		$("pengikut_kawin_3").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_3").value = record.pendidikan;
		$("pengikut_noKtp_3").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_4", "autocomplete_pengikut_4", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_4").value = record.nama;
		$("pengikut_kelamin_4").value = record.kelamin
		$("pengikut_kawin_4").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_4").value = record.pendidikan;
		$("pengikut_noKtp_4").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_5", "autocomplete_pengikut_5", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_5").value = record.nama;
		$("pengikut_kelamin_5").value = record.kelamin
		$("pengikut_kawin_5").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_5").value = record.pendidikan;
		$("pengikut_noKtp_5").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_6", "autocomplete_pengikut_6", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_6").value = record.nama;
		$("pengikut_kelamin_6").value = record.kelamin
		$("pengikut_kawin_6").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_6").value = record.pendidikan;
		$("pengikut_noKtp_6").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_7", "autocomplete_pengikut_7", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_7").value = record.nama;
		$("pengikut_kelamin_7").value = record.kelamin
		$("pengikut_kawin_7").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_7").value = record.pendidikan;
		$("pengikut_noKtp_7").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_7", "autocomplete_pengikut_7", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_7").value = record.nama;
		$("pengikut_kelamin_7").value = record.kelamin
		$("pengikut_kawin_7").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_7").value = record.pendidikan;
		$("pengikut_noKtp_7").value = record.no_ktp;
		}
	}
);  

new Ajax.Autocompleter("pengikut_nama_8", "autocomplete_pengikut_8", "index.php?form=B.05", {
	paramName:'keyword',
	afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);
		$("pengikut_nama_8").value = record.nama;
		$("pengikut_kelamin_8").value = record.kelamin
		$("pengikut_kawin_8").value  = M_KAWIN[record.k_kawin];
		$("pengikut_pendidikan_8").value = record.pendidikan;
		$("pengikut_noKtp_8").value = record.no_ktp;
		}
	}
);  

var next = $('next');
var batal = $('batal');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});

batal.observe('click', function(){
	window.location = 'index.php?form=C.01';
});	
});