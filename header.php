    <a id="top" class="in-page-link"></a>


    <div class="nav-container">
    	<nav class="top-bar overlay-bar">
    		<div class="container">

    			<div class="row nav-menu">
    				<div class="col-xs-12 col-md-2 col-sm-2 col-lg-2 columns">
    					<a href="#top" class="inner-link">
    						<img class="logo logo-light logo-wide " alt="Демонтаж Киев" src="images/logo-light.png">
    						<img class="logo logo-dark logo-wide logo-main" alt="Демонтаж Киев" src="images/logo-dark.png">
    						<div style="padding-top:15px"><a href="mailto: **@gmail.com" class="ml" padding-top="10px"><i class="fa fa-envelope "> **@gmail.com</i></a></li>
    					</a>
    				</div>
    			</div>
    			<br>
    			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10 text-center columns">
    				<ul class="menu">
    					<li><a href="#yslygi" class="inner-link">Услуги</a></li>
    					<li><a href="#whywe" class="inner-link">Почему мы</a></li>
    					<li><a href="price/all.pdf" target="_blank" class="inner-link">Цены</a></li>
    					<li><a href="#works" class="inner-link">Наши работы</a></li>
    					<li><a href="#clients" class="inner-link">Клиенты</a></li>


    					<li class="phone-number"><i class="fa fa-mobile iconcolor-orange"> (067) 870 28 ** </i><br>
    						<i class="fa fa-mobile iconcolor-orange"> (093) 387 92 **</i><br>
    						<i style="padding-left:7px" class="fa fa-mobile iconcolor-orange"> (050) 699 58 **</i> <br><br>
    						<div style="padding-top:5px"><a data-toggle="modal" data-target="#modal" class="btn btn-success btn-filled" style="font-size:12px">Заказать звонок</a>
    					</li>
    			</div>
    			</ul>
    		</div>

    </div>
    <br>
    <div class="mobile-toggle">
    	<i class="icon icon_menu"></i>
    </div>

    </div>
    </nav>

    </div>

    <div class="main-container">
    	<header class="signup">
    		<div class="background-image-holder" style='background: transparent url("images/header.jpg") repeat scroll 50% 0%;'>

    		</div>

    		<div class="container">
    			<div class="row">
    				<div class="tab">
    					<table>
    						<tr style="border-bottom: 3px solid white;">
    							<td class="text-white nm1 anim fadeInLeft"><a href="#demontazh" class="inner-link ">Демонтаж</a></td>
    							<td class="desc anim fadeInRight">Первичная подготовка помещения под ремонт, полная или частичная перепланировка помещения. Снос частных домов, пристроек, гаражей.</td>
    						</tr>
    						<tr style="border-bottom: 3px solid white;">
    							<td class="text-white nm2 anim fadeInLeft"><a href="#rezka" class="inner-link">Алмазная резка</a></td>
    							<td class="desc anim fadeInRight">Современная технология позволяющая производить технологические проемы разных форм и размеров в бетоне, кирпиче, камне.</td>
    						</tr>
    						<tr style="border-bottom: 3px solid white;">
    							<td class="text-white nm3 anim fadeInLeft"><a href="#sverlenie" class="inner-link">Алмазное сверление</a></td>
    							<td class="desc anim fadeInRight">Современная технология позволяющая производить цилиндрические отверстия разных диаметров и глубины в бетоне, кирпиче, камне. Глубина сверления до 2-х метров.</td>
    						</tr>
    						<tr>
    							<td class="text-white nm3 anim fadeInLeft" width="50%"><a href="#vivoz" class="inner-link">Вывоз строймусора</a></td>
    							<td class="desc anim fadeInRight">оперативная уборка и вывоз строительного мусора осуществляется без посредников! Своя база грузовых автомобилей.</td>
    						</tr>
    					</table>
    				</div>

    			</div>
    			<br>

    			<div class="row text-center">

    				<div class="col-sm-12 text-center">
    					<div class="photo-form-wrapper clearfix">
    						<div class="row">

    							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
    								<div class="col-md-3 col-sm-4">
    									<input type="text" size="50" name="contactname" id="contactname" value="" placeholder="Введите имя:" class="required" />
    								</div>
    								<div class="col-md-3 col-sm-4">
    									<input type="text" placeholder="Введите телефон:" size="50" name="subject" id="subject" value="" class="required" />
    								</div>
    								<div class="col-md-3 col-sm-4">
    									<input type="text" placeholder="Введите e-mail:" size="50" name="email" id="email" value="" class="required email" />
    								</div>
    								<div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
    									<input type="submit" class="btn btn-success btn-filled" value="Заказать звонок" name="submit" />
    								</div>
    								<div class="col-md-12 col-sm-12 text-center"> <?php if (isset($hasError)) {  ?>
    										<p class="error">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
    									<?php } ?>

    									<?php if (isset($emailSent) && $emailSent == true) {  ?>
    										<p><strong>Ваш отзыв успешно отправлен!</strong></p>
    										<p>Спасибо, <strong><?php echo $name; ?></strong>, за использование обратной формы! В течение дня мы свяжемся с Вами.
    										<div class="text-center ml">
    											<!--<a data-toggle="modal" data-target="#modal" class="btn btn-success btn-filled wow fadeInLeft">Заказать звонок</a>
                        							<a class="btn btn-warning btn-filled wow fadeInUp" href="price/all.pdf" target="_blank">Узнать цены</a>
                        							<a class="btn btn-danger  wow fadeInRight"  href="price/all.pdf"  target="_blank" download="Прайс демонтажных работ Demontazh.kiev.ua">Скачать прайс</a>
													-->

    											<i class="fa fa-mobile "></i> (050) 804-78-** &emsp;
    											<i class="fa fa-mobile "> </i> (063) 143-61-** &emsp;
    											<a href="mailto:demontazh_kiev@ukr.net" class="ml"><i class="fa fa-envelope "> demontazh.kiev@ukr.net</i></a>
    										</div>
    										</p>
    									<?php } ?>
    								</div>
    									<!--<div class="col-md-12 col-sm-12 text-center">
                                                <div class="form-success">
                                                    <span class="text-white">Спасибо. Мы с вами свяжемся</span>
                                                </div>
                                                <div class="form-error">
                                                    <span class="text-white">Пожалуйста, заполните все поля</span>
                                                </div>
                                            </div>-->
    							</form>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</header>