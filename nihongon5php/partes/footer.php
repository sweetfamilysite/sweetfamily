<footer>
  <p>© 2025 NihongoN5.ONLINE</p>
  <p>Site mantido com apoio de doações, ajuda mútua e anúncios parceiros.</p>
</footer>

<div class="ticker">
  <div class="ticker-track" id="ticker-track"></div>
</div>

<script>
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}

// TOPO
const topoPublis = [
  '<div class="ad-slot">Publi 1</div>',
  '<div class="ad-slot ad-slot-img-wide"><img src="/nihongon5php/publi/2.png" alt="Publi 2"></div>',
  '<div class="ad-slot">Publi 3</div>'
];
document.getElementById('header-ads').innerHTML = shuffle(topoPublis).join('');

// LATERAIS
const leftPublis = [
  '<div class="ad-block ad-block-large"><img src="/nihongon5php/publi/4.png" alt="Publi 4"></div>',
  '<div class="ad-block">Publi 5</div>',
  '<div class="ad-block">Publi 6</div>'
];
document.getElementById('ads-left').innerHTML = shuffle(leftPublis).join('');

const rightPublis = [
  '<div class="ad-block">Publi 7</div>',
  '<div class="ad-block ad-block-large"><img src="/nihongon5php/publi/8.png" alt="Publi 8"></div>',
  '<div class="ad-block">Publi 9</div>'
];
document.getElementById('ads-right').innerHTML = shuffle(rightPublis).join('');

// TICKER
const publisDisponiveis = [
  'Publi 10','Publi 11','Publi 12',
  '<div class="ad-slot ad-slot-img"><img src="/nihongon5php/publi/13.png" alt="Publi 13"></div>',
  'Publi 14','Publi 15',
  '<div class="ad-slot ad-slot-img"><img src="/nihongon5php/publi/16.png" alt="Publi 16"></div>'
];
const tickerTrack = document.getElementById('ticker-track');
let allPublis = [];
for (let i = 0; i < 4; i++) {
  allPublis = allPublis.concat(shuffle([...publisDisponiveis]));
}
allPublis.forEach(publi => {
  const slot = document.createElement('div');
  if (publi.includes('<div')) {
    slot.innerHTML = publi;
  } else {
    slot.className = 'ad-slot';
    slot.innerHTML = publi;
  }
  tickerTrack.appendChild(slot);
});
</script>
