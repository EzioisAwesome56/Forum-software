<?php $title = __("Downloads");
require(__DIR__.'/lib/common.php'); ?>
<style>
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
	background-color: white;
	color: black;
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 96%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
</style>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("downloads");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<table class="outline"><tbody>

<tr class="header0"><th>
    Downloads
</th></tr>

<tr class="cell0"><td>
Welcome to the MMM downloads page! Here you will find a lot of tools that will be useful on your journey of hacking Super Mario Maker. You will also find a bunch of themes made by other people here. Good luck!
</td></tr>
</tbody></table><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."><br>

	<table class="downloadtable outline margin" id="downloads">
		<tr class="header0">
			<th style="width: 80px;" class="center">Game style</th>
			<th class="center">Name</th>
			<th style="width: 130px;" class="center">Downloads</th>
			<th class="center" style="width: 300px;">Credits</th>
		</tr>
        <tr class="cell1">
			<td class="center">SMB1</td>
			<td><a href="/thread/57-super-mario-maker-beta-theme">Mario Maker Beta Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB1-Beta.zip">WiiU</a></td>
			<td>~<a href="/profile/12-danielt1985">Daniel T Gaming</a>: Graphics<br>
			~<a href="/profile/4-Zachabossaloler/">Zachabossaloler</a>: Import</td>
		</tr>
		<tr class="cell2">
			<td class="center">SMB1</td>
			<td><a href="/thread/58-super-mario-bros-ice-snow-theme">Snow Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB1-Ice.zip">WiiU</a></td>
			<td class="center"><a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell1">
			<td class="center">SMB1</td>
			<td><a href="/thread/62-overworld-theme-from-super-mario-all-stars">SMB1 SMAS Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB1-SMAS.zip">WiiU</a></td>
			<td>~<a href="https://www.spriters-resource.com/submitter/Jouw/">Jouw</a>: Ripped the SMAS assets<br>
			~<a href="/profile/4-Zachabossaloler/">Zachabossaloler</a>: Importing</td>
	    <tr>	
		</tr>	
		<tr class="cell2">
			<td class="center">SMB1</td>
			<td><a href="/thread/59-castle-bleck/">Castle Bleck Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB1-Castle-Bleck.zip">WiiU</a></td>
			<td>~<a href="/profile/2-MayroSMM/">MayroSMM</a> & <a href="https://www.mfgg.net/?act=user&param=01&uid=11485">SuperArthurBros</a>: Graphics<br>
			~<a href="/profile/4-Zachabossaloler/">Zachabossaloler</a>: Importing</td>
		</tr>
		<tr class="cell1">
			<td class="center">SMB1</td>
			<td><a href="/thread/61-super-mario-bros-snow-theme">Ice Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB1-Ice.zip">WiiU</a> <a href="/downloads/WiiU-SMB1-Ice-1.4.zip">(v1.4)</a></td>
			<td>~<a href="https://www.mfgg.net/index.php?act=user&param=01&uid=11778">Mario3785</a> & <a href="https://www.mfgg.net/index.php?act=user&param=01&uid=13907">kirbypoyo567</a>: Graphics<br>
			~<a href="/profile/4-Zachabossaloler">Zachabossaloler</a> & <a href="/profile/2-MayroSMM/">MayroSMM</a> (1.4): Importing</td>
		</tr>
		<tr class="cell2">
			<td class="center">SMB3</td>
			<td><a href="/thread/56-alternate-grass-theme-for-smb3">Grassland theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB3-Grassland">WiiU</a></td>
			<td>~<a href="/profile/2-MayroSMM/">MayroSMM</a>: Creating the tileset<br>
			~<a href="/profile/4-Zachabossaloler/">Zachabossaloler</a>: Import</td>
		</tr>
		<tr class="cell1">
			<td class="center">SMB3</td>
			<td><a href="https://www.youtube.com/watch?v=ZDVQf4k5T5M">SMB2 Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMB3-SMB2.zip">WiiU</a></td>
			<td class="center"><a href="/profile/4-Zachabossaloler/">Zachabossaloler</a> & Collin</td>
		</tr>
		<tr class="cell2">
			<td class="center">SMW</td>
			<td><a href="https://www.youtube.com/watch?v=GBAasXelQhI">Minecraft Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMW-Minecraft.zip">WiiU</a></td>
			<td>~<a href="/profile/9-GRAnimated/">GRAnimated</a>: Creating the tileset<br>
			~<a href="/profile/4-Zachabossaloler/">Zachabossaloler</a>:Import</td>
		</tr>
		<tr class="cell1">
			<td class="center">SMW</td>
			<td><a href="https://www.youtube.com/watch?v=_cW06CWRAl4">Casino Night Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMW-Casino.zip">WiiU</a></td>
			<td class="center"><a href="/profile/2-MayroSMM/">MayroSMM</a> & <a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell2">
			<td class="center">SMW</td>
			<td><a href="https://www.youtube.com/watch?v=nbRisMFkQjY">SMW SMAS Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMW-SMAS.zip">WiiU</a></td>
			<td class="center"><a href="/profile/2-MayroSMM/">MayroSMM</a> & <a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell1">
			<td class="center">SMW</td>
			<td><a href="https://www.youtube.com/watch?v=TwUR3yH8svI">Ice Cave Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-SMW-Ice.zip">WiiU</a></td>
			<td class="center"><a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell2">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=UOzPuPJWPpE">Autumn Theme</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-Autumn.zip">WiiU</a></td>
			<td class="center"><a href="/profile/5-AboodXD/">AboodXD</a></td>
		</tr>
		<tr class="cell1">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=DZHILHRYAaY">Jungle</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-Jungle.zip">WiiU</a></td>
			<td class="center"><a href="/profile/5-AboodXD/">AboodXD</a> & <a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell2">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=nbRisMFkQjY">Desert theme</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-desert.zip">WiiU</a></td>
			<td class="center"><a href="/profile/2-MayroSMM/">MayroSMM</a> & <a href="/profile/4-Zachabossaloler/">Zachabossaloler</a></td>
		</tr>
		<tr class="cell1">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=S3YdcGrOTe0">NSMBDS Ground theme</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-NSMBDS.zip">WiiU</a> & <a href="/downloads/3DS-NSMBU-NSMBDS.zip">3DS</a></td>
			<td class="center"><a href="/profile/5-AboodXD/">AboodXD</a></td>
		</tr>
		<tr class="cell2">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=03-iCQrmCvs">NSMBW Ground theme</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-NSMBW.zip">WiiU</a> & <a href="/downloads/3DS-NSMBU-NSMBW.zip">3DS</a></td>
			<td class="center"><a href="/profile/5-AboodXD/">AboodXD</a></td>
		</tr>
		<tr class="cell1">
			<td class="center">NSMBU</td>
			<td><a href="https://www.youtube.com/watch?v=5W8hZeqnMFo">Lava UnderGround theme</a></td>
			<td class="center"><a href="/downloads/WiiU-NSMBU-LavaUnderground.zip">WiiU</a></td>
			<td class="center"><a href="/profile/5-AboodXD/">AboodXD</a></td>
		</tr>
		<tr class="cell2">
			<td class="center">NSMBU</td>
			<td>Blue Ground themes</td>
			<td class="center"><a href="/downloads/3DS-NSMBU-NSMBW-blue.zip">3DS NSMBW</a><br>
			<a href="/downloads/3DS-NSMBU-NSMBDS-blue.zip">3DS NSMBDS</a><br>
			<a href="/downloads/3DS-NSMBU-NSMBU-blue.zip">3DS NSMBU</a></td>
			<td>~<a href="/profile/5-AboodXD/">AboodXD</a>: Making the tileset<br>
			~<a href="/profile/1-MaorNinja3DS/">MaorNinja3DS</a>: Making it blue</td>
		</tr>
</table>
