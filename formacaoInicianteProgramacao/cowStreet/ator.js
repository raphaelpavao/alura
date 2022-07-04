const xAtorInicial = 135;
const yAtorInicial = 367;
let xAtor = xAtorInicial;
let yAtor = yAtorInicial;
let tamanhoAtor = 30;
let velocidadeDoAtor = 2;
let colisao = false;
let pontos = 0;

function mostraAtor(){
  image(imagemDoAtor,xAtor,yAtor,tamanhoAtor,tamanhoAtor);
};

function movimentaAtor(){
  if(keyIsDown(UP_ARROW)){
    yAtor -= velocidadeDoAtor;
  };
    if(keyIsDown(DOWN_ARROW)){
    yAtor += velocidadeDoAtor;
  };
};

function verificaColisao(){
  for (let i=0; i<imagemCarros.length; i++){
    colisao = collideRectCircle(xCarros[i], yCarros[i], comprimentoCarro, alturaCarro, xAtor, yAtor, tamanhoAtor);
    if(colisao){
      voltaAtorInicio();
    };
  };  
};

function voltaAtorInicio(){
  yAtor = yAtorInicial;
};

function incluiPlacar(pontos,x,y){
  stroke(255);
  textAlign(CENTER);
  textSize(16);
  fill(color(255,140,0));
  rect(130,8,40,20);
  fill(255);
  text(pontos,150,23);  
};

function marcaPonto(){
  if(yAtor < 5){
    pontos++;
    voltaAtorInicio();
  };
};

function limiteTelaBaixo(){
  if(yAtor>yAtorInicial){
    voltaAtorInicio();
  }
}