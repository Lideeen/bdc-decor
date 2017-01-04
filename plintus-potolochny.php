<!DOCTYPE html>
<html>
	<head>
		<title>Потолочный плинтус</title>
		<?php include "includes/links.php"; ?>
	</head>
	<body>
		<div id="header">	
			<!-- Navigation Bloc -->
			<div id="subheader">
				<div>
					<div>
						<img src="img/logo.png" alt="" />
						<span>BDC Decor</span>
					</div>
				</div>
			</div>
			<?php include "includes/nav.php"; ?>
			<!-- Navigation Bloc END -->
		</div>
		<!-- Main -->
		<div id="main" class="container">
			<?php include "includes/under-menu.php"; ?>
			<div class="container" id="intro">
				<div>
					<div class="intro-line"></div>
					<div class="title">потолочный плинтус</div>
					<div class="intro-line"></div>
				</div>
				<p>Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст 
				законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи 
				и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего 
				интерьера.
				На сегодняшний день рынок предлагает покупателю широкий выбор напольного плинтуса: напольный плинтус пластиковый, плинтус напольный деревянный, 
				плинтус из полиуретана, плинтус напольный из дюрополимера. Что позволяет покупателю выбрать напольный плинтус в Минске, который подойдет и по 
				функциональным качествам и по дизайну.</p>
			</div>
		</div>
		<!-- Main END -->
		<!-- Footer -->
		<?php include "includes/footer.php"; ?>
		<!-- Footer END -->
		<script type="text/javascript" src="slick/slick.js"></script>
		<script>
			$(document).ready(function(){
				$('.multiple-items').slick({
					infinite: true,
					slidesToShow: 6,
					slidesToScroll: 1
				});
				
				$('.middle-slider').slick({
					infinite: true,
					slidesToShow: 4,
					slidesToScroll: 1
				});
			});
		</script>
	</body>
</html>