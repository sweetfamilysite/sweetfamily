<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Gramática Lição 2: Partículas を, に e で</title>
  <meta name="description" content="Lição 2 de Gramática: Aprenda o uso das partículas を (objeto direto), に (destino/tempo/existência) e で (local da ação), com exemplos e exercícios para o JLPT N5." />
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
    @media (max-width: 768px) {
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
  <h2>Gramática — Lição 2: Partículas de Objeto e Lugar を (wo), に (ni) e で (de)</h2>
  <p>Aprenda a usar as partículas を para objeto direto, に para destino/tempo/existência e で para local da ação com exemplos e exercícios.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <h2>✅ O que você vai aprender nesta lição</h2>
    <ul>
      <li>Uso da partícula を para marcar o objeto direto da ação</li>
      <li>Uso da partícula に para indicar destino, ponto no tempo e lugar de existência</li>
      <li>Uso da partícula で para indicar o local onde ocorre a ação</li>
      <li>Exemplos práticos e exercícios para fixar o conteúdo</li>
    </ul>

    <h3>📌 1) Partícula を (wo) — Objeto Direto</h3>
    <p>Marca o objeto que recebe diretamente a ação do verbo.</p>
    <p><strong>Exemplo:</strong><br>パン を たべます。<br>(Como pão.)</p>

    <h3>📌 2) Partícula に (ni) — Destino, tempo e existência</h3>
    <p>Indica destino para onde alguém vai:<br>がっこう に いきます。 (Vou para a escola.)</p>
    <p>Indica tempo específico:<br>３じ に きます。 (Venho às 3 horas.)</p>
    <p>Indica existência de algo/alguém em lugar:<br>いぬ が いえ に います。 (Tem um cachorro em casa.)</p>

    <h3>📌 3) Partícula で (de) — Local da ação</h3>
    <p>Indica onde uma ação acontece:<br>としょかん で べんきょうします。 (Estudo na biblioteca.)</p>
    <p>Também indica meio de transporte ou instrumento (mais avançado, mas útil para contexto):<br>バス で いきます。 (Vou de ônibus.)</p>

    <h3>📌 4) Exemplos de Frases</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr><th>Frase</th><th>Tradução</th></tr>
      </thead>
      <tbody>
        <tr><td>ごはん を たべます。</td><td>Como arroz.</td></tr>
        <tr><td>がっこう に いきます。</td><td>Vou para a escola.</td></tr>
        <tr><td>としょかん で ほん を よみます。</td><td>Leio livro na biblioteca.</td></tr>
        <tr><td>ともだち に あいます。</td><td>Encontro um amigo.</td></tr>
        <tr><td>バス で いきます。</td><td>Vou de ônibus.</td></tr>
      </tbody>
    </table>

    <h3>📌 5) Mini Exercício 1 — Complete com を, に ou で</h3>
    <p>a) パン __ たべます。<br>b) がっこう __ いきます。<br>c) えき __ バス __ まちます。<br>d) としょかん __ べんきょうします。<br>e) ともだち __ あいます。</p>

    <h3>📌 6) Mini Exercício 2 — Traduza para o japonês</h3>
    <p>a) Eu como pão.<br>b) Vou para a escola.<br>c) Espero o ônibus na estação.<br>d) Estudo na biblioteca.<br>e) Encontro meu amigo.</p>

    <h3>📌 7) Gabarito</h3>
    <p><strong>Mini Exercício 1:</strong><br>a) を<br>b) に<br>c) に / で<br>d) で<br>e) に</p>
    <p><strong>Mini Exercício 2:</strong><br>a) パン を たべます。<br>b) がっこう に いきます。<br>c) えき に バス で まちます。<br>d) としょかん で べんきょうします。<br>e) ともだち に あいます。</p>

    <h3>📌 8) Perguntas de Compreensão</h3>
    <ul>
      <li>Para que serve a partícula を?</li>
      <li>Quando usamos a partícula に?</li>
      <li>Qual a função da partícula で?</li>
      <li>Traduza: パン を たべます。</li>
      <li>Traduza: がっこう に いきます。</li>
    </ul>

    <h3>📌 9) Resumo</h3>
    <ul>
      <li>✔️ Você aprendeu o uso das partículas を, に e で para objeto, destino/tempo e local de ação.</li>
      <li>✔️ Viu exemplos práticos para cada partícula.</li>
      <li>✔️ Praticou com exercícios para fixar o conteúdo.</li>
      <li>✔️ Continue praticando para usar essas partículas com confiança.</li>
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
