<!DOCTYPE html>
<html>
	<head>
		<title>Интерьерная лепнина</title>
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
					<div class="title">интерьерная лепнина</div>
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
			<div class="container" id="block-2">
				<div class="row not-main">
					<div class="col-sm-3 section">
						<div>
							<p class="topic">карнизы</p>
							<div class="line"></div>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Гладкие</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>С орнаментом</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>С подсветкой</p>
						</div>
					</div>
				</div>
				<div class="row not-main">
					<div class="col-sm-3 section">
						<div>
							<p class="topic">молдинги</p>
							<div class="line"></div>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Гладкие</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>C орнаментом</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Угловые элементы</p>
						</div>
					</div>
				</div>
				<div class="row not-main">
					<div class="col-sm-4 subsection" style="border-left:3px solid #000">
						<div class="inscription">
							<p>Потолочные розетки</p>
						</div>
					</div>
					<div class="col-sm-4 subsection">
						<div class="inscription">
							<p>Консоли</p>
						</div>
					</div>
					<div class="col-sm-4 subsection">
						<div class="inscription">
							<p>Декоративные элементы</p>
						</div>
					</div>
				</div>
				<div class="row not-main">
					<div class="col-sm-3 section">
						<div>
							<p class="topic">опоры</p>
							<div class="line"></div>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Колонны</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Полуколонны</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Пилястры</p>
						</div>
					</div>
				</div>
				<div class="row not-main">
					<div class="col-sm-3 section">
						<div>
							<p class="topic">плинтуса</p>
							<div class="line"></div>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>Гладкие</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>C орнаментом</p>
						</div>
					</div>
					<div class="col-sm-3 subsection">
						<div class="inscription">
							<p>C подсветкой</p>
						</div>
					</div>
				</div>
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