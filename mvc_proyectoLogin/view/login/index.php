<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">

    


        <div class="tab-content" style="width: 28%; height: 80%; background-color: rgba(26,188,156,0.3); border-radius: 6px; 
                    margin: 0px;
                 padding: 0px;  position: absolute;
                    top: 10%;
                    left: 40%;">
            <h3 class="m-4 ">Login</h3>

            <h6 class="m-2 ">Ingrese sus datos</h6>

            <form action="<?php echo constant('URL'); ?>login/autenticar" method="POST" class="m-4">


                <!-- Email input -->
                <div class="form-outline mb-4 ">
                    <label class="" for=""> Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                    <label class="form-label" for="loginName">Email or username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="" for=""> Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="loginPassword">Password</label>
                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">

                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

                <!-- Register buttons -->
            </form>




        </div>

    <!-- Pills content -->
</div>

<?php
require 'view/footer.php';
?>