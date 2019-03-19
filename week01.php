<!--
  Introduce myself

  Introduce students
    - name
    - from
    - why IMG?
    - future aspirations?

  Course outline
  Policies and Grading
  Setup Docs
  Final Project
  How to contact


  Why ruby
  Where it's taken me
  What I'm building right now
  Where I'm going with this?
  Things I can offer
    - Industry standards
    - Things I never learned in school
    - How to find your first job
    - How to value yourself

  Get emails
  Get everyone signed up to Gitlab
  Why git
  gitlab workflow
  Go through git exercises
  Practice practice practice

  Why Docker
  learn command line
  cd, ls -al, pwd, whomai, mkdir, mv, rm, etc
  Go through docker

  do some irb stuff
-->
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
    <li>Head to the weekly assignment repo and find the <code>fork</code> button. Make sure you for this into your <code>img240-YOURNAME</code> group</li>
    <li>"Remove fork relationship" on this repo by going to <code>Settings->General->Advanced</code> (We've found a bug in Gitlab that doesn't allow you to create merge requests on your own repo if a fork relationship is present).</li>
    <li>Clone your freshly forked repo to your local computer using <code>git clone <REPO URL></code></li>
    <li>Create a new branch called <strong>develop</strong> <code>git branch develop</code></li>
    <li>Checkout the new branch as our working copy <code>git checkout develop</code></li>
    <li>Now you can make your changes and begin working on your assignment</li>
    <li>After making a few changes you'll want to commit these changes to version control <code>git add .</code> followed by <code>git commit -m '<YOUR MESSAGE>'</code></li>
    <li>When you want to push those commits up to your repo you can <code>git push origin develop</code></li>
    <li>Now you can create a merge request source: <code>develop</code> to target: <code>master</code></li>
  </ol>
</p>

<div class="columns">
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://www.sitepoint.com/history-ruby/">The History of Ruby</a></li>
          <li><a href="https://medium.freecodecamp.org/object-oriented-programming-concepts-21bb035f7260">How to explain object-oriented programming concepts to a 6-year-old</a></li>
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
        <p><a href="https://gitlab.com/img240/week-1">https://gitlab.com/img240/week-1</a></p>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
