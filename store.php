<!DOCTYPE html>
<html lang="en">
 <head>
	<?php include 'header_links.php';?>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Tailured Music streaming</title>
</head>
<body>
	<!-- header -->

	<?php include 'header.php';?>
	<!-- end header -->

	<!-- sidebar -->
	<?php include 'sidebar.php';?>

	<!-- end sidebar -->

	<!-- player -->
	<?php include 'player.php';?>
	<!-- end player -->

	<!-- main content -->
    <main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active"> NFT Store</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1> NFT Store</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select" name="genres">
								<option value="all">All artists</option>
								<option value="legacy">Legacy artists</option>
								<option value="active">Active artists</option>
							</select>

							<select class="main__select" name="years">
								<option value="All genres">All genres</option>
								<option value="1">Alternative</option>
								<option value="2">Blues</option>
								<option value="3">Classical</option>
								<option value="4">Country</option>
								<option value="5">Electronic</option>
								<option value="6">Hip-Hop/Rap</option>
								<option value="7">Indie</option>
								<option value="8">Jazz</option>
								<option value="8">Latino</option>
								<option value="8">R&B/Soul</option>
								<option value="8">Rock</option>
							</select>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						</div>
					</div>

					<div class="row row--grid">
						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item1.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Vinyl Player</a></h3>
								<span class="product__price">$1 099</span>
								<span class="product__new">New</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item2.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Microphone R4</a></h3>
								<span class="product__price">$799</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item3.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Music Blank</a></h3>
								<span class="product__price">$3.99</span>
								<span class="product__new">New</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item4.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Headphones ZR-991</a></h3>
								<span class="product__price">$199</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item5.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Piano</a></h3>
								<span class="product__price">$11 899</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item6.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Vinyl Player</a></h3>
								<span class="product__price">$2 499</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item7.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Guitar</a></h3>
								<span class="product__price">$299</span>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<div class="product">
								<div class="product__img">
									<img src="img/store/item8.jpg" alt="">

									<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg></button>
								</div>
								<h3 class="product__title"><a href="product">Microphone R4s</a></h3>
								<span class="product__price">$199</span>
							</div>
						</div>
					</div>

					<button class="main__load" type="button">Load more</button>
				</div>
			</div>	
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- end footer -->


	<?php include 'footer_links.php';?>
</body> 
</html>