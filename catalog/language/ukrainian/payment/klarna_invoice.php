<?php

//version 2.0.0.0
//Made by Sirchyk for www.marketplus.if.ua on 16 of october 2014.
//info@marketplus.if.ua

// Text
$_['text_title']				= 'Рахунок-фактура Klarna - Сплатити протягом 14 днів';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Для рахунку-фактури Klarna необхідна додаткова інформація.';
$_['text_male']					= 'Чоловік';
$_['text_female']				= 'Жінка';
$_['text_year']					= 'Рік';
$_['text_month']				= 'Місяць';
$_['text_day']					= 'День';
$_['text_comment']				= 'Номер рахунку-фактури Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Стать';
$_['entry_pno']					= 'Податковий номер';
$_['entry_dob']					= 'Дата народження';
$_['entry_phone_no']			= 'Номер телефону';
$_['entry_street']				= 'Вулиця';
$_['entry_house_no']			= 'Номер будинку.';
$_['entry_house_ext']			= 'Корпус.';
$_['entry_company']				= 'Реєстраційний номер компанії';

// Help
$_['help_pno']					= 'Будь-ласка, введіть Ваш податковий номер.';
$_['help_phone_no']				= 'Будь-ласка, введіть Ваш номер телефону.';
$_['help_street']				= 'Будь-ласка, зверніть увагу на те, що доставка товару можлива тільки на зареєстровану адресу, якщо Ви оплачуєте за допомогою Klarna.';
$_['help_house_no']				= 'Будь-ласка, введіть номер Вашого будинку.';
$_['help_house_ext']			= 'Будь-ласка, введіть додаткову інформацію про Ваш будинок.';
$_['help_company']				= 'Будь-ласка, введіть реєстраційний номер Вашої компанії';

// Error
$_['error_deu_terms']			= 'Ви мусите погодитися з умовами політики конфіденційності Klarna(Datenschutz)';
$_['error_address_match']		= 'Платіжна адреса і адреса доставки повинні співпадати, якщо Ви збираєтеся використати Рахунок-фактуру Klarna';
$_['error_network']				= 'В процесі обробки виникла помилка. Будь-ласка, спробуйте пізніше.';
