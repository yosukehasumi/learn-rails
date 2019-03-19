<?php
  $title = "Setup";
  $subtitle = "Time to get your ducks in a row";
?>

<?php include 'partials/header.php'; ?>

<h2>Docker</h2>

<p>Ruby can run on Mac, Windows, Linux, BSD and many more systems, but each one has its quirks and it's easy to waste a ton of time configuring things.</p>

<p>In an attempt to make things easier for this class we'll be using a containerized environment to run all the code you write. This container will let you run all the Ruby code you write within a nicely-configured Ubuntu Linux environment. It should work the same on Mac or Windows.</p>

<p>This will allow us to all use a very similiar base configuration to avoid the necessity to debug nuances found within each computer.</p>

<p>There are various ways to deal with different environment configurations but for this course we will be using an application called <strong>Docker</strong> (<a href="https://www.docker.com/products/docker-desktop">https://www.docker.com/products/docker-desktop</a>). Docker is capable of create a "container" that can run it's own operating system separate from the host computer. I suggest learning more on Docker outside of this course as it has become a heavy player in the web industry.</p>

<p>Just download the app and install it. Installation is simple but may require your computers root password. Also if you want to access a repo containing a library of different pre-configured and ready-to-install environments you'll need to create an account with Docker.</p>

<p>I've created a simple script that will create everything necessary for this course, simply follow the instructions at <a href="https://github.com/yosukehasumi/docker-rails-mysql">https://github.com/yosukehasumi/docker-rails-mysql</a></p>

<p>Some Docker Tips:</p>

<p>
  <ol>
    <li><code>docker exec -it img240 /bin/bash</code> To open a terminal on your docker virtual machine</li>
    <li><code>docker-compose up -d</code> Initialize a virtual machine if you haven't done this before</li>
    <li><code>docker container ls</code> Will show your running virtual machines</li>
    <li><code>docker-compose stop</code> Will stop your virtual machine</li>
    <li><code>docker-compose start</code> Will start your virtual machine</li>
  </ol>
</p>

<strong>Web</strong>

<p>You should now see your app running at <a href="http://localhost:3000">http://localhost:3000</a>.</p>

<strong>Start Your Docker Container</strong>

<p>start your docker container by typing: <code>docker-compose up -d</code> where your <code>docker-compose.yml</code> file is located</p>

<strong>Log into the Docker Container</strong>

<p>If you need to get a command line prompt inside your container run <code>docker exec -it img240 /bin/bash</code>.</p>

<p>You can run <code>IRB</code> inside your docker container by simply typing <code>irb</code></p>

<strong>Rails Console</strong>

<p>If you need to use Rails console use the command <code>docker exec -it img240 bundle exec rails console</code>.</p>

<strong>Logs</strong>

<p>You can find your app logs in the <code>log</code> directory. Try <code>tail -f log/development.log</code> to output a running logfile of your application.</p>

<strong>MYSQL</strong>

<p>
  Connect your MYSQL client to your development database
<pre class="code"><code>host: 127.0.0.1
user: root
pass: root
port: 3306
</code></pre>
</p>

<h2>GIT</h2>

<p>GIT versioning is pretty much industry standard now and becoming familiar with it is vital when working within a development team.</p>

<p>Installation is simple and using it can be daunting if you aren't familiar with command line. Thankfully there are a ton of different GIT clients available that help make using git a bit more enjoyable. I would however suggest learning GIT command line to start as it gives you some base knowledge about how it works.</p>

<p>Installation is simple (<a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">https://git-scm.com/book/en/v2/Getting-Started-Installing-Git</a>)</p>

<p>We will be using GitLab to share, collaborate, and post assignments so make sure you have a <a href="https://gitlab.com/">GitLab</a> account</p>

<h2>Adding SSH keys to Gitlab</h2>

<ul>
  <li>Copy your private ssh key from your host computer to the docker workspace <code>cp ~/.ssh/id_rsa YOUR/DOCKER/WORKSPACE</code></li>
  <li>Move your private ssh key from your docker workspace to the docker user's ssh directory <code>mv /workspace/id_rsa ~/.ssh/</code></li>
  <li>Copy your key to Gitlab by opening up your public key in a text editor, select the entire string and paste it into the text area here <a href="https://gitlab.com/profile/keys">https://gitlab.com/profile/keys</a></li>
</ul>

<h2>Ruby</h2>

<p>Let's be bold and use the latest Ruby version (2.5.3). This will be preinstalled on in your Docker container but as a caveat to this I highly recommend using Ruby Versioning so that you can quickly and easily change Ruby version depending on the project you are working on. Checkout <strong>RBENV</strong> (<a href="https://github.com/rbenv/rbenv">https://github.com/rbenv/rbenv</a>) or <strong>RVM</strong> (<a href="https://rvm.io/">https://rvm.io/</a>)</p>

<h2>Rails</h2>

<p>Ruby on Rails had a major version update from 4 to 5 recently. This has cause a few applications to require some reworking as Rails 4 code and 5 code has some subtle but important differences. Knowing the exact differences is less important than knowing that they exist. For this course we will use Ruby on Rails 5.2.2</p>

<h2>Database</h2>

<p>I think by now you are familiar with some <strong>MYSQL</strong>. For this course we will stick with MYSQL as it has some advantages especially when it comes to how heavilty it has been adopted by the web industry. However there are many other databases out there and each has it's own unique advantages and disadvantages so be aware that the most heavily used tool may not necessarily be the most practical in all scenarios.</p>

<h2>Heroku</h2>

<p>Deploying Rails applications up onto a remote server can be a bit of a process. There are many tools available to help with this including Docker. By far the best service I've worked with so far has been <strong>Heroku</strong> (<a href="https://www.heroku.com/">https://www.heroku.com/</a>). Make sure you have a Heroku account so that we can deploy our applications.</p>

<?php include 'partials/footer.php'; ?>
