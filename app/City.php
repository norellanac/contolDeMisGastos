<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function state()
    {
        return $this->belongsTo("App\State", 'state_id');
    }

    public function posts()
    {
        return $this->hasManyThrough('App\State', 'App\Country');
    }

}


//https://www.rutasymapas.com/departamentos-de-guatemala-con-sus-municipios/
/*


INSERT INTO countries (name, url_image, created_at) VALUES ('Guatemala', 'http://aux.iconspalace.com/uploads/1857486532.png', now());



INSERT INTO states (name, url_image, country_id) VALUES ('Alta Verapaz', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Baja Verapaz', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Chimaltenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Chiquimula', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Petén', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('El Progreso', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Quiché', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Escuintla', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Guatemala', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Huehuetenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Izabal', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Jalapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Jutiapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Quetzaltenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Retalhuleu', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Sacatepéquez', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('San Marcos', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Santa Rosa', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Sololá', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Suchitepéquez', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Totonicapán', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');
INSERT INTO states (name, url_image, country_id) VALUES ('Zacapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '1');


INSERT INTO cities (name, url_image, state_id) VALUES ('Cobán', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Carchá', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Chamelco', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Cristóbal Verapaz', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tactic', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tucurú', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Panzós', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Senahú', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cahabón', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Lanquín', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chahal', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Fray Bartolomé de las Casas', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chisec', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz Verapaz', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catalina La Tinta', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Raxruhá', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tamahú', 'https://comidasguatemaltecas.pro/wp-content/uploads/2018/08/Alta-Verapaz-Guatemala.jpg', '1');


INSERT INTO cities (name, url_image, state_id) VALUES ('Cubulco', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz el Chol', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('Granados', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('Purulhá', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('Rabinal', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('Salamá', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Chicaj', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Jerónimo', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '2');



INSERT INTO cities (name, url_image, state_id) VALUES ('Chimaltenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José Poaquíl', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Martín Jilotepeque', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Comalapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Apolonia', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tecpán Guatemala', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Patzún', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pochuta', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Patzicía', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz Balanyá', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Acatenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Yepocapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés Itzapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Parramos', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zaragoza', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Tejar', 'http://aux.iconspalace.com/uploads/1857486532.png', '3');


INSERT INTO cities (name, url_image, state_id) VALUES ('Chiquimula', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Camotán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Concepción Las Minas', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Esquipulas', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ipala', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Jocotán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Olopa', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('Quezaltepeque', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José La Arada', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Ermita', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Jacinto', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '4');

INSERT INTO cities (name, url_image, state_id) VALUES ('Dolores', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Benito', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('Flores', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Francisco', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Libertad', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('Melchor de Mencos', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Luis', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('Poptún', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Ana', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sayaxché', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '5');

INSERT INTO cities (name, url_image, state_id) VALUES ('Guastatoya', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('Morazán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Agustín Acasaguastlán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Cristóbal Acasaguastlán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Jícaro', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sansare', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sanarate', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio La Paz', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '6');

INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz del Quiché', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Canillá', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chajul', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chicamán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chiché', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chichicastenango', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chinique', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cunén', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ixcán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Joyabaj', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nebaj', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pachalum', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Patzité', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sacapulas', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés Sajcabajá', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Ilotenango', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Bartolomé Jocotenango', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Cotzal', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Jocopilas', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Uspantán', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zacualpa', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '7');


INSERT INTO cities (name, url_image, state_id) VALUES ('Escuintla', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Guanagazapa', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Iztapa', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Democracia', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Gomera', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Masagua', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nueva Concepción', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Palín', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Puerto San José', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Vicente Pacaya', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Lucía Cotzumalguapa', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Siquinalá', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tiquisate', 'https://visitguatemala.com/descargas/img/mapas/alta-verapaz.jpg', '8');



INSERT INTO cities (name, url_image, state_id) VALUES ('Guatemala', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catarina Pinula', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José Pinula', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José del Golfo', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Palencia', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chinautla', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Ayampuc', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Mixco', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Sacatepéquez', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Sacatepéquez', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Raymundo', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chuarrancho', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Fraijanes', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Amatitlán', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Villa Nueva', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Villa Canales', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');
INSERT INTO cities (name, url_image, state_id) VALUES ('Petapa', 'http://aux.iconspalace.com/uploads/1857486532.png', '9');


INSERT INTO cities (name, url_image, state_id) VALUES ('Aguacatán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chiantla', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Colotenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Concepción Huista', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cuilco', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Huehuetenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Jacaltenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Democracia', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Libertad', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tectitán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Todos Santos Cuchumatán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Unión Cantinil, 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Malacatancito', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nentón', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Huista', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Gaspar Ixchil', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Ildefonso Ixtahuacán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Atitán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Ixcoy', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Mateo Ixtatán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Acatán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Necta', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Soloma', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Rafael La Independencia', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Rafael Petzal', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Sebastián Coatán', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Sebastián Huehuetenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Ana Huista', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Bárbara', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz Barillas', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Eulalia', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santiago Chimaltenango', 'http://aux.iconspalace.com/uploads/1857486532.png', '10');

INSERT INTO cities (name, url_image, state_id) VALUES ('Puerto Barrios', 'http:', '11');
INSERT INTO cities (name, url_image, state_id) VALUES ('Livingston', 'http:', '11');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Estor', 'http:', '11');
INSERT INTO cities (name, url_image, state_id) VALUES ('Morales', 'http:', '11');
INSERT INTO cities (name, url_image, state_id) VALUES ('Los Amates', 'http:', '11');



INSERT INTO cities (name, url_image, state_id) VALUES ('Jalapa', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Pinula', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Luis Jilotepeque', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Manuel Chaparrón', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Carlos Alzatate', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('Monjas', 'http:', '12');
INSERT INTO cities (name, url_image, state_id) VALUES ('Mataquescuintla', 'http:', '12');



INSERT INTO cities (name, url_image, state_id) VALUES ('Jutiapa', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Agua Blanca', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Asunción Mita', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Atescatempa', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Comapa', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Conguaco', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Adelanto', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Progreso', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Jalpatagua', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Jeréz', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Moyuta', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pasaco', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Quesada', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José Acatempa', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catarina Mita', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Yupiltepeque', 'http:', '13');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zapotitlán', 'http:', '13');




INSERT INTO cities (name, url_image, state_id) VALUES ('Almolonga', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cabricán', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cajolá', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cantel', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Coatepeque', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Colomba', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Concepción Chiquirichapa', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Palmar', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Flores Costa Cuca', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Génova', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Huitán', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Esperanza', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Olintepeque', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Ostuncalco', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Palestina de Los Altos', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Quetzaltenango', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Salcajá', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Carlos Sija', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Francisco La Unión', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Martín Sacatepéquez', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Mateo', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Sigüilá', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sibilia', 'http:', '14');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zunil', 'http:', '14');


INSERT INTO cities (name, url_image, state_id) VALUES ('Champerico', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Asintal', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés Villa Seca', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Martín Zapotitlán', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Felipe', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Sebastián', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz Muluá', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('Retalhuleu', 'http:', '15');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nuevo San Carlos', 'http:', '15');


INSERT INTO cities (name, url_image, state_id) VALUES ('Alotenango', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Antigua Guatemala', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ciudad Vieja', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Jocotenango', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Magdalena Milpas Altas', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pastores', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Aguas Calientes', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Dueñas', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catarina Barahona', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Lucía Milpas Altas', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa María de Jesús', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santiago Sacatepéquez', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santo Domingo Xenacoj', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sumpango', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Bartolomé Milpas Altas', 'http:', '16');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Lucas Sacatepéquez', 'http:', '16');



INSERT INTO cities (name, url_image, state_id) VALUES ('San Marcos', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ayutla', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Catarina', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Comitancillo', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Concepción Tutuapa', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Quetzal', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Rodeo', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('El Tumbador', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ixchiguán', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Reforma', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Malacatán', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nuevo Progreso', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Ocós', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pajapita', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Esquipulas Palo Gordo', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Sacatepéquez', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Cristóbal Cucho', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José Ojetenam', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Lorenzo', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Ixtahuacán', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pablo', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro Sacatepéquez', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Rafaél Pie de La Cuesta', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sibinal', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Sipacapa', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tacaná', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tajumulco', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Tejutla', 'http:', '17');
INSERT INTO cities (name, url_image, state_id) VALUES ('Río Blanco', 'http:', '17');


INSERT INTO cities (name, url_image, state_id) VALUES ('Cuilapa', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Casillas', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chiquimulilla', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Guazacapán', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nueva Santa Rosa', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Oratorio', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pueblo Nuevo Viñas', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Tecuaco', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Rafaél Las Flores', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz Naranjo', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa María Ixhuatán', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Rosa de Lima', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Taxisco', 'http:', '18');
INSERT INTO cities (name, url_image, state_id) VALUES ('Barberena', 'http:', '18');

INSERT INTO cities (name, url_image, state_id) VALUES ('Sololá', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Concepción', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Nahualá', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Panajachel', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés Semetabaj', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Palopó', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José Chacayá', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Lucas Tolimán', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Marcos La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pablo La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pedro La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catarina Ixtahuacan', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Catarina Palopó', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Clara La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Cruz La Laguna', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Lucía Utatlán', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa María Visitación', 'http:', '19');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santiago Atitlán', 'http:', '19');


INSERT INTO cities (name, url_image, state_id) VALUES ('Mazatenango', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Chicacao', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Cuyotenango', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Patulul', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Pueblo Nuevo', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Río Bravo', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Samayac', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Antonio Suchitepéquez', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Bernardino', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San José El Ídolo', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Francisco Zapotitlán', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Gabriel', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Juan Bautista', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Lorenzo', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Miguel Panán', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Pablo Jocopilas', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Barbara', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santo Domingo Suchitepequez', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santo Tomas La Unión', 'http:', '20');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zunilito', 'http:', '20');



INSERT INTO cities (name, url_image, state_id) VALUES ('Totonicapán', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('Momostenango', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Andrés Xecul', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Bartolo', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Cristóbal Totonicapán', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Francisco El Alto', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa Lucía La Reforma', 'http:', '21');
INSERT INTO cities (name, url_image, state_id) VALUES ('Santa María Chiquimula', 'http:', '21');


INSERT INTO cities (name, url_image, state_id) VALUES ('Cabañas', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Estanzuela', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Gualán', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Huité', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('La Unión', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Río Hondo', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('San Diego', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Teculután', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Usumatlán', 'http:', '22');
INSERT INTO cities (name, url_image, state_id) VALUES ('Zacapa', 'http:', '22');


*/
