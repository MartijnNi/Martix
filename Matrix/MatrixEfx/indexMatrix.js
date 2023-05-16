let streams;

function setup() {
  createCanvas(innerWidth, innerHeight);
  textFont('monospace', 16);
  colorMode(HSL);
  streams = Streams();
}

function draw() {
  // opacity set on background to add a bit of a blur effect
  background(0, 0, 0, 0.6);
  streams.draw();
}

function Streams() {
  // set up the streams
  const streams = [];
  for (let i = 0; i < innerWidth / textSize(); i++) {
    const x = i * textSize();
    const y = round(random(-1000, 0));
    const speed = round(random(3, 7));
    const length = round(random(1, innerHeight / textSize()));
    const stream = Stream(x, y, speed, length);
    streams.push(stream);
  }

  // return object with access to draw function
  return {
    draw: function () {
      for (let i = 0, length = streams.length; i < length; i++) {
        streams[i].draw();
      }
    }
  }
}

function Stream(x, y, speed, length) {
  // setup symbols in stream
  const symbols = [];
  for (let i = 0; i < length; i++) {
    const changeRate = round(random(20, 40));
    let lightness;
    if (i === 0) {
      lightness = (1 - (i / length)) * 100;
    } else if (i === 1) {
      lightness = (1 - (i / length)) * 95;
    } else if (i === 2) {
      lightness = (1 - (i / length)) * 90;
    } else {
      lightness = (1 - (i / length)) * 50;
    }
    const colour = [120, 100, lightness];
    const symbol = Symbol(x, y, speed, changeRate, colour);
    symbols.push(symbol);
    y -= textSize();
  }

  // return object with access to draw function
  return {
    draw: function () {
      for (let i = 0, length = symbols.length; i < length; i++) {
        symbols[i].draw();
      }
    }
  };
}

function Symbol(x, y, speed, changeRate, colour) {
  let character;

  // return object with access to draw function
  return {
    draw: function () {
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