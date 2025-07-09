<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Kanji Lição 1: Introdução</title>
  <meta name="description" content="Lição 1 de Kanji: O que é Kanji, leituras ON/KUN, meta N5, dicas de estudo e roteiro das lições.">
  <link rel="stylesheet" href="/style.css">
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
      min-height: 1000px; /* altura maior para Kanji */
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
    .content {
      width: 100%;
      max-width: 800px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 30px;
    }
    .content h3 { margin-top: 0; }
    .content table { width: 100%; border-collapse: collapse; margin: 20px 0; }
    .content table, .content th, .content td { border: 1px solid #ccc; }
    .content th, .content td { padding: 8px; text-align: center; }
    .back-button {
      display: inline-block;
      margin: 20px 0;
      background: #ff6b6b;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
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
    .ticker .ad-slot.ad-slot-img { background: transparent; }
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

<?php include '../partes/header.php'; ?>

<section class="hero">
  <h2>Kanji — Lição 1: Introdução</h2>
  <p>Entenda o que é Kanji, ON/KUN, meta N5 e veja o roteiro completo.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <div class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <p>📚 <strong>Kanji — Lição 1: Introdução</strong></p>
    <p>✅ <strong>O que você vai aprender nesta lição</strong><br>
    Nesta primeira lição, você vai entender:</p>
    <ul>
      <li>O que é Kanji</li>
      <li>O que são leituras ON e KUN</li>
      <li>Quantos Kanji caem no JLPT N5</li>
      <li>Como vamos estudar neste curso</li>
      <li>Ver o roteiro completo das lições</li>
    </ul>

    <h3>📌 1) O que é Kanji?</h3>
    <p>Kanji (漢字) são ideogramas vindos do chinês, usados junto com Hiragana e Katakana.</p>
    <p>Cada Kanji representa uma ideia (pessoa, objeto, ação) e pode ter mais de uma leitura.</p>
    <p>Kanji não são letras — são símbolos de sentido, que aparecem em palavras junto com Hiragana.</p>

    <h3>📌 2) O que é ON’yomi e KUN’yomi?</h3>
    <p><strong>ON’yomi (音読み):</strong> leitura de origem chinesa.<br>
    Ex.: 学 (がく - gaku) em 学生 (がくせい - estudante).</p>
    <p><strong>KUN’yomi (訓読み):</strong> leitura de origem japonesa nativa.<br>
    Ex.: 見る (みる - miru) → ver.</p>
    <p>No JLPT N5, você não precisa decorar todas as leituras, só 1 ou 2 mais comuns — o bastante para ler palavras básicas.</p>

    <h3>📌 3) Quantos Kanji caem no JLPT N5?</h3>
    <p>O nível N5 cobra cerca de 100 a 120 Kanji.</p>
    <p>Você deve saber:<br>
    ✔️ Reconhecer o Kanji visualmente<br>
    ✔️ Saber a leitura principal (ON/KUN)<br>
    ✔️ Saber o significado básico<br>
    ✔️ Saber palavras reais onde o Kanji aparece</p>

    <h3>📌 4) Como vamos estudar?</h3>
    <p>Cada lição de Kanji traz:</p>
    <ul>
      <li>5 a 6 Kanji organizados por tema</li>
      <li>Leitura ON/KUN mais usada</li>
      <li>Significado prático</li>
      <li>2 exemplos de uso real</li>
      <li>Exercício curto de fixação</li>
    </ul>
    <p>O foco é aprender com contexto real, sempre linkando forma, som e significado.</p>

    <h3>📌 5) Roteiro Completo — JLPT N5 Kanji</h3>
    <table>
      <tr><th>Lição</th><th>Tema</th><th>Kanji</th></tr>
      <tr><td>Lição 1</td><td>Introdução</td><td>O que é Kanji, ON/KUN, dicas</td></tr>
      <tr><td>Lição 2</td><td>Pessoas & Família</td><td>人, 女, 男, 子, 母, 父</td></tr>
      <tr><td>Lição 3</td><td>Casa & Escola</td><td>家, 学, 校, 先, 生, 友</td></tr>
      <tr><td>Lição 4</td><td>Tempo & Dias</td><td>日, 月, 年, 時, 分, 週</td></tr>
      <tr><td>Lição 5</td><td>Direções & Posições</td><td>上, 下, 中, 東, 西, 南, 北</td></tr>
      <tr><td>Lição 6</td><td>Números 1–10</td><td>一, 二, 三, 四, 五, 六, 七, 八, 九, 十</td></tr>
      <tr><td>Lição 7</td><td>Natureza & Clima</td><td>山, 川, 木, 天, 気, 雨</td></tr>
      <tr><td>Lição 8</td><td>Objetos & Coisas</td><td>本, 車, 電, 語, 名, 話</td></tr>
      <tr><td>Lição 9</td><td>Comida & Dinheiro</td><td>食, 飲, 米, 水, 火, 金</td></tr>
      <tr><td>Lição 10</td><td>Verbos & Revisão Final</td><td>行, 見, 入, 出, 買, 来 + exercícios mistos</td></tr>
    </table>

    <h3>📌 6) Resumo</h3>
    <p>✔️ O Kanji é essencial para ler textos reais.<br>
    ✔️ O JLPT N5 cobra o básico, mas exige prática constante.<br>
    ✔️ Cada lição te ajuda a ligar forma, leitura e uso real.<br>
    ✔️ Você não precisa escrever Kanji perfeito na prova — mas precisa reconhecer e entender.</p>

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

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

<?php include '../partes/footer.php'; ?>

</body>
</html>
