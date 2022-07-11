const listaDeTeclas = document.querySelectorAll('.tecla'); 

for(let contador = 0; contador < listaDeTeclas.length; contador++){
    const tecla = listaDeTeclas[contador];
    const instrumento = tecla.classList[1];
    const idAudio =  `#som_${instrumento}`;
    tecla.onclick = function(){
        tocaSom(idAudio);
    };
    tecla.onkeydown = function(evento){
        if(evento.code === ("Space"||"Enter")){
            tecla.classList.add('ativa');
        }        
    };
    tecla.onkeyup = function(evento){
        if(evento.code === ("Space"||"Enter")){
            tecla.classList.add('ativa');
        }
        tecla.classList.remove('ativa');
    };
};

function tocaSom(idSom){
    const elemento = document.querySelector(idSom);
    if(elemento === null){
        console.log('Elemento não encontrado')
    }else{
        if(elemento.localName === 'audio'){
            elemento.play();
        }        
    }
    
};