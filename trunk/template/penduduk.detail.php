<?php include "header.php" ?>
          <?php include "navigation.php" ?>
          <script type="text/javascript" src="javascript/prototype.js"></script>
          <div class="subjudul"> <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" /> <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span> </div>
          <div class="form-region">
            <table border="0" cellspacing="0">
              <? if ($errorCode) { ?>
              <tr>
                <td>&nbsp;</td>
                <td style="padding-bottom: 5px" class="errors"><? echo $errorCode ?></td>
              </tr>
              <? } ?>
              <tr>
                <td><strong>NIK</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->nik); ?></td>
              </tr>
              <tr>
                <td><strong>No. KTP</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->noKTP); ?></td>
              </tr>
              <tr>
                <td><strong>Nama</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->nama); ?></td>
              </tr>
              <tr>
                <td><strong>Agama</strong></td>
                <td style="padding: 2px"><? echo htmlentities($M_AGAMA[$penduduk->kAgama]); ?></td>
              </tr>
              <tr>
                <td><strong>Pekerjaan</strong></td>
                <td style="padding: 2px"><? echo ($penduduk->kKerja == 0 ? htmlentities($penduduk->pekerjaan): htmlentities($M_KERJA[$penduduk->kKerja])); ?></td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->alamat); ?></td>
              </tr>
              <tr>
                <td><strong>Dusun</strong></td>
                <td style="padding: 2px"><? echo htmlentities($M_DUSUN[$penduduk->kDusun]); ?></td>
              </tr>
              <tr>
                <td><strong>RT</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->rt); ?></td>
              </tr>
              <tr>
                <td><strong>RW</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->rw); ?></td>
              </tr>
              <tr>
                <td><strong>Tempat Lahir </strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->tempatLahir); ?></td>
              </tr>
              <tr>
                <td><strong>Jenis Kelamin </strong></td>
                <td style="padding: 2px"><? echo htmlentities($M_GENDER[$penduduk->kelamin]); ?></td>
              </tr>
              <tr>
                <td><strong>Warga Negara </strong></td>
                <td style="padding: 2px"><? echo htmlentities($M_WARGA[$penduduk->kWarga]); ?></td>
              </tr>
              <tr>
                <td><strong>Status Perkawinan </strong></td>
                <td style="padding: 2px"><? echo htmlentities($M_KAWIN[$penduduk->kKawin]); ?></td>
              </tr>
              <tr>
                <td><strong>Pendidikan</strong></td>
                <td style="padding: 2px"><? echo ($penduduk->kPendidikan == "0" ? htmlentities($penduduk->pendidikan): htmlentities($M_PENDIDIDKAN[$penduduk->kPendidikan])); ?></td>
              </tr>
              <tr>
                <td><strong>Suku</strong></td>
                <td style="padding: 2px"><? echo htmlentities($penduduk->suku); ?></td>
              </tr>
              <tr>
                <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="edit" id="edit" value="EDIT &raquo;" onclick="window.location = 'index.php?form=B.04&id=<?php echo $penduduk->id; ?>'"/></td>
                <td style="padding: 10px 220px 2px 2px"><div align="right">
                    <input class="formbutton" type="button" name="hapus" id="hapus" value="HAPUS &raquo;"/>
                  </div></td>
              </tr>
            </table>
          </div>
          <script type="text/javascript">
          var hapus = $('hapus');
					hapus.observe('click', function(){
							if(confirm('Anda yakin akan menghapus penduduk?'))
									window.location = 'index.php?form=B.03&id=<?php echo $penduduk->id; ?>&delete=true';
					});
          </script>
          <?php include "footer.php" ?>
