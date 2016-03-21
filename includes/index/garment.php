<section id="garment" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Heddoko Suit">

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 content">
				<h2 data-animated="0">Smart Garment &amp; App <span></span></h2>

				<p itemprop="description" data-animated="0">
                    Heddoko is a smart compression suit that uses textile
                    embedded sensors to track your body movement and gives you real time 3D
                    feedback to help reduce your risk of injury.
                </p>

				<div class="col-xs-12">
					<div class="row">
                        <div class="col-xs-12 col-sm-4" data-animated="0">
                            <div
                                class="has-icon-img"
                                style="background-image: url(images/icons/icon-sensors.svg)"
                                title="Integrated sensors"></div>
                            <h4>Integrated<br> sensors</h4>
                        </div>
                        <div class="col-xs-12 col-sm-4" data-animated="0">
                            <div
                                class="has-icon-img"
                                style="background-image: url(images/icons/icon-body.svg)"
                                title="Full-body data capture"></div>
                            <h4>Full-body<br> data capture</h4>
                        </div>
                        <div class="col-xs-12 col-sm-4" data-animated="0">
                            <div
                                class="has-icon-img"
                                style="background-image: url(images/icons/icon-light-bluetooth.svg)"
                                title="Resists tough training"></div>
                            <h4>Wireless and<br> camera-less</h4>
                        </div>
					</div>
				</div>

				<p data-animated="0">
					<a itemprop="url" href="/product/#garment" class="btn btn-default" id="index_pg_garment_learnmore_btn">
                        Learn more
                    </a>
				</p>
			</div>
			<div class="col-xs-12 col-md-6 image">
                <?= Heddoko::pin([
                    'media' => 'http://www.heddoko.com/images/index/garment+app.png',
                    'description' => 'Heddoko smart garment'
                ]) ?>
                <!-- <img itemprop="image" src="images/index/garment+app.png" data-animated="4" alt="Garment" class="garment-app"> -->
				<img itemprop="image" src="images/index/garment.png" data-animated="4" alt="Garment" class="">
			</div>
		</div>
	</div>
</section>
