<!--
  Go over the gitlab changes
    - show a couple examples of me actually doing it
  Go over docker and what it does make sure everyone understands
    - doodle on the board so that everyone gets it



-->
<?php
  $title = "Week 2";
  $subtitle = "Ruby Object Oriented Programming Mode: On";
?>

<?php include 'partials/header.php'; ?>

<h2>Intro to Command line</h2>

<p>Command line is your friend! Let's get you familiar with using your keyboard instead of you mouse. On OSX you'll need to open <strong>terminal</strong>, this will give you console to your computer.</p>

<p>First we will need to start your Docker machine by entering <code>docker-compose up -d</code></p>

<p>Now we can log into our Docker machine by entering <code>docker exec -it img240 /bin/bash</code></p>

<p>Your prompt should look a bit different now, we can see that it now looks like <code>root@123456789:/workspace#</code>, or something simliar.</p>

<p>You can now navigate around this container as you would any production server! Type in <code>irb</code> to start an Interactive Ruby console.</p>

<h2>Part 1: Intro to Ruby</h2>

<p>Let's go through a few steps here: <a href="https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d">https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d</a>. Let's go till "<strong>Ruby Object Oriented Programming Mode: On</strong>"</p>

<h2>Part 2: Intro to Object Oriented Programming</h2>

<p>We will dive back into <a href="https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d">https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d</a> starting from <strong>Ruby Object Oriented Programming Mode: On</strong></p>

<h2>In-class exercise</h2>

<ul>
  <li>Create a class called <code>Car</code></li>
  <li>When you initialize a new instance or object of the class, allow the user to define some instance variables that tell us the year, color, and model of the car</li>
  <li>Create an instance variable called <code>current_speed</code> that is set to <code>0</code> during instantiation of the object to track the current speed of the car</li>
  <li>Create instance methods that allow the car to speed up, brake, and shut the car off</li>
</ul>

<div class="columns">
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://www.youtube.com/watch?v=3mQjtk2YDkM">Rails MVC</a></li>
          <li><a href="https://guides.rubyonrails.org/getting_started.html">Getting Started With Rails (sections 1-4)</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Weekly Assignment</h5></div>
      </div>
      <div class="panel-body">
        <p><a href="https://gitlab.com/img240/week-2">https://gitlab.com/img240/week-2</a></p>
        <p>Next week you'l have a quiz on "Intro to Ruby" & "Intro to Object Oriented Programming" concepts</p>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
