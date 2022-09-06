<?php 
//include header.php file
include('header.php');
?>



                <section id="form"><!--form-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="login-form"><!--login form-->
                                    <h2>Login to your account</h2>
                                    <form action="login.php" method="post">

                                        <input type="email" name="email" placeholder="Email Address" />
                                        <input type="password" name="password" placeholder="Password" />
                                        <button type="submit" class="btn btn-default">Login</button>
                                    </form>
                                </div><!--/login form-->
                            </div>
                            <div class="col-sm-1">
                                <h2 class="or">OR</h2>
                            </div>
                            <div class="col-sm-4">
                                <div class="signup-form"><!--sign up form-->
                                    <h2>New User Signup!</h2>
                                    <form action="connect.php" method="post">
                                    <input type="text" id="username" name="username" placeholder=" Your Name"/>
                                    <input type="text" id="email" name="email" placeholder=" Your E-mail"/>
                                    <input type="text" id="number" name="number" placeholder=" Your Phone Number"/>
                                    <input type="password" id="password" name="password" placeholder=" Your Password"/>
                                    <button type="submit" class="btn btn-default">Signup</button>
                                    </form>
                                </div><!--/sign up form-->
                            </div>
                        </div>
                    </div>
                </section><!--/form-->

<?php 
//include footer.php file
include('footer.php');
?> 
                