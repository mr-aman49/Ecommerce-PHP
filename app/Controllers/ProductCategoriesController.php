<?php

namespace App\Controllers;

class ProductCategoriesController extends BaseController
{
    public function create(){
        echo view("product_categories/product_categories");
    }
}