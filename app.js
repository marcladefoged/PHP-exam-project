function show_cities_from(){
    const the_input = document.querySelector("#from-input")
    if( the_input.value.length > 0 ){
      document.querySelector("#from-results").style.display = "block"
      get_cities_from()
    }else{
      document.querySelector("#from-results").style.display = "none"
    }
    // document.querySelector("#from-results").style.display = "block"
  }
   
  // ##############################
  function hide_cities_from(){
    document.querySelector("#from-results").style.display = "none"
  }
  
  // ##############################
  async function get_cities_from(){
    let from_input = document.querySelector('#from-input').value;
    let conn = await fetch("api-get-cities-from.php?from_city="+from_input)
    let data = await conn.json() 
    let div_city = `
                      <div class="from-city">
                      <img src="#img#">
                      <p>Country: #country#</p>
                      <p>Airport: #airport#</p>
                    </div>`    
    let all_cities = ""

    for( let i = 0; i < data.length; i++ ){
      let city = data[i]
      let city_name = city.city_name
      console.log(city_name)
      let copy_div_city = div_city
      copy_div_city = copy_div_city.replace("#img#", 'images/'+city.city_image)
      copy_div_city = copy_div_city.replace("#country#", city.city_country)
      copy_div_city = copy_div_city.replace("#airport#", city.city_airport)

      all_cities += copy_div_city
    }               
    console.log(data)
    document.querySelector("#from-results").insertAdjacentHTML("afterbegin", all_cities)
  }
  
  // ##############################
  
  function show_cities_to() {
    const the_input = document.querySelector('#to-input')
    if( the_input.value.length > 0 ){
      document.querySelector("#to-results").style.display = "block"
      get_cities_to()
    }else{
      document.querySelector("#to-results").style.display = "none"
    }
  }
  
  function hide_cities_to() {
    document.querySelector("#to-results").style.display = "none"
  }
  
  async function get_cities_to(){
    let to_input = document.querySelector('#to-input').value;
    let conn = await fetch("api-get-cities-to.php?to_city="+to_input)
    let data = await conn.json() 
    let div_city = `
                      <div class="to-city">
                      <img src="#img#">
                      <p>Country: #country#</p>
                      <p>Airport: #airport#</p>
                    </div>`    
    let all_cities = ""

    for( let i = 0; i < data.length; i++ ){
      let city = data[i]
      let city_name = city.city_name
      console.log(city_name)
      let copy_div_city = div_city
      copy_div_city = copy_div_city.replace("#img#", 'images/'+city.city_image)
      copy_div_city = copy_div_city.replace("#country#", city.city_country)
      copy_div_city = copy_div_city.replace("#airport#", city.city_airport)
      all_cities += copy_div_city
    }               
    console.log(data)
    document.querySelector("#to-results").insertAdjacentHTML("afterbegin", all_cities)
  }

  // SIGNUP WINDOW

  function show_signup_popup() {
    document.querySelector(".signup_popup").style.display = "flex";
  }

  function hide_signup_popup() {
    document.querySelector(".signup_popup").style.display = "none";
  }
  
  // LOGIN WINDOW

  function show_login_popup() {
    document.querySelector(".login_popup").style.display = "flex";
  }

  function hide_login_popup() {
    document.querySelector(".login_popup").style.display = "none";
  }


  // IMAGE UPLOAD

  function upload_image() {
   fetch( 'api-upload-image.php', {
    method : "POST",
    body : new FormData( document.getElementById('frmImage') )
   })
  }




