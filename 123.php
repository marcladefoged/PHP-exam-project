
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form onsubmit="abemad(); return false">

<input type="text" name="first_name">
<button>Submit bitches</button>

</form>
    

<script>

function abemad() {
    if ( !form.first_name > 1 ) {
        console.log("Name is too short")
    }
    if ( !form.first_name < 20 ) {
        console.log("Name is too long")
    }
}

</script>

</body>
</html>