<div class="banner">
<img class="rotate" src="logo/TsugiCloud.org/tsugicloud-org_gravatar_72.png">    
<h1 class="mainheading">Start Your TsugiCloud <br> Journey With PHP</h1>
<p>Tsugicloud is an open-source LTI platform in itself. <br>Whether you want to use it fully or utilize it's parts you decide  </p> 
<img class="rotate1" src="logo/TsugiCloud.org/tsugicloud-org_gravatar.png">
<a href="#content"><button>Browse</button></a>  <a href="https://github.com/tsugicloud/website/tree/2023" target="_blank"><button>Github</button></a>
</div>
<div class="content" id="content">
<h1 class="mainheading">Installation</h1> 
<p>Installing Tsugi to your favorite LMS is just a Click Away:</p>
<h2 class="secondheading">Method 1 : API</h2>
<p>Using API is the preferred option for integrating our Cloudbased apps whether you are pro or a newbie</p>
<ul>
    <li>As always Tsguicloud loves PHP. So first step will always be Installing Composer. If you have not 
        yey PHP-CLI enabled, do that by following command
    </li>
</ul>
<pre>Sudo apt install php-cli</pre>
<ul>
    <li>Download Composer</li>
</ul>
<pre> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</pre>
<ul><li>Run the installation Program</li></ul>
<pre> php composer-setup.php</pre>
<ul><li>For Making Tsugicloud to be installed edit the vendor and package name in the package.json</li></ul>
<pre>
{
	“name” : “tsugi/tsugicloud”
	“require”: {
	     “monolog/monolog”:”1.0.*”
          }
}
</pre>
<ul><li>Run the following command via PHP composer </li></ul>
<pre>php composer install tsugicloud</pre>
<ul><li>Get your unique LTI Key from Tsugicloud and assign it to a variable</li></ul>
<pre> 
    require_once($CFG->dirroot."/vendor/autoload.php"); 
    class tsugicloud () {
        public static function verifyKeyAndSecret($key, $secret) {
        $key = '';
        if ( ! ($key && $secret) ) return array("Missing key or secret", "");
        $store = new TrivialOAuthDataStore();
        $store->add_consumer($key, $secret);
    }
}
</pre>
<ul><li>Make sure you have installed Tsugicloud.</li></ul>
<pre>tsugicloud --v</pre>
</div>
<div class="content1">
<h2 class="secondheading">Method 2 : Deploying Tsugicloud locally</h2>
<p>If you want to deploy Tsugicloud as a part of your favorite LMS you can simply do that</p>
<ul>
    <li>As always Tsguicloud loves Github. So first step will always be cloning the Tsugicloud repo from Github.
    </li>
</ul>
<pre>gh repo clone tsugicloud/website</pre>
<ul>
    <li>Copy the contents from Config-dist.php to Config.php</li>
</ul>
<pre> cp Config-dist Config</pre>
<ul><li>Change Host Details</li></ul>
<pre> $our_server_port = ($_SERVER['SERVER_PORT'] ?? 443 );
$tsugi_start = ( $_SERVER['REQUEST_SCHEME'] ?? 'https' ) . "://" .
	($_SERVER['SERVER_NAME'] ?? $_SERVER['HTTP:HOST'] ?? 'localhost') .
	( ($our_server_port == 80 || $our_server_port == 443) ? '' : ':'.$our_server_port );
    $host_start = "https://yourhostname.com/";</pre>
<ul><li>Once you get your Site Running. Go to the path and click upgrades.php </li></ul>
<pre>yourhostname/tsugicloud/admin</pre>
<ul><li>Once your tables get autocreated. You should get the following message without any errors</li></ul>
<pre>All Tables Updated</pre>
<ul><li>You can run upgrades.php any number of times you wanted. Then go to Tsugi path</li></ul>
<pre> yourhostname/tsugicloud/index.php</pre>
<ul><li>You are all set. You can now access full features of our cloud services </li></ul>
</div>

<div class="content2">
<h2 class="secondheading">Method 3 : Tsugicloud as your LMS</h2>
<p>If you want to use Tsugicloud as your LMS Then Congratulations. You will love Tsugicloud.</p>
<ul>
    <li>As always Tsguicloud loves you. So first step will always be going to Tsugicloud appstore.
    </li>
</ul>
<pre>https://www.tsugicloud.org/tsugi/</pre>
<ul>
    <li>Login with your Google Account</li>
</ul>
<pre> https://www.tsugicloud.org/tsugi/login</pre>
<ul><li>Once you login. Go to the admin path and click upgrades.php </li></ul>
<pre>https://www.tsugicloud.org/tsugi/admin</pre>
<ul><li>Once your tables get autocreated. You should get the following message without any errors</li></ul>
<pre>All Tables Updated</pre>
<ul><li>You can run upgrades.php any number of times you wanted. Then go to Tsugi path</li></ul>
<pre> https://www.tsugicloud.org/tsugi/store</pre>
<ul><li>You are all set. You can now access full features of our cloud services </li></ul>
</div>
<div class="flex">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/640px-Webysther_20160423_-_Elephpant.svg.png" height="150px">
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Docker_logo.svg/512px-Docker_logo.svg.png" height="150px">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Kubernetes_logo_without_workmark.svg/617px-Kubernetes_logo_without_workmark.svg.png" height="150px">
</div>
