<?php
  $title = "Gitlab";
  $subtitle = "How to submit assignments like a pro";
?>

<?php include 'partials/header.php'; ?>

<h2>Gitlab</h2>

<p>IMPORTANT! Once you have a Gitlab account you'll need to send my your username/email so that I can add you to various groups and repos</p>

<p>There will be two groups that you need to be aware of:</p>
<ol>
  <li>The <strong>class group (IMG240)</strong>. This will contain all the repos for each week including assignments and code, it is intended to be a read-only repo and no assignments should be posted directly here. Everyone from the class should have access to this group.</li>
  <li>Your <strong>student group (IMG240-YOURNAME)</strong> This is a private group that should only have two users (student and instructor). This is where you'll post your assignments and I'll be able to make comments and review things.</li>
</ol>

<p>Here is the expected workflow:</p>

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
    <li>Now you can create a merge request source: <code>develop</code> to target: <code>master</code> (This is considered handing in your assignment)</li>
  </ol>
  <small>You'll be quizzed on this workflow, make sure you understand this workflow. You'll see it commonly in the workplace!</small>
</p>

<?php include 'partials/footer.php'; ?>
