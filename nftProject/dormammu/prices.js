let btc = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
let eth = new WebSocket('wss://stream.binance.com:9443/ws/ethusdt@trade');
let btcPriceElement = document.getElementById('btc-price');
let ethPriceElement = document.getElementById('eth-price');
let btcLastPrice = null;
let ethLastPrice = null;


btc.onmessage = (event) => {
  let btcObject = JSON.parse(event.data);
  let btcPrice =  parseFloat(btcObject.p).toFixed(2);
  btcPriceElement.innerText = parseFloat(btcObject.p).toFixed(2);
  btcPriceElement.style.color = !btcLastPrice || btcLastPrice === btcPrice ? 'black' : btcPrice > btcLastPrice ? 'green' : 'red';
  btcLastPrice = btcPrice;
}

eth.onmessage = (event) => {
  let ethObject = JSON.parse(event.data);
  let ethPrice =  parseFloat(ethObject.p).toFixed(2);
  ethPriceElement.innerText = parseFloat(ethObject.p).toFixed(2);
  ethPriceElement.style.color = !ethLastPrice || ethLastPrice === ethPrice ? 'black' : ethPrice > ethLastPrice ? 'green' : 'red';
  ethLastPrice = ethPrice;
}
