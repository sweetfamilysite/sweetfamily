<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Simulados de JLPT N5</title>
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
  <h2>Simulados JLPT N5</h2>
  <p>Pratique com simulados organizados em níveis e tópicos para consolidar seu aprendizado do JLPT N5.</p>
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
      <h4>Simulado 10</h4>
      <p>Completo — Revisão Geral com Kanji N5, Vocabulário e Gramática</p>
      <a href="simulados/aprenda-simulado-10-revisao-geral.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 9</h4>
      <p>Avançado — Expressões de Quantidade, Frequência e Verbos Modais (できます、すき、きらい)</p>
      <a href="simulados/aprenda-simulado-9-expressoes-quantidade-frequencia.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 8</h4>
      <p>Avançado — Frases com から、まで、そして、でも</p>
      <a href="simulados/aprenda-simulado-8-frases-com-kara-made.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 7</h4>
      <p>Avançado — Perguntas com か e Palavras Interrogativas</p>
      <a href="simulados/aprenda-simulado-7-perguntas-ka.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 6</h4>
      <p>Intermediário — Partículas も, と, の + Adjetivos I e Na</p>
      <a href="simulados/aprenda-simulado-6-particulas-adjetivos.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 5</h4>
      <p>Intermediário — Verbos no Passado Afirmativo e Negativo (ました / ませんでした)</p>
      <a href="simulados/aprenda-simulado-5-passado.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 4</h4>
      <p>Elementar — Partículas を, に e で + Vocabulário Comida</p>
      <a href="simulados/aprenda-simulado-4-particulas-comida.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 3</h4>
      <p>Elementar — Verbos no Presente Afirmativo (ます) e Vocabulário Casa</p>
      <a href="simulados/aprenda-simulado-3-verbos-vocab-casa.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 2</h4>
      <p>Básico — Partículas は, か e Frases Simples com です</p>
      <a href="simulados/aprenda-simulado-2-particulas-frases.php">Acessar</a>
    </div>
    <div class="lesson-card">
      <h4>Simulado 1</h4>
      <p>Básico — Hiragana e Vocabulário Familiar</p>
      <a href="simulados/aprenda-simulado-1-hiragana-vocab-familiar.php">Acessar</a>
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
