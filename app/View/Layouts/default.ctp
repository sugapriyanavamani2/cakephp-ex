<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>Welcome to OpenShift</title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1504">
  <style type="text/css">
    p.p3 {margin: 0.0px 0.0px 28.0px 0.0px; text-align: justify; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #404040; -webkit-text-stroke: #404040}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #404040; -webkit-text-stroke: #404040}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 18.0px; font: 13.0px Menlo; color: #404040; -webkit-text-stroke: #404040; background-color: #ffffff}
    p.p7 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 18.0px; font: 13.0px Menlo; color: #404040; -webkit-text-stroke: #404040; background-color: #ffffff; min-height: 15.0px}
    p.p8 {margin: 0.0px 0.0px 28.0px 0.0px; text-align: justify; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #404040; -webkit-text-stroke: #404040; min-height: 16.0px}
    p.p10 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #006699; -webkit-text-stroke: #006699; min-height: 16.0px}
    li.li4 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #404040; -webkit-text-stroke: #404040}
    li.li9 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 19.0px; font: 14.0px 'Helvetica Neue'; color: #006699; -webkit-text-stroke: #006699}
    span.s1 {font-kerning: none}
    span.s2 {font: 14.0px 'Helvetica Neue'; font-kerning: none; color: #006699; -webkit-text-stroke: 0px #006699}
    span.s3 {-webkit-text-stroke: 0px #000000}
    span.s4 {font: 14.0px Courier; font-kerning: none; color: #888888; background-color: #ffffff; -webkit-text-stroke: 0px #888888}
    span.s5 {font-kerning: none; color: #006699}
    ol.ol1 {list-style-type: decimal}
    ul.ul1 {list-style-type: disc}
  </style>
</head>
<body>
<h1 style="margin: 0.0px 0.0px 12.5px 0.0px; line-height: 34.5px; font: 25.0px 'Helvetica Neue Light'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Welcome to your Customised CakePHP application on OpenShift Testing Now…..</span></h1>
<h2 style="margin: 0.0px 0.0px 5.7px 0.0px; line-height: 26.2px; font: 19.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">How to use this example application</span></h2>
<p class="p3"><span class="s1">For instructions on how to use this application with OpenShift, start by reading the <a href="http://docs.openshift.org/latest/dev_guide/templates.html#using-the-quickstart-templates"><span class="s2">Developer Guide</span></a>.</span></p>
<h2 style="margin: 0.0px 0.0px 5.7px 0.0px; line-height: 26.2px; font: 19.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Deploying code changes</span></h2>
<p class="p3"><span class="s1">The source code for this application is available to be forked from the <a href="https://www.github.com/openshift/cakephp-ex"><span class="s2">OpenShift GitHub repository</span></a>. You can configure a webhook in your repository to make OpenShift automatically start a build whenever you push your code:<span class="Apple-converted-space"> </span></span></p>
<ol class="ol1">
  <li class="li4"><span class="s3"></span><span class="s1">From the Web Console homepage, navigate to your project</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Click on Browse &gt; Builds</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Click the link with your BuildConfig name</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Click the Configuration tab</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Click the "Copy to clipboard" icon to the right of the "GitHub webhook URL" field</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Navigate to your repository on GitHub and click on repository settings &gt; webhooks &gt; Add webhook</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Paste your webhook URL provided by OpenShift</span></li>
  <li class="li4"><span class="s3"></span><span class="s1">Leave the defaults for the remaining fields — that's it!</span></li>
</ol>
<p class="p3"><span class="s1">After you save your webhook, if you refresh your settings page you can see the status of the ping that Github sent to OpenShift to verify it can reach the server.</span></p>
<p class="p3"><span class="s1">Note: adding a webhook requires your OpenShift server to be reachable from GitHub.</span></p>
<h3 style="margin: 0.0px 0.0px 4.5px 0.0px; line-height: 20.7px; font: 15.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Working in your local Git repository</span></h3>
<p class="p3"><span class="s1">If you forked the application from the OpenShift GitHub example, you'll need to manually clone the repository to your local system. Copy the application's source code Git URL and then run:</span></p>
<p class="p6"><span class="s1">$ git clone &lt;git_url&gt; &lt;directory_to_create&gt;</span></p>
<p class="p7"><span class="s1"></span><br></p>
<p class="p6"><span class="s1"># Within your project directory</span></p>
<p class="p6"><span class="s1"># Commit your changes and push to OpenShift</span></p>
<p class="p7"><span class="s1"></span><br></p>
<p class="p6"><span class="s1">$ git commit -a -m 'Some commit message'</span></p>
<p class="p6"><span class="s1">$ git push</span></p>
<p class="p3"><span class="s1">After pushing changes, you'll need to manually trigger a build if you did not setup a webhook as described above.</span></p>
<h3 style="margin: 0.0px 0.0px 4.5px 0.0px; line-height: 20.7px; font: 15.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Expanding on sample app</span></h3>
<p class="p3"><span class="s1">In order to access the original CakePHP application, you have to remove the app/View/Layouts/default.ctp file which serves as the welcome page and rename the default.ctp.default to default.ctp.<span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s1">It will also be necessary to update your application to talk to your database back-end. The </span><span class="s4">app/Config/database.php</span><span class="s1"> file used by CakePHP was set up in such a way that it will accept environment variables for your connection information that you pass to it. Once an administrator has created a MySQL database service for you to connect with you can add the following environment variables to your deploymentConfig to ensure all your frontend pods have access to these environment variables. Note: the cakephp-mysql.json template creates the DB service and environment variables for you.<span class="Apple-converted-space"> </span></span></p>
<p class="p6"><span class="s1">oc env dc/cakephp-mysql-example DATABASE_SERVICE_NAME=&lt;database service name&gt;</span></p>
<p class="p6"><span class="s1">oc env dc/cakephp-mysql-example DATABASE_ENGINE=mysql</span></p>
<p class="p6"><span class="s1">oc env dc/cakephp-mysql-example DATABASE_NAME=&lt;your created database&gt;</span></p>
<p class="p6"><span class="s1">oc env dc/cakephp-mysql-example DATABASE_USER=&lt;your database user&gt;</span></p>
<p class="p6"><span class="s1">oc env dc/cakephp-mysql-example DATABASE_PASSWORD=&lt;your database user's password&gt;</span></p>
<p class="p8"><span class="s1"></span><br></p>
<p class="p3"><span class="s1">Note: If the database service is created in the same project as the frontend pod, the *_SERVICE_HOST and *_SERVICE_PORT environment variables will be automatically created.<span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s1">You will need to redeploy your application in order to pick up the new environment variables. You can force a deployment by running:<span class="Apple-converted-space"> </span></span></p>
<p class="p6"><span class="s1">oc deploy cakephp-mysql-example --latest</span></p>
<p class="p8"><span class="s1"></span><br></p>
<h2 style="margin: 0.0px 0.0px 5.7px 0.0px; line-height: 26.2px; font: 19.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Managing your application</span></h2>
<p class="p3"><span class="s1">Documentation on how to manage your application from the Web Console or Command Line is available at the <a href="http://docs.openshift.org/latest/dev_guide/overview.html"><span class="s2">Developer Guide</span></a>.</span></p>
<h3 style="margin: 0.0px 0.0px 4.5px 0.0px; line-height: 20.7px; font: 15.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Web Console</span></h3>
<p class="p3"><span class="s1">You can use the Web Console to view the state of your application components and launch new builds.</span></p>
<h3 style="margin: 0.0px 0.0px 4.5px 0.0px; line-height: 20.7px; font: 15.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Command Line</span></h3>
<p class="p3"><span class="s1">With the <a href="http://docs.openshift.org/latest/cli_reference/overview.html"><span class="s2">OpenShift command line interface</span></a> (CLI), you can create applications and manage projects from a terminal.</span></p>
<h2 style="margin: 0.0px 0.0px 5.7px 0.0px; line-height: 26.2px; font: 19.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Development Resources</span></h2>
<ul class="ul1">
  <li class="li9"><span class="s3"><a href="http://docs.openshift.org/latest/welcome/index.html"><span class="s5">OpenShift Documentation</span></a></span></li>
  <li class="li9"><span class="s3"><a href="https://github.com/openshift/origin"><span class="s5">Openshift Origin GitHub</span></a></span></li>
  <li class="li9"><span class="s3"><a href="https://github.com/openshift/source-to-image"><span class="s5">Source To Image GitHub</span></a></span></li>
  <li class="li9"><span class="s3"><a href="http://docs.openshift.org/latest/using_images/s2i_images/php.html"><span class="s5">Getting Started with PHP on OpenShift</span></a></span></li>
  <li class="li9"><span class="s3"><a href="http://stackoverflow.com/questions/tagged/openshift"><span class="s5">Stack Overflow questions for OpenShift</span></a></span></li>
  <li class="li9"><span class="s3"><a href="http://git-scm.com/documentation"><span class="s5">Git documentation</span></a></span></li>
</ul>
<h2 style="margin: 0.0px 0.0px 5.7px 0.0px; line-height: 26.2px; font: 19.0px 'Helvetica Neue'; color: #000000; -webkit-text-stroke: #000000"><span class="s1">Request information</span></h2>
<p class="p3"><span class="s1">Page view count: execute('create table view_counter (c integer)'); } catch (Exception $e) { $tableExisted=1; } try { if ($tableExisted==0) { $connection-&gt;execute('insert into view_counter values(1)'); } else { $connection-&gt;execute('update view_counter set c=c+1'); } $result=$connection-&gt;execute('select * from view_counter')-&gt;fetch(PDO::FETCH_ASSOC); } catch (Exception $e) { $hasDB=0; } } ?&gt;<span class="Apple-converted-space"> </span></span></p>
<p class="p4"><span class="s1">No database configured</span></p>
<p class="p8"><span class="s1"></span><br></p>
<p class="p10"><span class="s1"></span><br></p>
</body>
</html>
