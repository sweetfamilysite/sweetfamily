<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Vocabulário Básico</title>
  <link rel="stylesheet" href="/style.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    .hero { padding: 40px; text-align: center; background: #ffe66d; }
    .hero .submenu {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }
    .hero .submenu a {
      background: #fff;
      padding: 10px 20px;
      border-radius: 4px;
      text-decoration: none;
      color: #333;
      border: 1px solid #ddd;
    }
    .hero .submenu a:hover { background: #ddd; }
    .layout {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      gap: 20px;
      min-height: 1200px;
    }
    .ads-left, .ads-right { display: flex; flex-direction: column; gap: 20px; }
    .ad-block, .ad-block-large {
      background: #e2e2e2; width: 300px; text-align: center;
      border-radius: 8px; font-size: 12px;
      display: flex; justify-content: center; align-items: center; padding: 10px;
    }
    .ad-block-large { background: transparent; padding: 0; }
    .ad-block img, .ad-block-large img { max-width: 100%; height: auto; object-fit: contain; display: block; border-radius: 8px; }
    .lessons-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      max-width: 800px;
      margin: 0 20px;
    }
    .lesson-card {
      background: #fff; border: 1px solid #ddd; border-radius: 8px;
      padding: 20px; text-align: center;
    }
    .lesson-card h4 { margin: 0; }
    .lesson-card p { margin: 10px 0; }
    .lesson-card a {
      display: inline-block; margin-top: 10px;
      background: #ff6b6b; color: #fff;
      padding: 6px 12px; text-decoration: none;
      border-radius: 4px; font-size: 14px;
    }
    .lesson-card a:hover { background: #e04b4b; }
    .ticker {
      position: fixed; bottom: 0; left: 0; width: 100%;
      height: 140px; overflow: hidden; background: #222;
      display: flex; align-items: center;
    }
    .ticker-track {
      display: flex; width: max-content;
      animation: scrollTicker 60s linear infinite;
    }
    .ticker .ad-slot {
      width: 300px; height: 120px; margin: 0 10px; flex-shrink: 0;
      font-size: 14px; text-align: center;
      display: flex; align-items: center; justify-content: center;
      background: #e2e2e2; border-radius: 4px;
    }
    .ticker .ad-slot.ad-slot-img { background: transparent; }
    .ticker .ad-slot-img img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 4px; }
    @keyframes scrollTicker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    @media (max-width: 768px) {
      header { flex-direction: column; align-items: flex-start; }
      .header-ads { justify-content: center; }
    }
  </style>
</head>
<body>

<?php include 'partes/header.php'; ?>

<section class="hero">
  <h2>Vocabulário Básico</h2>
  <p>Explore lições de vocabulário essenciais para o JLPT N5 organizadas por temas práticos.</p>
  <div class="submenu">
    <a href="hiragana.php">Hiragana</a>
    <a href="katakana.php">Katakana</a>
    <a href="kanji.php">Kanji</a>
    <a href="frases.php">Frases</a>
    <a href="vocabulario.php">Vocabulário</a>
    <a href="gramatica.php">Gramática</a>
    <a href="simulados.php">Simulados</a>
  </div>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <div class="lessons-grid">

    <div class="lesson-card">
      <h4>Lição 10</h4>
      <p>Objetos e Tecnologia</p>
      <a href="vocabulario/aprenda-vocabulario-licao10-objetos-tecnologia.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 9</h4>
      <p>Transporte e Direções</p>
      <a href="vocabulario/aprenda-vocabulario-licao9-transporte-direcoes.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 8</h4>
      <p>Corpo Humano e Saúde</p>
      <a href="vocabulario/aprenda-vocabulario-licao8-corpo-saude.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 7</h4>
      <p>Natureza e Clima</p>
      <a href="vocabulario/aprenda-vocabulario-licao7-natureza-clima.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 6</h4>
      <p>Cores e Números</p>
      <a href="vocabulario/aprenda-vocabulario-licao6-cores-numeros.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 5</h4>
      <p>Tempo e Estações do Ano</p>
      <a href="vocabulario/aprenda-vocabulario-licao5-tempo-estacoes.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 4</h4>
      <p>Escola e Trabalho</p>
      <a href="vocabulario/aprenda-vocabulario-licao4-escola-trabalho.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 3</h4>
      <p>Comida e Bebida</p>
      <a href="vocabulario/aprenda-vocabulario-licao3-comida-bebida.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 2</h4>
      <p>Casa e Móveis</p>
      <a href="vocabulario/aprenda-vocabulario-licao2-casa-moveis.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Lição 1</h4>
      <p>Família e Pessoas</p>
      <a href="vocabulario/aprenda-vocabulario-licao1-familia-pessoas.php">Acessar</a>
    </div>

  </div>

  <div class="ads-right" id="ads-right"></div>
</div>

<div class="ticker">
  <div class="ticker-track">
    <div class="ad-slot">Anúncio 1</div>
    <div class="ad-slot">Anúncio 2</div>
    <div class="ad-slot ad-slot-img"><img src="/ads/sample.jpg" alt="Ad"></div>
  </div>
</div>

<?php include 'partes/footer.php'; ?>

</body>
</html>
