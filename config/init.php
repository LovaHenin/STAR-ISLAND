<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'star_island',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'STAR_ISLAND',
        'projecturl'=>'https://localhost/STAR_ISLAND'
    ]

];



const BASE_PATH='/star_island/';