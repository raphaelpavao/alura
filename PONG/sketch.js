//Variáveis de posição da bolinha
let xBolinha = 300;
let yBolinha = 200;
let dBolinha = 14;
let raio = dBolinha/2;
let colidiu = false;

//Variáveis de velocidade da bolinha
let velocidadeXBolinha = 6;
let velocidadeYBolinha = 6;

//Variáveis da raquete 1
let xRaquete = 5;
let yRaquete = 150;

//Variáveis da raquete 2
let xRaquete2 = 585;
let yRaquete2 = 150;
let velocidadeY2;
let chanceErro = 40;

//Variáveis iguais da raquete 
let raqueteComprimento = 10;
let raqueteAltura = 90;

//Variáveis do placar
let pontos1 = 0;
let pontos2 = 0;

//Variáveis de som
let raquetada;
let ponto;
let trilha;

raquetada = new Howl({
  src: ['raquetada.mp3'],
  volume: 0.8
});

ponto = new Howl({
  src: ['ponto.mp3'],
  volume: 0.8
});



/*function preload(){
  trilha = loadSound("trilha.mp3");
  ponto = loadSound("ponto.mp3");
  raquetada = loadSound("raquetada.mp3");
}*/

function setup() {
  createCanvas(600, 400);  
  //trilha.loop();
};

function draw() {  
  background(0);  
  mostraBolinha();
  mostraRaquete(xRaquete,yRaquete);  
  mostraRaquete(xRaquete2,yRaquete2);
  movimentaBolinha(); 
  movimentaRaquete1();
  movimentaRaquete2();
  verificaColisaoBorda();  
  verificaColisaoRaquete(xRaquete,yRaquete);
  verificaColisaoRaquete(xRaquete2,yRaquete2);
  incluiPlacar();  
  marcaPonto();
};

////////////////////

function mostraBolinha(){
  circle(xBolinha,yBolinha,dBolinha);
};

function mostraRaquete(x,y){
  rect(x,y,raqueteComprimento,raqueteAltura);
}

function movimentaBolinha(){
  xBolinha = xBolinha + velocidadeXBolinha;
  yBolinha = yBolinha + velocidadeYBolinha;
};

function movimentaRaquete1(){
  if(keyIsDown(UP_ARROW)){
    yRaquete = yRaquete - 10;
  }
  if(keyIsDown(DOWN_ARROW)){
    yRaquete = yRaquete + 10;
  }
}

function movimentaRaquete2(){
  velocidadeY2 = yBolinha - yRaquete2 - raqueteComprimento/2 - 40;
  yRaquete2 += velocidadeY2 / chanceErro;
};

function verificaColisaoBorda(){
  if(xBolinha + raio > width || 
     xBolinha - raio < 0){
    velocidadeXBolinha = velocidadeXBolinha * -1;
  };
  
  if(yBolinha + raio > height || 
     yBolinha - raio < 0){
    velocidadeYBolinha = velocidadeYBolinha * -1;   
  };
};

function verificaColisaoRaquete(xRaquete,yRaquete){
  colidiu = collideRectCircle( xRaquete, yRaquete, raqueteComprimento, raqueteAltura,xBolinha, yBolinha, raio);

  if(colidiu){
    raquetada.play();
    velocidadeXBolinha *=  -1;
    chanceErro = numeroAleatorio(1,15)
  }
};

function incluiPlacar(pontos,x,y){
  stroke(255);
  textAlign(CENTER);
  textSize(16);
  fill(color(255,140,0));
  rect(130,10,40,20);
  rect(430,10,40,20);
  fill(255);
  text(pontos1,150,26);
  text(pontos2,450,26);
};

function marcaPonto(){
  if(xBolinha < raio){
    pontos2++;
    ponto.play();
  }
  if(xBolinha > width-raio){
    pontos1++;
    ponto.play();
  }
}

function numeroAleatorio(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}