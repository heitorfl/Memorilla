document.addEventListener('DOMContentLoaded', () => {

    const selecionarbotoes = document.querySelectorAll('.botoes');

    selecionarbotoes.forEach(selector => {

        const quantidade = selector.querySelector('.quantidade');
        const rmv = selector.querySelector('.rmv');
        const add = selector.querySelector('.add');
        
        if (!quantidade || !rmv || !add) return;

        const MIN_VALUE = parseInt(quantidade.min) || 0;
        const MAX_VALUE = parseInt(quantidade.max) || 99;

        const updateQuantity = (change) => {
            let currentValue = parseInt(quantidade.value);
            let valor = currentValue + change;
            if (valor >= MIN_VALUE && valor <= MAX_VALUE) {
                quantidade.value = valor;
            }
            valor = parseInt(quantidade.value); 

            rmv.disabled = valor <= MIN_VALUE;
            add.disabled = valor >= MAX_VALUE;
        };

        updateQuantity(0);

        rmv.addEventListener('click', () => {
            updateQuantity(-1);
        });
        add.addEventListener('click', () => {
            updateQuantity(1);
        });
    });
});