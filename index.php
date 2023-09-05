<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ad",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?><br>
	<div class="site-section site-section-sm bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<div class="site-section-title">
						<h2>New Properties for You</h2>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_1.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$1,930,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_2.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$2,438,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_3.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$5,320,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_4.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$2,350,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_5.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$1,550,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure>
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/img_6.jpg" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$4,291,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Area:</span>
										<strong>240m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Beds:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Baths:</span>
										<strong>2</strong>
									</div>
									<div class="col">
										<span>Garages:</span>
										<strong>1</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

			</div>

		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3153600000",
		"CACHE_TYPE" => "Y",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "service",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
	<div class="site-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 text-center mb-5">
					<div class="site-section-title">
						<h2>Our Services</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-house"></span>
						<h2 class="service-heading">Research Subburbs</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-sold"></span>
						<h2 class="service-heading">Sold Houses</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-camera"></span>
						<h2 class="service-heading">Security Priority</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-house"></span>
						<h2 class="service-heading">Research Subburbs</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-sold"></span>
						<h2 class="service-heading">Sold Houses</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="#" class="service text-center border rounded">
						<span class="icon flaticon-camera"></span>
						<h2 class="service-heading">Security Priority</h2>
						<p><span class="read-more">Learn More</span></p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
	<div class="site-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center">
					<div class="site-section-title">
						<h2>Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
					<a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/images/img_4.jpg" alt="Image" class="img-fluid"></a>
					<div class="p-4 bg-white">
						<span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
						<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
							sunt.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
					<a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/images/img_2.jpg" alt="Image" class="img-fluid"></a>
					<div class="p-4 bg-white">
						<span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
						<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
							sunt.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
					<a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/images/img_3.jpg" alt="Image" class="img-fluid"></a>
					<div class="p-4 bg-white">
						<span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
						<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
							sunt.</p>
					</div>
				</div>

			</div>

		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>