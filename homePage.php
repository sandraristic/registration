<?php include('index.php') ?>
<nav class="navbar navbar-default navbar-inverse nav-holder" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="#"><img class="logo" src="../assets/images/lotus.png"></a>-->
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div>
                        <?php  if (isset($_SESSION['username'])) : ?>
                            <a>Welcome <?php echo $_SESSION['username']; ?></a>
                        <?php endif ?>
                    </div>
                     <a href="../../index.php?logout='1'" style="color: red;">logout</a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="prijava.php">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input  class="form-control" name="korisnickoIme">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input  type="password" class="form-control" name="lozinka">
                                            <!--                                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>-->
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn-block" value="Login"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php include('template/header.php') ?>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <div class="home-content">
             <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        </div>
    <?php endif ?>
</div>