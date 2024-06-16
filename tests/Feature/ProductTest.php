<?php

use function Pest\Laravel\getJson;

it('can list products', function () {
    getJson('/api/products')->assertStatus(200);
});

it('can create a product', function () {
    $data = [
        'name' => 'test',
        'price' => 100
    ];
    getJson('/api/products/create', $data)->assertStatus(201);
});