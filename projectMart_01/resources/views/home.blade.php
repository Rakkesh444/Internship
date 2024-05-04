<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Creator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <!-- navbare -->
    <nav class="navbar navbar-expand-lg " data-bs-theme="dark" id="section-1">
        <div class="container-fluid p-3">
            <a href="" class="navbar-brand fs-4 logo">VR2C </i></a>
            <button class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item"><a href="" class="nav-link ">Home</a>
                        <span></span>
                    </li>

                    <li class="nav-item"><a href="" class="nav-link ">About</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Services</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Contact</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Help</a></li>
                </ul>
                <div class="buttons">
                    <a href="">
                            <a href="login">Login</a>
                            <a href="register">Register</a>
                            <a href="logout">Logout</a>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="animation">
        <i class="bi bi-suit-heart h1"></i>
        <i class="bi bi-suit-heart h2"></i>
        <i class="bi bi-suit-heart h3"></i>
        <i class="bi bi-suit-heart h4"></i>
    </div>
    <section class="container section-1 text-center" id="section-1">
        <div class="row">
            <div class="col">
                <h1 class="display-6 fw-semibold ">Welcome Our Restaurants</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore laborum harum mollitia
                    sed
                    doloremque vitae cumque et expedita esse pariatur eius at est iure consequatur, in laboriosam
                    delectus sunt veniam?</p>
                <a href="#order">Orders</a>
            </div>
            <div class="col">
                <img src="{{asset('images/homeimage.png ')}}" alt="">
            </div>
        </div>
    </section>
    <section class="container section-3">
        <h1 class="display-3">About</h1>
        <p class="text-secondary">This About Us Our Restaurant</p>
        <hr class="text-light">
        <div class="row text-light">
            <div class="col">
                <h5 class="display-6 fw-bold">Let's read</h5>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur possimus
                    cupiditate pariatur
                    voluptatem dolor? Placeat explicabo quos magnam? Expedita illo accusantium labore repellat
                    doloremque omnis aperiam itaque officia tempora explicabo?</p>
                <h5 class="display-6 fw-bold mt-5">Our Achievements</h5>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur possimus
                    cupiditate pariatur
                    voluptatem dolor? Placeat explicabo quos magnam? Expedita illo accusantium labore repellat
                    doloremque omnis aperiam itaque officia tempora explicabo?</p>

                <a href="">see more </a>
            </div>
            <div class="col">
                <img src="./images/about.png" alt="">
            </div>
        </div>
    </section>
    <!-- Section-4 -->
    <div class="form-title container" id="order">
        <h1 class="display-3 text-light text-center">Customer Booking Form</h1>
        <hr class="text-secondary">
    </div>
    <section class="section-4 container">
        <div class="image">
            <img src="./images/cartoon-8419487_640-removebg-preview.png" alt="">
        </div>
        <form action="register.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="Enter Customer Name..">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <input type="text" name="email" class="form-control" placeholder="Enter Customer Email..">
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" name="number" placeholder="Enter Customer Phone..">
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" name="wnumber" placeholder="Enter Customer WhatsApp..">
                    </div>
                </div>
                <div class="row">
                    <p class="text-light mt-4">Address</p>
                    <div class="col-md-8 mt-3">
                        <textarea name="address" class="form-control" id=""></textarea>
                    </div>
                    <div class="col-md-4 mt-3">
                        <select class="form-control" name="state">
                            <option value="United States">United States</option>
                            <option value="Afghanistan">India</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                            </option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 mt-3">
                        <Select class="form-control" name="seats">
                            <option value="">Select Seats</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </Select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <Select class="form-control" name="tier">
                            <option value="">Select Teir</option>
                            <option value="">One Tier</option>
                            <option value="">Two Tier</option>
                            <option value="">Three Tier</option>
                            <option value="">Four Tier</option>
                        </Select>
                    </div>
                    <div class="col-md-4">
                        <Select class="form-control mt-3" name="selected">
                            <option value="">Select Seats</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </Select>
                    </div>
                </div>
                <div class="buttons mt-4">
                    <input type="submit" name="submit" class="btn btn-success">
                    <a href="" class="btn btn-warning">Reset</a>
                </div>
        </form>
    </section>
    <!-- End Section -->
    <section class="end-sectiom container text-light ">
        <hr>
        <h1>Helpfull Links</h1>
        <p class="text-secondary fw-semibold">This Site Only Use Customer Booking Out Seat </p>
        <div class="link d-flex flex-column fw-semibold w-25 mx-auto p-5">
            <a href="" class="mt-3">Contact</a>
            <a href="" class="mt-3">Our Services</a>
            <a href="" class="mt-3">Contact</a>
            <a href="" class="mt-3">Customer Services</a>
            <a href="" class="mt-3">Website</a>
        </div>
        <div class="end-images d-flex justify-content-around">
            <img src="./images/woman-8710255_640-removebg-preview.png" width="220" height="200">
            <a href="#section-1"> <i class="bi bi-arrow-up fs-5"></i></a>
            <img src="./images/woman-8438999_640.png" alt="" width="200" height="200">
        </div>
    </section>
    <!-- Navbare end -->
    <!-- <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <!-- cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>