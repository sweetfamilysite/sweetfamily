<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Introdução ao Hiragana</title>
  <link rel="stylesheet" href="/style.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; line-height: 1.6; }
    .hero {
      padding: 40px;
      text-align: center;
      background: #ffe66d;
    }
    .layout {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      gap: 20px;
      min-height: 800px;
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
      header { flex-direction: column; align-items: flex-start; }
      .header-ads { justify-content: center; }
    }
  </style>
</head>
<body><!-- 1️⃣ Container do Facebook -->
<div id="fb-root"></div>

<!-- 2️⃣ Script do SDK -->
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0&appId=1536369167336858"
  nonce="abc123">
</script>
<div class="fb-comments"
     data-href="http://localhost/nihongon5php/aprenda-hiragana-licao1.php"
     data-width="100%"
     data-numposts="5"></div>
<?php include '../partes/header.php'; ?>

<section class="hero">
  <h2>Introdução ao Hiragana</h2>
  <p>Comece a entender o alfabeto básico do japonês.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left">
    <!-- Anúncios à esquerda -->
  </div>

  <div class="content">

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>

    <p>📚 <strong>Introdução ao Hiragana</strong><br>
    Esta é uma lição introdutória sobre o Hiragana, o alfabeto silábico básico do japonês.
    Não se preocupe em decorar todos os caracteres agora — o objetivo é entender como o Hiragana funciona, como ele é organizado e ver exemplos de uso prático.</p>

    <h3>📌 1) O que é o Hiragana?</h3>
    <p>O Hiragana (ひらがな) é um dos três sistemas de escrita do japonês (junto com o Katakana e os Kanji).</p>
    <ul>
      <li>É um silabário: cada caractere representa uma sílaba.</li>
      <li>Usamos Hiragana para:
        <ul>
          <li>Escrever palavras nativas japonesas.</li>
          <li>Escrever partículas gramaticais (は、を、に etc.).</li>
          <li>Escrever terminações verbais (ます、です etc.).</li>
        </ul>
      </li>
      <li>Tem 46 sons básicos, além de sons modificados com marcas (dakuten, handakuten) e combinações especiais.</li>
    </ul>

    <h3>📌 2) Tabela Completa do Hiragana Básico</h3>
    <table>
      <tr><th>A</th><th>I</th><th>U</th><th>E</th><th>O</th></tr>
      <tr><td>あ</td><td>い</td><td>う</td><td>え</td><td>お</td></tr>
      <tr><td>か</td><td>き</td><td>く</td><td>け</td><td>こ</td></tr>
      <tr><td>さ</td><td>し</td><td>す</td><td>せ</td><td>そ</td></tr>
      <tr><td>た</td><td>ち</td><td>つ</td><td>て</td><td>と</td></tr>
      <tr><td>な</td><td>に</td><td>ぬ</td><td>ね</td><td>の</td></tr>
      <tr><td>は</td><td>ひ</td><td>ふ</td><td>へ</td><td>ほ</td></tr>
      <tr><td>ま</td><td>み</td><td>む</td><td>め</td><td>も</td></tr>
      <tr><td>や</td><td>-</td><td>ゆ</td><td>-</td><td>よ</td></tr>
      <tr><td>ら</td><td>り</td><td>る</td><td>れ</td><td>ろ</td></tr>
      <tr><td>わ</td><td>-</td><td>-</td><td>-</td><td>を</td></tr>
      <tr><td>ん</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
    </table>

    <p><strong>Observações:</strong><br>
    ん é o único som “consoante pura” (N).<br>
    を é geralmente usado como partícula e é lido como “o” (mesmo som de お).</p>

    <h3>📌 3) Exemplos de Palavras em Hiragana</h3>
    <table>
      <tr><th>Palavra</th><th>Escrita</th><th>Significado</th></tr>
      <tr><td>いぬ</td><td>inu</td><td>cachorro</td></tr>
      <tr><td>ねこ</td><td>neko</td><td>gato</td></tr>
      <tr><td>はな</td><td>hana</td><td>flor</td></tr>
      <tr><td>みず</td><td>mizu</td><td>água</td></tr>
      <tr><td>ともだち</td><td>tomodachi</td><td>amigo</td></tr>
      <tr><td>くるま</td><td>kuruma</td><td>carro</td></tr>
      <tr><td>さくら</td><td>sakura</td><td>cerejeira</td></tr>
      <tr><td>ひと</td><td>hito</td><td>pessoa</td></tr>
    </table>

    <h3>📌 4) Variações: Dakuten (゛) e Handakuten (゜)</h3>
    <p>O dakuten (゛) deixa o som mais “forte” ou sonoro:</p>
    <p>か → が (ka → ga)<br>さ → ざ (sa → za)<br>た → だ (ta → da)<br>は → ば (ha → ba)</p>
    <p>O handakuten (゜) aparece na linha は:</p>
    <p>は → ぱ (ha → pa)</p>
    <table>
      <tr><th>Base</th><th>Dakuten</th><th>Handakuten</th></tr>
      <tr><td>は</td><td>ば</td><td>ぱ</td></tr>
      <tr><td>ひ</td><td>び</td><td>ぴ</td></tr>
      <tr><td>ふ</td><td>ぶ</td><td>ぷ</td></tr>
      <tr><td>へ</td><td>べ</td><td>ぺ</td></tr>
      <tr><td>ほ</td><td>ぼ</td><td>ぽ</td></tr>
    </table>

    <h3>📌 5) Combinações (Yōon)</h3>
    <p>Combina-se uma sílaba da linha I com や、ゆ、よ pequenos:</p>
    <p>き + や → きゃ (kya)<br>し + ゅ → しゅ (shu)<br>に + ょ → にょ (nyo)</p>
    <p><strong>Exemplos:</strong><br>きょう (kyou) → hoje<br>しゃしん (shashin) → foto<br>りゅうがくせい (ryuugakusei) → estudante estrangeiro</p>

    <h3>📌 6) Dicas Visuais</h3>
    <p>O Hiragana tem traços suaves e arredondados.<br>É mais “curvo” e fluido que o Katakana.<br>Ordem dos traços: sempre de cima para baixo, da esquerda para a direita.</p>

    <h3>✅ Resumo</h3>
    <p>✔️ O Hiragana é essencial para ler e escrever japonês.<br>✔️ É usado para palavras nativas, partículas e terminações.<br>✔️ Tem sons básicos, variações e combinações.<br>✔️ Não é preciso decorar tudo de uma vez — a prática diária faz isso acontecer naturalmente!</p>

    <button class="back-button" onclick="history.back()">⬅️ Voltar</button>
  </div>

  <div class="ads-right" id="ads-right">
    <!-- Anúncios à direita -->
  </div>
</div>

<?php include '../partes/footer.php'; ?>

</body>
</html>
