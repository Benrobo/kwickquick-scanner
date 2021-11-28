<?php
$json = new \stdClass();

if(isset($_POST["hash"])){
    $hash = $_POST["hash"];
    if($hash == "12345"){
        $json->name = "Red Apple";
        $json->price = 150;
        $json->currency = "NGN";
        $json->info = "A red fruit";
        $json->error = false;
        $json->color = "red";
        $json->expiry = "Jan 2022";
        $json->image = "./assets/img/product/apple.jpg";
        echo json_encode($json);
    }elseif($hash == "123"){
        $json->name = "Banana";
        $json->price = 500;
        $json->currency = "NGN";
        $json->info = "A sweet ripe banana";
        $json->error = false;
        $json->color = "yellow";
        $json->expiry = "Jul 2022";
        $json->image = "./assets/img/product/banana.jpg";
        echo json_encode($json);
    }elseif($hash == "12"){
        $json->name = "Coffee Mug";
        $json->price = 1500;
        $json->currency = "NGN";
        $json->info = "A red coffee mug";
        $json->error = false;
        $json->color = "red";
        $json->expiry = "";
        $json->image = "./assets/img/product/cup.jpg";
        echo json_encode($json);
    }elseif($hash == "org:042"){
        $json->name = "Tesla Motors";
        $json->image = "./assets/img/org/tesla.png";
        $json->error = false;
        echo json_encode($json);
    }else{
        $json->error = "Product Not Found";
        echo json_encode($json);
    }
}

if(isset($_POST["pay"])){
    $json->error = false;
    echo json_encode($json);
}
?>