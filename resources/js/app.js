import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//Importando uma biblioteca para deixar o telefone legal
import IMask from 'imask';

//pegamos o input do telefone
const telefone = document.getElementById('phone');

if(telefone) {
    //função para aplicar uma máscara no campo de telefone
    IMask(telefone, {
        //aplicamos a configuração da máscara
        mask: [
            { mask: '(00) 0000-0000' }, //preenche automaticamente com os () e o - que colocamos na máscara
            { mask: '(00) 00000-0000' } //o número 0 representa qualquer número
        ]
    });
}
