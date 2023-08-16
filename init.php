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
        'name'=>'STAR-ISLAND',
        'projecturl'=>'https://localhost/star-island'
    ]

];

const BASES_PATH='/star-island/';

