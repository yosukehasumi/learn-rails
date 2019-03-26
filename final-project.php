<?php
  $title = "Final Project";
  $subtitle = "Make a real thing that does things";
?>

<?php include 'partials/header.php'; ?>

<p>This project is meant to be a real-world project. The decisions you make in building it should reflect the decisions you'd make if you were doing this for hire, or for a company, or for your own product.</p>

<p>That said, there are a few things you must include. These are detailed below.</p>

<p>
	Your mark for the project will be based on:
  <ul>
    <li>how it actually works</li>
    <li>whether it has all the required elements (below),</li>
    <li>whether your code is clear, easy to read, and follows the Ruby style guidelines noted below</li>
  </ul>
</p>

<h2>Required Elements</h2>

<h4>Managing Data</h4>

<ul>
  <li>Add model validations – all fields that need validations should have them (use some other than just <code>:presence</code>).</li>
  <li>Use model scopes for common queries – you should have at least one.</li>
  <li>Have at least two join relationships.</li>
  <li>Have at least one class that doesn’t inherit from ActiveRecord.</li>
</ul>

<h4>Controllers and Routing</h4>

<ul>
  <li>Make a nice homepage that sells (or nicely explains) why someone should use your app. Your homepage should draw in data from at least one model.</li>
  <li>Use <code>:except</code> or <code>:only</code> to limit your routes to the ones that are implemented.</li>
  <li>Use the <code>flash</code> after modifying data. All messages should come from your <code>locale</code> file.</li>
  <li>All data coming from users should be filtered using <code>permit</code>/<code>require</code>.</li>
  <li>Use <code>before_action</code>, <code>private</code> and <code>helper_method</code> where appropriate.</li>
</ul>

<h4>Views</h4>

<ul>
  <li>Display <code>flash</code> messages.</li>
  <li>Use partials where appropriate.</li>
  <li>Use helpers for any view code that isn't extremely simple.</li>
  <li>Have at least one CRUD form.</li>
</ul>

<h4>Front End</h4>

<p>Add CSS and HTML to make your app look nice. You can go as far as you wish with this – the only requirement is that it doesn’t just look like a mess of unstyled HTML. Use any CSS frameworks you like. Some starting points:</p>

<ul>
  <li>Spectre (<a href="https://picturepan2.github.io/spectre/index.html">https://picturepan2.github.io/spectre/index.html</a>)</li>
  <li>Skeleton (<a href="http://getskeleton.com/">http://getskeleton.com/</a>)</li>
  <li>Groundwork (<a href="http://groundworkcss.github.io/">http://groundworkcss.github.io/</a>)</li>
  <li>Bootstrap (<a href="http://getbootstrap.com/">http://getbootstrap.com/</a>)</li>
  <li>Gumby (<a href="http://gumbyframework.com/">http://gumbyframework.com/</a>)</li>
  <li>Materialize (<a href="http://materializecss.com/">http://materializecss.com/</a>)</li>
  <li>Pure.css (<a href="http://purecss.io/">http://purecss.io/</a>)</li>
  <li>Chopstick (<a href="http://getchopstick.com/">http://getchopstick.com/</a>)</li>
</ul>

<h4>General</h4>

<p>these are negotiable – we'll agree on them when we discuss your project</p>

<ul>
  <li>Allow user sign ups and sign ins - signed in users should have access to personalized content.</li>
  <li>Use at least one gem that doesn’t come with Rails.</li>
  <li>Integrate with at least one external API – somewhere you either push data, or pull data, or both.</li>
  <li>Make your app deploy successfully to Heroku. Document the steps required in your README file.</li>
</ul>

<h4>Style Guidelines</h4>

<ul>
  <li>Use modern Ruby syntax for hashes (e.g. <code>key: 'value'</code> instead of <code>:key => 'value'</code>) whenever possible.</li>
  <li>Indent your code with two spaces. Make sure your indenting is appropriate. Don't have more than one blank line between blocks of code.</li>
  <li>Make all your methods short and with descriptive names.</li>
  <li>Use options/parameter hashes for methods where it makes sense.</li>
  <li>Commit in git regularly (after completing each feature is usually good) with informative commit messages.</li>
  <li>Keep your controllers and views as simple as possible. Offload complexity to helpers or custom classes.</li>
</ul>

<?php include 'partials/footer.php'; ?>
