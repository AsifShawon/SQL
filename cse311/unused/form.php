<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Form</title>
</head>
<style>
     #container {
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      font-family: Arial, sans-serif;
      color: #333;
    }

    #container h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    #container p {
      font-size: 16px;
      line-height: 1.5;
    }

    #container a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
</style>
<body>
    <div id="container">
    <form class="row g-3" action="form.php" method="post">

<!-- City -->
<div class="col-md-6">
    <label for="inputtext1" class="form-label">City *</label>
    <select name="city_name" id="inputCity" class="form-select">
        // city dropdowns
    </select>
    <!-- <button type="submit" class="btn btn-primary">ok</button> -->
</div>



<!-- destination options -->
<div class="col-md-6">
    <label for="inputtext2" class="form-label">Options to explore *</label>
    <select name="option" id="inputOption" class="form-select">
        // options
        <option>Choose a type</option>
    </select>
</div>


<!-- Sights -->
<div class="col-md-12">
    <label for="inputtext3" class="form-label">Sights to visit *</label>
    <select name="sight" id="inputSight" class="form-select">
        // sights
        <option>Choose a Sight</option>
    </select>
</div>


<!-- Restaurants -->
<div class="col-md-12">
    <label for="inputtext4" class="form-label">Restaurants</label>
    <select name="sight" id="inputRestaurent" class="form-select">
        // sights
        <option>Choose a Sight</option>
    </select>
</div>


<div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="">
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">State</label>


    <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
    </select>



</div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
</div>
<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="js/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    function loadCity() {
        $.ajax({
            url: "load-city.php",
            type: "POST",
            success: function(data) {
                $("#inputCity").html(data);
            }
        });
    }
    var name;

    function loadOption() {
        $("#inputCity").change(function() {
            name = $(this).val();
            // alert(name);
            $.ajax({
                url: "load-option.php",
                type: "POST",
                data: {
                    city_name: name
                },
                success: function(data) {
                    $("#inputOption").html(data);
                }
            });
        })
    }

    var option;

    function loadSight() {
        $("#inputOption").change(function() {
            option = $(this).val();
            // alert(name);
            $.ajax({
                url: "load-sight.php",
                type: "POST",
                data: {
                    option_name: option,
                    city_name: name
                },
                success: function(data) {
                    $("#inputSight").html(data);
                }
            });
        })
    }

    loadCity();
    loadOption();
    loadSight();
})
</script>

</html>