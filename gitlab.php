<?php
  $title = "Gitlab";
  $subtitle = "How to submit assignments like a pro";
?>

<?php include 'partials/header.php'; ?>

<h2>Gitlab</h2>

<p>IMPORTANT! Once you have a Gitlab account you'll need to send my your username/email so that I can add you to various groups and repos</p>

<p>There will be two groups that you need to be aware of:</p>
<ol>
  <li>The <strong>class group</strong>. This will contain all the repos for each week including assignments and code, it is intended to be a read-only repo and no assignments should be posted directly here. Everyone from the class should have access to this group.</li>
  <li>Your <strong>student group</strong> This is a private group that should only have two users (student and instructor). This is where you'll post your assignments and I'll be able to make comments and review things.</li>
</ol>

<p>Here is the expected workflow:</p>

<ul>
  <li>For your weekly assignments you'll go to our <strong>class group</strong> and find the repo for the current week <a href="https://gitlab.com/img240">https://gitlab.com/img240</a></li>
  <li>From there you'll <code>fork</code> the repo into your <strong>student group</strong>, the url will look like<br/><code>https://gitlab.com/img240-[student-name-goes-here]</code></li>
  <li>You can then pull that down to your local computer, make changes, commit them, and push them back up to your <strong>student repo</strong></li>
  <li>I'll then be able to review your work, post comments, and assess your work.</li>
</ul>


<?php include 'partials/footer.php'; ?>