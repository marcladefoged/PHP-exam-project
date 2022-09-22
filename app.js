function show_from_results(){
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
  function hide_from_results(){
    document.querySelector("#from-results").style.display = "none"
  }
  
  // ##############################
  async function get_cities_from(){
    let conn = await fetch('api-get-cities-from')
    let data = await conn.json() // [{"city_name":"a"},{"city_name":"b"}]
    let div_city = `<div class="from-city">
                      <img src="#img#">
                      <p>xxx</p>
                      <p>Airport: #airport#</p>
                    </div>`    
    let all_cities = ""
    //        0                1                    2
    // [{"city_name":"a"},{"city_name":"b"}, {"city_name":"c"}]
    for( let i = 0; i < data.length; i++ ){
      let city = data[i] // {"city_name":"a"}
      let city_name = city.city_name
      console.log(city_name)
      let copy_div_city = div_city
      copy_div_city = copy_div_city.replace("xxx", city.from_city_name)
      // copy_div_city = copy_div_city.replace("#img#", city.city_image)
      copy_div_city = copy_div_city.replace("#airport#", city.from_city_airport_name)
      all_cities += copy_div_city
    }               
    // console.log(data)
    // document.querySelector("#from-results").insertAdjacentHTML("afterbegin", all_cities)

    document.querySelector("#from-results").innerHTML = all_cities;
  }
  
  // ##############################
  
  function show_to_results() {
    const the_input = document.querySelector('#to-input')
    if( the_input.value.length > 0 ){
      document.querySelector("#to-results").style.display = "block"
      get_cities_to()
    }else{
      document.querySelector("#to-results").style.display = "none"
    }
  }
  
  function hide_to_results() {
    document.querySelector("#to-results").style.display = "none"
  }
  
  async function get_cities_to(){
    let conn = await fetch('api-get-cities-to')
    let data = await conn.json()
    let div_city = `<div class="to-city">
                    <img src="#img#">
                    <p>xxx</p>
                    <p>Population: #population#</p>
                    </div>`
    let all_cities = ""
    
    for( let i = 0; i < data.length; i++){
    let city = data[i]
    let city_name = city.city_name
    // console.log(city_name)
    let copy_div_city = div_city
    copy_div_city = copy_div_city.replace("#img#", city.city_image)
    copy_div_city = copy_div_city.replace("xxx", city_name)
    // copy_div_city = copy_div_city.replace("xxx", city_airport)
    copy_div_city = copy_div_city.replace("#population#", city.city_population)
    all_cities += copy_div_city
    }
  
  // console.log(data)
//   document.querySelector("#to-results").insertAdjacentHTML("afterbegin", all_cities)

  document.querySelector("#to-results").innerHTML = all_cities;
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

  // EXPLORE IMAGE UPLOAD

  function upload_image() {
   fetch( 'api-upload-image.php', {
    method : "POST",
    body : new FormData( document.getElementById('frmImage') )
   })
  }




