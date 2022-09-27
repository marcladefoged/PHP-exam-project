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
  'dk_login'=>'Log ind',
  'dk_admin_headline'=>'Du er nu logget ind!',
  'en_admin_headline'=>'You are now logged in!',
  'dk_admin_welcome'=>'Velkommen',
  'en_admin_welcome'=>'Welcome',
  'dk_admin_departure'=>'Afgangs by',
  'en_admin_departure'=>'Departure city',
  'dk_admin_arrival'=>'Ankomst by',
  'en_admin_arrival'=>'Arrival city',
  'dk_admin_delete'=>'Slet',
  'en_admin_delete'=>'Delete',
  'dk_admin_airport'=>'Lufthavn',
  'en_admin_airport'=>'Airport',
  'dk_admin_departure_date'=>'Afgangsdato',
  'en_admin_departure_date'=>'Departure date',
  'dk_admin_departure_time'=>'Afgangstid',
  'en_admin_departure_time'=>'Departure time',
  'dk_admin_arrival_date'=>'Ankomstdato',
  'en_admin_arrival_date'=>'Arrival date',
  'dk_admin_arrival_time'=>'Ankomsttid',
  'en_admin_arrival_time'=>'Arrival time',
  'dk_language'=>'Vælg sprog',
  'en_language'=>'Select language',
  'dk_signup_headline'=>'Opret dig her!',
  'en_signup_headline'=>'Sign up here!',
  'dk_signup_benefits'=>'Her kan du oprette dig og få del af Momondos mange fordele!',
  'en_signup_benefits'=>'Sign up here and get access to all the benefits Momondo has to offer!',
  'dk_login_member'=>'Følg priser, organiser rejseplaner, og få adgang til medlemstilbud med din momondo-konto.',
  'en_login_member'=>'Track prices, organise travel plans and access member-only deals with your momondo account.',
  'dk_signup_headline2'=>'Eller opret dig her!',
  'en_signup_headline2'=>'Or sign up here!',
  'dk_login_notamember'=>'Hvis du ikke allerede har oprettet dig hos Momondo, kan du gøre det her!',
  'en_login_notamember'=>'If you are not already signed up, you can do that right here!',
  

  



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

$cars_dictionary=[
  'en_cars_title'=>'Holiday Rentals & Stays!',
  'dk_cars_title'=>'Ferieboliger og overnatningssteder!',
  'en_cars_box1_headline'=>'Best car hire deals',
  'dk_cars_box1_headline'=>'de billigste lejebiler',
  'en_cars_box1_text'=>'See deals from hire companies in 70,000+ locations.',
  'dk_cars_box1_text'=>'Se tilbud fra udlejniongsfirmaer på over 70.000 forskellige steder.',
  'en_cars_box2_headline'=>'Price transparency',
  'dk_cars_box2_headline'=>'Prisgennemsigtighed',
  'en_cars_box2_text'=>'See the total cost up front so there are no surprises.',
  'dk_cars_box2_text'=>'Se den samlede pris fra starten, så der ikke er nogen overraskelser.',
  'en_cars_box3_headline'=>'Book with flexibility',
  'dk_cars_box3_headline'=>'Book med fleksibilitet',
  'en_cars_box3_text'=>'Find cars with free cancellation and enhanced cleaning.',
  'dk_cars_box3_text'=>'Find lejebiler med gratis afbestilling og øget rengøring.',
  'en_cars_box4_headline'=>'Eco-friendly options',
  'dk_cars_box4_headline'=>'Miljøvenlige muligheder',
  'en_cars_box4_text'=>'Filter your search to easily see hybrids and electric cars.',
  'dk_cars_box4_text'=>'filtrer din søgning for nemt at se hybrid- og elbiler',
  'en_cars_cheapcars'=>'Cheap car hire by destination',
  'dk_cars_cheapcars'=>'Billige lejebiler sorteret efter destination',
  'en_cars_find'=>'Find and compare car hire deals',
  'dk_cars_find'=>'Find og sammenlign de bedste tilbud på udlejningsbiler',
  'en_cars_search'=>'We search over 30,000 locations and include major car comparison sites, so you get a huge selection of cheap car hire deals from around the world.',
  'dk_cars_search'=>'Vi søger på over 30.000 steder og medtager større sites til sammenligning af billeje, så du et enormt udvalg af billige udlejningspriser fra hele verden.'
];

$ferries_dictionary=[
  'en_ferries_headline'=>'Find cheap tickets around the world!',
  'dk_ferries_headline'=>'Find billige færgebilletter i hele verden!',
  'en_ferries_box_headline'=>'Travel to a new place by boat',
  'dk_ferries_box_headline'=>'Rejs til et nyt sted med færge',
  'en_ferries_box_text'=>'You could travel by plane and arrive in no time but could you then enjoy the view and the fresh air meanwhile? Look at these European boat routes, you most likely have not tried before',
  'dk_ferries_box_text'=>'Selvfølgelig ville du kunne komme dertil på ingen tid med fly, mens kan du nyde udsigten og den friske havluft undervejs? Se disse europæiske færgeruter, du sandsynligvis ikke har prøvet.',
  'en_ferries_box_button'=>'Travel by boat',
  'dk_ferries_box_button'=>'Rejs med færge'
];

$experiences_dictionary=[
  'en_experiences_headline'=>'Find the best things to do for your trip!',
  'dk_experiences_headline'=>'Find de bedste oplevelser til din rejse!',
  'en_experiences_memories'=>'Share your experiences by sharing pictures and your personal mememory here!',
  'dk_experiences_memories'=>'Vis os dine oplevelser ved at dele dine billeder og minder fra tidligere rejser her!',
  'en_experiences_box1'=>'Me visiting Nyhavn in Copenhagen, Denmark!',
  'dk_experiences_box1'=>'Her besøger jeg Nyhavn i København!',
  'en_experiences_box2'=>'La Sagrada Familia in beautiful Barcelona!',
  'dk_experiences_box2'=>'La Sagrada Familia i smukke Barcelona!',
  'en_experiences_box3'=>'Exploring the amazing architecture in Seoul, South Korea!',
  'dk_experiences_box3'=>'Udforsker den fantastiske arkitektur in Seoul, Sydkorea!',
];

$explore_dictionary=[
  'en_explore_headline'=>'Explore your options!',
  'dk_explore_headline'=>'Udforsk dine muligheder!',
  'en_explore_aberdeen'=>'Experience beautiful Aberdeen on the Scottish north east coast!',
  'dk_explore_aberdeen'=>'Oplev naturrige Aberdeen på den skotske nordøst kyst!',
  'en_explore_barcelona'=>'Crazy about beautiful architecture and tapas? Then Barcelona is definitely the place for you',
  'dk_explore_barcelona'=>'Vild med smuk arkitektur og tapas? Så er Barcelona helt sikkert noget for dig!',
  'en_explore_dortmund'=>'How about a trip to the German city of Dortmund?',
  'dk_explore_dortmund'=>'Hvad med en tur til den tyske storby Dortmund?',
  'en_explore_hamilton'=>'The Canadian harbour city of Hamilton in Ontario also has plenty to offer!',
  'dk_explore_hamilton'=>'Den canadiske havneby Hamilton i Ontario har også masser at byde på!',
  'en_explore_paris'=>'The French capital is always a good choice!',
  'dk_explore_paris'=>'Den franske hovedstad er altid et sikkert hit!',
  'en_explore_phuket'=>'Are you more into sun and hot beaches? Then Phuket is the place for you!',
  'dk_explore_phuket'=>'Er du mere til sol og varme strande? Så er Phuket det du leder efter!',
];

$restrictions_dictionary=[
  'en_restrictions_headline'=>'Global travel restrictions!',
  'dk_restrictions_headline'=>'Globale rejserestriktioner!',
  'en_restrictions_text'=>'The travel status of each country can change suddenly, and we know it can be hard to stay up to date all the time. Thats why we created this page, so you can get the information, you need when you are planning your next trip. You only need to put in your arrival destination below, and the map will change to show each countrys status of opening and eventual demands on arrival for travellers by plane. Make sure to confirm with your own countrys government, before you book your next trip.',
  'dk_restrictions_text'=>'De enkelte landes rejsestatus kan ændre sig pludseligt, og vi ved, at det kan være svært at holde øje med det hele. Derfor har vi oprettet denne side, så du kan få de oplysninger, du har brug for, når du overvejer og planlægger rejser. Du skal blot indtaste dit afrejseland nedenfor, og kortet ændres derefter for at afspejle landenes åbningsstatus og eventuelle indrejseskrav for flyrejsende. Sørg for at dobbelttjekke med regeringens anbefalinger i dit land, inden du booker en flyrejse.'

];

$footer_dictionary=[
  'en_footer_company'=>'Company',
  'dk_footer_company'=>'Firma',
  'en_footer_company_about'=>'About us',
  'dk_footer_company_about'=>'Om os',
  'en_footer_company_careers'=>'Careers',
  'dk_footer_company_careers'=>'Jobmuligheder',
  'en_footer_company_mobile'=>'Mobile',
  'dk_footer_company_mobile'=>'Mobil',
  'en_footer_company_discover'=>'Discover',
  'dk_footer_company_discover'=>'Udforsk',
  'en_footer_company_howwework'=>'How we work',
  'dk_footer_company_howwework'=>'Sådan fungerer vi',
  'en_footer_company_coupon'=>'Momondo coupon codes',
  'dk_footer_company_coupon'=>'momondo-kuponkoder',
  'en_footer_contact'=>'Contact',
  'dk_footer_contact'=>'Kontakt os',
  'en_footer_contact_faq'=>'Help/FAQ',
  'dk_footer_contact_faq'=>'Hjælp/FAQ',
  'en_footer_contact_press'=>'Press',
  'dk_footer_contact_press'=>'Presse',
  'en_footer_contact_affiliates'=>'Affiliates',
  'dk_footer_contact_affiliates'=>'Samarbejdspartnere',
  'en_footer_more'=>'More',
  'dk_footer_more'=>'Mere',
  'en_footer_more_fees'=>'Airline fees',
  'dk_footer_more_fees'=>'Flyselskabsgebyrer',
  'en_footer_more_airlines'=>'Airlines',
  'dk_footer_more_airlines'=>'Flyselskaber',
  'en_footer_site'=>'Site / Currency',
  'dk_footer_site'=>'Side / Valuta',
];



?>