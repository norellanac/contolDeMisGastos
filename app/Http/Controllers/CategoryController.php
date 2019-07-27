<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class CategoryController extends Controller
{
    //
    public function category()
    {

        //return view('home');
        //dd(Category::first()->subcategory);
        //return  Category::first()->subcategory
        $categories = Category::all();
        return view('categories.index',['categories'=>$categories]);
    }

    public function subcategory($id)
    {

        //return view('home');
        //dd( Subcategory::first()->category );
        //return ( Subcategory::first()->category );
        $subcategories = Subcategory::where('category_id',$id)->get();
        return view('categories.subcategories',['subcategories'=>$subcategories]);
    }

    

    public function incomes(Request $request)
    {
        $subcategories = Subcategory::where('category_id',1)->get();
        return view('categories.subcaIncomes',['subcategories'=>$subcategories]);
    }
}

/*

set foreign_key_checks=0;
truncate table categories;
set foreign_key_checks=1;
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Alimentos y Bebidas', 'descripcion', 'fas fa-utensils', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Vivienda', 'descripcion', 'fas fa-home', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Transporte', 'descripcion', 'fas fa-car-side', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Entretenimiento', 'descripcion', 'fas fa-gamepad', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Tecnología', 'descripcion', 'fas fa-mobile-alt', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Salud', 'descripcion', 'fas fa-heartbeat', now(), now());
INSERT INTO categories (name, description, icon_image, created_at, updated_at) VALUES ('Educación', 'descripcion', 'fas fa-user-graduate', now(), now());

set foreign_key_checks=0;
truncate table subcategories;
set foreign_key_checks=1;

INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Comida Rápida', 'Descripcion', 'fas fa-utensils', 1, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Restaurantes', 'Descripcion', 'fas fa-utensils', 1, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Bebidas Frias', 'Descripcion', 'fas fa-utensils', 1, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Bebidas Calientes', 'Descripcion', 'fas fa-utensils', 1, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Comida casera', 'Descripcion', 'fas fa-utensils', 1, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Jardin', 'Descripcion', 'fas fa-utensils', 2, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Cable/Tv', 'Descripcion', 'fas fa-utensils', 2, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Internet', 'Descripcion', 'fas fa-utensils', 2, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Agua', 'Descripcion', 'fas fa-utensils', 2, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Energía electrica', 'Descripcion', 'fas fa-utensils', 2, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Mantenimiento de vehículo', 'Descripcion', 'fas fa-utensils', 3, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Combustible', 'Descripcion', 'fas fa-utensils', 3, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Estacionamiento', 'Descripcion', 'fas fa-utensils', 3, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Seguro de vehículos', 'Descripcion', 'fas fa-utensils', 3, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Alquiler de vehículos', 'Descripcion', 'fas fa-utensils', 3, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Eventos Deportivos', 'Descripcion', 'fas fa-utensils', 4, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Subscripciones', 'Descripcion', 'fas fa-utensils', 4, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Viajes', 'Descripcion', 'fas fa-utensils', 4, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Fiestas', 'Descripcion', 'fas fa-utensils', 4, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Pago de GYM', 'Descripcion', 'fas fa-utensils', 4, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Internet', 'Descripcion', 'fas fa-utensils', 5, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Software', 'Descripcion', 'fas fa-utensils', 5, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Laptops', 'Descripcion', 'fas fa-utensils', 5, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Telefonos moviles', 'Descripcion', 'fas fa-utensils', 5, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Accesorios Tecnologicos', 'Descripcion', 'fas fa-utensils', 5, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Medicina', 'Descripcion', 'fas fa-utensils', 6, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Hospitales', 'Descripcion', 'fas fa-utensils', 6, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Veterinario', 'Descripcion', 'fas fa-utensils', 6, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Dietas', 'Descripcion', 'fas fa-utensils', 6, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Vitaminas', 'Descripcion', 'fas fa-utensils', 6, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Mensualidad Educativa', 'Descripcion', 'fas fa-utensils', 7, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Utiles escolares', 'Descripcion', 'fas fa-utensils', 7, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Cursos Educativos', 'Descripcion', 'fas fa-utensils', 7, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Herramientas educativas', 'Descripcion', 'fas fa-utensils', 7, now(), now());
INSERT INTO subcategories (name, description, icon_image, category_id, created_at, updated_at) VALUES ('Inscripción A cursos', 'Descripcion', 'fas fa-utensils', 7, now(), now());



*/
