<?php

Route::get("contact", [
  "name"=>"getcontact",
  "ca"=>"index@contact"
]);

Route::get("user/details/{id}", [
  "name"=>"userdetails",
  "ca"=>"index@details",
  "params"=>["id"=>null]
]);

Route::get("home",[
  "name"=>"homepage",
  "ca"=>"index@index"
]);






?>
