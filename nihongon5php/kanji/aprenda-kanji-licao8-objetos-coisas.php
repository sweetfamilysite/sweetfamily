<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Kanji Lição 8: Objetos & Coisas</title>
  <meta name="description" content="Lição 8 de Kanji: Objetos & Coisas — 本, 車, 電, 語, 名, 話. Leituras ON/KUN, exemplos reais, frases e exercício.">
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
      min-height: 1000px;
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
  <h2>Kanji — Lição 8: Objetos & Coisas</h2>
  <p>Aprenda 6 Kanji essenciais para falar de objetos, transporte e comunicação no JLPT N5.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <div class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <p>✅ <strong>O que você vai aprender nesta lição</strong><br>
    Nesta lição, você vai aprender 6 Kanji essenciais para falar de objetos do dia a dia, transporte, idioma e comunicação — todos comuns em textos e perguntas do JLPT N5.</p>

    <h3>📌 1) Tabela de Kanji</h3>
    <table>
      <tr><th>Kanji</th><th>ON’yomi</th><th>KUN’yomi</th><th>Significado</th></tr>
      <tr><td>本</td><td>ホン (hon)</td><td>もと (moto)</td><td>Livro, origem</td></tr>
      <tr><td>車</td><td>シャ (sha)</td><td>くるま (kuruma)</td><td>Carro</td></tr>
      <tr><td>電</td><td>デン (den)</td><td>—</td><td>Eletricidade</td></tr>
      <tr><td>語</td><td>ゴ (go)</td><td>かた(る) (kataru)</td><td>Língua, idioma</td></tr>
      <tr><td>名</td><td>メイ (mei) / ミョウ (myō)</td><td>な (na)</td><td>Nome</td></tr>
      <tr><td>話</td><td>ワ (wa)</td><td>はな(す) (hanasu)</td><td>Falar, conversa</td></tr>
    </table>

    <h3>📌 2) Exemplos Reais</h3>
    <table>
      <tr><th>Kanji</th><th>Palavra</th><th>Hiragana</th><th>Significado</th></tr>
      <tr><td>本</td><td>本</td><td>ほん</td><td>Livro</td></tr>
      <tr><td>本</td><td>日本</td><td>にほん</td><td>Japão</td></tr>
      <tr><td>車</td><td>車</td><td>くるま</td><td>Carro</td></tr>
      <tr><td>車</td><td>電車</td><td>でんしゃ</td><td>Trem</td></tr>
      <tr><td>電</td><td>電気</td><td>でんき</td><td>Eletricidade, luz</td></tr>
      <tr><td>電</td><td>電話</td><td>でんわ</td><td>Telefone</td></tr>
      <tr><td>語</td><td>日本語</td><td>にほんご</td><td>Língua japonesa</td></tr>
      <tr><td>語</td><td>英語</td><td>えいご</td><td>Inglês</td></tr>
      <tr><td>名</td><td>名前</td><td>なまえ</td><td>Nome</td></tr>
      <tr><td>名</td><td>有名</td><td>ゆうめい</td><td>Famoso</td></tr>
      <tr><td>話</td><td>話す</td><td>はなす</td><td>Falar</td></tr>
      <tr><td>話</td><td>会話</td><td>かいわ</td><td>Conversa</td></tr>
    </table>

    <h3>📌 3) Frases Curtas</h3>
    <p>本 を よみます。<br>Significado: (Eu) leio um livro.</p>
    <p>電車 で いきます。<br>Significado: Vou de trem.</p>
    <p>でんわ を つかいます。<br>Significado: Uso o telefone.</p>
    <p>日本語 を はなします。<br>Significado: Falo japonês.</p>
    <p>名前 を かいて ください。<br>Significado: Escreva o nome, por favor.</p>

    <h3>📌 4) Mini Exercício</h3>
    <p>Complete com a leitura correta:</p>
    <p>a) 本 → ()<br>b) 電話 → ()<br>c) 電車 → (________)<br>d) 日本語 → (____)<br>e) 名前 → (________)</p>

    <h4>✅ Respostas Corretas:</h4>
    <p>a) ほん<br>b) でんわ<br>c) でんしゃ<br>d) にほんご<br>e) なまえ</p>

    <h3>📌 5) Resumo</h3>
    <p>✔️ Você aprendeu 6 Kanji muito usados para objetos, transporte e comunicação.<br>
    ✔️ Viu ON/KUN em palavras reais.<br>
    ✔️ Esses Kanji aparecem em instruções, placas e diálogos básicos.<br>
    ✔️ Pratique escrevendo cada um 10 vezes, repetindo os exemplos e criando frases suas.</p>

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
