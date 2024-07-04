<?php declare(strict_types = 1);

fscanf(STDIN,"%d %d", $price, $discount);

function discountedPrice(int $p, int $d) : float {

    $discount_amount = ($p * $d) / 100;
    $discounted_price = $p - $discount_amount;

    return printf("%.2f", $discounted_price);

}

discountedPrice($price,$discount);