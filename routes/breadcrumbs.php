<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('category.show', function($breadcrumbs, $category) {
	$breadcrumbs->parent('home');
    $breadcrumbs->push($category->name, route('category.show', $category->id));
});

Breadcrumbs::register('product.show', function($breadcrumbs, $product, $category) {
	$breadcrumbs->parent('category.show', $category);
    $breadcrumbs->push($product->title, route('product.show', $product->id));
});