var gabarito = [1, 2, 3, 2];
var justificativa = [
    ["",
    "<i>Vegetarianos não comem carne, peixe é carne</i>.",
    "<i>Frutos do mar também são animais e vegetarianos não comem isso</i>.",
    "<i>Carnes bovina e suína não fazem parte da alimentação vegetariana</i>."],

    ["<i>Ovolactovegetarianos podem consumir esses alimentos</i>.",
    "",
    "<i>Na verdade, ovolactos consomem ovos e leite de origem animal</i>.",
    "<i>Na verdade, ovolactos consomem ovos e leite de origem animal</i>."],

    ["<i>Ele é mais que uma dieta</i>.",
    "<i>Imagine! hehe, pode parecer, mas não é!</i>",
    "",
    "<i>Não é somente uma dieta</i>."],

    ["<i>Vegetarianos que se alimentam bem são muito saudáveis</i>.",
    "",
    "<i>Proteínas não são vermes! Que horror</i>!",
    "<i>Proteínas também são encontradas em vegetais</i>."]
];


function corrigir (pergunta, resposta) {
    $(".btnP" + pergunta).removeClass("btn-secondary");
    if (resposta === gabarito[pergunta - 1]) {
        $("#btnP" + pergunta + "R" + resposta).addClass("btn-success");
    } else {
        $("#btnP" + pergunta + "R" + resposta).addClass("btn-danger");
        $("#btnP" + pergunta + "R" + resposta).append("<h5>" + justificativa[pergunta - 1][resposta - 1] + "</h5>");
        $("#btnP" + pergunta + "R" + gabarito[pergunta - 1]).addClass("btn-success");
    }
}