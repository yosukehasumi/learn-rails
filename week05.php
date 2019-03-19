<?php
  $title = "Week 5";
  $subtitle = "Learning to fall gracefully";
?>

<?php include 'partials/header.php'; ?>

<h2>Partials</h2>

<p>We have some duplicate code, this is bad practice since it makes it hard to update code, we are left hunting around our application for chunks of code. Instead let's try to be DRY and use some intelligent partials to keep things nice in tidy in our "Mint" application.</p>

<h2>Validations</h2>

<p>Let's add some of those validations into last weeks "Mint" application. Validations are a quick way to ensure that your data remains consistent and goes a long way in making sure that your application continues to work happily.</p>

<h2>Error Messages</h2>

<p>We need to take a quick moment to discuss how flash messages and error messages work and why they are so wonderful.</p>

<h2>Relations</h2>

<p>We will be adding a category relationship to our "mint" project so that we can assign "transactions" a "category". We will begin to see the power of database relations here, it will enable us to view our data much more powerfully.</p>

<h2>Log files</h2>

<p>Log files are invaluable for developing and maintaining a happy application. We should discuss: </p>
<p><code>log/production.log</code> - When we deploy and application where our <code>RAILS_ENV=production</code> our log files will be written here</p>
<p><code>log/development.log</code> - During development and our application environment is <code>RAILS_ENV=development</code>, this is generally my most heavily referenced log file</p>
<p><code>log/test.log</code> - When running automated tests our test suite will output here</p>
<p>The easiest way to read log files is by running the <code>tail</code> command (with the "follow" option) in terminal, something like <code>tail -f log/development.log</code> should do it</p>

<div class="columns">
  <div class="column col-12">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://www.youtube.com/watch?v=bpeqyVkbMGs">https://www.youtube.com/watch?v=bpeqyVkbMGs</a></li>
          <li><a href="http://railscasts.com/episodes/279-understanding-the-asset-pipeline?autoplay=true">http://railscasts.com/episodes/279-understanding-the-asset-pipeline?autoplay=true</a></li>
          <li><a href="https://sass-lang.com/guide">https://sass-lang.com/guide</a></li>
          <li><a href="https://www.sitepoint.com/what-is-coffeescript-all-about/">https://www.sitepoint.com/what-is-coffeescript-all-about/</a></li>
          <li><a href="https://www.keycdn.com/support/ajax-programming">https://www.keycdn.com/support/ajax-programming</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<br/>

<div class="columns">
  <div class="column col-12">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Weekly Assignment</h5></div>
      </div>
      <div class="panel-body">
        <strong>Submit a proposal for your final project</strong>
        <ul>
          <li><a href="https://gist.github.com/yosukehasumi/5e198ffac432221f83e4b586e4b77e5f">Assignment 5</a></li>
          <li>See details & requirments <a href="final-project.php">here</a></li>
          <li><a href="https://gist.github.com/yosukehasumi/2f2ee3b784e99d8ac2e0d78ddfd8c6de">Project Proposal</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
