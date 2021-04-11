<!--Cygwin reference for CSCI classmates, left to avoid dead links-->
<div class="center">
    <h1>Cygwin64 installer</h1>
    <h2 class="cygwin">Note: This guide assumes you have a 64-bit operating system. If you have a 32-bit OS, some packages may differ. Download cygwin <a class="cygwin" href="https://www.cygwin.com/setup-x86_64.exe" download>here</a>.</h2>
</div>
<main class="cygwin">
    <section>
        <img src="img/install.png">
        <p>First, you'll want to select "Install from Internet".</p>
    </section>
    <section>
        <img src="img/location.png">
        <p>Next, you'll choose the install directory and intended users. These are completely up to you, though you need at least 2GB free on the install drive.</p>
    </section>
    <section>
        <img src="img/download.png">
        <p>After that, you'll also choose the download directory. This is used to store files downloaded from cygwin's servers. The default is your user download directory, but again, this setting is up to you.</p>
    </section>
    <section>
        <img src="img/proxy.png">
        <p>Now you'll get the option to select a proxy for the download process. If you don't know what this is, don't change anything. Otherwise, set up your desired proxy.</p>
    </section>
    <section>
        <img src="img/mirror.png">
        <p>The next step is to select a download mirror. This is the site that cygwin will be downloaded from. Clicking any of the sites should work, and I've had repeated success just using the first one.</p>
    </section>
    <section>
        <img src="img/package.png">
        <p>Now you'll begin the package selection process. If you know of any linux packages that you would like to install, select them now. Otherwise, leave the default selections and type "gcc" into the search bar, then click the plus button next to "All".</p>
    </section>
    <section>
        <img src="img/devel.png">
        <p>Now, expand the "Devel" menu and set "colorgcc" and "gcc-g++" to their latest non-test versions, then click next.</p>
    </section>
    <section>
        <img src="img/confirm.png">
        <p>The setup will ask you to review and confirm changes. Click next.</p>
    </section>
    <section>
        <img src="img/downloading.png">
        <p>Now the setup will begin downloading the necessary files. This process should be relatively short, taking under a minute in most cases.</p>
    </section>
    <section>
        <img src="img/installing.png">
        <p>Next, the setup will begin installing the downloaded files. It is normal for the setup to pause on some packages, as they can be quite large.</p>
    </section>
    <section>
        <img src="img/running.png">
        <p>Then, the setup will run the necessary scripts to get cygwin working. This also usually takes less than a minute, but depending on how many additional packages you selected, can take longer.</p>
    </section>
    <section>
        <img src="img/shortcuts.png">
        <p>Finally, the setup will ask you where you would like to place shortcuts. This is up to you, and will be how you access cygwin.</p>
    </section>
    <section>
        <img src="img/first.png">
        <p>Once you start cygwin, it is normal to see first-time setup files such as these. If you don't know what they do, leave them alone.</p>
    </section>
    <section>
        <img src="img/restart.png">
        <p>If you restart the program, you should see something like this. Cygwin is now ready for use and can compile .cpp files with g++ just like the school computers. Remember that you set your working directory at the beginning of setup, so that's where you should put your source code files if you want g++ to be able to use them.</p>
    </section>
    <section>
        <p>If you encounter any error messages on which the "retry" button doesn't work, I can be contacted in the Discord or via text message at the number provided in Discord. -Chris</p>
</main>
<?php
    require('modules/footer.php');
?>