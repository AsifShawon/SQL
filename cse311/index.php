<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Travello</title>
    <link rel="stylesheet" href="style1.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
#login-error-message #error-message,
#error-plan-delete,
.error {
    color: red;
    text-align: center;
}

#update-msg {
    color: green;
    text-align: center;
}
</style>

<body>
    <header>
        <div class="container">
            <!-- success modal -->
            <!-- Button trigger modal -->
            <button id="success-modal-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#success-modal">
                Success
            </button>

            <!-- Modal -->
            <div class="modal fade" id="success-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p id="success-msg"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav_bar">
                <div class="logo">
                    <i class="fa-solid fa-route"></i>
                    <h4>Travello</h4>
                </div>

                <div class="menu_list">
                    <a href="#">Home</a>
                    <!-- <a href="#">Blog</a> -->
                    <!-- <a href="#">Places</a>
                    <a href="#">Services</a>
                    <a href="#">Contact US</a> -->
                </div>

                <div id="profile-dropdown">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="material-icons">account_circle</i>
                            <span id="action-btn"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a type="button" class="dropdown-item" id="see-profile">See Profile</a></li>
                            <li><a class="dropdown-item" href="http://localhost/cse311/">Log Out</a></li>
                        </ul>
                    </div>
                </div>



                <div id="login-signup-btn">
                    <!-- sign-up login modal  start-->

                    <!-- Button trigger modal -->
                    <button id="signup-open" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#signupModal">
                        Sign-up
                    </button>

                    <!-- Modal signup-->
                    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign-up</h5>
                                    <button id="signup-close" type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- username -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping">Username</span>
                                        <input id="submit-username" type="text" class="form-control"
                                            placeholder="ex: asif_2" aria-label="Username"
                                            aria-describedby="addon-wrapping">
                                    </div>
                                    <!-- Email -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping">Email</span>
                                        <input id="submit-email" type="email" class="form-control"
                                            placeholder="ex: asif@gmail.com" aria-label="Email"
                                            aria-describedby="addon-wrapping">
                                    </div>
                                    <!-- Password -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                        <input id="submit-password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="addon-wrapping">
                                    </div>
                                </div>

                                <div id="error-message"></div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="signup-submit">Submit</button>
                                    <button type="button" class="btn btn-primary" id="login-click">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <button id="login-open" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>

                    <!-- Modal login-->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- username -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping">Username</span>
                                        <input id="login-username" type="text" class="form-control"
                                            placeholder="ex: asif_2" aria-label="Username"
                                            aria-describedby="addon-wrapping">
                                    </div>

                                    <!-- Password -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                        <input id="login-password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="addon-wrapping">
                                    </div>
                                </div>

                                <div id="login-error-message"></div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="login-submit">Submit</button>
                                    <button type="button" class="btn btn-primary" id="signup-click">Sign-up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sign-up login modal  end-->
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </header>

    <div id="home-page-sec">
        <section class="home_section">
            <div class="overlay">
                <div class="container">
                    <div class="home">
                        <h1><span>meet</span> people <br>discover <span>places</span> <br><span>enjoy</span> time</h1>
                        <div class="home_buttons">
                            <!-- modal for maiing plan start -->
                            <!-- Button trigger modal -->

                            <!-- Button trigger modal -->
                            <button id="make-plan-not-btn" type="button" class="btn1 btn-primary" data-bs-toggle="modal"
                                data-bs-target="#make-plan-not">
                                Make Plans
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="make-plan-not" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Login First to make plans
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button id="make-plan-btn" type="button" class="btn1" data-bs-toggle="modal"
                                data-bs-target="#make-plan-modal">
                                Make Plans
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="make-plan-modal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Make your own plan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3" action="form.php" method="post">

                                                <!-- City -->
                                                <div class="col-md-6">
                                                    <label for="inputtext1" class="form-label">City *</label>
                                                    <select name="city_name" id="inputCity" class="form-select">
                                                        // city dropdowns
                                                    </select>
                                                </div>



                                                <!-- destination options -->
                                                <div class="col-md-6">
                                                    <label for="inputtext2" class="form-label">Options to explore
                                                        *</label>
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
                                                <div class="col-md-9">
                                                    <label for="inputtext4" class="form-label">Restaurants</label>
                                                    <select name="restaurant" id="inputRestaurent" class="form-select">
                                                        //
                                                        <option>Choose a Restaurant</option>
                                                    </select>
                                                </div>

                                                <!-- Budget for restaurant -->
                                                <div class="col-md-3">
                                                    <label for="restaurant-budget" class="form-label">Budget</label>
                                                    <div id="restaurant-budget"></div>
                                                </div>

                                                <!-- Hotels -->
                                                <div class="col-md-8">
                                                    <label for="inputtext5" class="form-label">Hotels</label>
                                                    <select name="hotel" id="inputHotel" class="form-select">
                                                        //
                                                        <option>Choose a Hotel</option>
                                                    </select>
                                                </div>

                                                <!-- Budget for Hotels -->
                                                <div class="col-md-4">
                                                    <label for="hotel-budget" class="form-label"></label>
                                                    <select id="hotel-budget" class="form-select">
                                                        <option selected>Budget</option>
                                                    </select>
                                                </div>

                                                <!-- Rent a car -->
                                                <div class="col-md-7">
                                                    <label for="inputtext6" class="form-label">Car Type</label>
                                                    <select name="car" id="inputCar" class="form-select">
                                                        //
                                                        <option>Type</option>
                                                    </select>
                                                </div>

                                                <!-- Budget for car -->
                                                <div class="col-md-5">
                                                    <label for="car-budget" class="form-label">1 DayBudget</label>
                                                    <div id="car-budget"></div>
                                                </div>
                                                <!-- Person number -->
                                                <div class="col-md-5">
                                                    <label for="member-count" class="form-label">How many
                                                        members?</label>
                                                    <input id="member-count" type="number" min="0" max="50"
                                                        class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div id="save-plan-msg"></div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Proceed</button> -->
                                            <button type="button" class="btn btn-primary" id="save-plan">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal for making plan end -->
                            <!-- Button trigger modal -->
                            <button id="see-plan-btn-not" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#see-plan-not">
                                See Plans
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="see-plan-not" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Login to see your plans
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Button trigger modal -->
                            <button id="see-plan-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#see-plan">
                                See Plans
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="see-plan" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Your Plans</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="see-plan-table">
                                            <!-- ------------- -->
                                        </div>
                                        <div id="error-plan-delete"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="title">
                    <h1>Visit World's best <span>places</span></h1>
                    <span class="slogan">enjoy your trip.</span>
                </div>
                <div class="services_boxes">
                    <div class="box">
                        <i class="fa-solid fa-hotel"></i>
                        <h4>Tour Point 1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, aspernatur.</p>
                    </div>

                    <div class="box br">
                        <i class="fa-solid fa-plane"></i>
                        <h4>Tour Point 2</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, aspernatur.</p>
                    </div>

                    <div class="box">
                        <i class="fa-solid fa-mountain-sun"></i>
                        <h4>Tour Point 3</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, aspernatur.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button trigger modal -->
        <button id="see-profile-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#profile-modal">
        </button>

        <!-- Modal -->
        <div class="modal fade" id="profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <!-- username -->
                            <div class="input-group mb-3">
                                <!-- <span class="input-group-text" id="addon-wrapping">Username</span> -->
                                <label id="profile-username" for="profile-username" class="form-label"></label>
                            </div>
                            <!-- Email -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="addon-wrapping">Email</span>
                                <input id="profile-email" type="email" class="form-control"
                                    placeholder="ex: asif@gmail.com" aria-label="Email"
                                    aria-describedby="addon-wrapping">
                                <!-- <label id="profile-email" for="profile-username" class="form-label"></label> -->
                            </div>
                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input id="profile-password" type="password" class="form-control" placeholder="Password"
                                    aria-label="Password" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>
                    <div id="update-msg"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="update-profile">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <button id="edit-plan-btn" type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#edit-plan-modal">
            See Details
        </button>

        <!-- Modal -->
        <div class="modal fade" id="edit-plan-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Your Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="form.php" method="post">

                            <!-- City -->
                            <div class="col-md-6">
                                <label for="inputtext1" class="form-label">City *</label>
                                <label name="city_name" id="editCity" class="form-control" readonly>
                                </label>
                            </div>



                            <!-- destination options -->
                            <div class="col-md-6">
                                <label for="inputtext2" class="form-label">Options to explore
                                    *</label>
                                <label name="option" id="editOption" class="form-control" readonly>

                                </label>
                            </div>


                            <!-- Sights -->
                            <div class="col-md-12">
                                <label for="inputtext3" class="form-label">Sights to visit *</label>
                                <label name="sight" id="editSight" class="form-control" readonly>
                                </inpulabel>
                            </div>


                            <!-- Restaurants -->
                            <div class="col-md-9">
                                <label for="inputtext4" class="form-label">Restaurants</label>
                                <label name="restaurant" id="editRestaurent" class="form-control" readonly>
                                </label>
                            </div>

                            <!-- Budget for restaurant -->
                            <div class="col-md-3">
                                <label for="edit-restaurant-budget" class="form-label">Budget</label>
                                <div id="edit-restaurant-budget"></div>
                            </div>

                            <!-- Hotels -->
                            <div class="col-md-8">
                                <label for="inputtext5" class="form-label">Hotels</label>
                                <label name="hotel" id="editHotel" class="form-control" readonly>

                                </label>
                            </div>

                            <!-- Budget for Hotels -->
                            <div class="col-md-4">
                                <label for="hotel-budget" class="form-label"></label>
                                <label id="edit-hotel-budget" class="form-control" readonly>

                                </label>
                            </div>

                            <!-- Rent a car -->
                            <div class="col-md-7">
                                <label for="inputtext6" class="form-label">Car Type</label>
                                <label name="car" id="editCar" class="form-control" readonly>

                                </label>
                            </div>

                            <!-- Budget for car -->
                            <div class="col-md-5">
                                <label for="car-budget" class="form-label">1 DayBudget</label>
                                <div id="edit-car-budget"></div>
                            </div>
                            <!-- Person number -->
                            <div class="col-md-5">
                                <label for="member-count" class="form-label">Members</label>
                                <label id="edit-member-count" min="0" max="50" class="form-control" readonly></label>
                            </div>
                        </form>
                    </div>
                    <div id="save-plan-msg"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

    </div>


    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </script>
    <!-- <script src="form_jquery.js"></script> -->

    <script>
    $(document).ready(function() {
        var loged_in = false;
        $("#restaurant-budget").html("00");
        $("#car-budget").html("00");
        $("#success-modal-btn").hide();
        $("#profile-dropdown").hide();
        $("#see-profile-btn").hide();
        $("#edit-plan-btn").hide();
        if (loged_in == false) {
            $("#make-plan-btn").hide();
            $("#make-plan-not-btn").show();
            $("#see-plan-not-btn").show();
            $("#see-plan-btn").hide();
        }

        // changing sign-up modal to login
        $("#login-click").on("click", function() {
            $("#signupModal").hide();
            $("#login-open").click();
        });
        // changing login modal to sign-up
        $("#signup-click").on("click", function() {
            $("#loginModal").hide();
            $("#signup-open").click();
        });

        // sign-up
        $("#signup-submit").on("click", function() {
            var username = $("#submit-username").val();
            var email = $("#submit-email").val();
            var password = $("#submit-password").val();

            if (username == "") {
                $("#error-message").html("<p class='error'>Blank Username!!</p>");
            } else if (email == "") {
                $("#error-message").html("<p class='error'>Blank mail!!</p>");
            } else if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
                $("#error-message").html("<p class='error'>Wrong mail!!</p>");
            } else if (password.length < 5) {
                $("#error-message").html("<p class='error'>Password should be 5 or more</p>");
            } else {
                $.ajax({
                    url: "signup_save.php",
                    type: "POST",
                    data: {
                        _username: username,
                        _email: email,
                        _password: password
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#signupModal").hide();
                            $("#success-modal-btn").click();
                            $("#success-msg").html("Sign-up Successfull");
                        } else {
                            $("#error-message").html("Already Signed");
                        }
                    }
                })
            }
        });
        var login_user = "";

        // login 
        $("#login-submit").on("click", function() {
            var username = $("#login-username").val();
            var password = $("#login-password").val();

            if (username == "") {
                $("#login-error-message").html("<p class='error'>Blank Username!!</p>");
            } else if (password.length < 5) {
                $("#login-error-message").html("<p class='error'>Password should be 5 or more</p>");
            }

            $.ajax({
                url: "login_check.php",
                type: "POST",
                data: {
                    _username: username,
                    _password: password
                },
                success: function(data) {
                    if (data == 1) {
                        login_user = username;
                        loged_in = true;
                        $("#make-plan-btn").show();
                        $("#make-plan-not-btn").hide();
                        $("#loginModal").hide();
                        $("#see-plan-btn-not").hide();
                        $("#see-plan-btn").show();
                        $("#success-modal-btn").click();
                        $("#success-msg").html(
                            "<p>Login Successfull!! Hello," + username +
                            "</p>"
                        );
                        $("#action-btn").html(username);
                        $("#login-signup-btn").hide();
                        $("#profile-dropdown").show();


                    } else {
                        $("#login-error-message").html("User Not Found !!");
                    }
                }
            })
        });

        $("#see-profile").on("click", function() {
            $.ajax({
                url: "load-profile.php",
                type: "POST",
                data: {
                    _username: login_user
                },
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var user = dataObj.username;
                    var email = dataObj.email;
                    var password = dataObj.password;
                    $("#profile-username").html(user);
                    $("#profile-email").val(email);
                    $("#profile-password").val(password);
                    $("#see-profile-btn").click();
                }
            })
        });

        $("#update-profile").on("click", function() {
            var email = $("#profile-email").val();
            var password = $("#profile-password").val();
            $.ajax({
                url: "update-profile.php",
                type: "POST",
                data: {
                    _username: login_user,
                    _email: email,
                    _password: password
                },
                success: function(data) {
                    if (data == 1) {
                        $("#update-msg").html("Updated Successfully!!");
                    } else {
                        $("#update-msg").html("Can't Update");
                    }
                }
            });
        });

        function loadCity() {
            $.ajax({
                url: "load-city.php",
                type: "POST",
                success: function(data) {
                    $("#inputCity").html(data);
                }
            });
        }
        var cityName;

        function loadOption() {
            $("#inputCity").change(function() {
                cityName = $(this).val();
                // alert(name);
                $.ajax({
                    url: "load-option.php",
                    type: "POST",
                    data: {
                        city_name: cityName
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
                        city_name: cityName
                    },
                    success: function(data) {
                        $("#inputSight").html(data);
                    }
                });
            })
        }

        var sight;
        var restaurant = "";

        function loadRestaurant() {
            $("#inputSight").change(function() {
                sight = $(this).val();

                $.ajax({
                    url: "load-restaurant.php",
                    type: "POST",
                    data: {
                        city_name: cityName,
                        restaurant_name: restaurant
                    },
                    success: function(data) {
                        $("#inputRestaurent").html(data);
                    }
                });
            });
        }
        var restaurantBudget;

        function loadRestaurantBudget() {
            $("#inputRestaurent").change(function() {
                restaurant = $(this).val();

                $.ajax({
                    url: "load-restaurant.php",
                    type: "POST",
                    data: {
                        city_name: cityName,
                        restaurant_name: restaurant
                    },
                    success: function(data) {
                        console.log(data);
                        $("#restaurant-budget").html(data);
                        restaurantBudget = data;
                    }
                });
            });
        }

        var hotel = "";
        var hotelBudget;

        function loadHotel() {
            $("#inputCity").change(function() {

                $.ajax({
                    url: "load-hotel.php",
                    type: "POST",
                    data: {
                        city_name: cityName,
                        hotel_name: hotel
                    },
                    success: function(data) {
                        $("#inputHotel").html(data);
                    }
                });
            });
        }

        function loadHotelBudget() {
            $("#inputHotel").change(function() {
                hotel = $(this).val();

                $.ajax({
                    url: "load-hotel.php",
                    type: "POST",
                    data: {
                        city_name: cityName,
                        hotel_name: hotel
                    },
                    success: function(data) {
                        
                        $("#hotel-budget").html(data);
                        hotelBudget = $("#hotel-budget").val();
                    }
                });
            });
        }

        var car;
        var carCompany;
        var carBudget;

        function loadCar() {
            $("#inputCity").change(function() {
                $.ajax({
                    url: "load-car.php",
                    type: "POST",
                    data: {
                        city_name: cityName
                    },
                    success: function(data) {
                        $("#inputCar").html(data);
                    }
                });
            })
        }

        function loadCarBudget() {
            $("#inputCar").change(function() {
                car = $(this).val();

                $.ajax({
                    url: "load-car.php",
                    type: "POST",
                    data: {
                        city_name: cityName,
                        car_name: car
                    },
                    success: function(data) {
                        $("#car-budget").html(data);
                        carBudget = data;
                    }
                });
            });
        }

        loadCity();
        loadOption();
        loadSight();
        loadRestaurant();
        loadRestaurantBudget();
        loadHotel();
        loadHotelBudget();
        loadCar();
        loadCarBudget();

        $("#save-plan").on("click", function() {
            var member = $("#member-count").val();
            console.log(login_user, cityName, option, sight, restaurant, restaurantBudget, hotel,
                hotelBudget, car, carBudget, member);
            $.ajax({
                url: "save-plan.php",
                type: "POST",
                data: {
                    _username: login_user,
                    _city: cityName,
                    _option: option,
                    _sight: sight,
                    _restaurant: restaurant,
                    _restaurantBudget: restaurantBudget,
                    _hotel: hotel,
                    _hotelBudget: hotelBudget,
                    _car: car,
                    _carBudget: carBudget,
                    _member: member
                },
                success: function(data) {
                    if (data == 1) {
                        $("#save-plan-msg").html("Data Saved");
                    } else {
                        $("#save-plan-msg").html(data);
                    }
                }
            });
            $('form').trigger('reset');
            restaurantBudget = 0;
            restaurant="";
            hotel="";
            hotelBudget=0;
            cityName="";
            option="";
            car="";
            carBudget=0;
            member=0;

        });

        $("#see-plan-btn").on("click", function() {
            $.ajax({
                url: "see-plan-table.php",
                type: "POST",
                data: {
                    _username: login_user
                },
                success: function(data) {
                    $("#see-plan-table").html(data);
                }
            })
        });
    });

    $(document).on("click", ".delete-btn", function() {
        var id = $(this).data("id");
        // alert(id);
        var element = this;

        $.ajax({
            url: "plan-delete.php",
            type: "POST",
            data: {
                _id: id
            },
            success: function(data) {
                if (data == 1) {
                    $(element).closest("tr").fadeOut();
                } else {
                    $("#error-plan-delete").html("Can't Delete Records").slideDown();
                }
            }
        });
    });
    var edit_city;
    var edit_option;
    var edit_sight;
    var edit_restaurant;
    var edit_restaurantBudget;
    var edit_hotel;
    var edit_hotelBudget;
    var edit_car;
    var edit_carBudget;
    var edit_member;

    $(document).on("click", ".edit-btn", function() {
        var id = $(this).data('eid');
        $.ajax({
            url: "load-edit-city.php",
            type: "POST",
            data: {
                _id: id
            },
            success: function(data) {
                
                var dataObj = JSON.parse(data);
                edit_city = dataObj.city;
                edit_option = dataObj.options;
                edit_sight = dataObj.sight;
                edit_restaurant = dataObj.restaurant;
                edit_restaurantBudget = dataObj.restaurantBudget;
                edit_hotel = dataObj.hotels;
                edit_hotelBudget = dataObj.hotelBudget;
                edit_car = dataObj.car;
                edit_carBudget = dataObj.carBudget;
                edit_member = dataObj.member;
                console.log(edit_city, edit_option, edit_sight, edit_restaurant, edit_restaurantBudget, edit_hotel,
                edit_hotelBudget, edit_car, edit_carBudget, edit_member);
                $("#editCity").html(edit_city);
                $("#editOption").html(edit_option);
                $("#editSight").html(edit_sight);
                $("#editRestaurent").html(edit_restaurant);
                $("#edit-restaurant-budget").html(edit_restaurantBudget);
                $("#editHotel").html(edit_hotel);
                $("#edit-hotel-budget").html(edit_hotelBudget);
                $("#editCar").html(edit_car);
                $("#edit-car-budget").html(edit_carBudget);
                $("#edit-member-count").html(edit_member);
                $("#edit-plan-btn").click();

            }
        })
    })
    </script>
</body>

</html>