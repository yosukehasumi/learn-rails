<?php
  $title = "Week 7";
  $subtitle = "Flex day";
?>

<?php include 'partials/header.php'; ?>

From last missed class...

<blockquote>

  <h4>Bundler</h4>

  <p>Bundler provides a consistent environment for Ruby projects by tracking and installing the exact gems and versions that are needed.</p>

  <p>Bundler is an exit from dependency hell, and ensures that the gems you need are present in development, staging, and production. Starting work on a project is as simple as <code>bundle install</code>.</p>

  <h4>The Front End</h4>

  <p>Now that we've implemented some backend logic that can show, create, update, and destroy data including flash messages and validation; we should probably make our pages look cleaner. Nobody wants to look at lame HTML after all.</p>

  <p>Of course when you start developing big web applications there's some real challenges making everything work fast and smooth so Rails comes with some pre-built tools that allow us to compile and cache our styles and scripts efficiently.</p>

  <p>This is where we should understand the inner workings of the the "Asset Pipeline". In a nutshell it'll take all your styles and scripts, mashes them together into one CSS file and one JS file, appends a version number, and delivers it to the browser.</p>

  <p>This avoids the browser making several HTTP requests into a single one, it also safely removes unneccesary whitespaces (minifying) so that your files are much much smaller. Lastly with a unique filename your browser is able to intelligently cache the file so that it never has to be requested again!</p>

  <p>So many pros! However, there are downfalls with the Asset Pipeline in that it makes things a bit more confusing. It means that sometimes moving from one environment like development to another like production can be more complicated, but remember the benefits of it far outweigh the cons.</p>

  <h4>CSS & SCSS</h4>

  <p>In this class we will get acquainted with SASS/SCSS for writing some beautiful CSS code.</p>

  <p>Additionally we will implement a CSS framework to give us a head start.</p>

  <h4>Javascript</h4>

  <p>We will need to get familiar with Javascript to make our web pages much more dynamic and user friendly.</p>

  <h4>Making Models more powerful</h4>

  <p>Today we will add some clever methods to our models so that we can add more functionality to our applications</p>

</blockquote>

<h2>Final Project Start!</h2>

<p>Today we are going to take some time to go over your final projects proposals and come up with a game plan on how to begin. From this point on we will continue to do some work on the mint project to make it better so that you can use examples from it to apply to your website.</p>

<div class="columns">
  <div class="column col-12">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://github.com/thoughtbot/clearance">https://github.com/thoughtbot/clearance</a></li>
          <li><a href="https://www.youtube.com/watch?v=KADfCLGQWmI">https://www.youtube.com/watch?v=KADfCLGQWmI</a></li>
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
        <ul>
          <li><a href="https://gist.github.com/yosukehasumi/bf682fa069ea61b9d2c03ff75443cd3e">Complete Assignment 6</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>


<?php include 'partials/footer.php'; ?>


