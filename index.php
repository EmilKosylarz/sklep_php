<?php
    $products=[

        array(
            "cat"=>"dyski twarde",
            "name"=>"Dysk ADATA Ultimate SSD 120GB",
            "price"=>59.00,
            "img"=>"https://proline.pl/pic_prom/asu650ss-120gt-r_0.jpg"
        ),
        array(
            "cat"=>"dyski twarde",
            "name"=>"Dysk Crucial SSD BX500 1000GB",
            "price"=>289.00,
            "img"=>"https://proline.pl/pic_prom/ct1000bx500ssd1_0.jpg"
        ),
        array(
            "cat"=>"dyski twarde",
            "name"=>"Dysk Gigabyte SSD 120GB",
            "price"=>75.00,
            "img"=>"https://proline.pl/pic_prom/gp-gstfs31120gntd_0.jpg"
        ),
        array(
            "cat"=>"procesory",
            "name"=>"Procesor AMD Opteron 246",
            "price"=>99.00,
            "img"=>"https://proline.pl/pic_prom/osa246blbox_0.jpg"
        ),
        array(
            "cat"=>"procesory",
            "name"=>"Procesor Intel Selero G5905",
            "price"=>199.00,
            "img"=>"https://proline.pl/pic_prom/bx80701g5905_0.jpg"
        ),
        array(
            "cat"=>"procesory",
            "name"=>"Procesor Intel Core i9-12900K",
            "price"=>2599.00,
            "img"=>"https://proline.pl/pic_prom/bx8071512900k_0.jpg"
        ),
        
        array(
            "cat"=>"napedy optyczne",
            "name"=>"Zewnętrzny napęd Krux DVD",
            "price"=>94.50,
            "img"=>"https://proline.pl/pic_prom/krx0071_0.jpg"
        ),
        array(
            "cat"=>"napedy optyczne",
            "name"=>"HLDS Blu-Ray BH16NS55",
            "price"=>379.00,
            "img"=>"https://proline.pl/pic_prom/0000000455_0.jpg"
        ),
        array(
            "cat"=>"napedy optyczne",
            "name"=>"LiteOn iHAS122-14 DVDRW",
            "price"=>79.00,
            "img"=>"https://proline.pl/pic_prom/liteon-ihas122-14_0.jpg"
        ),

    ];

    //echo '<pre>'; print_r($products); echo '</pre>';
    $data = unserialize($products[0]);
    //print_r($products[0]);
    print_r($data);

?>