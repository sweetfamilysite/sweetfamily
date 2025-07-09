<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NihongoN5.ONLINE - Contato</title>
  <link rel="stylesheet" href="/style.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    .hero { padding: 40px; text-align: center; background: #ffe66d; }
    .layout {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      gap: 20px;
      min-height: 800px; /* ✅ força altura mínima */
    }
    .ads-left, .ads-right { display: flex; flex-direction: column; gap: 20px; }
    .ad-block, .ad-block-large { background: #e2e2e2; width: 300px; height: auto; text-align: center; border-radius: 8px; font-size: 12px; display: flex; justify-content: center; align-items: center; padding: 10px; }
    .ad-block-large { background: transparent; padding: 0; }
    .ad-block img, .ad-block-large img { max-width: 100%; height: auto; object-fit: contain; display: block; border-radius: 8px; }
    .contact-form {
      max-width: 600px;
      margin: 0 20px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 30px;
    }
    .contact-form p { margin: 0 0 20px; }
    .contact-form label { display: block; margin: 15px 0 5px; font-weight: bold; }
    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    .contact-form button {
      margin-top: 20px;
      background: #ff6b6b;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .contact-form button:hover { background: #e04b4b; }
    .ticker { position: fixed; bottom: 0; left: 0; width: 100%; height: 140px; overflow: hidden; background: #222; display: flex; align-items: center; }
    .ticker-track { display: flex; width: max-content; animation: scrollTicker 60s linear infinite; }
    .ticker .ad-slot { width: 300px; height: 120px; margin: 0 10px; flex-shrink: 0; font-size: 14px; text-align: center; display: flex; align-items: center; justify-content: center; background: #e2e2e2; border-radius: 4px; }
    .ticker .ad-slot.ad-slot-img { background: transparent; }
    .ticker .ad-slot-img img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 4px; }
    @keyframes scrollTicker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    @media (max-width: 768px) {
      header { flex-direction: column; align-items: flex-start; }
      .header-ads { justify-content: center; }
    }
  </style>
</head>
<body>

<?php include 'partes/header.php'; ?>

  <section class="hero">
    <h2>Contato</h2>
  </section>

  <div class="layout">
    <div class="ads-left" id="ads-left"></div>

    <div class="contact-form">
      <p>Qualquer dúvida, sugestão de correção no site ou nas lições, proposta de parceria (influenciadores, professores, empresas), publicidade ou demais assuntos: não hesite em entrar em contato pelo formulário abaixo.</p>

      <form method="post" action="#">
        <label for="nome">Seu nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

        <label for="email">Seu e-mail</label>
        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com">

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="6" placeholder="Digite sua mensagem..."></textarea>

        <button type="submit">Enviar</button>
      </form>
    </div>

    <div class="ads-right" id="ads-right"></div>
  </div>

<?php include 'partes/footer.php'; ?>

</body>
</html>
