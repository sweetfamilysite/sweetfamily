<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 3: Verbos no Presente Afirmativo (ます) e Vocabulário Casa</title>
  <meta name="description" content="Simulado 3 para JLPT N5: Pratique verbos no presente afirmativo (ます) e vocabulário de casa com exercícios de completar, tradução, escolha e compreensão." />
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
  <h2>Simulado 3 — Verbos no Presente Afirmativo (ます) e Vocabulário Casa</h2>
  <p>Pratique conjugação de verbos no presente e vocabulário de casa com exercícios para completar, traduzir, escolher e responder.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Complete com a forma correta do verbo (ます)</h3>
      <ol>
        <li>パン を たべ__。</li>
        <li>みず を のみ__。</li>
        <li>つくえ の うえ に ほん を おき__。</li>
        <li>いえ に かえり__。</li>
        <li>まど を あけ__。</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Traduza para o japonês</h3>
      <p>a) Eu como pão.<br>b) Bebo água.<br>c) Coloco o livro na mesa.<br>d) Volto para casa.<br>e) Abro a janela.</p>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Escolha a palavra correta para completar</h3>
      <p>Complete com a palavra correta do vocabulário de casa:</p>
      <ul>
        <li>____ は ひろい です.</li>
        <ul>
          <li>a) へや</li>
          <li>b) ともだち</li>
          <li>c) がっこう</li>
        </ul>
        <li>つくえ の うえ に ____ があります。</li>
        <ul>
          <li>a) ほん</li>
          <li>b) くるま</li>
          <li>c) いえ</li>
        </ul>
        <li>まど を ____。</li>
        <ul>
          <li>a) あけます</li>
          <li>b) いきます</li>
          <li>c) のみます</li>
        </ul>
        <li>いえ に ____。</li>
        <ul>
          <li>a) いきます</li>
          <li>b) かえります</li>
          <li>c) たべます</li>
        </ul>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Complete as frases</h3>
      <ul>
        <li>a) わたし は ____ を たべます。 (Eu como pão.)</li>
        <li>b) へや に ____ が あります。 (Tem uma cadeira no quarto.)</li>
        <li>c) つくえ の うえ に ____ があります。 (Tem um livro em cima da mesa.)</li>
        <li>d) いえ に ____。 (Volto para casa.)</li>
        <li>e) まど を ____。 (Abro a janela.)</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Perguntas de compreensão</h3>
      <ul>
        <li>へや に なに が あります か。</li>
        <li>あなた は なに を たべます か。</li>
        <li>いえ に いつ かえります か。</li>
        <li>まど を あけます か。</li>
        <li>つくえ の うえ に なに が あります か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) ます
b) ます
c) ます
d) ます
e) ます

Parte 2:
a) パン を たべます。
b) みず を のみます。
c) つくえ の うえ に ほん を おきます。
d) いえ に かえります。
e) まど を あけます。

Parte 3:
a) へや
a) ほん
a) あけます
b) かえります

Parte 4:
a) パン
b) いす
c) ほん
d) かえります
e) あけます

Parte 5:
いす が あります。
パン を たべます。
こんばん かえります。
はい、あけます。 / いいえ、あけません。
ほん が あります。
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
