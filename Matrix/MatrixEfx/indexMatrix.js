let streams;
let canvasContainer;

function setup() {
  canvasContainer = document.createElement('div');
  canvasContainer.style = 'position: fixed; left: 0; top: 0;';
  document.body.appendChild(canvasContainer);

  const canvas = createCanvas(innerWidth - 17, innerHeight);
  canvas.parent(canvasContainer);

  textFont('monospace', 16);
  colorMode(HSL);
  streams = Streams();
}

function draw() {
  background(0, 0, 0, 0.6);
  streams.draw();
}

function Streams() {
  const streams = [];
  for (let i = 0; i < innerWidth / textSize(); i++) {
    const x = i * textSize();
    const y = round(random(-1000, 0));
    const speed = round(random(3, 7));
    const length = round(random(1, innerHeight / textSize()));
    streams.push(Stream(x, y, speed, length));
  }
  return {
    draw() {
      streams.forEach(stream => stream.draw());
    }
  };
}

function Stream(x, y, speed, length) {
  const symbols = [];
  for (let i = 0; i < length; i++) {
    const changeRate = round(random(20, 40));
    const lightness = (i < 3) ? (1 - (i / length)) * (100 - i * 5) : (1 - (i / length)) * 50;
    const colour = [120, 100, lightness];
    symbols.push(Symbol(x, y, speed, changeRate, colour));
    y -= textSize();
  }
  return {
    draw() {
      symbols.forEach(symbol => symbol.draw());
    }
  };
}

function Symbol(x, y, speed, changeRate, colour) {
  let character;

  return {
    draw() {
      if (frameCount % changeRate === 0 || !character) {
        character = char(round(random(65381, 65440)));
      }
      y = (y > height + textSize()) ? 0 : y + speed;
      fill(colour);
      text(character, x, y);
    }
  };
}

function windowResized() {
  resizeCanvas(innerWidth, innerHeight);
  streams = Streams();
}
