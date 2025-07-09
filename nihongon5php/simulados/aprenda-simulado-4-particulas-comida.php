<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 4: Partículas を, に e で + Vocabulário Comida</title>
  <meta name="description" content="Simulado 4 para JLPT N5: Pratique partículas を, に e で com vocabulário de comida através de exercícios para completar, escolher, traduzir e compreender." />
  <link rel="stylesheet" href="/style.css" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }
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
      min-height: 1200px;
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
      word-wrap: break-word;
      overflow-wrap: break-word;
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
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s;
      z-index: 10;
      white-space: nowrap;
    }
    .back-button:hover {
      background: #e04b4b;
    }
    h2, h3 {
      margin-top: 0;
    }
    section.exercise {
      margin-bottom: 40px;
    }
    ul, ol {
      margin-left: 20px;
      margin-bottom: 20px;
    }
    ul li, ol li {
      margin-bottom: 6px;
    }
    .answer-key {
      background: #f9f9f9;
      border: 1px solid #ddd;
      padding: 15px;
      margin-top: 10px;
      white-space: pre-wrap;
      font-family: monospace;
      font-size: 14px;
      overflow-x: auto;
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
        white-space: normal;
      }
    }
  </style>
</head>
<body>

<?php include '../partes/header.php'; ?>

<section class="hero">
  <h2>Simulado 4 — Partículas を, に e で + Vocabulário Comida</h2>
  <p>Pratique as partículas を, に e で com vocabulário de comida usando exercícios variados.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Complete as frases com を, に ou で</h3>
      <ol>
        <li>パン __ たべます。</li>
        <li>がっこう __ いきます。</li>
        <li>ともだち __ あいます。</li>
        <li>きっさてん __ コーヒー __ のみます。</li>
        <li>スーパー __ かいもの __ します。</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Escolha a palavra correta para completar</h3>
      <p>Complete a frase com a palavra correta do vocabulário comida:</p>
      <ul>
        <li>わたし は ____ を たべます。</li>
        <ul>
          <li>a) いす</li>
          <li>b) ごはん</li>
          <li>c) へや</li>
        </ul>
        <li>パン __ ____ が すき です。</li>
        <ul>
          <li>a) ともだち</li>
          <li>b) たべもの</li>
          <li>c) くだもの</li>
        </ul>
        <li>みず __ ____ を のみます。</li>
        <ul>
          <li>a) いえ</li>
          <li>b) ごはん</li>
          <li>c) おちゃ</li>
        </ul>
        <li>すし __ ____ を たべます。</li>
        <ul>
          <li>a) みず</li>
          <li>b) さかな</li>
          <li>c) つくえ</li>
        </ul>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Traduza para o japonês</h3>
      <p>a) Eu como arroz.<br>b) Vou para a escola.<br>c) Encontro um amigo.<br>d) Bebo café na cafeteria.<br>e) Faço compras no supermercado.</p>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Complete as frases</h3>
      <ul>
        <li>a) わたし は ____ を たべます。 (Eu como arroz.)</li>
        <li>b) きっさてん ____ コーヒー を のみます。 (Bebo café na cafeteria.)</li>
        <li>c) スーパー ____ かいもの を します。 (Faço compras no supermercado.)</li>
        <li>d) ともだち ____ あいます。 (Encontro um amigo.)</li>
        <li>e) がっこう ____ いきます。 (Vou para a escola.)</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Perguntas de compreensão</h3>
      <ul>
        <li>なに を たべます か。</li>
        <li>どこ で コーヒー を のみます か。</li>
        <li>ともだち に あいます か。</li>
        <li>いつ がっこう に いきます か。</li>
        <li>スーパー で なに を します か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) を
b) に
c) に
d) で / を
e) で / を

Parte 2:
b) ごはん
c) くだもの
c) おちゃ
b) さかな

Parte 3:
a) わたし は ごはん を たべます。
b) がっこう に いきます。
c) ともだち に あいます。
d) きっさてん で コーヒー を のみます。
e) スーパー で かいもの を します。

Parte 4:
a) ごはん
b) で
c) で
d) に
e) に

Parte 5:
ごはん を たべます。
きっさてん で のみます。
はい、あいます。
まいにち いきます。
かいもの を します。
      </pre>
    </section>

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
