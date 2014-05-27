if (MobileUtils.isMobile() && MobileUtils.isViewportOpen()) {
    var viewport = document.getElementById('wixMobileViewport');
    var scale = MobileUtils.getInitZoom();
    // viewport.setAttribute('content','initial-scale = ' + scale +', maximum-scale = '+ scale +', minimum-scale = '+ scale);
    viewport.setAttribute('content','maximum-scale = '+ scale +', minimum-scale = '+ scale);
    document.getElementById("viewer_preloader").style.display = "block";
}
