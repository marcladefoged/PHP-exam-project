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

$nav_dictionary=[
  'dk_plane_nav'=>'Fly',
  'en_plane_nav'=>'Flights',
  'dk_stays_nav'=>'Overnatning',
  'en_stays_nav'=>'Stays',
  'dk_cars_nav'=>'Bil',
  'en_cars_nav'=>'Car hire',
  'dk_ferries_nav'=>'Færger',
  'en_ferries_nav'=>'Boats',
  'dk_experiences_nav'=>'Oplevelser',
  'en_experiences_nav'=>'Things to do',
  'dk_explore_nav'=>'Udforsk!',
  'en_explore_nav'=>'Explore!',
  'dk_restrictions_nav'=>'Rejserestriktioner',
  'en_restrictions_nav'=>'Restrictions'
];

$dictionary=[
  'en_index_title'=>'Welcome to Momondo!',
  'dk_index_title'=>'Velkommen til Momondo!',
  'en_stays_title'=>'Book a stay with free cancellation - search now.',
  'dk_stays_title'=>'Book en overnatning med gratis afbestilling - søg nu.',
  'en_search_from'=>'Departing from?',
  'dk_search_from'=>'Afgang fra?',
  'en_search_to'=>'Arriving to?',
  'dk_search_to'=>'Ankomst til?',
  'en_signup'=>'Signup',
  'dk_signup'=>'Tilmeld',
  'en_login'=>'Log in',
  'dk_login'=>'Log ind'

];

$stays_dictionary=[
  'en_stays_rentals'=>'Holiday Rentals & Stays!',
  'dk_stays_rentals'=>'Ferieboliger og overnatningssteder!',
  'en_stays_text'=>'Compare Deals on Hotels, Holiday Apartments & Home Rentals. From vacation homes and apartments to more traditional hotels, find and compare the best places to stay worldwide with momondo',
  'dk_stays_text'=>'Sammenlign tilbud på hoteller, ferielejligheder og -boliger. Alt fra ferieboliger og -lejligheder til mere traditionelle hoteller. Med momondo kan du finde og sammenligne de bedste steder at bo i hele verden',
  'en_stays_find'=>'Trending cities for hotels!',
  'dk_stays_find'=>'Find feriebolig i populære byer!',
  'en_stays_smalltext'=>'The most searched for hotel destinations on momondo!',
  'dk_stays_smalltext'=>'Brug momondo til at finde ferieboliger blandt vores mest søgte destinationer'

];


?>