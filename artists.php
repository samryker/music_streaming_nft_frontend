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
			<!-- artists -->
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index ">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Artists</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Artists</h1>
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
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist3.jpg" alt="">
								</div>
								<h3 class="artist__title">John Doe</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist4.jpg" alt="">
								</div>
								<h3 class="artist__title">Megan Thee</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist5.jpg" alt="">
								</div>
								<h3 class="artist__title">Stefflon Don</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist6.jpg" alt="">
								</div>
								<h3 class="artist__title">Juice WRLD</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist7.jpg" alt="">
								</div>
								<h3 class="artist__title">LOCASH</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist8.jpg" alt="">
								</div>
								<h3 class="artist__title">NLE Choppa</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist3.jpg" alt="">
								</div>
								<h3 class="artist__title">John Doe</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist4.jpg" alt="">
								</div>
								<h3 class="artist__title">Megan Thee</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist5.jpg" alt="">
								</div>
								<h3 class="artist__title">Stefflon Don</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist6.jpg" alt="">
								</div>
								<h3 class="artist__title">Juice WRLD</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist7.jpg" alt="">
								</div>
								<h3 class="artist__title">LOCASH</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist8.jpg" alt="">
								</div>
								<h3 class="artist__title">NLE Choppa</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist1.jpg" alt="">
								</div>
								<h3 class="artist__title">BENEE Featuring</h3>
							</a>
						</div>

						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<a href="artist" class="artist">
								<div class="artist__cover">
									<img src="img/artists/artist2.jpg" alt="">
								</div>
								<h3 class="artist__title">Jason Aldean</h3>
							</a>
						</div>
					</div>

					<button class="main__load" type="button">Load more</button>
				</div>
			</div>
			<!-- end artists -->

			<!-- events -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Upcoming Events</h2>

						<a href="events" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--events owl-carousel" id="events">
							<div class="event" data-bg="img/events/event1.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 14, 2021</span>
								<span class="event__time">8:00 pm</span>
								<h3 class="event__title"><a href="event">Sorry Babushka</a></h3>
								<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
							</div>

							<div class="event" data-bg="img/events/event2.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 16, 2021</span>
								<span class="event__time">7:00 pm</span>
								<h3 class="event__title"><a href="event">Big Daddy</a></h3>
								<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
							</div>

							<div class="event" data-bg="img/events/event3.jpg">
								<span class="event__out">Sold out</span>
								<span class="event__date">March 23, 2021</span>
								<span class="event__time">9:30 pm</span>
								<h3 class="event__title"><a href="event">Rocky Pub</a></h3>
								<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
							</div>

							<div class="event" data-bg="img/events/event4.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 30, 2021</span>
								<span class="event__time">6:00 pm</span>
								<h3 class="event__title"><a href="event">Big Club</a></h3>
								<p class="event__address">123 6th St. Melbourne, FL 32904</p>
							</div>

							<div class="event" data-bg="img/events/event5.jpg">
								<span class="event__out">Sold out</span>
								<span class="event__date">March 30, 2021</span>
								<span class="event__time">10:00 pm</span>
								<h3 class="event__title"><a href="event">Big Daddy</a></h3>
								<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
							</div>

							<div class="event" data-bg="img/events/event6.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 31, 2021</span>
								<span class="event__time">6:30 pm</span>
								<h3 class="event__title"><a href="event">Rocky Pub</a></h3>
								<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
							</div>
						</div>

						<button class="main__nav main__nav--prev" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
						<button class="main__nav main__nav--next" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
					</div>
				</div>
			</section>
			<!-- end events -->
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- end footer -->


	<?php include 'footer_links.php';?>
</body> 
</html>