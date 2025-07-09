<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Vocabulário Lição 3: Comida e Bebida</title>
  <meta name="description" content="Lição 3 de Vocabulário: Aprenda palavras básicas sobre alimentos e bebidas, exemplos de frases e exercícios práticos para o JLPT N5." />
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
  <h2>Vocabulário — Lição 3: Comida e Bebida</h2>
  <p>Vocabulário básico relacionado a alimentos e bebidas, com frases simples e exercícios para fixar.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left">
    <!-- publicidade esquerda -->
  </div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <h2>✅ O que você vai aprender nesta lição</h2>
    <ul>
      <li>Vocabulário básico relacionado a alimentos e bebidas</li>
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
        <tr><td>ごはん</td><td>ごはん</td><td>Arroz, refeição</td></tr>
        <tr><td>パン</td><td>ぱん</td><td>Pão</td></tr>
        <tr><td>みず</td><td>みず</td><td>Água</td></tr>
        <tr><td>おちゃ</td><td>おちゃ</td><td>Chá</td></tr>
        <tr><td>くだもの</td><td>くだもの</td><td>Fruta</td></tr>
        <tr><td>にく</td><td>にく</td><td>Carne</td></tr>
        <tr><td>さかな</td><td>さかな</td><td>Peixe</td></tr>
        <tr><td>やさい</td><td>やさい</td><td>Legumes, verduras</td></tr>
        <tr><td>たまご</td><td>たまご</td><td>Ovo</td></tr>
        <tr><td>すし</td><td>すし</td><td>Sushi</td></tr>
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
        <tr><td>ごはん を たべます。</td><td>Como arroz.</td></tr>
        <tr><td>パン を かいます。</td><td>Compro pão.</td></tr>
        <tr><td>みず を のみます。</td><td>Bebo água.</td></tr>
        <tr><td>おちゃ が すき です。</td><td>Gosto de chá.</td></tr>
        <tr><td>くだもの を たくさん たべます。</td><td>Como muitas frutas.</td></tr>
      </tbody>
    </table>

    <h3>📌 3) Mini Exercício 1 — Tradução</h3>
    <p>Traduza para o japonês:</p>
    <ol>
      <li>Eu como peixe.</li>
      <li>Gosto de pão.</li>
      <li>Você bebe água?</li>
      <li>Compro legumes.</li>
      <li>Como sushi todos os dias.</li>
    </ol>

    <h3>📌 4) Mini Exercício 2 — Complete com a palavra correta</h3>
    <p>Complete a frase com a palavra correta do vocabulário:</p>
    <ol>
      <li>わたし は ____ を たべます。</li>
      <li>____ を のみます。</li>
      <li>パン が ____ です。</li>
      <li>____ を かいます。</li>
      <li>きょう は ____ を たべました。</li>
    </ol>

    <h3>📌 5) Gabarito</h3>
    <p><strong>Mini Exercício 1:</strong></p>
    <ul>
      <li>a) さかな を たべます。</li>
      <li>b) パン が すき です。</li>
      <li>c) みず を のみます か。</li>
      <li>d) やさい を かいます。</li>
      <li>e) まいにち すし を たべます。</li>
    </ul>
    <p><strong>Mini Exercício 2:</strong></p>
    <ul>
      <li>a) ごはん</li>
      <li>b) みず</li>
      <li>c) すき</li>
      <li>d) さかな</li>
      <li>e) すし</li>
    </ul>

    <h3>📌 6) Perguntas de Compreensão</h3>
    <ul>
      <li>Como se diz “arroz” em japonês?</li>
      <li>Qual a palavra para “pão”?</li>
      <li>Como se diz “água”?</li>
      <li>Traduza: ごはん を たべます。</li>
      <li>Traduza: おちゃ が すき です。</li>
    </ul>

    <h3>📌 7) Resumo</h3>
    <ul>
      <li>✔️ Você aprendeu vocabulário básico de comida e bebida.</li>
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
