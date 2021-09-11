var nodes = null;
var edges = null;
var network = null;


var DIR = "img/";
var EDGE_LENGTH_MAIN = 280;
var EDGE_LENGTH_SUB = 100;

// Called when the Visualization API is loaded.
function draw() {
  // Create a data table with nodes.
  nodes = [];

  // Create a data table with links.
  edges = [];

  nodes.push({
    id: 1,
    label: "Main Router 192.168.1.1",
    image: DIR + "wifi-router.png",
    shape: "image",
  });
  nodes.push({
    id: 2,
    label: "Cabinet 10.90.90.90",
    image: DIR + "switch.png",
    shape: "image",
  });
  nodes.push({
    id: 3,
    label: "Wireless 10.90.90.90",
    image: DIR + "switch.png",
    shape: "image",
  });
  nodes.push({
    id: 4,
    label: "Server 10.90.90.90",
    image: DIR + "switch.png",
    shape: "image",
  });
  edges.push({ from: 1, to: 2, length: EDGE_LENGTH_MAIN });
  edges.push({ from: 1, to: 3, length: EDGE_LENGTH_MAIN });
  edges.push({ from: 1, to: 4, length: EDGE_LENGTH_MAIN });

  for (var i = 5; i <= 8; i++) {
    nodes.push({
      id: i,
      label: "Computer 41.161.117.20",
      image: DIR + "comp.png",
      shape: "image",
    });
    edges.push({ from: 2, to: i, length: EDGE_LENGTH_SUB });
  }

  nodes.push({
    id: 101,
    label: "Printer",
    image: DIR + "printer.png",
    shape: "image",
  });
  edges.push({ from: 2, to: 101, length: EDGE_LENGTH_SUB });

  nodes.push({
    id: 102,
    label: "Laptop",
    image: DIR + "laptop.png",
    shape: "image",
  });
  edges.push({ from: 3, to: 102, length: EDGE_LENGTH_SUB });

  nodes.push({
    id: 104,
    label: "Internet",
    image: DIR + "internet-explorer.png",
    shape: "image",
  });
  edges.push({ from: 1, to: 104, length: EDGE_LENGTH_MAIN });


  for (var i = 200; i <= 202; i++) {
    nodes.push({
      id: i,
      label: "Smartphone 112.186.213.92",
      image: DIR + "mobile-phone.png",
      shape: "image",
    });
    edges.push({ from: 3, to: i, length: EDGE_LENGTH_SUB });
  }
  for (var i = 400; i <= 403; i++) {
    nodes.push({
      id: i,
      label: "Server 5.45.64.97:3128",
      image: DIR + "server.png",
      shape: "image",
    });
    edges.push({ from: 4, to: i, length: EDGE_LENGTH_SUB });
  }

  // create a network
  var container = document.getElementById("mynetwork");
  // var ctx = container.getContext('2d');
  // var HEIGHT = 650;
  // var WIDTH = 700;

  // container.height = HEIGHT;
  // container.width = WIDTH;


  // ctx.fillStyle = 'white';
  // ctx.fillRect(0,0,HEIGHT, WIDTH);


  var data = {
    nodes: nodes,
    edges: edges,
  };
  var options = {};
  network = new vis.Network(container, data, options);
}

window.addEventListener("load", () => {
  draw();
});

