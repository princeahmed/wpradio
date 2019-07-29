<style>

	/* Gprice Default CSS */
	.gprice-section {
		padding: 100px 0;
	}

	.gprice-section.bg {
		background: #f5f5f5;
	}

	/* Gprice Header */
	.gprice-header {
		margin-bottom: 20px;
	}

	.gprice-header .title {
		text-transform: uppercase;
		font-size: 24px;
		font-family: 'Open Sans', sans-serif;
		font-weight: 700;
		padding-bottom: 20px;
		position: relative;
		display: inline-block;
		color: #555;
		margin: 0 0 20px;
	}

	.gprice-header .title::before {
		position: absolute;
		left: 50%;
		width: 50%;
		height: 3px;
		margin-left: -25%;
		content: "";
		bottom: -1.5px;
	}

	.gprice-header .title::after {
		position: absolute;
		left: 50%;
		width: 12px;
		height: 12px;
		content: "";
		bottom: -6px;
		border-radius: 100%;
		margin: 0;
		margin-left: -6px;
	}

	.gprice-section.secondary {
		background: #444;
	}

	.gprice-section.secondary .gprice-header .title {
		color: #fff;
	}

	/* Gprice Default Style */
	.gprice-single {
		margin-top: 30px;
	}

	.gprice-single .g-title {
		margin: 0;
		font-family: 'Open Sans', sans-serif;
		font-weight: 700;
	}

	.gprice-single .text {
		font-family: 'Open Sans', sans-serif;
		font-weight: 400;
	}

	.gprice-single .amount {
		font-family: 'Open Sans', sans-serif;
		font-weight: 400;
	}

	.gprice-single .gprice-list,
	.gprice-single .gprice-list li {
		font-family: 'Open Sans', sans-serif;
		font-weight: 400;
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.gprice-single .gprice-list li {
		font-size: 14px;
		display: block;
		cursor: pointer;
	}

	/* Gprice Button */
	.gprice-single .g-button {
		color: #fff;
		padding: 14px 40px;
		display: inline-block;
		text-align: center;
		font-weight: 600;
		transition: all 0.3s linear;
		border-radius: 3px;
		border: none;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		text-transform: capitalize;
		position: relative;
		text-decoration: none;
		margin: 2px;
	}

	.gprice-single .g-button:hover {
		box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
	}

	/* Bordered Style */
	.gprice-single .g-button.bordered {
		background: transparent;
		z-index: 50;
		color: #333;
	}

	.gprice-single .g-button.bordered:hover {
		color: #fff;
	}

	.gprice-single .g-button.bordered::before {
		border-radius: 3px;
		content: "";
		height: calc(100% + 4px);
		left: -2px;
		position: absolute;
		top: -2px;
		-webkit-transition: all 0.3s linear;
		-moz-transition: all 0.3 linear;
		transition: all 0.3 linear;
		width: calc(100% + 4px);
		z-index: -2;
	}

	.gprice-single .g-button.bordered:after {
		background: #fff none repeat scroll 0 0;
		border-radius: 3px;
		content: "";
		height: 100%;
		left: 0;
		position: absolute;
		top: 0;
		transition: all 0.3s linear;
		width: 100%;
		z-index: -1;
		transform: scale(1);
	}

	.gprice-single .g-button.bordered:hover:after {
		opacity: 0;
		transform: scale(0);
	}

	.gprice-single .g-button.radius {
		border-radius: 50px;
	}

	.gprice-single .g-button.radius.bordered:before,
	.gprice-single .g-button.radius.bordered:after {
		border-radius: 100px;
	}

	/* Primary Style */
	.gprice-single .g-button.bordered.bg {
		color: #fff;
	}

	.gprice-single .g-button.bordered.bg:hover {
		color: #2E303C;
	}

	.gprice-single .g-button.bordered.bg:after {
		opacity: 0;
		transform: scale(0);
	}

	.gprice-single .g-button.bordered.bg:hover:after {
		opacity: 1;
		transform: scale(1);
	}

	.gprice-single .g-button.radius {
		border-radius: 50px;
	}

	.gprice-single .g-button.radius.bg:before,
	.gprice-single .g-button.radius.bg:after {
		border-radius: 100px;
	}

	.gprice-single .text {
		color: #555;
		margin: 0;
	}

	/*==================================
	  GPrice Style One
	====================================*/
	.g-table1 {
		overflow: hidden;
		transition: all 0.3s ease;
		text-align: center;
		position: relative;
		background: #fff;
		box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.07);
		border-radius: 15px;
	}

	.g-table1:hover {
		box-shadow: none;
	}

	.g-table1 .p-best {
		position: relative;
		display: inline-block;
		text-transform: capitalize;
		border-radius: 5px;
		overflow: hidden;
		font-size: 15px;
		background: #fff;
		position: absolute;
		top: 14px;
		left: -45px;
		transform: rotate(-48deg);
		border-radius: 0px;
		padding: 10px 48px;
		font-weight: 700;
		z-index: 6;
	}

	.g-table1 .p-best p {
		margin: 0;
		line-height: 13px;
	}

	.g-table1 .p-best span {
		display: block;
		margin-top: 2px;
		font-weight: 400;
		font-size: 13px;
	}

	/* Table Head */
	.g-table1 .bg-icon i {
		font-size: 100px;
		color: #fff;
		position: absolute;
		left: 50%;
		margin-left: -61px;
		opacity: 0.1;
		top: 40%;
		margin-top: -50px;
		-webkit-transition: all 0.8s ease;
		-moz-transition: all 0.8s ease;
		transition: all 0.8s ease;
		z-index: 1;
	}

	.g-table1:hover .bg-icon i {
		opacity: 0.3;
		-webkit-transform: scale(5);
		-moz-transform: scale(5);
		transform: scale(5);
	}

	.g-table1 .gprice-head {
		position: relative;
		padding: 30px 0;
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
		overflow: hidden;
	}

	.g-table1 .g-title {
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		transition: all 0.3s ease;
		font-size: 20px;
		color: #fff;
		margin-bottom: 15px;
		position: relative;
		z-index: 2;
	}

	.g-table1 .g-amount {
		font-size: 45px;
		color: #fff;
		line-height: 30px;
		position: relative;
		z-index: 2;
	}

	.g-table1 .amount {
		font-weight: 700;
		margin: 0;
	}

	.g-table1 .amount span {
		position: relative;
		font-size: 24px;
		font-weight: 600;
	}

	/* Table List */
	.g-table1 .gprice-list {
		padding: 30px 20px;
		text-align: center;
		position: relative;
	}

	.g-table1 .gprice-list li {
		color: #555;
		position: relative;
		margin-bottom: 12px;
		border-bottom: 1px solid #ebebeb;
		padding-bottom: 12px;
	}

	.g-table1 .gprice-list li:last-child {
		margin: 0;
		padding: 0;
		border: none;
	}

	.g-table1 .gprice-list li.cross {
		opacity: 0.5;
		text-decoration: line-through;
	}

	/* Table Bottom */
	.g-table1 .gprice-bottom {
		text-align: center;
		padding: 0 0 30px;
	}

	.g-table1 .gprice-bottom .text {
		margin: 10px 0 0;
		font-size: 14px;
	}

	.g-table1 .gprice-bottom .text i {
		margin-right: 5px;
	}

	.gprice-header .title::before, .gprice-header .title::after, .gprice-single .g-button.bordered::before, .g-table1 .gprice-head, .g-table2 .g-amount, .g-table2 .gprice-list li span, .g-table3 .p-best, .g-table4 .ribbon, .g-table4 .g-amount, .g-table5 .g-amount {
		background: #ed6ea0;
		background: -webkit-linear-gradient(to right, #ed6ea0 0%, #ec8c69 100%);
		background: linear-gradient(to right, #ed6ea0 0%, #ec8c69 100%);
	}

	.g-table1 .p-best, .g-table1 .gprice-bottom .text i, .g-table3:hover .g-title, .g-table3 .g-amount .amount, .g-table3 .gprice-list li span, .g-table4:hover .g-title, .g-table5:hover .g-title {
		color: #ed6ea0;
	}

	.g-table5:hover .gprice-head {
		border-bottom-color: #ed6ea0;
	}

	/*==================================
	  End GPrice Style One
	====================================*/
</style>

<section id="why-choose-area" data-scroll-index="2">
	<div class="container">
		<div class="row">
			<!--end why chosse image-->
			<div class="col-md-12">
				<div class="section-heading mt-5 mb-0 text-center">
					<h2 class="text-white">Flexible Pricing for Everyone</h2>
					<p class="text-white">Be a Happy Client, Join the growing community and start creating stunning radio station website.</p>
				</div>
			</div>

			<!-- Single Table -->
			<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
				<div class="g-table1 gprice-single">
					<!-- Table Head -->
					<div class="gprice-head">
						<div class="bg-icon"><i class="icofont-bicycle-alt-2"></i></div>
						<h2 class="g-title">FREE</h2>
						<!-- Table Price -->
						<div class="g-amount">
							<p class="amount text-white">Always Free</p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="gprice-list">
						<li>1850+ Pre included available radio stations.</li>
						<li>150 Countries Available</li>
						<li>Import maximum 20 country</li>
						<li class="cross">Play now song information</li>
						<li class="cross">Country List Shortcode</li>
						<li class="cross">Trending Stations Shortcode</li>
						<li class="cross">Featured Stations Shortcode</li>
					</ul>
					<!-- Table Bottom -->
					<div class="gprice-bottom">
						<a class="g-button bordered radius" href="#"><i class="icofont-download"></i> Download Now</a>
						<p class="text">Download from <i class="icofont-brand-wordpress"></i>  wordpress.org</p>
					</div>
				</div>
			</div>
			<!-- End Single Table-->


			<!-- Single Table -->
			<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
				<div class="g-table1 gprice-single">
					<!-- Table Head -->
					<div class="gprice-head">
						<div class="bg-icon"><i class="icofont-truck-alt"></i></div>
						<h2 class="g-title">PRO</h2>
						<!-- Table Price -->
						<div class="g-amount">
							<p class="amount text-white"><span>$35.00</span></p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="gprice-list">
						<li>45000+ Pre included available radio stations.</li>
						<li>233 Countries Available</li>
						<li>You can import all the stations of all countries</li>
						<li>Play now song information</li>
						<li>Country List Shortcode</li>
						<li>Trending Stations Shortcode</li>
						<li>Featured Stations Shortcode</li>
					</ul>
					<!-- Table Bottom -->
					<div class="gprice-bottom">
						<a class="g-button bordered radius" href="#"><i class="icofont-cart-alt"></i> Buy Now</a>
						<p class="text"><i class="icofont-ssl-security"></i>100% Secure Payment</p>
					</div>
				</div>
			</div>
			<!-- End Single Table-->


		</div>
	</div>
</section>
