function maintenanceRedirect() {
    if (window.location.search != "?page=maintenance") {//no infinite loop plz
        window.location.replace("?page=maintenance");
    }
}

function httpsRedirect() {
    if (window.location.host == "cartwebapp.net") {//CART website redirect
        window.location.replace("https://cart.org/labs/web-application-development-rop/");
    }
    else if (location.protocol !== 'https:' && !location.href.includes("127.0.0.1")) {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
}

function maintenanceWarn() {
    alert("This site is currently undergoing live maintenance. You may continue to use the site, but some elements may not work as intended.\n\n-Chris")
}