<h2>Welcome to MVC-Mini index controller</h2>


<h3>How to install Mini</h3>

<h4>Download</h4>

You can download Mini from github. Use <b>gitbash</b> to download the framework;

<b>git clone git://github.com/Turaa/Mini.git</b>

You can review its source directly on github: <b>https://github.com/Turaa/Mini</b>

<h4>Installation</h4>

Open the <b>.htaccess</b> file with a text editor (Example JEdit). <b>.htaccess</b> is located in your root-folder,
<br>change the address <i>(RewriteBase /~tutu13/Test/)</i> to your installation.
<p>
Upload the MVC-Mini to your server by using a ftp-program. (Example FileZilla).
<p>
Make the data-directory <b>writeable</b>. This is the place where Mini needs to be able to write and create files.  
Easiest way to do this is to do it in your ftp-program. (Example FileZilla).
Right-click on the folder "data" in <b>site/data</b> 
<br>and change <b>file permissions</b> to <b>777</b>. <b>Make sure to change the .sqlite file in "data" to 777 too.</b>
<p>

Finally, Mini has some modules that need to be initialised. Visit your framework in your 
<br>webbrowser and point your browser to the following link; <b>module/install.</b>

<h3>How to modify</h3>

Open the file config in <b>site/config.php</b> in a text editor (Example JEdit).

At the bottom you will find; <b>header, slogan, favicon, logo, footer</b> etc. Edit the file to suit your needs. 
<br>If you choose to change the logo you will find the image source in <b>site/themes/mytheme</b>.
 
<p>A bit further up in <b>site/config.php</b> you will find the <b>navigationbar</b>. (Look for Define menus). 
<br>To make a new page - add a line at the end of 'my-navbar' => array(

<i>Example; 'content' => array('label'=>'Content', 'url'=>'content'),</i>


To change the look of your framework - go to <b>site/themes/mytheme/style.css</b>

<h3>To log in</h3>
<b>Username: root
<br>Password: root
<br></b>
or
<br><b>
Username: doe
<br>Password: doe</b>


<h3>How to create a blog post</h3>

Open your framework in your webbrowser
Click on "<b>Blog</b>", choose "<b>Edit</b>" and then "<b>Create new</b>". 
<br>It's good to keep following in mind when you fill out the form;

<b>Title</b> - A title for the entry (example "My first Blog Post").
<br><b>Key</b> - Usually a version of title, without whitespaces and capital letters (example "my-first-blog-post").
<br><b>Content</b> - The actual content of the page.
<br><b>Type</b> - For blog posts you should set this to 'post', and 'page' when creating new pages.

<b>Filter - You can choose between the following;</b>
<br><i><b>plain</b> - Should be used when no markup is required.
<br><b>htmlpurify</b> - This alternative accepts HTML, but removes code that might be harmfull.
<br><b>bbcode</b> - Used in some forums and has some basic formatting options.</i>

<h3>How to create a new page</h3>

Open your framework in your webbrowser
Click on "<b>About me</b>", choose "<b>edit</b>" and then "<b>Create new</b>", fill out the form exactly as when creating a blog post, 
but remember to set the field "<b>Type</b>" to "<b>page</b>".

<h5>Good Luck with installing MVC-Mini!</h5>
