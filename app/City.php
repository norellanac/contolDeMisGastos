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

*/