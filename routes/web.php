<?php

return [
    ["GET /", "home@index"],

    ["GET /profile", "profile@index"],
    ["GET /profile/ubah", "profile@ubah"],
    ["POST /profile/update", "profile@update"],

    ["GET /pendidikan", "pendidikan@index"],
    ["GET /pendidikan/create", "pendidikan@create"],
    ["POST /pendidikan", "pendidikan@store"],
    ["GET /pendidikan/show", "pendidikan@show"],
    ["GET /pendidikan/edit", "pendidikan@edit"],
    ["POST /pendidikan/update", "pendidikan@update"],
    ["POST /pendidikan/destroy", "pendidikan@destroy"],

    ["GET /organisasi", "organisasi@index"],
    ["GET /organisasi/create", "organisasi@create"],
    ["POST /organisasi", "organisasi@store"],
    ["GET /organisasi/show", "organisasi@show"],
    ["GET /organisasi/edit", "organisasi@edit"],
    ["POST /organisasi/update", "organisasi@update"],
    ["POST /organisasi/destroy", "organisasi@destroy"],

];
