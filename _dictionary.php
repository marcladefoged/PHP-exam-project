<?php

// $data = file_get_contents("_dictionary.txt");

// convert text to object

// $my_dictionary = json_decode($data, true); 

$languages_allowed = ['en', 'dk'];
$language = $_GET['language'] ?? 'en';
if( ! in_array($language, $languages_allowed) ){
  $language = 'en';
}

$flag_dictionary=[
  'dk_flag'=>'&#127465&#127472',
  'en_flag'=>'🇬🇧',
];

$dictionary=[
  'en_index_title'=>'Welcome to Momondo!',
  'dk_index_title'=>'Velkommen til Momondo!',
  'en_stays_title'=>'Book a stay with free cancellation - search now.',
  'dk_stays_title'=>'Book en overnatning med gratis afbestilling - søg nu.',
  'sp_houses'=>'casas',
  'sp_cars'=>'carros'  
]
?>