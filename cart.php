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
						<li class="breadcrumb__item breadcrumb__item--active">Cart</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Cart</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12 col-lg-8">
					<!-- cart -->
					<div class="cart">
						<div class="cart__table-wrap">
							<div class="cart__table-scroll">
								<table class="cart__table">
									<thead>
										<tr>
											<th>Product</th>
											<th>Title</th>
											<th>Amount</th>
											<th>Price</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="cart__img">
													<img src="img/store/item2.jpg" alt="">
												</div>
											</td>
											<td><a href="product">Microphone R4</a></td>
											<td>
												<div class="cart__amount">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>
													</button>
													<input type="text" value="1">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg>
													</button>
												</div>
											</td>
											<td><span class="cart__price">$699<span>$799</span></span></td>
											<td><button class="cart__delete" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button></td>
										</tr>
										<tr>
											<td>
												<div class="cart__img">
													<img src="img/store/item3.jpg" alt="">
												</div>
											</td>
											<td><a href="product">Music Blank</a></td>
											<td>
												<div class="cart__amount">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>
													</button>
													<input type="text" value="1">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg>
													</button>
												</div>
											</td>
											<td><span class="cart__price">$3.99</span></td>
											<td><button class="cart__delete" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button></td>
										</tr>
										<tr>
											<td>
												<div class="cart__img">
													<img src="img/store/item4.jpg" alt="">
												</div>
											</td>
											<td><a href="product">Headphones ZR-991</a></td>
											<td>
												<div class="cart__amount">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>
													</button>
													<input type="text" value="1">
													<button type="button">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg>
													</button>
												</div>
											</td>
											<td><span class="cart__price">$199</span></td>
											<td><button class="cart__delete" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cart__info">
							<div class="cart__total">
								<p>Total:</p>
								<span>$901.99</span>
							</div>

							<!-- promo -->
							<form action="#" class="cart__promo">
								<input type="text" class="sign__input" placeholder="Promo code">
								<button type="button" class="sign__btn">Apply</button>
							</form>
							<!-- end promo -->

							<div class="cart__systems">
								<i class="pf pf-visa"></i>
								<i class="pf pf-mastercard"></i>
								<i class="pf pf-paypal"></i>
							</div>
						</div>
					</div>
					<!-- end cart -->
				</div>

				<div class="col-12 col-lg-4">
					<!-- checkout -->
					<form action="#" class="sign__form sign__form--cart">
						<h4 class="sign__title">Checkout</h4>
						<div class="sign__group">
							<input type="text" name="name" class="sign__input" placeholder="John Doe">
						</div>

						<div class="sign__group">
							<input type="text" name="email" class="sign__input" placeholder="JohnDoe@email.com">
						</div>

						<div class="sign__group">
							<input type="text" name="phone" class="sign__input" placeholder="+1 234 567-89-00">
						</div>
						<div class="sign__group sign__group--row">
							<label class="sign__label">Payment method:</label>

							<ul class="sign__radio">
								<li>
									<input id="type1" type="radio" name="type" checked="">
									<label for="type1">Visa</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type">
									<label for="type2">Mastercard</label>
								</li>
								<li>
									<input id="type3" type="radio" name="type">
									<label for="type3">Paypal</label>
								</li>
							</ul>
						</div>
						<div class="sign__group sign__group--row">
							<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
						</div>
						<button type="button" class="sign__btn">Complete</button>
					</form>
					<!-- end checkout -->
				</div>
			</div>

			<!-- partners -->
			<div class="row">
				<div class="col-12">
					<div class="partners owl-carousel">
						<a href="#" class="partners__img">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<!-- end partners -->
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- end footer -->


	<?php include 'footer_links.php';?>
</body> 
</html>