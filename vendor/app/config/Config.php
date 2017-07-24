<?php

namespace app\config;

class Config
{
    const db_dsn_type = 'mysql'; //Database Type

    const db_host = 'localhost'; //Database Hostname

    const db_name = 'hostvectorin'; //Database Name

    const db_user = 'root'; //Database Username

    const db_pass = ''; //Database password

    //const password  = 'password';
    const allowed_sites = ['https://rockitech.net', 'http://localhost', 'http://127.0.0.1'];
    const jsonData      = 'https://rockitech.net/search.json';

}
