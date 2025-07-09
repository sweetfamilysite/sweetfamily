<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Kanji</title>
  <link rel="stylesheet" href="/style.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    .hero {
      padding: 40px;
      text-align: center;
      background: #ffe66d;
    }
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
    .hero .submenu a:hover {
      background: #ddd;
    }
    .layout {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      gap: 20px;
      min-height: 1000px;
    }
    .ads-left, .ads-right {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .ad-block, .ad-block-large {
      background: #e2e2e2;
      width: 300px;
      text-align: center;
      border-radius: 8px;
      font-size: 12px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
    }
    .ad-block-large {
      background: transparent;
      padding: 0;
    }
    .ad-block img, .ad-block-large img {
      max-width: 100%;
      height: auto;
      object-fit: contain;
      display: block;
      border-radius: 8px;
    }
    .lessons-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      max-width: 800px;
      margin: 0 20px;
    }
    .lesson-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }
    .lesson-card h4 { margin: 0; }
    .lesson-card p { margin: 10px 0; }
    .lesson-card a {
      display: inline-block;
      margin-top: 10px;
      background: #ff6b6b;
      color: #fff;
      padding: 6px 12px;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
    }
    .lesson-card a:hover {
      background: #e04b4b;
    }
    .ticker {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 140px;
      overflow: hidden;
      background: #222;
      display: flex;
      align-items: center;
    }
    .ticker-track {
      display: flex;
      width: max-content;
      animation: scrollTicker 60s linear infinite;
    }
    .ticker .ad-slot {
      width: 300px;
      height: 120px;
      margin: 0 10px;
      flex-shrink: 0;
      font-size: 14px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #e2e2e2;
      border-radius: 4px;
    }
    .ticker .ad-slot.ad-slot-img {
      background: transparent;
    }
    .ticker .ad-slot-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 4px;
    }
    @keyframes scrollTicker {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    @media (max-width: 768px) {
      header { flex-direction: column; align-items: flex-start; }
      .header-ads { justify-content: center; }
    }
  </style>
</head>
<body>

<?php include 'partes/header.php'; ?>

<section class="hero">
  <h2>Kanji</h2>
  <p>Aprenda Kanji essenciais do N5 com explicações claras, exemplos de ON/KUN, contexto real e exercícios.</p>
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
      <p>Verbos + Exercícios — 行, 見, 入, 出, 買, 来 + revisão geral</p>
      <a href="kanji/aprenda-kanji-licao10-verbos-exercicios-finais.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 9</h4>
      <p>Comida & Dinheiro — 食, 飲, 米, 水, 火, 金</p>
      <a href="kanji/aprenda-kanji-licao9-comida-dinheiro.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 8</h4>
      <p>Objetos & Coisas — 本, 車, 電, 語, 名, 話</p>
      <a href="kanji/aprenda-kanji-licao8-objetos-coisas.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 7</h4>
      <p>Natureza & Clima — 山, 川, 木, 天, 気, 雨</p>
      <a href="kanji/aprenda-kanji-licao7-natureza-clima.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 6</h4>
      <p>Números 1–10 — 一, 二, 三, 四, 五, 六, 七, 八, 九, 十</p>
      <a href="kanji/aprenda-kanji-licao6-numeros-1-10.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 5</h4>
      <p>Direções & Posições — 上, 下, 中, 東, 西, 南, 北</p>
      <a href="kanji/aprenda-kanji-licao5-direcoes-posicoes.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 4</h4>
      <p>Tempo & Dias — 日, 月, 年, 時, 分, 週</p>
      <a href="kanji/aprenda-kanji-licao4-tempo-dias.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 3</h4>
      <p>Casa & Escola — 家, 学, 校, 先, 生, 友</p>
      <a href="kanji/aprenda-kanji-licao3-casa-escola.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 2</h4>
      <p>Pessoas & Família — 人, 女, 男, 子, 母, 父</p>
      <a href="kanji/aprenda-kanji-licao2-pessoas-familia.php">Acessar</a>
    </div>

    <div class="lesson-card">
      <h4>Lição 1</h4>
      <p>Introdução — O que é Kanji, ON/KUN, meta N5, dicas</p>
      <a href="kanji/aprenda-kanji-licao1-introducao.php">Acessar</a>
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
