<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Módulos</title>
  <link rel="stylesheet" href="/style.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
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
      min-height: 800px; /* garante altura para laterais */
    }
    .ads-left, .ads-right {
      display: flex;
      flex-direction: column;
      gap: 20px;
      width: 300px;
      flex-shrink: 0;
    }
    .ad-block, .ad-block-large {
      background: #e2e2e2;
      width: 300px;
      height: auto;
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
    .modules {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      max-width: 900px;
      margin: 0 20px;
      box-sizing: border-box;
    }
    .module-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
    }
    .module-card:hover {
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
    .module-card h4 {
      margin: 0 0 10px 0;
      font-weight: 700;
      color: #333;
    }
    .module-card p {
      margin: 0 0 15px 0;
      color: #555;
      font-size: 15px;
      min-height: 40px;
    }
    .module-card a {
      display: inline-block;
      margin-top: 10px;
      background: #ff6b6b;
      color: #fff;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 600;
      transition: background 0.3s ease;
    }
    .module-card a:hover {
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
      .ads-left, .ads-right, .modules {
        width: 100%;
        max-width: none;
      }
      .ads-left, .ads-right {
        flex-direction: row;
        overflow-x: auto;
        padding: 10px 0;
        gap: 10px;
      }
      .ads-left > div, .ads-right > div {
        min-width: 260px;
        flex-shrink: 0;
      }
      .modules {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      }
    }
  </style>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0&appId=1536369167336858"
  nonce="abc123">
</script>
<?php include 'partes/header.php'; ?>

<section class="hero">
  <h2>Já tentou de tudo para aprender Nihongo e nada funciona?</h2>
  <p>Você não está sozinho. O NihongoN5.ONLINE é um projeto criado na base de ajuda mútua, doações e conteúdos compartilhados pelos próprios usuários. Um espaço para quem vive no Japão e quer aprender japonês de forma prática e real.</p>
  <p>Escolha um módulo para começar sua jornada — com mais de 300 lições únicas, áudios, PDFs e quizzes. Totalmente grátis, mantido por quem já esteve no seu lugar.</p>
</section>

<div class="layout">
  <div class="ads-left" id="ads-left"></div>

  <div class="modules">
    <div class="module-card">
      <h4>Hiragana</h4>
      <p>Aprenda os silabários básicos do japonês.</p>
      <a href="hiragana.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Katakana</h4>
      <p>Aprenda o silabário Katakana para palavras estrangeiras.</p>
      <a href="katakana.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Kanji</h4>
      <p>Estude os caracteres essenciais para leitura e escrita.</p>
      <a href="kanji.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Frases do dia a dia</h4>
      <p>Frases práticas para usar no Japão.</p>
      <a href="frases.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Vocabulário essencial</h4>
      <p>Palavras-chave para conversas básicas.</p>
      <a href="vocabulario.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Gramática N5</h4>
      <p>Estruturas de frases e partículas básicas.</p>
      <a href="gramatica.php">Acessar</a>
    </div>
    <div class="module-card">
      <h4>Simulados e quizzes</h4>
      <p>Teste seu conhecimento para o JLPT.</p>
      <a href="simulados.php">Acessar</a>
    </div>
  </div>

  <div class="ads-right" id="ads-right"></div>
</div>

<?php include 'partes/footer.php'; ?>

</body>
</html>
