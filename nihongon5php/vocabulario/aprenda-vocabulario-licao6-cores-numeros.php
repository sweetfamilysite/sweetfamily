<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NihongoN5.ONLINE - Vocabulário Lição 6: Cores e Números</title>
  <meta name="description" content="Lição 6 de Vocabulário: Aprenda as cores mais comuns e números de 1 a 20 em japonês, com exemplos e exercícios para o JLPT N5." />
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
  <h2>Vocabulário — Lição 6: Cores e Números</h2>
  <p>Vocabulário básico das cores mais comuns e números de 1 a 20, com frases simples e exercícios para fixar.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left">
    <!-- publicidade esquerda -->
  </div>

  <main class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <h2>✅ O que você vai aprender nesta lição</h2>
    <ul>
      <li>Vocabulário básico das cores mais comuns</li>
      <li>Números de 1 a 20 em japonês</li>
      <li>Como usar cores e números em frases simples</li>
      <li>Exercícios para memorizar e aplicar o vocabulário</li>
    </ul>

    <h3>📌 1) Lista de Cores</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr>
          <th>Japonês</th>
          <th>Hiragana</th>
          <th>Significado</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>あか</td><td>あか</td><td>Vermelho</td></tr>
        <tr><td>あお</td><td>あお</td><td>Azul</td></tr>
        <tr><td>きいろ</td><td>きいろ</td><td>Amarelo</td></tr>
        <tr><td>しろ</td><td>しろ</td><td>Branco</td></tr>
        <tr><td>くろ</td><td>くろ</td><td>Preto</td></tr>
        <tr><td>みどり</td><td>みどり</td><td>Verde</td></tr>
        <tr><td>オレンジ</td><td>おれんじ</td><td>Laranja</td></tr>
        <tr><td>ピンク</td><td>ぴんく</td><td>Rosa</td></tr>
      </tbody>
    </table>

    <h3>📌 2) Lista de Números</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr>
          <th>Número</th>
          <th>Japonês</th>
          <th>Hiragana</th>
          <th>Significado</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>いち</td><td>いち</td><td>Um</td></tr>
        <tr><td>2</td><td>に</td><td>に</td><td>Dois</td></tr>
        <tr><td>3</td><td>さん</td><td>さん</td><td>Três</td></tr>
        <tr><td>4</td><td>し / よん</td><td>し / よん</td><td>Quatro</td></tr>
        <tr><td>5</td><td>ご</td><td>ご</td><td>Cinco</td></tr>
        <tr><td>6</td><td>ろく</td><td>ろく</td><td>Seis</td></tr>
        <tr><td>7</td><td>しち / なな</td><td>しち / なな</td><td>Sete</td></tr>
        <tr><td>8</td><td>はち</td><td>はち</td><td>Oito</td></tr>
        <tr><td>9</td><td>きゅう / く</td><td>きゅう / く</td><td>Nove</td></tr>
        <tr><td>10</td><td>じゅう</td><td>じゅう</td><td>Dez</td></tr>
        <tr><td>11</td><td>じゅういち</td><td>じゅういち</td><td>Onze</td></tr>
        <tr><td>12</td><td>じゅうに</td><td>じゅうに</td><td>Doze</td></tr>
        <tr><td>13</td><td>じゅうさん</td><td>じゅうさん</td><td>Treze</td></tr>
        <tr><td>14</td><td>じゅうよん</td><td>じゅうよん</td><td>Quatorze</td></tr>
        <tr><td>15</td><td>じゅうご</td><td>じゅうご</td><td>Quinze</td></tr>
        <tr><td>16</td><td>じゅうろく</td><td>じゅうろく</td><td>Dezesseis</td></tr>
        <tr><td>17</td><td>じゅうなな</td><td>じゅうなな</td><td>Dezessete</td></tr>
        <tr><td>18</td><td>じゅうはち</td><td>じゅうはち</td><td>Dezoito</td></tr>
        <tr><td>19</td><td>じゅうきゅう</td><td>じゅうきゅう</td><td>Dezenove</td></tr>
        <tr><td>20</td><td>にじゅう</td><td>にじゅう</td><td>Vinte</td></tr>
      </tbody>
    </table>

    <h3>📌 3) Exemplos de Frases</h3>
    <table>
      <thead style="background-color: #ffe66d;">
        <tr>
          <th>Frase</th>
          <th>Tradução</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>これは あかい くるま です。</td><td>Este é um carro vermelho.</td></tr>
        <tr><td>ねこ が さん います。</td><td>Tem três gatos.</td></tr>
        <tr><td>わたし の つくえ は きいろ です。</td><td>Minha mesa é amarela.</td></tr>
        <tr><td>パーティー に じゅう にん きます。</td><td>Vinte pessoas virão à festa.</td></tr>
      </tbody>
    </table>

    <h3>📌 4) Mini Exercício 1 — Tradução</h3>
    <p>Traduza para o japonês:</p>
    <ol>
      <li>Eu tenho dois livros.</li>
      <li>O carro é azul.</li>
      <li>Tem cinco pessoas na sala.</li>
      <li>Minha bolsa é preta.</li>
      <li>Vou comprar dez maçãs.</li>
    </ol>

    <h3>📌 5) Mini Exercício 2 — Complete com a cor ou número correto</h3>
    <p>Complete a frase com a palavra correta:</p>
    <ol>
      <li>いぬ は ____ です。</li>
      <li>くるま は ____ です。</li>
      <li>ねこ が ____ います。</li>
      <li>ともだち が ____ にん います。</li>
      <li>りんご を ____ かいます。</li>
    </ol>

    <h3>📌 6) Gabarito</h3>
    <p><strong>Mini Exercício 1:</strong></p>
    <ul>
      <li>a) ほん が に あります。</li>
      <li>b) くるま は あおい です。</li>
      <li>c) へや に ごにん います。</li>
      <li>d) わたし の かばん は くろい です。</li>
      <li>e) りんご を じゅう かいます。</li>
    </ul>
    <p><strong>Mini Exercício 2:</strong></p>
    <ul>
      <li>a) くろ</li>
      <li>b) あか</li>
      <li>c) はち</li>
      <li>d) よん</li>
      <li>e) じゅうご</li>
    </ul>

    <h3>📌 7) Perguntas de Compreensão</h3>
    <ul>
      <li>Como se diz “vermelho” em japonês?</li>
      <li>Qual a palavra para “dez”?</li>
      <li>Como se diz “quatro” em japonês?</li>
      <li>Traduza: ねこ が さん います。</li>
      <li>Traduza: これは あかい くるま です。</li>
    </ul>

    <h3>📌 8) Resumo</h3>
    <ul>
      <li>✔️ Você aprendeu vocabulário básico de cores e números até 20.</li>
      <li>✔️ Viu como usar essas palavras em frases cotidianas.</li>
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
