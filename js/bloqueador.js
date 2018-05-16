function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top - 50;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();

//https://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling
var terminou = 0;
$(window).scroll(function(event){
    if (terminou === 0) {
        console.log("a");
        if (Utils.isElementInView($('#divForm'), false)) {
            $("#divOqueE").show();
            $("#divOqueE").addClass("d-flex");
            $("#aOqueE").removeClass("disabled");
        } else if (Utils.isElementInView($('#divOqueE'), false)) {
            $("#divOqueComer").show();
            $("#divOqueComer").addClass("d-flex");
            $("#aOqueComer").removeClass("disabled");
        } else if (Utils.isElementInView($('#divOqueComer'), false)) {
            $("#divImpacto").show();
            $("#divImpacto").addClass("d-flex");
            $("#aImpacto").removeClass("disabled");
        } else if (Utils.isElementInView($('#divImpacto'), false)) {
            $("#divConclusao").show();
            $("#divConclusao").addClass("d-flex");
            $("#aConclusao").removeClass("disabled");
        } else if (Utils.isElementInView($('#divConclusao'), false)) {
            $("#divAvaliacao").show();
            $("#divQ2").show();
            $("#divQ3").show();
            $("#divQ4").show();
            $("#divAvaliacao").addClass("d-flex");
            $("#divQ2").addClass("d-flex");
            $("#divQ3").addClass("d-flex");
            $("#divQ4").addClass("d-flex");
            $("#aAvaliacao").removeClass("disabled");
            terminou = 1;
        }
    }
});