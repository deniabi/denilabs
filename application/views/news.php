<div class="row">
	<div class="col l12 m12 s12">
		<div class="card">
			<?php
				echo form_open_multipart('Site/newsupdate');
			?>
			Kategori :
			<select name="kategori">
				<option> - Pilih - </option>
				<option value="1"> Politik </option>
				<option value="2"> Ekonomi </option>
				<option value="3"> Technologi </option>
				<option value="1"> Mancanegara </option>
			</select><br /><br />
			Judul :
			<input type="text" name="judul" required /><br /><br />
			Isi :<br />
			<textarea name="isi"></textarea><br /><br />
			Gambar :
			<input type="file" name="gambar"><br /><br />
			<input type="submit" value="Simpan">
			<?php
				echo form_close();
			?>
		</div>
	</div>
</div>