<?php   include 'temp_up.html'; ?>
<?php $title='Отзывы' ?>
    <title><?php echo $title; ?></title>
	<meta name="Description" content="Оставьте свои отзывы о нашей работе. Демонтаж Киев Эксперт. Звоните: (050)804-78-**, (063)143-61-**">
	<meta name="Keywords" content="Демонтажные работы, алмазная резка, алмазное сверление, усиление проемов, вывоз строймусора">
<?php   include 'temp_mid.html'; ?>
 <h1><?php echo $title; ?></h1>
 <div id="testimonials_bez">
        <ol>
			<?php
            
                $xmlFile = 'xml/testimonials.xml';
                $xslFile = 'xml/transform.xml';
                
                $doc = new DOMDocument();
                $xsl = new XSLTProcessor();
                
                $doc->load($xslFile);
                $xsl->importStyleSheet($doc);
                
                $doc->load($xmlFile);
                echo $xsl->transformToXML($doc);
            
            ?>
        </ol>
    </div>
	 <div id="contact-wrapper">
	 
	<h2>Оставить свой отзыв</h2>
 <?php include 'forma.php';?>
	<?php if(isset($hasError)) {  ?>
		<p class="error">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
	<?php } ?>

	<?php if(isset($emailSent) && $emailSent == true) {  ?>
		<p><strong>Ваш отзыв успешно отправлен!</strong></p>
		<p>Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! Ваш отзыв был отправлен на наш email.</p>
	<?php } ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
		<div>
		    <label for="name"><strong>Имя:</strong></label>
			<input type="text" size="50" name="contactname" id="contactname" value="" class="required" />
		</div>

		<div>
			<label for="email"><strong>Email:</strong></label>
			<input type="text" size="50" name="email" id="email" value="" class="required email" />
		</div>
	
		<div>
			<label for="tel"><strong>Контактный телефон:</strong></label>
			<input type="text" size="50" name="tel" id="tel" value="" class="required" />
		</div>
		
		<div>
			<label for="subject"><strong>Тема:</strong></label>
			<input type="text" size="50" name="subject" id="subject" value="" class="required" />
		</div>

		<div>
			<label for="message"><strong>Сообщение:</strong></label>
			<textarea rows="5" cols="50" name="message" id="message" class="required"></textarea>
		</div>
	    <input type="submit" value="Отправить отзыв" name="submit" />
	</form>

	</div>
		
 			  <?php include 'price/tel.html';?>
<?php include 'temp_down.html'; ?>
            