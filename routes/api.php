<?php

$this->group(['prefix' => 'v1'], function () {
    $this->resource('products/search', 'Api\V1\ProductController@search');
    $this->resource('products', 'Api\V1\ProductController', ['except' => ['create', 'edit']]);
});




