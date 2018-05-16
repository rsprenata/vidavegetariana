function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop() - 50;
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();

function respondeuQuestionario() {
    if ($("#formSexo").val() !== "Selecione" &&
        $("#formIdade").val() !== "Selecione" &&
        $("#formVeg").val() !== "Selecione" &&
        $("#formTec").val() !== "Selecione") {
        return true;
    } else {
        return false;
    }
}

var terminou = 0;
var tela = 1;
function bloqueador() {
    if (terminou === 0) {
        if (tela === 1 && respondeuQuestionario()) {
            $("#divOqueE").show();
            $("#divOqueE").addClass("d-flex");
            $("#aOqueE").removeClass("disabled");
            tela = 2;
        }
        if (tela === 2 && Utils.isElementInView($('#divOqueE'), false)) {
            $("#divOqueComer").show();
            $("#divReceita").show();
            $("#divOqueComer").addClass("d-flex");
            $("#divReceita").addClass("d-flex");
            $("#aOqueComer").removeClass("disabled");
            tela = 3;
        }
        if (tela === 3 && Utils.isElementInView($('#divReceita'), false)) {
            $("#divImpacto").show();
            $("#divImpacto").addClass("d-flex");
            $("#aImpacto").removeClass("disabled");
            tela = 4;
        }
        if (tela === 4 && Utils.isElementInView($('#divImpacto'), false)) {
            $("#divConclusao").show();
            $("#divConclusao").addClass("d-flex");
            $("#aConclusao").removeClass("disabled");
            tela = 5;
        }
        if (tela === 5 && Utils.isElementInView($('#divConclusao'), false)) {
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
}

//https://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling

$(window).scroll(function(event){
    bloqueador();
});

$(".selectForm").change(function() {
    bloqueador();
});