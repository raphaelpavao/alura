let yCarros = [40,96,150,210,260,320];
let xCarros = [600,600,600,600,600,600];
let comprimentoCarro = 50;
let alturaCarro = 40;
let velocidadeCarros = [2,3,4,2,3,4];

function mostraCarro(){
  for(let i = 0; i < imagemCarros.length; i++){
    image(imagemCarros[i],xCarros[i],yCarros[i],comprimentoCarro,alturaCarro);  
  };
};

function movimentaCarro(){
  for(let i = 0; i < imagemCarros.length; i++){
    xCarros[i]-=velocidadeCarros[i];    
  };
};

function voltaPosicaoInicialCarro(){
  for(let i = 0; i < imagemCarros.length; i++){
    if (passouTela(xCarros[i])){
      xCarros[i] = 600;
    };    
  };  
};

function passouTela(xCarro){
  return xCarro < -50
}