<h1>Index Controller</h1>
<p>Welcome to MVC-Mini index controller.</p>

<h2>Download</h2>
<p>You can download Mini from github.</p>
<blockquote>
<code>git clone git://github.com/Turaa/Mini.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/Turaa/Mini'>https://github.com/Turaa/Mini</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Mini needs
to be able to write and create files. Easiest way to do this is to do it in your ftp-program. (Example FileZilla). Right-click on the folder "data" in site/data
and change file permissions to 777. Make sure to change the .sqlite file in "data" to 777 too.</p>

<p>Second, Mini has some modules that need to be initialised. You can do this through a
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
