function maintenanceRedirect() {
    if (window.location.host == "mc.cartwebapp.net" && window.location.search != "?page=minecraft") {//CART website redirect
        window.location.replace("?page=minecraft");
    }
    else if (window.location.search != "?page=maintenance" && window.location.search != "?page=minecraft") {//no infinite loop plz
        window.location.replace("?page=maintenance");
    }
}

function httpsRedirect() {
    if (window.location.host == "cartwebapp.net") {//CART website redirect
        window.location.replace("https://cart.org/labs/web-application-development-rop/");
    }
    else if (window.location.host == "fantomethief.net") {//Fantomethief redirect
        window.location.replace("https://twitter.com/0rcazone");
    }
    else if (window.location.host == "mc.cartwebapp.net" && window.location.search != "?page=minecraft") {
        window.location.replace("?page=minecraft");
    }
    else if (location.protocol !== 'https:' && !location.href.includes("127.0.0.1")) {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
}

function maintenanceWarn() {
    alert("This site is currently undergoing live maintenance. You may continue to use the site, but some elements may not work as intended.\n\n-Chris")
}
