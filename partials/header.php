<?php
  function menuKlass($target){
    return basename($_SERVER["SCRIPT_FILENAME"], '.php') == $target ? 'active' : '' ;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>IMG 240</title>
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <div class="columns">
    <div class="column">
      <div class="hero bg-primary">
        <div class="hero-body">
          <div class="page-width">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-width">
    <div class="container">
      <div class="columns">
        <div class="column col-3 col-sm-12">
          <ul class="menu">

            <li class="menu-item">
              <a href="index.php" class="<?php echo menuKlass('index') ?>"><i class="icon icon-link"></i> Home</a>
            </li>

            <li class="divider" data-content="Schedule"></li>

            <li class="menu-item">
              <a href="week01.php" class="<?php echo menuKlass('week01') ?>"><i class="icon icon-more-vert"></i> Week 1 <small>JAN 8</small></a>
            </li>

            <li class="menu-item">
              <a href="week02.php" class="<?php echo menuKlass('week02') ?>"><i class="icon icon-more-vert"></i> Week 2 <small>JAN 15</small></a>
            </li>

            <li class="menu-item">
              <a href="week03.php" class="<?php echo menuKlass('week03') ?>"><i class="icon icon-more-vert"></i> Week 3 <small>JAN 22</small></a>
            </li>

            <li class="menu-item">
              <a href="week04.php" class="<?php echo menuKlass('week04') ?>"><i class="icon icon-more-vert"></i> Week 4 <small>JAN 29</small></a>
            </li>

            <li class="menu-item">
              <a href="week05.php" class="<?php echo menuKlass('week05') ?>"><i class="icon icon-more-vert"></i> Week 5 <small>FEB 5</small></a>
            </li>

            <li class="menu-item">
              <a href="week06.php" class="<?php echo menuKlass('week06') ?>"><i class="icon icon-more-vert"></i> Week 6 <small>FEB 12</small></a>
            </li>

            <li class="menu-item">
              <a href="week07.php" class="<?php echo menuKlass('week07') ?>"><i class="icon icon-more-vert"></i> Week 7 <small>FEB 26</small></a>
            </li>

            <li class="menu-item">
              <a href="week08.php" class="<?php echo menuKlass('week08') ?>"><i class="icon icon-more-vert"></i> Week 8 <small>MAR 5</small></a>
            </li>

            <li class="menu-item">
              <a href="week09.php" class="<?php echo menuKlass('week09') ?>"><i class="icon icon-more-vert"></i> Week 9 <small>MAR 12</small></a>
            </li>

            <li class="menu-item">
              <a href="week10.php" class="<?php echo menuKlass('week10') ?>"><i class="icon icon-more-vert"></i> Week 10 <small>MAR 19</small></a>
            </li>

            <li class="menu-item">
              <a href="week11.php" class="<?php echo menuKlass('week11') ?>"><i class="icon icon-more-vert"></i> Week 11 <small>MAR 26</small></a>
            </li>

            <!--

            <li class="menu-item">
              <a href="week12.php" class="<?php echo menuKlass('week12') ?>"><i class="icon icon-more-vert"></i> Week 12 <small>APR 2</small></a>
            </li>

            <li class="menu-item">
              <a href="week13.php" class="<?php echo menuKlass('week13') ?>"><i class="icon icon-more-vert"></i> Week 13 <small>APR 9</small></a>
            </li>

            -->

            <li class="divider" data-content="resources"></li>

            <li class="menu-item">
              <a href="final-project.php" class="<?php echo menuKlass('final-project') ?>"><i class="icon icon-flag"></i> Final Project</a>
            </li>

            <li class="menu-item">
              <a href="course-outline.php" class="<?php echo menuKlass('course-outline') ?>"><i class="icon icon-time"></i> Course Outline</a>
            </li>

            <li class="menu-item">
              <a href="policies.php" class="<?php echo menuKlass('policies') ?>"><i class="icon icon-people"></i> Policies & Grading</a>
            </li>

            <li class="menu-item">
              <a href="setup.php" class="<?php echo menuKlass('setup') ?>"><i class="icon icon-shutdown"></i> Setup</a>
            </li>

            <li class="menu-item">
              <a href="advanced-setup.php" class="<?php echo menuKlass('advanced-setup') ?>"><i class="icon icon-shutdown"></i> Advanced Setup</a>
            </li>

            <li class="menu-item">
              <a href="gitlab.php" class="<?php echo menuKlass('gitlab') ?>" style="padding-left: 27px;"><img src="images/gitlab-icon-1-color-black-rgb.svg" width="36" style="position: absolute;left: -2px;top: -1px;"> Gitlab</a>
            </li>

            <li class="divider" data-content="Class"></li>

            <li class="menu-item">
              Raven 212<br/>Tuesday 1:00 - 5:00
            </li>

            <li class="divider" data-content="Office"></li>

            <li class="menu-item">
              Raven 108B<br/>Tuesday 11:00 - 1:00<br/>Tuesday 5:00 - 6:00
            </li>

            <li class="divider" data-content="Contact"></li>

            <li class="menu-item">
              <a href="mailto:info@yosuke.ca"><i class="icon icon-mail"></i> info@yosuke.ca</a>
            </li>

          </ul>
        </div>
        <div class="column col-9 col-sm-12" id="content">
