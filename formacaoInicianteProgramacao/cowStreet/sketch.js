function setup() {
  createCanvas(500, 400);
};

function draw() {
  background(imagemDaEstrada);
  mostraAtor();
  mostraCarro();
  movimentaCarro();
  movimentaAtor();
  voltaPosicaoInicialCarro();
  verificaColisao();
  incluiPlacar(pontos,10,30,7)
  marcaPonto();
  limiteTelaBaixo();
};