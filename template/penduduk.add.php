<?php include "header.php" ?>
          <?php include "navigation.php" ?>
          <div class="subjudul"> <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" /> <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span> </div>
          <script type="text/javascript" src="javascript/prototype.js"></script>
          <script type="text/javascript" src="javascript/penduduk.add.js"></script>
          <form id="form1" method="post" action="index.php?form=B.02">
            <div class="form-region">
              <table border="0" cellspacing="0" width="100%">
                <tbody>
                  <? if ($errorCode){ ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="padding-bottom: 5px" class="errors"><? echo $errorCode ?></td>
                  </tr>
                  <? } ?>
                  <tr>
                    <td><strong>NIK</strong></td>
                    <td style="padding: 2px"><input type="text" id="nik" name="nik" value="<? echo htmlentities($nik) ?>" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>No. KTP</strong></td>
                    <td style="padding: 2px"><input type="text" id="noKTP" name="noKTP" value="<? echo htmlentities($noKTP) ?>" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>Nama</strong></td>
                    <td style="padding: 2px"><input type="text" id="nama" name="nama" value="<? echo htmlentities($nama) ?>" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>Agama</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
                        <?php echo printOptions($M_AGAMA, $kAgama); ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td><strong>Pekerjaan</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kKerja" name="kKerja">
                        <?php echo printOptions($M_KERJA, $kKerja); ?>
                      </select></td>
                  </tr>
                </tbody>
                <tbody id="dPekerjaan" style="display:none;">
                  <tr>
                    <td><strong>Pekerjaan</strong></td>
                    <td style="padding: 2px"><input type="text" id="pekerjaan" name="pekerjaan" value="<? echo htmlentities($pekerjaan) ?>" style="width: 250px"/></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><strong>Alamat</strong></td>
                    <td style="padding: 2px"><input type="text" id="alamat" name="alamat" value="<? echo htmlentities($alamat) ?>" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>Dusun</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kDusun" name="kDusun">
                        <?php echo printOptions($M_DUSUN, $kDusun); ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>RT</strong></td>
                    <td style="padding: 2px"><input type="text" id="rt" name="rt" value="<? echo
htmlentities($rt) ?>" style="width: 250px"/>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>RW</strong></td>
                    <td style="padding: 2px"><input type="text" id="rw" name="rw" value="<? echo
htmlentities($r) ?>" style="width: 250px"/>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Tempat Lahir</strong> </td>
                    <td style="padding: 2px"><input type="text" id="tempatLahir" name="tempatLahir" value="<? echo
htmlentities($tempatLahir) ?>" style="width: 250px"/>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kelamin" name="kelamin">
                        <?php echo
printOptions($M_GENDER, $kelamin); ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Warga Negara</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kWarga" name="kWarga">
                        <?php echo
printOptions($M_WARGA, $kWarga); ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td><strong>Status Perkawinan</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kKawin" name="kKawin">
                        <?php echo
printOptions($M_KAWIN, $kKawin); ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td><strong>Pendidikan</strong></td>
                    <td style="padding: 2px"><select style="width: 254px" id="kPendidikan" name="kPendidikan">
                        <?php echo
printOptions($M_PENDIDIDKAN, $kPendidikan); ?>
                      </select></td>
                  </tr>
                </tbody>
                <tbody id="dPendidikan" style="display:none;">
                  <tr>
                    <td><strong>Pendidikan</strong></td>
                    <td style="padding: 2px"><input type="text" id="username" name="username" value="<? echo
htmlentities($username) ?>" style="width: 250px"/></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td><strong>Suku</strong></td>
                    <td style="padding: 2px"><input type="text" id="suku" name="suku" value="<? echo
htmlentities($suku) ?>" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="batal" id="batal" value="&laquo; BATAL"/></td>
                    <td style="padding: 10px 170px 2px 2px"><div align="right">
                        <input class="formbutton" type="button" name="next" id="next" value="SIMPAN &raquo;"/>
                      </div></td>
                  </tr>
                </tbody>
              </table>
              <input type="hidden" name="next" value="true"/>
            </div>
          </form>
          <?php include "footer.php" ?>
