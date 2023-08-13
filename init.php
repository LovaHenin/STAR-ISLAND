<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'star-island',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'STAR-ISLAND',
        'projecturl'=>'https://localhost/star-island'
    ]

];

const BASE_PATH='/star-island';

