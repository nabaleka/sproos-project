 $data = http_build_query(
    [

     'command'=> 'request',
        'data'=>
    [
          'api_key'=> 'mysendykey',
          'api_username'=> 'mysendyusername'
    ],
     'from'=>
    [
          'from_name'=>'Green House',
          'from_lat'=>-1.300577,
          'from_long'=>36.78183,
          'from_description'=> ""
    ],
     'to'=>
    [
      'to_name'=> 'KICC',
      'to_lat'=> -1.28869,
      'to_long'=> 36.823363,
      'to_description'=> ""
    ],
     'recepient'=>
    [
          'recepient_name'=> 'Sendy User',
          'recepient_phone'=> '0728561783',
           'recepient_email'=>'support@sendy.com'
    ],
     'delivery_details'=>
      ['pick_up_date'=> 'mysendyey',
       'collect_payment'=>
        [
         'status'=> 'mysendyky',
          'pay_method'=> 'mysendyusernam',
          'amount'=> 'mysendyername'
        ],
          
         
        ],
        
    
        'return'=> true,
        'note'=> 'Sample note',
        'note_status'=> true,
        'request_type'=> 'delivery',
        'order_type'=> 'ondemand_delivery',
        'ecommerce_order'=>'ecommerce_order_001',
        'skew'=>1,

        'package_size'=>
    [
          'weight'=> 5,
          'height'=> 10,
          'width'=>20,
          'length'=> 30,
           'item_name'=>'cloth'
    ],
    

];);


return $data;