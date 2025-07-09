<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 9: Expressões de Quantidade, Frequência e Verbos Modais</title>
  <meta name="description" content="Simulado 9 para JLPT N5: Pratique expressões de quantidade, frequência e verbos modais como たくさん, すこし, まいにち, よく, ときどき e できます com exercícios variados." />
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
  <h2>Simulado 9 — Expressões de Quantidade, Frequência e Verbos Modais</h2>
  <p>Pratique expressões como たくさん, すこし, まいにち, よく, ときどき e できます com exercícios para completar, escolher, traduzir e responder perguntas.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Complete as frases com たくさん, すこし, まいにち, よく ou ときどき</h3>
      <ol>
        <li>わたし は ごはん を ____ たべます。</li>
        <li>かれ は テレビ を ____ みます。</li>
        <li>あなた は ____ べんきょうします か。</li>
        <li>ともだち と ____ あそびます。</li>
        <li>せんせい は ____ うたが できます。</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Escolha a palavra correta para completar</h3>
      <p>たくさん は どんな いみ です か？</p>
      <ul>
        <li>a) Pouco</li>
        <li>b) Muito</li>
        <li>c) Nunca</li>
      </ul>
      <p>すき と きらい は なに を あらわします か？</p>
      <ul>
        <li>a) Preferência e desgosto</li>
        <li>b) Quantidade</li>
        <li>c) Tempo</li>
      </ul>
      <p>できます は どういう いみ です か？</p>
      <ul>
        <li>a) Saber fazer algo / habilidade</li>
        <li>b) Gostar</li>
        <li>c) Não gostar</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Traduza para o japonês</h3>
      <p>a) Eu estudo todos os dias.<br>b) Ela gosta de sushi.<br>c) Ele não gosta de café.<br>d) Nós podemos falar japonês.<br>e) Às vezes jogo futebol.</p>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Complete as frases</h3>
      <ul>
        <li>a) まいにち べんきょう ____。</li>
        <li>b) すし が ____ です。</li>
        <li>c) コーヒー が ____ です。</li>
        <li>d) にほんご が ____。</li>
        <li>e) サッカー を ____ ときどき します。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Perguntas de compreensão</h3>
      <ul>
        <li>たくさん は どんな いみ です か。</li>
        <li>すき と きらい の ちがい は なに です か。</li>
        <li>できます は どういう いみ です か。</li>
        <li>まいにち なに を します か。</li>
        <li>ときどき なに を します か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) たくさん
b) よく
c) まいにち
d) ときどき
e) できます

Parte 2:
b
a
a

Parte 3:
a) わたし は まいにち べんきょうします。
b) かのじょ は すし が すき です。
c) かれ は コーヒー が きらい です。
d) わたしたち は にほんご が できます。
e) ときどき サッカー を します。

Parte 4:
a) します
b) すき
c) きらい
d) できます
e) します

Parte 5:
たくさん は 「muito」 の いみ です。
すき は 「gostar」 で、きらい は 「não gostar」 の いみ です。
できます は 「saber fazer」 や 「habilidade」 の いみ です。
まいにち べんきょう します。
ときどき サッカー を します。
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
