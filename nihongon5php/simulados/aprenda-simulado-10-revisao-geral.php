<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Simulado 10: Revisão Geral com Kanji N5, Vocabulário e Gramática</title>
  <meta name="description" content="Simulado 10 para JLPT N5: Revisão geral com kanji, vocabulário e gramática. Exercícios de leitura, escolha, partículas, verbos e compreensão para fixar o conteúdo." />
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
  <h2>Simulado 10 — Revisão Geral com Kanji N5, Vocabulário e Gramática</h2>
  <p>Reforce seu aprendizado com exercícios que abrangem kanji, vocabulário e gramática do JLPT N5.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <section class="exercise">
      <h3>Parte 1 — Kanji: Leia e escreva a leitura correta (hiragana)</h3>
      <ol>
        <li>人</li>
        <li>学</li>
        <li>子</li>
        <li>母</li>
        <li>車</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 2 — Vocabulário: Escolha a palavra correta</h3>
      <p>Qual é a palavra para “família”?</p>
      <ul>
        <li>a) ともだち</li>
        <li>b) かぞく</li>
        <li>c) いえ</li>
      </ul>
      <p>Qual é a palavra para “escola”?</p>
      <ul>
        <li>a) がっこう</li>
        <li>b) へや</li>
        <li>c) でんしゃ</li>
      </ul>
      <p>Qual é a palavra para “comida”?</p>
      <ul>
        <li>a) たべもの</li>
        <li>b) のみもの</li>
        <li>c) くるま</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Parte 3 — Gramática: Complete com a partícula correta (は, が, を, に, で)</h3>
      <ol>
        <li>わたし __ がくせい です。</li>
        <li>パン __ たべます。</li>
        <li>としょかん __ べんきょうします。</li>
        <li>きょう __ がっこう に いきます。</li>
        <li>ともだち __ あいます。</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 4 — Traduza para o japonês</h3>
      <ol>
        <li>Eu sou estudante.</li>
        <li>Como pão.</li>
        <li>Estudo na biblioteca.</li>
        <li>Vou para a escola hoje.</li>
        <li>Encontro um amigo.</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 5 — Verbos: Complete com a forma correta (ます / ません / ました / ませんでした)</h3>
      <ol>
        <li>パン を たべ__。 (Presente afirmativo)</li>
        <li>みず を のみ__。 (Presente negativo)</li>
        <li>きのう がっこう に いき__。 (Passado afirmativo)</li>
        <li>せんしゅう ともだち に あいません__。 (Passado negativo)</li>
        <li>まいにち べんきょうし__。 (Presente afirmativo)</li>
      </ol>
    </section>

    <section class="exercise">
      <h3>Parte 6 — Perguntas de compreensão</h3>
      <ul>
        <li>人 の よみかた は なん です か。</li>
        <li>がっこう は どこ です か。</li>
        <li>きょう なに を します か。</li>
        <li>きのう パン を たべました か。</li>
        <li>ともだち と なに を します か。</li>
      </ul>
    </section>

    <section class="exercise">
      <h3>Gabarito</h3>
      <pre class="answer-key">
Parte 1:
a) ひと
b) がく
c) こ
d) はは
e) くるま

Parte 2:
b
a
a

Parte 3:
a) は
b) を
c) で
d) に
e) に

Parte 4:
a) わたし は がくせい です。
b) パン を たべます。
c) としょかん で べんきょうします。
d) きょう がっこう に いきます。
e) ともだち に あいます。

Parte 5:
a) ます
b) ません
c) ました
d) ませんでした
e) します

Parte 6:
ひと です。
がっこう は ここ です。
がっこう に いきます。
はい、たべました。 / いいえ、たべませんでした。
あそびます。 / べんきょうします。
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
