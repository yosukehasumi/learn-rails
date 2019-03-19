<?php
  $title = "Week 6";
  $subtitle = "Making our app more classy";
?>

<?php include 'partials/header.php'; ?>

<h2>Bundler</h2>

<p>Bundler provides a consistent environment for Ruby projects by tracking and installing the exact gems and versions that are needed.</p>

<p>Bundler is an exit from dependency hell, and ensures that the gems you need are present in development, staging, and production. Starting work on a project is as simple as <code>bundle install</code>.</p>

<h2>The Front End</h2>

<p>Now that we've implemented some backend logic that can show, create, update, and destroy data including flash messages and validation; we should probably make our pages look cleaner. Nobody wants to look at lame HTML after all.</p>

<p>Of course when you start developing big web applications there's some real challenges making everything work fast and smooth so Rails comes with some pre-built tools that allow us to compile and cache our styles and scripts efficiently.</p>

<p>This is where we should understand the inner workings of the the "Asset Pipeline". In a nutshell it'll take all your styles and scripts, mashes them together into one CSS file and one JS file, appends a version number, and delivers it to the browser.</p>

<p>This avoids the browser making several HTTP requests into a single one, it also safely removes unneccesary whitespaces (minifying) so that your files are much much smaller. Lastly with a unique filename your browser is able to intelligently cache the file so that it never has to be requested again!</p>

<p>So many pros! However, there are downfalls with the Asset Pipeline in that it makes things a bit more confusing. It means that sometimes moving from one environment like development to another like production can be more complicated, but remember the benefits of it far outweigh the cons.</p>

<h2>CSS & SCSS</h2>

<p>In this class we will get acquainted with SASS/SCSS for writing some beautiful CSS code.</p>

<p>Additionally we will implement a CSS framework to give us a head start.</p>

<h2>Javascript</h2>

<p>We will need to get familiar with Javascript to make our web pages much more dynamic and user friendly.</p>

<h2>Making Models more powerful</h2>

<p>Today we will add some clever methods to our models so that we can add more functionality to our applications</p>

<div class="columns">
  <div class="column col-12">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Resources</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://guides.rubyonrails.org/">https://guides.rubyonrails.org/</a></li>
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
        <div class="panel-title"><h5>Midterm Exam</h5></div>
      </div>
      <div class="panel-body">
        <ul>
          <li><a href="https://gist.github.com/yosukehasumi/bf682fa069ea61b9d2c03ff75443cd3e">Assignment 6 (Not required to be handed in)</a></li>
          <li>Start your Midterm Project</li>
          <li>I'll be marking your project when you return (Feb 26)</li>
          <li><a href="https://gist.github.com/yosukehasumi/43d1ffb05db4bb6fee1eea5d4f111c1c">https://gist.github.com/yosukehasumi/43d1ffb05db4bb6fee1eea5d4f111c1c</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>


