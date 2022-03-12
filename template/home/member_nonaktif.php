<?
if(ereg("member_nonaktif.php",$PHP_SELF)) {
header("location:../index.php"); 
die; }
if( !CekAdmin() ) header( "Location: admin/logadmin.php" );
/*
#|
#| 
#|---------------------------------------------------------------
#| file 	: member.php
#| lokasi	: Admin Area
#| ket		: Halaman untuk Memenage Member
#| menu 	: Halaman utama Member manager, Add Member, Edit Member,
#| 			  Delete Member, Aktifkan Member, NonAktifkan Member.
#|----------------------------------------------------------------
*/

// -- menuu --
	switch($menu){
		default : tampil($start);
			break;
			 case "del":
			   hapus($user_id,$tanya);
			   break;
			 case "edit":
			   edit($user_id,$kalenderindo);
			   break;
			 case "add":
			   add($username,$passwd,$nama,$email,$alamat,$kota,$kode_pos,$telp,$bayar_pemilik,$bayar_sponsor,$bank_nama,$bank_rekening,$bank_tgltransfer,$bank_atasnama,$sponsor_username,$sponsor_nama,$sponsor_email,$tanggal_join,$ip_add,$status,$hits,$submit);
			   break;
			 case "update":
			   update($user_id, $passwd, $nama, $email, $alamat, $kota, $kode_pos, $telp, $bayar_pemilik, $bayar_sponsor, $bank_nama, $bank_rekening, $bank_tgltransfer, $bank_atasnama, $sponsor_username, $sponsor_nama, $sponsor_email, $hits, $submit);
			   break;
			 case "aktifkan":
			 	aktifkan($user_id,$tanyaaktifkan);
				break;
			 case "nonaktifkan":
			 	nonaktifkan($user_id,$tanyanonaktifkan);
				break;
			 case "berikutnya":
			    berikutnya($user);
			    break;

	}

// --- Halaman pertama member manager ---\\
function tampil($start){

if(!isset($start)) {  // Set nol untuk halaman pertama
$start = 0;
}

		echo "<p><b>Member Non Aktif</b></p>";
		echo "<table><tr>";
		echo "<td width=300>";
		echo "<a href=$PHP_SELF?buka=member_nonaktif&menu=add><b>Tambah Member Baru (Non Aktif)</b></a></td>";

		echo "<form method=post action=admin.php?buka=member_nonaktif_cari>";
		
		echo "<td align=center>";
		echo "<span class=teks>Username<br></span>
		<span class=teks><b>Cari :</b></span> <input  name=\"cari\" type=\"text\" class=\"teksbox\">
		<input type=submit value=Cari class=button></td>";
		
		echo "</form>";
		echo "<tr></table>";
		echo "<br>";

$halaman = ($start - 0); 
$limit = 40;       // jumlah yang ditampilkan per halaman
$ini = $halaman + $limit; 
$back = $halaman - $limit; 
$next = $halaman + $limit; 

$seleksi2="SELECT * FROM member" or error( mysql_error() );
$result2=mysql_query($seleksi2);
$nomer=mysql_num_rows($result2);

		echo "<table border=\"1\" width=\"100%\" style=\"border-collapse: collapse\" bordercolor=\"#D8D8D8\" cellpadding=\"2\">";
		echo "<tr>";
		echo "<td width=\"30\" align=center class=teks2><b>No</b></td>";
		echo "<td width=\"80\" align=center class=teks2><b>Username</b></td>";
		echo "<td width=\"80\" align=center class=teks2><b>Sponsor</b></td>";
		echo "<td width=\"140\" align=center class=teks2><b>Tgl Transfer</b></td>";
		
		//echo "<td width=\"80\" align=center class=teks2><b>Status</b></td>";
		echo "<td width=\"100\" align=center class=teks2><b>Admin</b></td>";
		echo "<td width=\"100\" align=center class=teks2><b>Reseller</b></td>";
		echo "<td width=\"80\" align=center class=teks2><b>Aktifasi</b></td>";
		echo "<td width=\"90\" align=center class=teks2><b>Edit</b></td>";
		echo "</tr>";
$query="SELECT * FROM member WHERE status='nonaktif' LIMIT $halaman, $limit" or error( mysql_error() );
$result=mysql_query($query);

		while ($data = mysql_fetch_array($result)) {
		$bayar_pemilik = rupiah($data[bayar_pemilik]);
		$bayar_sponsor = rupiah($data[bayar_sponsor]);
		$paid = "<a href=$PHP_SELF?buka=member_nonaktif&menu=nonaktifkan&user_id=$data[0]&konfirm=no>NonAktifkan</a>";
		$free = "<a href=$PHP_SELF?buka=member_nonaktif&menu=aktifkan&user_id=$data[0]&konfirm=no><b>Aktifkan</b></a>";
		$aktif = ($data['status'] == aktif?"$paid":"$free");
		$no++;

		echo "<tr>";
		echo "<td height=\"19\" align=center class=teks2>$no</td>";
		echo "<td class=teks2><a href=$PHP_SELF?buka=member_nonaktif&menu=berikutnya&user=$data[username]>$data[username]</a></td>";
		echo "<td class=teks2>$data[sponsor_username]</td>";
		echo "<td class=teks2>$data[bank_tgltransfer]</td>";
		
		//echo "<td class=teks2>$data[status]</td>";
		echo "<td align=center class=teks2>$bayar_pemilik</td>";
		echo "<td align=center class=teks2>$bayar_sponsor</td>";
		echo "<td>$aktif</td>";
		echo "<td width=\"100\" align=center class=teks2>
			  <a href=$PHP_SELF?buka=member_nonaktif&menu=del&user_id=$data[0]&konfirm=no><img src=admin/images/delete.gif border=0 alt=Detele></a> |
			  <a href=$PHP_SELF?buka=member_nonaktif&menu=edit&user_id=$data[0]><img src=admin/images/edit.gif border=0 alt=Edit></a></td>";
		echo "</tr>";
			}
		echo "</TABLE>";
		
echo "<table align='center'><tr><td align='left' width='30%'>";
if($back >=0) { 
echo "<a href='$PHP_SELF?buka=member_nonaktif&start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
echo "</td><td align=center width='30%' class=teks2>Halaman ";
$i=0;
$l=1;
for($i=0;$i < $nomer;$i=$i+$limit){
if($i <> $halaman){
echo " <a href='$PHP_SELF?buka=member_nonaktif&start=$i'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='2' color=blue><u>$l</u></font>";} 
$l=$l+1;
}

echo "</td><td  align='right' width='30%'>";
if($ini < $nomer) { 
echo "<a href='$PHP_SELF?buka=member_nonaktif&start=$next'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";
}
// --- Akhir


// --- Add member
function add($username,$passwd,$nama,$email,$alamat,$kota,$kode_pos,$telp,$bayar_pemilik,$bayar_sponsor,$bank_nama,$bank_rekening,$bank_tgltransfer,$bank_atasnama,$sponsor_username,$sponsor_nama,$sponsor_email,$tanggal_join,$ip_add,$status,$hits,$submit){

	if ($submit) {
		
		if (!$username or !$passwd or !$nama or !$email) {
			
			$salah = "<span style=\"font-weight:bold;color:red\"> username, password, nama, dan email harus di isi, silahkan ulangi.</span>
			<p><a href=\"javascript:history.back()\"><< back</a>";
				echo $salah;
			exit;
			}
     $result = mysql_query( "SELECT username FROM member WHERE username='$username'" ) or error( mysql_error() );
     if( mysql_num_rows( $result ) >= 1 )
	 error ("Username ini sudah ada yang menggunakan, gunakan username lainnya");

     $result = mysql_query( "SELECT email FROM member WHERE email='$email'" ) or error( mysql_error() );
     if( mysql_num_rows( $result ) >= 1 )
	 error ("E-mail ini sudah ada yang menggunakan, gunakan email lainnya");

	$waktu = date("D,d,M,Y");
	//$status = "nonaktif";
	$ip = $REMOTE_ADDR;
	$seleksi="INSERT INTO member (username,passwd,nama,email,alamat,kota,kode_pos,telp,bayar_pemilik,bayar_sponsor,bank_nama,bank_rekening,bank_tgltransfer,bank_atasnama,sponsor_username,sponsor_nama,sponsor_email,tanggal_join,ip_add,status,hits) 
	VALUES ('$username','$passwd','$nama','$email','$alamat','$kota','$kode_pos','$telp','$bayar_pemilik','$bayar_sponsor','$bank_nama','$bank_rekening','$bank_tgltransfer','$bank_atasnama','$sponsor_username','$sponsor_nama','$sponsor_email','$waktu','$ip','$status','0')";
	$hasil = mysql_query( $seleksi );

	echo "<p>Member telah di tambah.</p><p><a href=$PHP_SELF?buka=member_nonaktif>OK</a></p>";
} else {

?>
<p><b>Tambah Member Baru (Non Aktif)</b></p>
<form method=post action=<? echo "$PHP_SELF?buka=member_nonaktif"; ?> >
  <table width="366">
    <!--DWLayoutTable-->
    <tr> 
      <td width="111"  class="teks2">Username</td>
      <td width="239"  class="teks2"> 
        <input type=hidden name=menu value="add"> 
        <input name="username" type="text" class="teksboxorder" >
        <font color="#FF0000">*</font></td>
    </tr>
    <tr> 
      <td  class="teks2">Password</td>
      <td class="teks2">
<input name="passwd" type="text" class="teksboxorder" >
        <font color="#FF0000">*</font></td>
    </tr>
    <tr> 
      <td  class="teks2">Nama</td>
      <td  valign=top class="teks2">
<input name="nama" type="text" class="teksboxorder">
        <font color="#FF0000">*</font></td>
    </tr>
    <tr> 
      <td class="teks2">Email</td>
      <td class="teks2">
<input name="email" type="text" class="teksboxorder">
        <font color="#FF0000">*</font></td>
    </tr>
    <tr> 
      <td class="teks2">Alamat</td>
      <td valign="top"><input name="alamat" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Kota</td>
      <td valign="top"><input name="kota" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Kode pos</td>
      <td valign="top"><input name="kode_pos" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Telp</td>
      <td valign="top"><input name="telp" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Bayar Pemilik</td>
      <td valign="top"><input name="bayar_pemilik" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Bayar Sponsor</td>
      <td valign="top"><input name="bayar_sponsor" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Nama Bank</td>
      <td valign="top"><input name="bank_nama" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">No. Rekening</td>
      <td valign="top"><input name="bank_rekening" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Tgl Transfer</td>
      <td valign="top"><input name="bank_tgltransfer" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Bank Atas Nama</td>
      <td valign="top"><input name="bank_atasnama" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Username Sopnsor</td>
      <td valign="top"><input name="sponsor_username" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Nama Sponsor</td>
      <td valign="top"><input name="sponsor_nama" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Email Sponsor</td>
      <td valign="top"><input name="sponsor_email" type="text" class="teksboxorder"></td>
    </tr>
    <tr> 
      <td class="teks2">Status</td>
      <td valign="top"><select name="status">
          <option value="nonaktif">nonaktif</option>
        </select></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2" valign=top>
<input name=submit type=submit class="button" value=Buat></td>
    </tr>
  </table>
</form>
<?
		}
	}
// --- Akhir


// --- Edit member
function edit($user_id,$kalenderindo){

	$seleksi="SELECT * FROM member WHERE user_id=$user_id";
	$hasil = mysql_query( $seleksi );
		while ($data = mysql_fetch_array($hasil)) {
			//$user_id=$data[0];
			$username=$data[username];
			$passwd=$data[passwd];
			$nama=$data[nama];
			$email=$data[email];
			$alamat=$data[alamat];
			$kota=$data[kota];
			$kode_pos=$data[kode_pos];
			$telp=$data[telp];
			$bayar_pemilik=$data[bayar_pemilik];
			$bayar_sponsor=$data[bayar_sponsor];
			$bank_nama=$data[bank_nama];
			$bank_rekening=$data[bank_rekening];
			$bank_tgltransfer=$data[bank_tgltransfer];
			$bank_atasnama=$data[bank_atasnama];
			$sponsor_username=$data[sponsor_username];
			$sponsor_nama=$data[sponsor_nama];
			$sponsor_email=$data[sponsor_email];
			$tanggal_join=$data[tanggal_join];
			$ip_add=$data[ip_add];
			$status=$data[status];
			$hits=$data[hits];
			$pembayaran=$data[pembayaran];
			}
			
	$tanggalan=explode(",",$tanggal_join);
	$tanggalan[0]=strtr($tanggalan[0],$kalenderindo);
	$tanggalan[2]=strtr($tanggalan[2],$kalenderindo);
	$tgl="$tanggalan[0], $tanggalan[1] $tanggalan[2] $tanggalan[3]";

$hasil = mysql_query( "SELECT email_admin, url_web, judul_web FROM admin WHERE user_id=1" ) or error( mysql_error() );
$dataweb = mysql_fetch_array( $hasil );
$email_admin=$dataweb[email_admin];
$url_web=$dataweb[url_web];
$judul_web=$dataweb[judul_web];

?>
<p><b>Edit Member</b></p>
<span class="teks">Link untuk konfirmasi pembayaran:</span><br>
<span class=teks>http://<? echo "$url_web" ?>/?buka=konfirmasi_pembayaran&konfirm=<? echo "$username" ?></span>

<form method=post action=<? echo "$PHP_SELF?buka=member_nonaktif"; ?> >
  <table>
    <!--DWLayoutTable-->
    <tr> 
      <td width="114" height="21" class="teks2"><b>Username</b></td>
      <td colspan="2" class="teks2"> <input type=hidden name=user_id value="<? echo "$user_id"; ?>"> 
        <input type=hidden name=menu value="update"> <b><? echo "$username"; ?></b></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Password</td>
      <td colspan="2"><input name="passwd" type="text" class="teksboxorder" value="<? echo "$passwd"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Nama</td>
      <td colspan="2" valign="top"><input name="nama" type="text" class="teksboxorder" value="<? echo "$nama"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">E-mail</td>
      <td colspan="2" valign="top"><input name="email" type="text" class="teksboxorder" value="<? echo "$email"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Alamat</td>
      <td colspan="2" valign="top"><input name="alamat" type="text" class="teksboxorder" value="<? echo "$alamat"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Kota</td>
      <td colspan="2" valign="top"><input name="kota" type="text" class="teksboxorder" value="<? echo "$kota"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Kode Pos</td>
      <td colspan="2" valign="top"><input name="kode_pos" type="text" class="teksboxorder" value="<? echo "$kode_pos"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Telp</td>
      <td colspan="2" valign="top"><input name="telp" type="text" class="teksboxorder" value="<? echo "$telp"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Bayar Admin Rp</td>
      <td colspan="2" valign="top"><input name="bayar_pemilik" type="text" class="teksboxorder" value="<? echo "$bayar_pemilik"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Bayar Sponsor Rp</td>
      <td colspan="2" valign="top"><input name="bayar_sponsor" type="text" class="teksboxorder" value="<? echo "$bayar_sponsor"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Bank</td>
      <td colspan="2" valign="top"><input name="bank_nama" type="text" class="teksboxorder" value="<? echo "$bank_nama"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Rekening</td>
      <td colspan="2" valign="top"><input name="bank_rekening" type="text" class="teksboxorder" value="<? echo "$bank_rekening"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Tgl transfer</td>
      <td colspan="2" valign="top"><input name="bank_tgltransfer" type="text" class="teksboxorder" value="<? echo "$bank_tgltransfer"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Bank - Atas Nama</td>
      <td colspan="2" valign="top"><input name="bank_atasnama" type="text" class="teksboxorder" value="<? echo "$bank_atasnama"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Username Sponsor</td>
      <td colspan="2" valign="top"><input name="sponsor_username" type="text" class="teksboxorder" value="<? echo "$sponsor_username"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Nama Sponsor</td>
      <td colspan="2" valign="top"><input name="sponsor_nama" type="text" class="teksboxorder" value="<? echo "$sponsor_nama"; ?>"></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Email Sponsor</td>
      <td colspan="2" valign="top"><input name="sponsor_email" type="text" class="teksboxorder" value="<? echo "$sponsor_email"; ?>"></td>
    </tr>
    <tr> 
      <td height="21" class="teks2">Tgl Join</td>
      <td colspan="2" class="teks2"><? echo "$tgl" ?></td>
    </tr>
    <tr> 
      <td height="21" class="teks2">Ip Address</td>
      <td colspan="2" class="teks2"><? echo "$ip_add"; ?></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Status</td>
      <td colspan="2" class="teks2"><select name="status">
          <option value="nonaktif">nonaktif</option>
        </select></td>
    </tr>
    <tr> 
      <td height="24" class="teks2">Hits</td>
      <td colspan="2" valign="top"><input name="hits" type="text" class="teksboxorder" value="<? echo "$hits"; ?>"></td>
    </tr>
    <tr> 
      <td height="21" class="teks2">Status pembayaran</td>
      <td colspan="2" class=teks2>: <? echo "$pembayaran"; ?></td>
    </tr>
    <tr> 
      <td height="14"></td>
      <td width="143"></td>
      <td width="79"></td>
    </tr>
    <tr> 
      <td height="26" colspan=2 align="right" valign="top"> <input name=submit type=submit class="button" value=Update></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?
}
// --- Akhir


// --- Update member
function update($user_id, $passwd, $nama, $email, $alamat, $kota, $kode_pos, $telp, $bayar_pemilik, $bayar_sponsor, $bank_nama, $bank_rekening, $bank_tgltransfer, $bank_atasnama, $sponsor_username, $sponsor_nama, $sponsor_email, $hits, $submit) {

	if ($submit) {

		if (!$passwd) {
			$salah = "<span style=\"font-weight:bold;color:red\">Password harus di isi, silahkan ulangi.</span>
			<p><a href=\"javascript:history.back()\"><< back</a>";
				echo $salah;
			exit;
		}
		
		$seleksi="UPDATE member SET passwd='$passwd', nama='$nama', email='$email', alamat='$alamat',
		kota='$kota', kode_pos='$kode_pos', telp='$telp', bayar_pemilik='$bayar_pemilik', bayar_sponsor='$bayar_sponsor',
		bank_nama='$bank_nama', bank_rekening='$bank_rekening', bank_tgltransfer='$bank_tgltransfer', bank_atasnama='$bank_atasnama',
		sponsor_username='$sponsor_username', sponsor_nama='$sponsor_nama', sponsor_email='$sponsor_email', hits='$hits'
		WHERE user_id='$user_id'";
		$hasil = mysql_query( $seleksi );

		echo "<p>Member telah di update</p><p><a href=$PHP_SELF?buka=member_nonaktif>OK</a></p>";
	}
}
// --- Akhir


// --- Tanya dan Hapus member
function hapus($user_id,$tanya){

	$seleksi="SELECT * FROM member WHERE user_id=$user_id";
	$hasil = mysql_query( $seleksi );
		
		if ($tanya=="yes") {
		mysql_query("DELETE FROM member WHERE user_id='$user_id'");
	
		echo "<p>Member ini berhasil di delete! <p><a href=$PHP_SELF?buka=member_nonaktif>OK</a>";
	} else {
		echo "Apakah anda yakin mau menghapus member ini ?<br><br>
		<a href=$PHP_SELF?buka=member_nonaktif&menu=del&user_id=$user_id&tanya=yes>Ya</a> | 
		<a href=$PHP_SELF?buka=member_nonaktif>Tidak</a>";
	}
}
// --- Akhir


// --- Tanya dan Aktifkan member
function aktifkan($user_id,$tanyaaktifkan){
$perintah="SELECT * FROM admin WHERE user_id=1";
$hasil = mysql_query( $perintah );
while ($data = mysql_fetch_array($hasil)) {

			$harga_produk = rupiah($data[harga_produk]);
			$sponsor = $data[harga_produk] * $data[persenan] / 100;
			$pengelola = $data[harga_produk] - $sponsor;
			$bayar_sponsor = rupiah($sponsor);
			$bayar_pengelola = rupiah($pengelola);
}


	$seleksi="SELECT username, passwd, nama, email FROM member WHERE user_id=$user_id";
	$hasil = mysql_query( $seleksi );
		while ($data = mysql_fetch_array($hasil)) {
			//$user_id=$data[0];
			$username=$data[username];
			$passwd=$data[passwd];
			$nama=$data[nama];
			$email=$data[email];
			}

		
		if ($tanyaaktifkan=="yes") {
		$status="aktif";
		$statuspembayaran="sudah";
		mysql_query("UPDATE member SET status='$status', pembayaran='$statuspembayaran', bayar_pemilik='$pengelola', bayar_sponsor='$sponsor' WHERE user_id='$user_id'");
	
		echo "<p>Member ini berhasil di Aktifkan! <br>
		Dan sebuah email sudah terkirim kepada member ini.
		<p><a href=$PHP_SELF?buka=member_nonaktif>OK</a>";
		
$hasil = mysql_query( "SELECT email_admin, url_web, judul_web FROM admin WHERE user_id=1" ) or error( mysql_error() );
$dataweb = mysql_fetch_array( $hasil );
$email_admin=$dataweb[email_admin];
$url_web=$dataweb[url_web];
$judul_web=$dataweb[judul_web];

$seleksi2 = mysql_query( "select emailmaster, judul, pesan from kirim_email where action='aktifkanmember'" ) or error( mysql_error() );
$result2 = mysql_fetch_array( $seleksi2 );
$emailmaster=$result2[emailmaster];
$subject=$result2[judul];
$message=$result2[pesan];
$subject=str_replace("[uname_member]", "$username", $subject);
$subject=str_replace("[nama_member]", "$nama", $subject);
$message=str_replace("[uname_member]", $username, $message);
$message=str_replace("[nama_member]", $nama, $message);
$message=str_replace("[password_member]", "$passwd", $message);
$message=str_replace("[judul_web]", "$judul_web", $message);
$message=str_replace("[url_web]", "$url_web", $message);
kirimemail($emailmaster, $email, $subject, $message);

	} else {
		echo "Apakah anda yakin mau meng-Aktifkan member ini ?<br><br>
		<a href=$PHP_SELF?buka=member_nonaktif&menu=aktifkan&user_id=$user_id&tanyaaktifkan=yes>Ya</a> | 
		<a href=$PHP_SELF?buka=member_nonaktif>Tidak</a>";
	}
}
// --- Akhir



// --- Tanya dan NonAktifkan member
function nonaktifkan($user_id,$tanyanonaktifkan){

	$seleksi="SELECT * FROM member WHERE user_id=$user_id";
	$hasil = mysql_query( $seleksi );
		while ($data = mysql_fetch_array($hasil)) {
			//$user_id=$data[0];
			$username=$data[username];
			$passwd=$data[passwd];
			$nama=$data[nama];
			$email=$data[email];
			}

		if ($tanyanonaktifkan=="yes") {
		$status="nonaktif";
		$statuspembayaran="sudah";
		mysql_query("UPDATE member SET status='$status', bayar_pemilik='0', bayar_sponsor='0', bank_tgltransfer='0', pembayaran='$statuspembayaran' WHERE user_id='$user_id'");
	
		echo "<p>Member ini berhasil di Nonaktifkan!<br>
		Dan sebuah email sudah terkirim kepada member ini.
		<p><a href=$PHP_SELF?buka=member_nonaktif>OK</a>";
$hasil = mysql_query( "SELECT email_admin, url_web, judul_web FROM admin WHERE user_id=1" ) or error( mysql_error() );
$dataweb = mysql_fetch_array( $hasil );
$email_admin=$dataweb[email_admin];
$url_web=$dataweb[url_web];
$judul_web=$dataweb[judul_web];

$seleksi2 = mysql_query( "select emailmaster, judul, pesan from kirim_email where action='nonaktifkanmember'" ) or error( mysql_error() );
$result2 = mysql_fetch_array( $seleksi2 );
$emailmaster=$result2[emailmaster];
$subject=$result2[judul];
$message=$result2[pesan];
$subject=str_replace("[uname_member]", "$username", $subject);
$subject=str_replace("[nama_member]", "$nama", $subject);
$message=str_replace("[uname_member]", $username, $message);
$message=str_replace("[nama_member]", $nama, $message);
$message=str_replace("[password_member]", "$passwd", $message);
$message=str_replace("[judul_web]", "$judul_web", $message);
$message=str_replace("[url_web]", "$url_web", $message);
kirimemail($emailmaster, $email, $subject, $message);

	} else {
		echo "Apakah anda yakin mau me-Nonaktifkan member ini ?<br><br>
		<a href=$PHP_SELF?buka=member_nonaktif&menu=nonaktifkan&user_id=$user_id&tanyanonaktifkan=yes>Ya</a> | 
		<a href=$PHP_SELF?buka=member_nonaktif>Tidak</a>";
	}
}
// --- Akhir


// Member downline
function berikutnya($user) {

	if(isset($user))
		{
        $seleksi = mysql_query("SELECT * FROM member where sponsor_username='$user'") or error(mysql_error() );
		$menu = mysql_num_rows( $seleksi );
  		echo "<p class=teks><b>Jumlah Direct Downline member $user = $menu</b></p>";
		if($menu != 0)
		{
		echo "<table border=\"1\" width=\"100%\" style=\"border-collapse: collapse\" bordercolor=\"#D8D8D8\" cellpadding=\"2\">";
		echo "<tr>";
		echo "<td width=\"20\" align=center class=teks><b>No</b></td>";
		echo "<td width=\"100\" align=center class=teks><b>Username</b></font></td>";
		echo "<td width=\"100\" align=center class=teks><b>Nama</b></td>";
		echo "<td width=\"140\" align=\"center\" class=teks><b>Email</b></td>";
		echo "<td width=\"80\" align=\"center\" class=teks><b>Status</b></td>";
		echo "<td width=\"80\" align=\"center\" class=teks><b>Kota</b></td>";
		echo "<td width=\"50\" align=center class=teks2><b>Next</b></td>";
		echo "</tr>";
	$i = 1;
	while($row = mysql_fetch_array($seleksi))
	{
	$i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
		$no++;
		echo "<tr>";
		echo "<td align=center bgcolor=\"$bgColor\" class=teks2>$no</td>";
		echo "<td bgcolor=\"$bgColor\" class=teks2>$row[username]</td>";
		echo "<td bgcolor=\"$bgColor\" class=teks2>$row[nama]</a></td>";
		echo "<td bgcolor=\"$bgColor\" class=teks2>$row[email]</td>";
		echo "<td bgcolor=\"$bgColor\" class=teks2>$row[status]</td>";
		echo "<td bgcolor=\"$bgColor\" class=teks2>$row[kota]</td>";
		echo "<td bgcolor=\"$bgColor\" align=center class=teks><a href=$PHP_SELF?buka=member_nonaktif&menu=berikutnya&user=$row[username]>>></td>";
		echo "</tr>";
	$i=$i+1;
			}
		echo "<tr>";
		echo "<td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"10\"></td>";
		echo "</td>";
		echo "</table>";
		echo "<p align=\"center\"><a href=\"javascript:history.back()\">Back </a></p>";
			
			} else {

		echo "<p class=teks>Member $user belum mempunyai downline</a></p>";
		echo "<p align=\"center\"><a href=\"javascript:history.back()\">Back </a></p>";
			}
		}
}
// --- Akhir
?>
