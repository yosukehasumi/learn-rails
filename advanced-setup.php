<?php
  $title = "Advanced Setup";
  $subtitle = "For anyone that wants to setup our perfect environment on their own computers";
?>

<?php include 'partials/header.php'; ?>

<h2>Advanced Setup</h2>

<p>If you want to get everything setup on your own computer and not have to use docker at all. The following instructions are meant for OSX users.</p>

<ul>
  <li>Ruby version - 2.5.3</li>
  <li>Rails version - 5.2.2</li>
  <li>Bundler version - 1.17.3</li>
  <li>MYSQL version - 5.7</li>
</ul>

<h3>Homebrew</h3>

<p>Homebrew is a package manager that will assist in installing various packages. I highly recommend installing Homebrew because it makes much of the folling setup infinitely easier.</p>

<p>Head to <a href="https://brew.sh/">https://brew.sh/</a> and you'll see instructions one how to install Homebrew</p>

<p>Install homebrew by entering this into your terminal:
  <pre class="code"><code>/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
</code></pre>
</p>

<p>Check that Homebrew is installed successfully by typing <code>brew -v</code>, you should see something like: <pre class="code"><code>Homebrew 1.8.6
Homebrew/homebrew-core (git revision 2c00; last commit 2018-12-18)
</code></pre></p>

<h3>RBENV</h3>

<p>To get the correct Ruby version installed on your computer you'll want to use some sort of Ruby version manager like RBENV or RVM (I personally use RBENV so that's what I'll show you here)</p>

<p>Head over to <a href="https://github.com/rbenv/rbenv#installation">https://github.com/rbenv/rbenv#installation</a></p>

<p>
  <ol>
    <li>Install rbenv - <code>brew install rbenv</code></li>
    <li>Set up rbenv in your shell. - <code>rbenv init</code></li>
    <li>Close your Terminal window and open a new one so your changes take effect.</li>
    <li>Verify that rbenv is properly set up using this rbenv-doctor script - <code>curl -fsSL https://github.com/rbenv/rbenv-installer/raw/master/bin/rbenv-doctor | bash</code></li>
  </ol>
</p>

<h3>Ruby</h3>

<p>Installing the correct Ruby version should be easy if you've got RBENV installed correctly.</p>

<p><code>rbenv install 2.5.3</code> should install 2.5.3 for you.</p>

<p>Set 2.5.3 to be your global Ruby version by typing <code>rbenv global 2.5.3</code></p>

<p>Now typing <code>ruby -v</code> should show something like: <pre class="code"><code>ruby 2.5.3p105 (2018-10-18 revision 65156) [x86_64-darwin17]
</code></pre></p>

<h3>Rails</h3>

<p>Now that you have the correct Ruby version let's install Rails by typing <code>gem install rails -v 5.2.2</code></p>

<h3>Bundler</h3>

<p>Bundler is responsible for installing various gems into our Rails application, but we should make sure that we are using the same bundler version. <code>gem install bundler -v 1.17.3</code></p>

<h3>MYSQL</h3>

<p>You may not have to do this step! Depending on the age of your mac and the OSX version installed on your computer you may already have the correct version of MYSQL installed. This may be the most challenging part of this setup. We need to somehow ensure that MYSQL is running on your computer and is listening to port 3306.</p>

<p>I've installed MYSQL using Homebrew by typing <code>brew tap homebrew/services</code> then <code>brew install mysql@5.7</code> now if you type <code>brew services list</code> you should see <code>mysql@5.7</code> listed there.</p>

<p>You can start/stop MYSQL by typing <code>brew services start mysql@5.7</code> and ensure that the mysql version is correct <code>mysql -V</code></p>

<p>Here's a helpful article that might give you some clues on installing MYSQL using Homebrew <a href="https://gist.github.com/operatino/392614486ce4421063b9dece4dfe6c21">https://gist.github.com/operatino/392614486ce4421063b9dece4dfe6c21</a></p>

<p> </p>

<?php include 'partials/footer.php'; ?>
