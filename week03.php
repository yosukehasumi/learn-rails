<!--
  Quiz
  10 - 20 minutes (I hope)

  Chat about
    - MVC
    - HTTP requests and how they work
    - Ports

  Rails languages
    - Ruby
    - Yaml
    - Coffeescript
    - Sass

  Build a rails app
-->
<?php
  $title = "Week 3";
  $subtitle = "Hear me ROR - Intro to Ruby on Rails";
?>

<?php include 'partials/header.php'; ?>

<h2>Intro to Rails</h2>

<p>Let's set some things up to start building some real apps. A new Ruby on Rails application can be built simple through command-line by typing <code>rails new PROJECT_NAME --database=mysql</code> (note we will use the <code>database</code> flag to define the type of database we want to initialize the project with). This will create a series of files and directories for us to start implmenting logic into.</p>

<p>Some basic things we should understand about Rails is the directory structure, where everything goes, and what everything does. Furthermore we can implment all sorts of powerful and useful components into our application to leverage countless hours of work that others have already done for us.</p>

<p>This gets us into the MVC framework, let's take a moment to go over this <a href="https://medium.com/the-renaissance-developer/ruby-on-rails-http-mvc-and-routes-f02215a46a84">https://medium.com/the-renaissance-developer/ruby-on-rails-http-mvc-and-routes-f02215a46a84</a></p>

<h2>Databases</h2>

<p>ActiveRecord does a fantastic job in wrapping all of our complex queries into a more standarized syntax. The bonus of this is that we can easily pick and choose with type of database we want to work with. Out of the box Rails typically will use SQlite, which is extremely useful in getting started quickly as well as having a portable database. However there is a much to desired from this type of database and when the size of your data gets into gigabytes worth of size I wouldn't really consider it very portable anyway. So instead for this class we will be using MYSQL since it's a well used and common database with enough functionality for everything we will want to cover in this class.</p>

<p>In order to connect your application to our Docker MYSQL container you'll need to update the <code>config/database.yml</code> with:
<pre class="code"><code>default: &default
  adapter: mysql2
  encoding: utf8
  pool: 5
  username: root
  password: "root"
  host: mysql

development:
  <<: *default
  database: dev

test:
  <<: *default
  database: dev
</code></pre>
</p>

<p>Now to setup your database you'll need to run <code>bin/rails db:create db:migrate</code></p>

<h2>Bundler</h2>

<p>How about those useful components that I mentioned earlier? Check out <a href="https://rubygems.org/">https://rubygems.org/</a>. This is a great library of components (called "Gems") that we can easily drop into our Rails application. There are several ways to do this but by far the most practical and common method is using <a href="https://rubygems.org/gems/bundler">Bundler</a>.</p>

<p>This allows us to drop the gem name into our Gemfile and run <code>bundle install</code> to download and install the component and it's dependancies onto your machine so that your application can use it later.</p>

<h2>Run your application!</h2>

<p><code>rails server</code></p>

<div class="columns">
  <div class="column col-6">
    <div class="panel">
      <div class="panel-header">
        <div class="panel-title"><h5>Required Reading</h5></div>
      </div>
      <div class="panel-body">
        <a href="https://edgeguides.rubyonrails.org/getting_started.html#getting-up-and-running">Getting Up and Running (Sections 5.1, 5.2, 5.3, 5.4, 5.6)</a>
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
        <p><a href="https://gitlab.com/img240/week-3">https://gitlab.com/img240/week-3</a></p>

        Additional resources

        <ul>
          <li><a href="https://guides.rubyonrails.org/command_line.html">The Rails Command Line</a></li>
          <li><a href="https://guides.rubyonrails.org/active_record_querying.html">Active Record Query Interface</a></li>
          <li><a href="https://guides.rubyonrails.org/routing.html">Rails Routing from the Outside In</a></li>
          <li><a href="https://api.rubyonrails.org/classes/ActionView/Helpers/UrlHelper.html">ActionView::Helpers::UrlHelper</a></li>
        </ul>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
