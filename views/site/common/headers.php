<?php
use yii\helpers\html;
/** @var yii\web\View $this */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <span style="margin-bottom: 20px"><?= Html::a('Program',['/courses/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li class="nav-item">
                    <span style="margin-bottom: 20px"><?= Html::a('Staff',['/staff/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li class="nav-item">
                    <span style="margin-bottom: 20px"><?= Html::a('Activities',['/activities/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li class="nav-item">
                    <span style="margin-bottom: 20px"><?= Html::a('Communications',['/communications/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li>
                    <span style="margin-bottom: 20px"><?= Html::a('Boot Camps',['/bootcamp/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li>
                    <span style="margin-bottom: 20px"><?= Html::a('CISCO',['/cisco/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li>
                    <span style="margin-bottom: 20px"><?= Html::a('Microsoft',['/microsoft/index'],['class'=>'btn btn-primary']) ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="jumbotron text-center bg-transparent">
    <h1 class="display-4">EIU SCHOOL OF COMPUTING - ADMIN PORTAL</h1>

    <p class="lead">Dashboard Goes Here</p>

    <p><a class="btn btn-lg btn-success" href="https://www.jkuat.ac.ke">Apply Here</a></p>
</div>
