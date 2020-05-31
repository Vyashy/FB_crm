<?php
///***************** Страница с завершением заказа ******************
session_start();

// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    0 => array(
        'product_id' => $_REQUEST['product_id'],    //код товара (из каталога CRM)
        'price'      => $_REQUEST['product_price'], //цена товара 1
        'count'      => '1',                     //количество товара 1
        // если есть смежные товары, тогда количество общего товара игнорируется
        'subs'       => array(
            0  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            ),
            1  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            )
        )
    ),
    1 => array(
        'product_id' => $_REQUEST['product_id'],    //код товара 2 (из каталога CRM)
        'price'      => $_REQUEST['product_price'], //цена товара 2
        'count'      => '1',                     //количество товара 2
        // если есть смежные товары, тогда количество общего товара игнорируется
        'subs'       => array(
            0  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            ),
            1  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            )
        )
    )
);
$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
// параметры запроса
$data = array(
    'key'             => '039b0d24b93a2b1d71245b39118f83f7', //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',                         // Географическое направление заказа
    'office'          => '1',                          // Офис (id в CRM)
    'products'        => $products,                    // массив с товарами в заказе
    'bayer_name'      => $_REQUEST['name'],            // покупатель (Ф.И.О)
    'phone'           => $_REQUEST['phone'],           // телефон
    'email'           => $_REQUEST['email'],           // электронка
    'comment'         => $_REQUEST['product_name'],    // комментарий
    'delivery'        => $_REQUEST['delivery'],        // способ доставки (id в CRM)
    'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
    'payment'         => '',                           // вариант оплаты (id в CRM)
    'sender'          => $sender,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign
    'additional_1'    => '',                               // Дополнительное поле 1
    'additional_2'    => '',                               // Дополнительное поле 2
    'additional_3'    => '',                               // Дополнительное поле 3
    'additional_4'    => ''                                // Дополнительное поле 4
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://testcrm.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON
print_r($out);
print_r($_REQUEST);
echo 123;