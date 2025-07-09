<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 5: Verbos no Passado Afirmativo e Negativo (ました / ませんでした)</title>
  <meta name="description" content="Simulado 5 para JLPT N5: Pratique verbos no passado afirmativo e negativo com ました e ませんでした, com exercícios de completar, traduzir, escolher e compreender." />
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
  <h2>Simulado 5 — Verbos no Passado Afirmativo e Negativo (ました / ませんでした)</h2>
  <p>Exercícios para praticar verbos no passado afirmativo e negativo com ました e ませんでした.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Complete com ました ou ませんでした</h3>
      <ol>
        <li>きのう パン を たべ__。</li>
        <li>せんしゅう がっこう に いき__。</li>
        <li>きのう みず を のみ__。</li>
        <li>ともだち と はなし__。</li>
        <li>きのう テレビ を みません__。</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Traduza para o japonês</h3>
      <p>a) Ontem comi arroz.<br>b) Semana passada não fui para a escola.<br>c) Eu não bebi água ontem.<br>d) Falei com um amigo.<br>e) Não assisti TV ontem.</p>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Escolha a frase correta</h3>
      <p>Qual frase está correta?</p>
      <ul>
        <li>a) きのう パン を たべました。</li>
        <li>b) きのう パン を たべませんでした。</li>
      </ul>
      <ul>
        <li>a) せんしゅう がっこう に いきませんでした。</li>
        <li>b) せんしゅう がっこう に いきました。</li>
      </ul>
      <ul>
        <li>a) ともだち と はなしました。</li>
        <li>b) ともだち と はなしませんでした。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Complete as frases</h3>
      <ul>
        <li>a) きのう すし を ____。 (Eu comi sushi ontem.)</li>
        <li>b) きのう がっこう に ____。 (Ontem fui para a escola.)</li>
        <li>c) せんしゅう おちゃ を ____。 (Semana passada bebi chá.)</li>
        <li>d) ともだち と ____。 (Falei com amigo.)</li>
        <li>e) きのう テレビ を ____。 (Ontem não assisti TV.)</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Perguntas de compreensão</h3>
      <ul>
        <li>きのう なに を たべました か。</li>
        <li>せんしゅう がっこう に いきました か。</li>
        <li>ともだち と はなしました か。</li>
        <li>きのう なに を のみました か。</li>
        <li>きのう テレビ を みました か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) ました
b) ました
c) ませんでした
d) ました
e) ませんでした

Parte 2:
a) きのう ごはん を たべました。
b) せんしゅう がっこう に いきませんでした。
c) きのう みず を のみませんでした。
d) ともだち と はなしました。
e) きのう テレビ を みませんでした。

Parte 3:
a
b
a

Parte 4:
a) たべました
b) いきました
c) のみました
d) はなしました
e) みませんでした

Parte 5:
ごはん を たべました。
はい、いきました。 / いいえ、いきませんでした。
はい、はなしました。 / いいえ、はなしませんでした。
みず を のみました。
はい、みました。 / いいえ、みませんでした。
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
