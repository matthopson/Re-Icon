<?php
	$page = "Home";
	$pageTitle = "Icon Motosports :: Portland USA";
	$pageDescription = "";
	require('includes/dspHeader.php');
?>
	<div class="container">
		<header>
			<a href="/" id="logo"><img src="img/icon_logo.png"></a>
			<section id="interact">
				<span id="search">
					<form method="get" action="/search" class="searchForm">
					    <input type="submit" class="searchSubmit" value="">
					    <label for="s" class="assistive-text" style="display:none">Search</label>
						<input name="searchtype" value="product" type="hidden"/>
						<input type="text" class="field s" name="q" placeholder="Product Search / Part # Search">
					</form>
				</span>
				<span id="followUs">
					<a target="_blank" class="icon1000" title="ICON1000" href="http://icon1000.com/culture/blog/"></a>
	                <a target="_blank" class="facebook" title="Facebook" href="http://www.facebook.com/pages/Icon/246334089439"></a>
	                <a target="_blank" class="twitter" title="Twitter" href="http://twitter.com/IconMotosports"></a>
	                <a target="_blank" class="youTube" title="YouTube" href="http://www.youtube.com/iconmotosports"></a>
	                <a target="_blank" class="pinterest" title="Pinterest" href="https://pinterest.com/iconmotosports/"></a>
	                <a target="_blank" class="google" title="Google+" href="https://plus.google.com/110965041137193952156" rel="publisher"></a>
				</span>
				<div class="clear"></div>
				<nav>
					<ul>
						<li class="optionMenu"><h1>Menu</h1></li>
						<li><h1>The Gear</h1>
							<ul>
								<li><a href="/products/helmets">Helmets</a></li>
								<li><a href="/products/mens">Mens</a></li>
								<li><a href="/products/womens">Womens</a></li>
								<li><a href="/products/icon-1000">ICON 1000</a></li>
							</ul>
						</li>
						<li class="sep"><span></span></li>
						<li><h1>The Ride</h1>
							<ul>
								<li><a href="/limiter">Limiter</a></li>
								<li><a href="/videos">Videos</a></li>
								<li><a href="/team">Team</a></li>
								<li><a href="/bikes">Bikes</a></li>
							</ul>
						</li>
						<li class="sep"><span></span></li>
						<li><h1>The Brand</h1>
							<ul>
								<li><a href="/dealers">Dealers</a></li>
								<li><a href="/catalog">Catalog</a></li>
								<li><a href="/faq">FAQ</a></li>
								<li><a href="/contact-us">Contact Us</a></li>
							</ul>
						</li>
						<div class="clear"></div>
					</ul>
					
				</nav>
			</section>
			<div class="clear"></div>
		</header>
		
		<section id="mobSearch">
			<form method="get" action="/search" class="searchForm">
			    <label for="s" class="assistive-text" style="display:none">Search</label>
				<input name="searchtype" value="product" type="hidden"/>
				<input type="text" class="field s" name="q" placeholder="Product Search / Part # Search">				
				<input type="submit" class="searchSubmit" value="">
			</form>
		</section>
		
		<div id="cbp-fwslider" class="cbp-fwslider">
			<ul>
				<li>
					<a href="/products/?productGroupId=132337"><img src="/img/SanctuaryJacketHomepageAd.jpg"/></a>
				</li>
				<li>
					<a href="/products/?productGroupId=132294"><img src="/img/AirmadaSpaztykHelmetHomepageAd.jpg"></a>
				</li>
				<li>
					<a href="/products/?productGroupId=132306"><img src="/img/VigilanteDropoutJacketHomepageAd.jpg"></a>
				</li>
				<li>
					<a href="/products/?productGroupId=132305"><img src="/img/VariantHardLuckHomepagead.jpg"></a>
				</li>
				<li>
					<a href="/products/?productGroupId=132310"><img src="/img/OildaleJacketHomepageAd.jpg"></a>
				</li>
				<li>
					<a href="/bikes/the-speedmaster"><img src="/img/SpeedmasterHomePageAd.jpg"></a>
				</li>
				<li>
					<a href="/bikes/iron-lung/"><img src="/img/IronLungHomePageAd.jpg"></a>
				</li>
			</ul>
		</div>

		
	</div><!---container--->

<?php require('includes/dspFooter.php'); ?>

