function maintenanceRedirect() {
    window.location.replace("?page=maintenance");
}

function httpsRedirect() {
    if (location.protocol !== 'https:' && !location.href.includes("127.0.0.1")) {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
}

function maintenanceWarn() {
    alert("This site is currently undergoing live maintenance. You may continue to use the site, but some elements may not work as intended.\n\n-Chris")
}