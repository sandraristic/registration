<?php include('index.php') ?>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4.12.2018.
 * Time: 14.31
 */
?>
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://www.paysafecard.com/fileadmin//Website/News/News_Area/Games/hellblade.jpg">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="https://www.paysafecard.com/fileadmin//Website/News/News_Area/Games/hellblade.jpg">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>