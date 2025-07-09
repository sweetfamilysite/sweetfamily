<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 7: Perguntas com か e Palavras Interrogativas</title>
  <meta name="description" content="Simulado 7 para JLPT N5: Pratique perguntas com か e palavras interrogativas como なに, どこ, だれ, いつ, どう com exercícios variados." />
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
  <h2>Simulado 7 — Perguntas com か e Palavras Interrogativas</h2>
  <p>Pratique perguntas com か e palavras interrogativas básicas com exercícios de completar, escolher, traduzir e responder.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Complete as perguntas com a palavra interrogativa correta</h3>
      <ol>
        <li>これは ____ です か。 (O que é isto?)</li>
        <li>トイレ は ____ です か。 (Onde é o banheiro?)</li>
        <li>あの 人 は ____ です か。 (Quem é aquela pessoa?)</li>
        <li>いつ がっこう に いきます か。 (Quando você vai para a escola?)</li>
        <li>これは どう です か。 (Como está isto?)</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Escolha a pergunta correta</h3>
      <p>Pergunta para “Onde é a estação?”</p>
      <ul>
        <li>a) えき は どこ です か。</li>
        <li>b) だれ は えき です か。</li>
        <li>c) いつ は えき です か。</li>
      </ul>
      <p>Pergunta para “Quem é seu professor?”</p>
      <ul>
        <li>a) あなた の せんせい は だれ です か。</li>
        <li>b) どこ の せんせい です か。</li>
        <li>c) なに の せんせい です か。</li>
      </ul>
      <p>Pergunta para “O que você come?”</p>
      <ul>
        <li>a) なに を たべます か。</li>
        <li>b) どこ を たべます か。</li>
        <li>c) いつ を たべます か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Traduza para o japonês</h3>
      <p>a) O que é isto?<br>b) Onde é o banheiro?<br>c) Quem é seu amigo?<br>d) Quando você vai para casa?<br>e) Como está o tempo?</p>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Complete as perguntas</h3>
      <ul>
        <li>a) あなた は ____ です か。 (Quem é você?)</li>
        <li>b) きょう は ____ です か。 (Como está hoje?)</li>
        <li>c) にほん に ____ いきます か。 (Quando vai para o Japão?)</li>
        <li>d) ともだち と ____ します か。 (O que faz com seu amigo?)</li>
        <li>e) としょかん は ____ です か。 (Onde é a biblioteca?)</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Perguntas de compreensão</h3>
      <ul>
        <li>これは なん です か。</li>
        <li>トイレ は どこ です か。</li>
        <li>あの 人 は だれ です か。</li>
        <li>いつ がっこう に いきます か。</li>
        <li>これは どう です か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) なん
b) どこ
c) だれ
d) いつ
e) どう

Parte 2:
a
a
a

Parte 3:
a) これは なん です か。
b) トイレ は どこ です か。
c) あなた の ともだち は だれ です か。
d) あなた は いつ いえ に いきます か。
e) てんき は どう です か。

Parte 4:
a) だれ
b) どう
c) いつ
d) なに
e) どこ

Parte 5:
これは ほん です。
トイレ は みぎ です。
あの 人 は たなかさん です。
いつも がっこう に いきます。
いい てんき です。
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
