<div class="row">
	<div class="col m4 l4 s5">
		<div class="card z-depth-1">
			<div class="card">
			<button class="btn red white-text waves-effect" style="width:100%;height:50px;">Kategori</button>
			</div>
				<ul class="center">
			<?php
			if(isset($kategori)){
				foreach ($kategori as $k){
			?>
					
						<li><a href="<?= base_url()?>index.php/Home/kategori/<?=$k->idkategori ?>"><button class="btn white black-text waves-effect" style="padding:0px;margin:0px;width:90%;opacity:0.7;"><?= $k->kategori ?></button></a></li>
					
			<?php
				}
			}
			else
			{
				echo "No data available";
			}
			?>
				</ul>
		</div>
		<br />
		<div class="card z-depth-1">
			<div class="card">
				<button class="btn red white-text waves-effect" style="width:100%;height:50px;">Follow Us</button>
			</div>
			<ul class="center">
				<li><a href="#"><button class="btn white black-text waves-effect" style="width:90%;opacity:0.7;">Facebook</button></a></li>
				<li><a href="#"><button class="btn white black-text waves-effect" style="width:90%;opacity:0.7;">Twitter</button></a></li>
				<li><a href="#"><button class="btn white black-text waves-effect" style="width:90%;opacity:0.7;">Instagram</button></a></li>
			</ul>
		</div>				
	</div>
	<div class="col l8 m8 s7">
		
		<marquee><p class="red-text">Selamat datang di I-News portal berita teraktual dan terupdate </p></marquee>
		<br />
		<div class="card">
			<div class="row">
			<div class="col l4 m6 s6">
			<img src="<?= base_url()?>assets/images/world.jpg" class="responsive-image">
			</div>
			<div class="col l8 m6 s6">
				<h5>Internet sebagai sarana belajar</h5>
				<p>Sebagai sarana belajar sebaiknya internet diberikan dengan harga murah untuk rakyat, bagaimana negara ini mau maju jika masyarakatnya bodoh.</p>
			</div>
			</div>
		</div>
	</div>
</div>