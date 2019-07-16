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
}

/*

set foreign_key_checks=0;
truncate table categories;
set foreign_key_checks=1;
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Alimentos y Bebidas', 'Productos comesstibles', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Vivienda', 'descripcion', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Transporte', 'descripcion', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Entretenimiento', 'descripcion', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Tecnología', 'descripcion', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Salud', 'descripcion', now(), now());
INSERT INTO categories (name, description, created_at, updated_at) VALUES ('Educación', 'descripcion', now(), now());

set foreign_key_checks=0;
truncate table subcategories;
set foreign_key_checks=1;

INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Comida Rápida', 'Descripcion', 1, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Restaurantes', 'Descripcion', 1, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Bebidas Frias', 'Descripcion', 1, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Bebidas Calientes', 'Descripcion', 1, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Comida casera', 'Descripcion', 1, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Jardin', 'Descripcion', 2, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Cable/Tv', 'Descripcion', 2, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Internet', 'Descripcion', 2, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Agua', 'Descripcion', 2, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Energía electrica', 'Descripcion', 2, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Mantenimiento de vehículo', 'Descripcion', 3, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Combustible', 'Descripcion', 3, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Estacionamiento', 'Descripcion', 3, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Seguro de vehículos', 'Descripcion', 3, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Alquiler de vehículos', 'Descripcion', 3, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Eventos Deportivos', 'Descripcion', 4, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Subscripciones', 'Descripcion', 4, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Viajes', 'Descripcion', 4, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Fiestas', 'Descripcion', 4, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Pago de GYM', 'Descripcion', 4, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Internet', 'Descripcion', 5, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Software', 'Descripcion', 5, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Laptops', 'Descripcion', 5, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Telefonos moviles', 'Descripcion', 5, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Accesorios Tecnologicos', 'Descripcion', 5, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Medicina', 'Descripcion', 6, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Hospitales', 'Descripcion', 6, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Veterinario', 'Descripcion', 6, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Dietas', 'Descripcion', 6, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Vitaminas', 'Descripcion', 6, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Mensualidad Educativa', 'Descripcion', 7, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Utiles escolares', 'Descripcion', 7, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Cursos Educativos', 'Descripcion', 7, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Herramientas educativas', 'Descripcion', 7, now(), now());
INSERT INTO subcategories (name, description, category_id, created_at, updated_at) VALUES ('Inscripción A cursos', 'Descripcion', 7, now(), now());



*/