
<div class="row mt-2" style="margin:0px">
	<div id="slider-img" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider-img" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner" style="border-radius: 5px;">
			<div class="carousel-item active">
				<img src="<?php echo base_url() ?>/template/home/aero2.png" class="d-block w-100"></div>
		</div>
		<a class="carousel-control-prev" href="#slider-img" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slider-img" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="col-12 mb-3 mt-4">
	<center>
	<span class="p-2" style="font-weight: 700; font-size: 20px; border-radius: 4px; color: #001439"></span>
	</center>
</div>

<div class="row game">
    <?php foreach ($data_game as $key => $value) {?>
    <div class="box-game">
        <div class="card">
            <img src="<?php echo base_url('/template/image/'.$value->gambar) ?>" class="card-img-top">
            <div class="card-body" style="padding: 0px;">
                <div class="card-info-1"><?php echo $value->nama_game ?></div>
                <div class="card-info-2"><?php echo $value->proses ?></div>
                <a href="<?php echo base_url('home/detail/'.$value->id_game) ?>" class="stretched-link"></a>
            </div>
        </div>
    </div>
<?php } ?>
</div>