<?php
  $title = "Week 8";
  $subtitle = "Devising some Authentication";
?>

<?php include 'partials/header.php'; ?>

<h2>Authentication</h2>

<p>So most of you have some simple user tables that we'd like to shape into some fancy authentication.</p>

<p>There are a few moving pieces we would need implement in order to make authentication work</p>

<ul>
  <li>User Password (encrypted)</li>
  <li>Password reset functionality</li>
  <li>Email system for sending verifications</li>
  <li>Protecting pages via authentication</li>
  <li>Session/cookie storage system to persist authentication throughout pages</li>
  <li>Much more...</li>
</ul>

<p>Implementing all these components could be a lot of work but thankfully people have already created many different gems that do all the heavy lifting for us. Two of my favorite gems for this are Devise and Clearance.</p>

<div class="columns">
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">

      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Weekly Assignment</h5></div>
        <ul>
          <li><a href="https://gist.github.com/yosukehasumi/253eed815d5783e4cbca6b5100e39b19">Assignment 7</a></li>
        </ul>
      </div>
      <div class="panel-body">
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>


