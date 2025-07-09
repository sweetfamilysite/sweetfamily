<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Vocabulário Lição 9: Transporte e Direções</title>
  <meta name="description" content="Lição 9 de Vocabulário: Vocabulário básico sobre transporte e direções com exemplos e exercícios para o JLPT N5." />
  <link rel="stylesheet" href="/style.css" />
  <style>
    body { margin: 0; font-family: Arial, sans-serif; line-height: 1.6; }
    .hero { padding: 40px; text-align: center; background: #ffe66d; }
    .layout {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      gap: 20px;
      min-height: 1000px;
      box-sizing: border-box;
    }
    .ads-left, .ads-right {
      width: 300px;
      flex-shrink: 0;
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
    main.content {
      flex-grow: 1;
      max-width: 800px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 80px 30px 30px;
      box-sizing: border-box;
      position: relative;
    }
    .back-button {
      position: absolute;
      top: 20px;
      left: 30px;
      background: #ff6b6b;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
      z-index: 10;
    }
    .back-button:hover {
      background: #e04b4b;
    }
    .content h2, .content h3 {
      margin-top: 0;
    }
    .content table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }
    .content table, .content th, .content td {
      border: 1px solid #ccc;
    }
    .content th, .content td {
      padding: 8px;
      text-align: center;
    }
    .content ul, .content ol {
      margin-left: 20px;
      margin-bottom: 20px;
    }
    .back-button-final {
      background: #ff6b6b;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
      margin-top: 20px;
      display: inline-block;
    }
    .back-button-final:hover {
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
    @media (max-width: 992px) {
      .layout {
        flex-direction: column;
        min-height: auto;
      }
      .ads-left, .ads-right, main.content {
        width: 100%;
        max-width: none;
      }
      main.content {
        padding: 30px 20px 20px;
        position: static;
      }
      .back-button {
        position: static;
        margin-bottom: 20px;
        left: auto;
        top: auto;
        display: inline-block;
      }
    }
  </style>
</head>
<body>

<?php include '../partes/header.php'; ?>

<section class="hero">
  <h2>Vocabulário — Lição 9: Transporte e Direções</h2>
  <p>Vocabulário básico relacionado a transporte e direções, com exemplos e exercícios para fixar.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left">
    <!-- publicidade esquerda -->
  </div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <h2>✅ O que você vai aprender nesta lição</h2>
    <ul>
      <li>Vocabulário básico relacionado a transporte e direções</li>
      <li>Como usar essas palavras em frases simples do dia a dia</li>
      <li>Exercícios para memorizar e aplicar o vocabulário</li>
    </ul>

    <h3>📌 1) Lista de Vocabulário</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr>
          <th>Japonês</th>
          <th>Hiragana</th>
          <th>Significado</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>くるま</td><td>くるま</td><td>Carro</td></tr>
        <tr><td>バス</td><td>ばす</td><td>Ônibus</td></tr>
        <tr><td>えき</td><td>えき</td><td>Estação</td></tr>
        <tr><td>でんしゃ</td><td>でんしゃ</td><td>Trem</td></tr>
        <tr><td>みち</td><td>みち</td><td>Rua, caminho</td></tr>
        <tr><td>ひだり</td><td>ひだり</td><td>Esquerda</td></tr>
        <tr><td>みぎ</td><td>みぎ</td><td>Direita</td></tr>
        <tr><td>うえ</td><td>うえ</td><td>Cima, em cima</td></tr>
        <tr><td>した</td><td>した</td><td>Baixo, embaixo</td></tr>
        <tr><td>まっすぐ</td><td>まっすぐ</td><td>Em frente, reto</td></tr>
      </tbody>
    </table>

    <h3>📌 2) Exemplos de Frases</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr>
          <th>Frase</th>
          <th>Tradução</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>バス で がっこう に いきます。</td><td>Vou para a escola de ônibus.</td></tr>
        <tr><td>えき は みぎ に あります。</td><td>A estação fica à direita.</td></tr>
        <tr><td>みち を まっすぐ いきます。</td><td>Vou reto pela rua.</td></tr>
        <tr><td>くるま が はしっています。</td><td>O carro está andando.</td></tr>
        <tr><td>ひだり に まがって ください。</td><td>Por favor, vire à esquerda.</td></tr>
      </tbody>
    </table>

    <h3>📌 3) Mini Exercício 1 — Tradução</h3>
    <p>Traduza para o japonês:</p>
    <ol>
      <li>Vou de trem para o trabalho.</li>
      <li>A estação fica à esquerda.</li>
      <li>Vire à direita.</li>
      <li>O ônibus está parado.</li>
      <li>Vá reto até o cruzamento.</li>
    </ol>

    <h3>📌 4) Mini Exercício 2 — Complete com a palavra correta</h3>
    <p>Complete a frase com a palavra correta do vocabulário:</p>
    <ol>
      <li>くるま が ____。</li>
      <li>えき は ____ に あります。</li>
      <li>みち を ____ いきます。</li>
      <li>バス で ____ に いきます。</li>
      <li>ひだり に ____ ください。</li>
    </ol>

    <h3>📌 5) Gabarito</h3>
    <p><strong>Mini Exercício 1:</strong></p>
    <ul>
      <li>a) でんしゃ で しごと に いきます。</li>
      <li>b) えき は ひだり に あります。</li>
      <li>c) みぎ に まがって ください。</li>
      <li>d) バス は とまっています。</li>
      <li>e) みち を まっすぐ いきます。</li>
    </ul>
    <p><strong>Mini Exercício 2:</strong></p>
    <ul>
      <li>a) はしっています</li>
      <li>b) みぎ</li>
      <li>c) まっすぐ</li>
      <li>d) がっこう</li>
      <li>e) まがって</li>
    </ul>

    <h3>📌 6) Perguntas de Compreensão</h3>
    <ul>
      <li>Como se diz “ônibus” em japonês?</li>
      <li>Qual a palavra para “esquerda”?</li>
      <li>Como se diz “em frente” ou “reto”?</li>
      <li>Traduza: バス で がっこう に いきます。</li>
      <li>Traduza: ひだり に まがって ください。</li>
    </ul>

    <h3>📌 7) Resumo</h3>
    <ul>
      <li>✔️ Você aprendeu vocabulário básico sobre transporte e direções.</li>
      <li>✔️ Viu como usar essas palavras em frases do cotidiano.</li>
      <li>✔️ Praticou com exercícios para fixar o conteúdo.</li>
      <li>✔️ Continue praticando para consolidar o aprendizado.</li>
    </ul>

    <button class="back-button-final" onclick="history.back()">⬅️ Voltar</button>

  </main>

  <div class="ads-right" id="ads-right"></div>
</div>

<div class="ticker">
  <div class="ticker-track">
    <div class="ad-slot">Anúncio 1</div>
    <div class="ad-slot">Anúncio 2</div>
    <div class="ad-slot ad-slot-img"><img src="/ads/sample.jpg" alt="Ad"></div>
  </div>
</div>

<?php include '../partes/footer.php'; ?>

</body>
</html>
