<?php
  $title = "Week 1";
  $subtitle = "Intro to Ruby, intro to git, setting up your development environment, Git, irb, where to look things up.";
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
    <li>Now you can make your changes and begin working on your assignment</li>
    <li>After making a few changes you'll want to commit these changes to version control <code>git add .</code> followed by <code>git commit -m '<YOUR MESSAGE>'</code></li>
    <li>When you want to push those commits up to your repo you can <code>git push origin master</code></li>
    <li>Once you're happy with your changes and want to submit them you will want to create a pull request, go to Gitlab and find the "new pull request" button to submit your changes as a pull request to my original repo.</li>
  </ol>
</p>

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
        <p><a href="https://gitlab.com/img240/week1">https://gitlab.com/img240/week1</a></p>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>