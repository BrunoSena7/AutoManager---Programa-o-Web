document.addEventListener("DOMContentLoaded", () => {

    // cadastro/edição de carro
    const formCarro = document.querySelector("form[data-form-carro]");

    if (formCarro) {
        formCarro.addEventListener("submit", (event) => {
            const marca  = formCarro.querySelector("input[name='marca']");
            const modelo = formCarro.querySelector("input[name='modelo']");
            const ano    = formCarro.querySelector("input[name='ano']");
            const preco  = formCarro.querySelector("input[name='preco']");

            let erros = [];

            if (!marca.value.trim()) erros.push("Informe a marca.");
            if (!modelo.value.trim()) erros.push("Informe o modelo.");

            const anoNum = parseInt(ano.value);
            const anoAtual = new Date().getFullYear();

            if (isNaN(anoNum) || anoNum < 1950 || anoNum > anoAtual + 1) {
                erros.push(`Ano deve estar entre 1950 e ${anoAtual + 1}.`);
            }

            const precoNum = parseFloat(preco.value.replace('.', '').replace(',', '.'));

            if (isNaN(precoNum) || precoNum <= 0) {
                erros.push("Preço deve ser maior que zero.");
            }

            if (erros.length > 0) {
                event.preventDefault();
                alert("Corrija os erros antes de continuar:\n\n- " + erros.join("\n- "));
            }
        });
    }

    // confirma que exckuiu
    document.querySelectorAll(".link-excluir").forEach(link => {
        link.addEventListener("click", (event) => {
            const ok = confirm("Tem certeza que deseja excluir este carro?");
            if (!ok) event.preventDefault();
        });
    });

});
