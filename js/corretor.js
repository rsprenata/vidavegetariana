var gabarito = [1, 2, 3, 2];
var justificativa = [
    ["",
    "Vegetarianos não comem carne, peixe é carne.",
    "Frutos do mar também são animais e vegetarianos não comem isso.",
    "Carnes bovina e suína não fazem parte da alimentação vegetariana."],

    ["Ovolactovegetarianos podem consumir esses alimentos.",
    "",
    "Na verdade, ovolactos consomem ovos e leite de origem animal.",
    "Na verdade, ovolactos consomem ovos e leite de origem animal."],

    ["Ele é mais que uma dieta.",
    "Imagine! hehe, pode parecer, mas não é!",
    "",
    "Não é somente uma dieta."],

    ["Vegetarianos que se alimentam bem são muito saudáveis.",
    "",
    "Proteínas não são vermes! Que horror!",
    "Proteínas também são encontradas em vegetais."]
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