<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '48E81B5CFBF6DAF2ACDF53F2D1DAF4F5',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => '',
	'version' => '2022.2.11.0',
	'sitename' => 'Queen of the Sweets',
	'lang_code' => 'en-GB',
	'public_folder' => '',
	'salt' => 'tt50ceqm8t1d1eyorjws47wcw069h52eyns3tmmvid3o36gg8hwnkrslwt4b8',
	'common_email_sender_addres' => 'noreply@talha-t.websitex5.me'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"b99mnuud-imCpt\">Check word:</label><br />
			<input type=\"text\" id=\"b99mnuud-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_6xbg2euz.png',
	'notification_public_key' => 'f84fff32bf83b7dd',
	'notification_private_key' => '62f963c0ef76fc46',
	'enable_manager_notifications' => true,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'0gehgqrj' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'trt4kj9m_db',
		'user' => 'trt4kj9m_db',
		'password' => 'bO4#dS3%mK0&',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 255, 255, 1); background-color: rgba(98, 89, 147, 1); padding: 37px 52px 37px 52px; border-style: solid; border-width: 4px 4px 4px 4px; border-color: rgba(0, 255, 255, 1) rgba(0, 255, 255, 1) rgba(0, 255, 255, 1) rgba(0, 255, 255, 1); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your order. Our representative will contact you within 24 business hours.<br /><br />Below is the list of the products you have ordered.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards,<br />Sales Staff',
	'email_payment_opening' => 'Dear Customer,<br /><br />Thank you for your purchase. We confirm that we have correctly received your payment and that the order will be processed as soon as possible.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details.',
	'email_payment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase. We confirm the order was correctly processed and shipped. <br />Please find attached the list of the ordered products:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(98, 89, 147, 1)',
	'header_text_color' => 'rgba(0, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'jackie@queenofthesweets.com',
	'vat_type' => 'none',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'f8eebneo' => array(
		'id' => 'f8eebneo',
		'name' => 'COOKIE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Looking for a fun alternative to a birthday cake? This sweet & chewy Chocolate Chip Cookie Cake is the perfect choice for your next birthday celebration!  Comes in many options and variations.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'bohql7ma',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'jozc59gf',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'brprfens',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 't4yp4g0g',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'tytqhb0z',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkf58adc9f86692fc39a45884d4f88dae7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf58adc9f86692fc39a45884d4f88dae7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke83b0aa0c5ced4ba87720f3d79222064 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke83b0aa0c5ced4ba87720f3d79222064, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'white-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'COOKIE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'COOKIE CAKE',
			'image' => 'http://localhost/images/Cookie-Cake_w30t4sow.597eb0cc67aceeadb43a.png',
			'description' => 'Looking for a fun alternative to a birthday cake? This sweet & chewy Chocolate Chip Cookie Cake is the perfect choice for your next birthday celebration!  Comes in many options and variations.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'8aft647v' => array(
		'id' => '8aft647v',
		'name' => 'PINA COLADA CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This cake turns your favorite tropical cocktail into one delicious dessert! Coconut cake and pineapple buttercream frosting paired with pineapple mousse and toasted coconut.
',
		'sku' => '',
		'options' => array(
			array(
				'id' => '1n69f2w8',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '25wauqbu',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'mso1b9rg',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'g86nziim',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'fxzm4y51',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink2ef3a02a8d08d3f57dc5c51619c9a9de = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2ef3a02a8d08d3f57dc5c51619c9a9de, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkf83aadf8099592921aa83b7a9bbaf02d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf83aadf8099592921aa83b7a9bbaf02d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'milk-choc-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'PINA COLADA CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'PINA COLADA CAKE',
			'image' => 'http://localhost/images/Pina-Colada-Cake-PhotoRoom_7mkgdqdq.png',
			'description' => 'This cake turns your favorite tropical cocktail into one delicious dessert! Coconut cake and pineapple buttercream frosting paired with pineapple mousse and toasted coconut.
',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tjg01ar2' => array(
		'id' => 'tjg01ar2',
		'name' => 'COFFEE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'A tender, perfectly moist cake with the enticing aroma, ribbons of cinnamon filling, and hallmark crumb topping make it a treat at breakfast or as a midday indulgence. Made with just a few pantry staples, coffee cake is a deliciously effortless way to start the day. ',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'kftsbgeo',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'm6d4kk4j',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3h4jy9io',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'gpc0a0nc',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '4f4z9f2b',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink49bd0cddf6301070cfbfad5a5c3cfb69 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink49bd0cddf6301070cfbfad5a5c3cfb69, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink59c171128701a8bc7631bcc8339de461 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink59c171128701a8bc7631bcc8339de461, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'dark-choc-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'COFFEE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'COFFEE CAKE',
			'image' => 'http://localhost/images/UPDATED-Coffee-cake_06laof92.5eaee1189e3d73674077.png',
			'description' => 'A tender, perfectly moist cake with the enticing aroma, ribbons of cinnamon filling, and hallmark crumb topping make it a treat at breakfast or as a midday indulgence. Made with just a few pantry staples, coffee cake is a deliciously effortless way to start the day. ',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'ix6b6aan' => array(
		'id' => 'ix6b6aan',
		'name' => 'CINNAMON WALNUT BISCOTTI',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This biscotti, flavored with walnuts and cinnamon, are a nice holiday cookie and are wonderful with coffee or tea.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'u21due8g',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 9.00,
		'singleFullPrice' => '9.00',
		'singleFullPricePlusVat' => '9.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkfb53468555f12e6385d58b4a4d893e9f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfb53468555f12e6385d58b4a4d893e9f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkcd89fb0cca08e3ed7210436a770f52cf = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkcd89fb0cca08e3ed7210436a770f52cf, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'blackberry-tart',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'CINNAMON WALNUT BISCOTTI',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CINNAMON WALNUT BISCOTTI',
			'image' => 'http://localhost/images/UPDATED-CINNAMON-WALNUT-BISCOTTI_05106twl.6760dfcd24e032681bfa--1-.png',
			'description' => 'This biscotti, flavored with walnuts and cinnamon, are a nice holiday cookie and are wonderful with coffee or tea.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '9.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'5c3x4vp9' => array(
		'id' => '5c3x4vp9',
		'name' => 'RAINBOW COOKIES',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Layers of almond cake are sandwiched with raspberry jam before getting coated in chocolate for the prettiest and most delicious rainbow cookies you\'ve ever had.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '1ixuqcga',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 9.00,
		'singleFullPrice' => '9.00',
		'singleFullPricePlusVat' => '9.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Rainbow-Cookies-PhotoRoom_bax777cl.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/Rainbow-Cookies-PhotoRoom_bax777cl.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink3a83ee0ec8703e8444ffbe34d878d429 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3a83ee0ec8703e8444ffbe34d878d429, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink74d24f22817485c712aa4834b177478b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_bax777cl.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink74d24f22817485c712aa4834b177478b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'rasberry-tart',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'RAINBOW COOKIES',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'RAINBOW COOKIES',
			'image' => 'http://localhost/images/Rainbow-Cookies-PhotoRoom_bax777cl.png',
			'description' => 'Layers of almond cake are sandwiched with raspberry jam before getting coated in chocolate for the prettiest and most delicious rainbow cookies you\'ve ever had.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '9.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tk973wq7' => array(
		'id' => 'tk973wq7',
		'name' => 'CARROT CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Taste the freshness in every bite of this rich carrot cake. This delicious spice cake is speckled with freshly grated carrots, coconut, raisins, walnuts, and a coconut cream cheese filling.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '2c2jddue',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '1vejmhld',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '1yzl36ky',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'la982jfu',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '7ouo2fnr',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?carrot-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?carrot-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink6cb40f7546439e0aeb0d227d0a0a14e7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6cb40f7546439e0aeb0d227d0a0a14e7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink313e5fb57833a1792bad85610b0f1f61 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink313e5fb57833a1792bad85610b0f1f61, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'carrot-cake',
		'relatedProducts' => array(
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CARROT CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CARROT CAKE',
			'image' => 'http://localhost/images/UPDATED-CarrotCake_ivk0ya7i.83524e1a7e976398f8bc.png',
			'description' => 'Taste the freshness in every bite of this rich carrot cake. This delicious spice cake is speckled with freshly grated carrots, coconut, raisins, walnuts, and a coconut cream cheese filling.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'v445j79n' => array(
		'id' => 'v445j79n',
		'name' => 'STRAWBERRY CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'With each bite, you get the perfect amount of sweetness and zest from the strawberries. While the strawberries bake down, the natural sugars are released into the vanilla batter amplifying that delicious flavor.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'sup66krf',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '71l00af2',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3v8o0b5s',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'j82jkejm',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'kx87na94',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1bc6e7ea453dc0f99640ba3902cc349d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1bc6e7ea453dc0f99640ba3902cc349d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink4360bc5098222666f6cda33250d46550 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4360bc5098222666f6cda33250d46550, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'strawberry-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'STRAWBERRY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'STRAWBERRY CAKE',
			'image' => 'http://localhost/images/UPDATED-Strawberry-Cake_wkk7dvrf.b1238ea746eaa7aae8b3.png',
			'description' => 'With each bite, you get the perfect amount of sweetness and zest from the strawberries. While the strawberries bake down, the natural sugars are released into the vanilla batter amplifying that delicious flavor.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'39y4qpr8' => array(
		'id' => '39y4qpr8',
		'name' => 'CHOCOLATE MINT CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'The PERFECT combo of indulgent chocolate and mint frosting, made with cocoa powder, and peppermint buttercream.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'blwic5wy',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '3s1ht1tf',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'zoubpn69',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'iiwlsvmm',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '1hhd5ge3',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-mint-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-mint-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka95e8331941781f00fbb8af725e2ea91 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka95e8331941781f00fbb8af725e2ea91, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink048735da0308d521c3f390ddedfa4377 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink048735da0308d521c3f390ddedfa4377, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-mint-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'3bq6ufex',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE MINT CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE MINT CAKE',
			'image' => 'http://localhost/images/UPDATED-ChocolateMint_3z4pbev0.3a0094ccd664c76797b7-1-.png',
			'description' => 'The PERFECT combo of indulgent chocolate and mint frosting, made with cocoa powder, and peppermint buttercream.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'3bq6ufex' => array(
		'id' => '3bq6ufex',
		'name' => 'CHOCOLATE PEANUT BUTTER CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This is a peanut lover’s dream dessert! A dark chocolate cake with peanut butter buttercream frosting topped with chocolate ganache makes this peanut butter cake decadent and delicious!',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'cr7w1p8a',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '7hx2lzpz',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '1wydc438',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '7wjozsfx',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '676oqa4w',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png',
				'width' => 742,
				'height' => 742
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png',
			'width' => 742,
			'height' => 742
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink49be9af983efef138b1fee68dd3486f1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink49be9af983efef138b1fee68dd3486f1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc849c0296b8d236b510f1a52b792e3da = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc849c0296b8d236b510f1a52b792e3da, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-peanut-butter-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'jylf0xzi'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE PEANUT BUTTER CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE PEANUT BUTTER CAKE',
			'image' => 'http://localhost/images/UPDATED-ChocolatePeanut_5ggafwe3.66ebf1433798655c6e79--1-.png',
			'description' => 'This is a peanut lover’s dream dessert! A dark chocolate cake with peanut butter buttercream frosting topped with chocolate ganache makes this peanut butter cake decadent and delicious!',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'jylf0xzi' => array(
		'id' => 'jylf0xzi',
		'name' => 'CREAMSICLE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Looking for a flavorful dessert treat? This cake brings you the best of two worlds and it is stated in name…Creamsicle and Cake. Made with vanilla cake, orange buttercream with an orange mousse filling.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'j8j35bh2',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'ntoi15lz',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '9r0v0g5t',
				'name' => '10" Round',
				'price_variation' => 23.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'b00r5dfg',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 33.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'kcmlinx1',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 68.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 12.00,
		'singleFullPrice' => '12.00',
		'singleFullPricePlusVat' => '12.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'http://localhost/images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?creamsicle-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?creamsicle-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkc5806cf1a37ae14017a584d16a5e63c3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc5806cf1a37ae14017a584d16a5e63c3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink153312a337392777afd01796e9d7c083 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink153312a337392777afd01796e9d7c083, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'creamsicle-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CREAMSICLE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CREAMSICLE CAKE',
			'image' => 'http://localhost/images/UPDATED-CREAMSICLE_obrsu83j.362d89f15bfb853bc890--1-.png',
			'description' => 'Looking for a flavorful dessert treat? This cake brings you the best of two worlds and it is stated in name…Creamsicle and Cake. Made with vanilla cake, orange buttercream with an orange mousse filling.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '12.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'white-truffle' => 'f8eebneo',
	'milk-choc-truffle' => '8aft647v',
	'dark-choc-truffle' => 'tjg01ar2',
	'blackberry-tart' => 'ix6b6aan',
	'rasberry-tart' => '5c3x4vp9',
	'carrot-cake' => 'tk973wq7',
	'strawberry-cake' => 'v445j79n',
	'chocolate-mint-cake' => '39y4qpr8',
	'chocolate-peanut-butter-cake' => '3bq6ufex',
	'creamsicle-cake' => 'jylf0xzi'
));
$ecommerce->setCategoriesData(array(
	'9z4z1d8y' => array(
		'id' => '9z4z1d8y',
		'name' => 'Cakes',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'f8eebneo',
			'8aft647v',
			'tjg01ar2',
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi'
		),
		'categories' => array()
	),
	'jcm10x8f' => array(
		'id' => 'jcm10x8f',
		'name' => 'COOKIES & BISCOTTI',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'ix6b6aan',
			'5c3x4vp9'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_iv75o7gj_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Payment Due When Order is Confirmed',
		'description' => 'Someone will contact you with 24 business hours to confirm your request and delivery date. (Note: Orders placed within 72 hours of requested delivery/pick-up date will not be honored)',
		'email_text' => 'Thank you for your request. A representative will be in contact you within 24 business hours. (Note: THIS IS NOT AN ORDER until confirmed by a representative and payment is completed).',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2022.2.11 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Cormorant\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Cormorant\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Cormorant\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Cormorant;';

// End of file x5settings.php