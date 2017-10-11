<?php

//returns array with names of a product
function getNameList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productName = array();
    
    for ($i = 0; $i < $numItems; $i++) {
      
      $productName[] = $data['items'][$i]['name'];

    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productName;
}

//returns array of product prices
function getPriceList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productPrice = array();
    
    for ($i = 0; $i < $numItems; $i++) {

      $productPrice[] = $data['items'][$i]['salePrice'];

    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productPrice;
}

function getNumReviewsList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productNumReviews = array();
    
    for ($i = 0; $i < $numItems; $i++) {

      $productNumReviews[] = $data['items'][$i]['numReviews'];

    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productNumReviews;
}

function getCustomerRatingImgList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productCustomerRatingImg = array();
    
    for ($i = 0; $i < $numItems; $i++) {
      
      $productCustomerRatingImg[] = $data['items'][$i]['customerRatingImage'];

    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productCustomerRatingImg;
}

function getStockList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productStock = array();
    
    for ($i = 0; $i < $numItems; $i++) {

      $productStock[] = $data['items'][$i]['stock'];
      
    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productStock;
}

function getImageList($query, $sort, $order, $numItems) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=2kkyh6vvdppfj8hq5s4y5ttv&query=$query&sort=$sort&order=$order&numItems=$numItems",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    $productImage = array();
    
    for ($i = 0; $i < $numItems; $i++) {

      $productImage[] = $data['items'][$i]['thumbnailImage'];
      
    }
    $err = curl_error($curl);
    curl_close($curl);
    
    return $productImage;
}

?>
