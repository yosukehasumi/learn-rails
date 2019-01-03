<?php
  $title = "Week 1";
  $subtitle = "Intro to Ruby, intro to git, setting up your development environment, Gitlab, IRB, where to look things up.";
?>

<?php include 'partials/header.php'; ?>

<h2>Setting up Docker</h2>

<p>We will be using a containerized system for running our web apps. The tools necessary for this are Docker. This is meant to standardize all of our various environment variables so that we can all have a uniform point to begin from.</p>

<p>First step in the process if you're attempting to work on this from your own computers is to install Docker.</p>

<p>Once you have Docker installed and happily running on your computer you can have a look at the <a href="setup.php">setup</a> docs to complete your rails setup.</p>

<h2>Gitlab</h2>

<p>Make sure you have a Gitlab (<a href="https://gitlab.com/">https://gitlab.com/</a>) account. We will be running this class as though you are part of a real-world development team. Each week you'll fork a repo make adjustments, add files, submit pull requests, manage issues, etc. The account is free and building up your Gitlab account can go a long way in being able to impress upon potential employers.</p>

<h2>Where to look things up</h2>

<p>Ruby Docs (<a href="http://ruby-doc.org">http://ruby-doc.org</a>) is a great place to start. Besides that of course there's the love-to-hate Stack Overflow (<a href="https://stackoverflow.com/">https://stackoverflow.com/</a>) where you can find real-world scenarios and advice but remember to take all this with a grain of salt since there can be a lot of garbage in there too.</p>

<h2>Ruby</h2>

<p>We will start with a standalone Ruby script instead of a full-blown Rails application. This will allow us to get down to the nitty gritty of a single file and start working on some good coding practices.</p>

<h2>GIT</h2>

<p>
  <ol>
    <li>Head to the weekly assignment repo and find the "fork" button. This will create a copy of this weeks assignment repo into your own repo.</li>
    <li>Clone your freshly forked repo to your local computer using <code>git clone <REPO URL></code></li>
    <li>Create a new branch called <strong>develop</strong> <code>git branch develop</code></li>
    <li>Checkout the new branch as our working copy <code>git checkout develop</code></li>
    <li>Now you can make your changes and begin working on your assignment</li>
    <li>After making a few changes you'll want to commit these changes to version control <code>git add .</code> followed by <code>git commit -m '<YOUR MESSAGE>'</code></li>
    <li>When you want to push those commits up to your repo you can <code>git push origin develop</code></li>
    <li>Finally we can make a <strong>merge request</strong> by clicking on the merge request button in gitlab, source will be <strong>develop</strong> and the target will be <strong>master</strong></li>
  </ol>
  <small>You'll be quizzed on this workflow, make sure you understand this workflow. You'll see it commonly in the workplace!</small>
</p>


<h2>Intro to Command line</h2>

<p>Command line is your friend! Let's get you familiar with using your keyboard instead of you mouse. On OSX you'll need to open <strong>terminal</strong>, this will give you console to your computer.</p>

<p>First we will need to log into our Docker machine by entering <code>docker exec -it img240 /bin/bash</code></p>

<p>Your prompt should look a bit different now, we can see that it now looks like <code>root@123456789:/workspace#</code>, or something simliar.</p>

<p>You can now navigate around this container as you would any production server! Type in <code>irb</code> to start an Interactive Ruby console.</p>

<h2>IRB</h2>

<p>Let's go through a few steps here: <a href="https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d">https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d</a></p>

<div class="columns">
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Weekly Quiz</h5></div>
      </div>
      <div class="panel-body">
        <p>No quiz this week, lucky you</p>
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
        <p><a href="https://gitlab.com/img240/week-1">https://gitlab.com/img240/week-1</a></p>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>