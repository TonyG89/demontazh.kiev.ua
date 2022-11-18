<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<title>Демонтаж. Алмазная резка. Демонтажные работы.</title>
	<link href="/images/favicon.png" rel="shortcut icon" type="image/png">
	<meta content="Мы на рынке более 8 лет и предлагаем Вам резку бетона, демонтажные работы по низких ценах" name="description">
	<meta content="демонтажные работы, демонтаж киев, резка бетона, резка бетонных конструкций, демонтаж бетонных конструкций, демонтаж бетонных конструкций киев," name="Keywords">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<link href="css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/theme-campfire.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/custom.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/flexslider.min.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/line-icons.min.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/elegant-icons.min.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/lightbox.min.css" media="all" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
	<link href="css/open-sans.css" media="all" rel="stylesheet" type="text/css">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js">
	</script>
	<script src="js/wow.min.js">
	</script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter38279945 = new Ya.Metrika({
						id: 38279945,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true,
						trackHash: true
					});
				} catch (e) {}
			});
			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function() {
					n.parentNode.insertBefore(s, n);
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "yandex_metrika_callbacks");
	</script> <!-- /Yandex.Metrika counter -->
	<?php include 'forma.php'; ?>
	<!--Верхушка -start- -->
	<?php include 'header.php'; ?>
	<!--Верхушка -end- -->
	<!--Блок3 -start-  -->
	<?php include 'block3.php'; ?>
	<!--Блок3 -end- -->
	<!--Блок7- Услуги -start-  -->
	<?php include 'block7.php'; ?>
	<!--Блок7- Услуги-end- -->
	<!--Блок4 ФОТО РАБОТ+КЛИЕНТЫ -start-  -->
	<?php include 'block4.php'; ?>
	<!--Блок4 ФОТО РАБОТ+КЛИЕНТЫ-end- -->
	<!--contacts -start-  -->
	<?php include 'contacts.php'; ?>
	<!--contacts -end- -->
	<!--footer -start-  -->
	<?php include 'footer.php'; ?>
	<!--footer -end-  -->
	<!-- Modal -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal" role="dialog" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title text-center" id="myModalLabel">Оставьте свои контакты,<br>
						мы свяжемся с Вами</h3>
				</div>
				<div class="modal-body">
					<form action="%3C?php%20echo%20$_SERVER['PHP_SELF'];%20?%3E" id="contactform" method="post" name="contactform">
						<div class="row">
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
								<input class="required" id="contactname" name="contactname" placeholder="Введите имя:" size="50" type="text" value="">
								<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
									<input class="required" id="subject" name="subject" placeholder="Введите телефон:" size="50" type="text" value="">
								</div>
								<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
									<input class="required email" id="email" name="email" placeholder="Введите e-mail:" size="50" type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
									<input class="btn btn-primary btn-filled" name="submit" type="submit" value="Заказать звонок"> <?php if (isset($hasError)) { ?>
										<p class="error">Проверьте, пожалуйста, правильность заполнения всех полей.</p><?php } ?><?php if (isset($emailSent) && $emailSent == true) { ?>
										<p><strong>Ваш отзыв успешно отправлен!</strong></p>
										<p>Спасибо, <strong><?php echo $name; ?></strong>, за использование обратной формы! В течение дня мы свяжемся с Вами.p><?php } ?>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<script src="js/jquery.min.js">
	</script>
	<script src="js/bootstrap.min.js">
	</script>
	<script src="js/jquery.flexslider-min.js">
	</script>
	<script src="js/smooth-scroll.min.js">
	</script>
	<script src="js/isotope.min.js">
	</script>
	<script src="js/scripts.js">
	</script>
	<script src="script.responsive.js">
	</script>
</body>

</html>