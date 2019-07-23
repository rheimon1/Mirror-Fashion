let	inputTamanho = document.querySelector('[name=tamanho]')
let	outputTamanho = document.querySelector('[name=valortamanho]')
function mostraTamanho() {
	outputTamanho.value	= inputTamanho.value
}
    
	inputTamanho.oninput = mostraTamanho