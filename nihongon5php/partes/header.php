<style>
  body { margin: 0; font-family: Arial, sans-serif; }
  header {
    background: #ff6b6b;
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }
  .logo-container {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  header img.logo {
    max-width: 120px;
    height: auto;
  }
  header h1 {
    margin: 0;
    font-size: 24px;
  }
  .header-ads {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  .ad-slot {
    background: #e2e2e2;
    width: 150px;
    height: 90px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    border-radius: 4px;
    text-align: center;
    padding: 5px;
  }
  .ad-slot-img-wide {
    background: transparent;
    width: 200px;
    height: auto;
    padding: 0;
  }
  .ad-slot img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
    border-radius: 4px;
  }
  nav {
    background: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
  nav a {
    color: #fff;
    margin: 0 15px;
    text-decoration: none;
  }
  nav a:hover {
    text-decoration: underline;
  }
</style>

<header>
  <div class="logo-container">
    <img src="/nihongon5php/images/logo.png" alt="NihongoN5.ONLINE Logo" class="logo" />
    <h1>NihongoN5.ONLINE</h1>
  </div>
  <div class="header-ads" id="header-ads"></div>
</header>

<nav>
  <a href="/nihongon5php/index.php">Início</a>
    <a href="/nihongon5php/contato.php">Contato</a>
</nav>
