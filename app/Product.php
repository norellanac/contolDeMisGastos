<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
}


/*
INSERT INTO my_database.sellers (name, description, created_at, updated_at, user_id) VALUES ('Mcdonalds', 'restaurante', now(), now(), '1');

INSERT INTO my_database.products (name, price, description, created_at, updated_at, seller_id, subcategory_id, url_image) VALUES ('Mc Menu', '35', 'comida', now(), now(), '1', '1', 'https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png');
INSERT INTO my_database.products (name, price, description, created_at, updated_at, seller_id, subcategory_id, url_image) VALUES ('BK Menu', '35', 'comida', now(), now(), '1', '1', 'https://www.pngfind.com/pngs/m/276-2766046_burger-king-png-download-burger-king-transparent-png.png');
INSERT INTO my_database.products (name, price, description, created_at, updated_at, seller_id, subcategory_id, url_image) VALUES ('Taco Menu', '35', 'comida', now(), now(), '1', '1', 'https://www.stickpng.com/assets/images/5842eff2a6515b1e0ad75b0e.png');

*/
