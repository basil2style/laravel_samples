<?php

use App\Models\Product;

it('has a name attribute', function () {
    $product = new Product(['name' => 'test', 'price' => 100]);

    expect($product->name)->toBe('test');

    expect($product->price)->toBe(100);

});