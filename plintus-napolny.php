<?php include 'admin/database_connection.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Напольный плинтус</title>
		<script src="fancybox/jquery-1.3.2.min.js"></script>
		<script src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
		<script>
			var jQuery_1_3_2 = jQuery.noConflict();
		</script>
		<?php include "includes/links.php"; ?>
		<script>
			(function($){
				$(document).ready(function(){
					$(".collection-arrow").click(function(){
						$(this).parents(".collection").next().slideToggle();
					});
				});
			})(jQuery);

			(function($){
				$(document).ready(function(){
					$("a.gallery").fancybox();
				});
			})(jQuery_1_3_2);
		</script>
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
					<?php
						$sql = 'select title, text, image, type from content where category=1';
						$result = $conn->query($sql);
						$content = [];
						while($row = $result->fetch_assoc()){
							$content[$row['type']] = ['title' => $row['title'], 'text' => $row['text'], 'image' => $row['image']];
						}
					?>
					<div class="intro-line"></div>
					<div class="title"><?=$content[1]['title']?></div>
					<div class="intro-line"></div>
				</div>
				<p><?=$content[1]['text']?></p>
			</div>
			<div class="container" id="goods">
				<?php
					$sql_collection = "select id, name, description, image from plintus_napolny_collection";
					$result = $conn->query($sql_collection);
					if($result) {
						while ($row = $result->fetch_assoc()) {
				?>
							<div class="collection row">
								<div class="col-sm-3 section">
									<div>
										<p class="topic"><?= $row['name'] ?></p>
										<div class="line"></div>
									</div>
								</div>
								<div class="col-sm-9">
									<img class="collection-arrow" src="img/left-arrow.png" alt=""/>
								</div>
							</div>
							<div class="collection-content">
						<?php
							$id_collection = $row['id'];
							$sql_collection_content = "select id, name, width, length, height, price, installation_price, images_dir 
														from plintus_napolny where id_collection='$id_collection' order by position";
							$result_content = $conn->query($sql_collection_content);
							if ($result_content && $result_content->num_rows != 0) {
								$i = 0;
								while ($row_content = $result_content->fetch_assoc()) {
									if ($i == 0) {
										?>
										<div class="row">
										<div class="col-sm-6 left">
											<table>
												<tr>
													<td class="pictures">
														<?php
														if ($dir = opendir("admin/plintus-napolny/images/" . $row_content['images_dir'])) {
															while ($file = readdir($dir)) {
																if ($file != '.' && $file != '..') {
																	$info = pathinfo($file, PATHINFO_EXTENSION);
																	$name = basename($file, $info);
																	if ($name == 'main.') {
																		?>
																		<a class="gallery"
																		   rel="group-<?= $row_content['id'] ?>"
																		   href="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>">
																			<img class="main-image-item"
																				 src="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>"
																				 alt=""/>
																		</a>
																		<?php
																	}
																}
															}
														}
														?>
														<div>
															<?php
															if ($dir = opendir("admin/plintus-napolny/images/" . $row_content['images_dir'])) {
																$count = 0;
																while ($file = readdir($dir)) {
																	if ($file != '.' && $file != '..') {
																		$info = pathinfo($file, PATHINFO_EXTENSION);
																		$name = basename($file, $info);
																		if ($name != 'main.' && $count < 3) {
																			?>
																			<a class="gallery"
																			   rel="group-<?= $row_content['id'] ?>"
																			   href="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>">
																				<img
																					src="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>"
																					alt=""/>
																			</a>
																			<?php
																			$count++;
																		}
																	}
																}
															}
															?>
														</div>
													</td>
													<td class="white">
														<span class="goods-name"><?= $row_content['name'] ?></span>
														<div class="goods-line"></div>
														<br/>
														<span>размеры:</span>
														<p>высота <span><?= $row_content['height'] ?> мм</span></p>
														<p>ширина <span><?= $row_content['width'] ?> мм</span></p>
														<p>длина <span><?= $row_content['length'] ?> мм</span></p>
														<br/><br/>
														<div class="goods-line"></div>
														<span>цена за метр</span><br/>
														<span class="goods-price"><?= $row_content['price'] ?>
															руб.</span><br/>
														<span
															class="goods-inst-price">цена монтажа <?= $row_content['installation_price'] ?>
															руб.</span>
													</td>
												</tr>
											</table>
										</div>
									<?php } ?>
									<?php if ($i == 1) { ?>
										<div class="col-sm-6 right">
											<table>
												<tr>
													<td class="black">
														<span class="goods-name"><?= $row_content['name'] ?></span>
														<div class="goods-line"></div>
														<br/>
														<span>размеры:</span>
														<p>высота <span><?= $row_content['height'] ?> мм</span></p>
														<p>ширина <span><?= $row_content['width'] ?> мм</span></p>
														<p>длина <span><?= $row_content['length'] ?> мм</span></p>
														<br/><br/>
														<div class="goods-line"></div>
														<span>цена за метр</span><br/>
														<span class="goods-price"><?= $row_content['price'] ?>
															руб.</span><br/>
														<span
															class="goods-inst-price">цена монтажа <?= $row_content['installation_price'] ?>
															руб.</span>
													</td>
													<td class="pictures">
														<?php
														if ($dir = opendir("admin/plintus-napolny/images/" . $row_content['images_dir'])) {
															while ($file = readdir($dir)) {
																if ($file != '.' && $file != '..') {
																	$info = pathinfo($file, PATHINFO_EXTENSION);
																	$name = basename($file, $info);
																	if ($name == 'main.') {
																		?>
																		<a class="gallery"
																		   rel="group-<?= $row_content['id'] ?>"
																		   href="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>">
																			<img class="main-image-item"
																				 src="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>"
																				 alt=""/>
																		</a>
																		<?php
																	}
																}
															}
														}
														?>
														<div>
															<?php
															if ($dir = opendir("admin/plintus-napolny/images/" . $row_content['images_dir'])) {
																$count = 0;
																while ($file = readdir($dir)) {
																	if ($file != '.' && $file != '..') {
																		$info = pathinfo($file, PATHINFO_EXTENSION);
																		$name = basename($file, $info);
																		if ($name != 'main.' && $count < 3) {
																			?>
																			<a class="gallery"
																			   rel="group-<?= $row_content['id'] ?>"
																			   href="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>">
																				<img
																					src="admin/plintus-napolny/images/<?= $row_content['images_dir'] ?>/<?= $file ?>"
																					alt=""/>
																			</a>
																			<?php
																			$count++;
																		}
																	}
																}
															}
															?>
														</div>
													</td>
												</tr>
											</table>
										</div>
										</div>
										<?php
									}
									if($i == 0) $i++;
									else {
										if ($i == 1) $i = 0;
									}
								}
								//if($i == 0) echo "</div>";
								if($i == 1) echo "</div>";
							}
							?>
							</div>
				<?php
						}
					}
				?><div id="under-collections">
					<p><?=$content[2]['text']?></p>
					<div class="container middle-slider">
						<div class="under-nav">
							<img src="img/under-menu/predmety-interiera.jpg" alt="" />
						</div>
						<div class="under-nav">
							<img src="img/under-menu/int-lepnina.jpg" alt="" />
						</div>
						<div class="under-nav">
							<img src="img/under-menu/falsh-balki.jpg" alt="" />
						</div>
						<div class="under-nav">
							<img src="img/under-menu/karnizy.jpg" alt="" />
						</div>
						<div class="under-nav">
							<img src="img/under-menu/plintus-napolny.jpg" alt="" />
						</div>
						<div class="under-nav">
							<img src="img/under-menu/plintus-potolochny.jpg" alt="" />
						</div>
					</div>
					<p><?=$content[3]['text']?></p>
				</div>
				<div class="two-images">
					<div class="row">
						<div class="col-sm-5">
							<div class="title"><?=$content[5]['title']?></div>
							<p><?=$content[5]['text']?></p>
						</div>
						<div class="col-sm-7">
							<img src="admin/plintus-napolny/images/<?=$content[5]['image']?>" alt="Изображение" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<img src="admin/plintus-napolny/images/<?=$content[6]['image']?>" alt="Изображение" />
						</div>
						<div class="col-sm-5">
							<div class="title"><?=$content[6]['title']?></div>
							<p><?=$content[6]['text']?></p>
						</div>
					</div>
				</div>
				<div class="reference">
					<a href="">
						<table>
							<tr>
								<td>
									<p>Достичь гармонии в интерьере вам поможет потолочный плинтус, который вы также можете подобрать у нас.</p>
								</td>
								<td>
									<div>
										<img src="admin/plintus-napolny/images/1G7jMsRtfcs.jpg" alt="Изображение" />
									</div>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
		</div>
		<!-- Main END -->
		<!-- Footer -->
		<?php include "includes/footer.php"; ?>
		<!-- Footer END -->
		<script type="text/javascript" src="slick/slick.js"></script>
		<script>
			(function($) {
				$(document).ready(function ($) {
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
			})(jQuery);
		</script>
	</body>
</html>