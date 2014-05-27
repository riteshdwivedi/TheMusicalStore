$(document).ready(function () {

    //Storing Parameters in headerTxt
    StoringParams();

    // Change iFrame Height
    changeFrametHeight();

    // Change main navigation margin
    /*changeMainNavigationLeftMargin();*/

    //Change Header Text For Small Screens
    ChangeHeaderTextForSmallScreens();

    //Read More on Click
    $('#readMore').click(function (e) {
        e.preventDefault();
        DisplayPopUp();
        reportReadMoreClick();
    });



    //Close Pop Up Dialog Box
    $('#close-pop-up-button').click(function () {
        var duration;
        if ($.browser.msie) {
            duration = 0;
        } else {
            duration = 350;
        }
        $('#dialog-overlay').animate({opacity:0}, duration, function () {
            $(this).hide()
        });
        $('#dialog-box').animate({opacity:0}, duration, function () {
            $(this).hide()
        });
    });

    //Add Class for Go Back link
    $('#backLink').hover(
        function () {
            $(this).addClass("onHover");

        },
        function () {
            $(this).removeClass("onHover");

        });

    // assign Links To Edit And Back
    assignLinksToEditAndBack();

    $(window).resize(function () {

        // Change iFrame Height
        changeFrametHeight();

        // Change main navigation margin
        /*changeMainNavigationLeftMargin();*/

        //Change Header Text For Small Screens
        ChangeHeaderTextForSmallScreens();

    });

    //Small Social Buttons For SmallS creens
    SmallSocialButtonsForSmallScreens();

    //ABtest
    /*InitAbTest();*/

});

function reportReadMoreClick(){
    var params = [];
    params.push('evid=19');
    var url = W.App.CLIENT_CONFIG.biServerUrl + '&' + params.join('&');
    new Image(0, 0).src = url;
}


//Storing Parameters in headerTxt
function StoringParams() {
    headerTxt.mainHeader = $('#templatesName').html();
    headerTxt.editButton = $('#editButton').html();
}

// Small Social Buttons For SmallS creens
function SmallSocialButtonsForSmallScreens() {
    if ($(document).width() <= 1024) {
        $('.addthis_toolbox').removeClass('addthis_32x32_style');
        $('.addthis_button_google_plusone_badge').find('img').addClass('.smallIcon');
    }
}
;

function DisplayPopUp() {

    // get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    // calculate the values for center alignment
    var dialogTop = (maskHeight / 2) - ($('#dialog-box').height() / 2);
    var dialogLeft = (maskWidth / 2) - ($('#dialog-box').width() / 2);

    // assign values to the overlay and dialog box
    $('#dialog-overlay').css({height:maskHeight, width:maskWidth, margin:'50px 0 0 0', opacity:'0'}).show().animate({opacity:0.8}, 350);
    $('#dialog-box').css({top:dialogTop, left:dialogLeft, opacity:'0'}).show().animate({opacity:1}, 350);
}

// Change main navigation margin
function changeMainNavigationLeftMargin() {
    $('#header .templatesButtons').css('margin-left', ((($(document).width() - $('#header .templatesButtons').width()) / 2)) + 'px');
}

// Change iFrame Height
function changeFrametHeight() {
    var contentHeight = $(window).height() - $('div#header').height() - 1;
    $('.contentWrapper iframe').css('height', contentHeight + "px");
}

// assign Links To Edit And Back
function assignLinksToEditAndBack() {
    $('#backButton').click(function (e) {
        e.preventDefault();
        window.location.href = backUrl;
    });

    $('#dialog-edit-now, #editButton').click(function (e) {
        e.preventDefault();
        var senderId = $(this).attr('id');
        var origin = 'viewer_top';
        if(senderId == 'dialog-edit-now'){
            origin = 'viewer_more';
        }
        var uuid = randomUUID();
        reportBiTemplateEdit(editUrl, uuid,origin);
        if (openAsTab) {
            openUrlInTab(editUrl + "&editorSessionId=" + uuid)
        } else {
            openUrlNoMenu(editUrl + "&editorSessionId=" + uuid);
        }

    });

}

function reportBiTemplateEdit(editUrl, uuid, origin) {
    var params = [];

    var urlParams = getQueryParams(document.location.search);

    params.push('esi=' + uuid);
    params.push('eventID=' + 15);
    params.push('galleryDocIndex=' + galleryDocIndex);
    params.push('origin=' + origin);
    params.push('book=' + urlParams.bookName);

    var url = W.App.CLIENT_CONFIG.biServerUrl + '&' + params.join('&');
    new Image(0, 0).src = url;
}

function openUrlNoMenu(url) {
    try {
        var popupBlocked = false;
        var screenSize = getPhysicalScreenDimensions();
        var win = window.open(url, '_blank', "resizable=yes,menubar=no,status=no,titlebar=no,toolbar=no,scrollbars=1,channelmode=yes,width=" + screenSize.width + ",height=" + screenSize.height);
        if (!win || win.closed || typeof win.closed == 'undefined') {
            popupBlocked = true;
        } else {
            win.focus();
        }
        if (popupBlocked) {
            win = window.open(url, '_blank');
        }
        return true;
    } catch (e) {
        //logError("VIEWER", "openUrlNoMenu", e.message, url, "basic.js");
        return false;
    }
}

function openUrlInTab(url) {
    var win = window.open(url, '_blank');
    return true;
}

function getPhysicalScreenDimensions() {
    var winW = 1024, winH = 768;
    try {
        winW = screen.availWidth;
        winH = screen.availHeight;
        if (typeof winW == "undefined") {
            winW = 1024;
        }
        if (typeof winH == "undefined") {
            winH = 768;
        }
    } catch (e) {
        winW = 1024;
        winH = 768;
    }
    return {width:(winW ), height:(winH )};
}

//Change Header Text For Small Screens
function ChangeHeaderTextForSmallScreens() {
    if ($(document).width() <= 900) {
        $('#templatesName').html(headerTxt.mainHeaderSmall);
    } else {
        $('#templatesName').html(headerTxt.mainHeader);
    }
    if ($(document).width() <= 1100) {
        $('#editButton').html(headerTxt.editButtonSmall).append('<span></span>');
    } else {
        $('#editButton').html(headerTxt.editButton);
    }
}

function getQueryParams(qs) {
    qs = qs.split("+").join(" ");

    var params = {}, tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }

    return params;
}

//ABtest
function InitAbTest() {
    if (getParameterByName('abTest') == 'b') {
        $('.templatesButtons').addClass('abTest');
    }
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.search);
    if (results == null)
        return "";
    else
        return decodeURIComponent(results[1].replace(/\+/g, " "));
}