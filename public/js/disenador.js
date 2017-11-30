var svgRaton = {x:0, y:0};// la posición del ratón relativo al lienzo SVG
var rectRaton = {x:0, y:0};// la posición del ratón relativo al rectángulo
var distInicial = {x:0, y:0};// la posición inicial del rectángulo
var arrastrar = false;

$(function() {
	$('#designer').svg({onLoad: drawInitial});
	$('#rect,#line,#circle,#ellipse,#image,#star,#ancla,#move').click(drawShape);
	$('#scale').click(function () {
		$('.product-back').animate({svgTransform: 'scale(0.5, 0.5)'});
		$('.product-back').animate({svgTransform: 'scale(1, 1)'});
	});
	// $("#save").click(function () {
	// 	var serializer = new XMLSerializer();
	// 	var svg = document.querySelector("svg");

	// 	var ser = serializer.serializeToString(svg);

	// 	console.log(ser);

	// 	document.body.insertAdjacentHTML("afterbegin", ser);
	// });
	$(".view-front img").click(function () {
		var svg = $('#designer').svg('get');
		var url = $(this).attr("src");
		var ev = svg.group(svg.getElementById('print-area'), {class: 'estampa-view'});
		var x = $(".print-area-default-box").attr('x');
		var y = $(".print-area-default-box").attr('y');

		var g = svg.group(ev);

		var g = svg.group(g, {class: 'estampa-cont', transform: 'scale(1, 1)'});
		// var i = svg.image(g, x, y, '60', '60', 'img/ancla.png');
		var i = svg.image(g, x, y, '60', '60', url);
		// var i = svg.image(g, x, y, '60', '60', 'http://joy105.com/wp-content/uploads/2017/05/heart.png');

		var g = svg.group(ev, {class: 'bordes', transform: 'translate(0, 0)'});

		var width = $(".estampa-cont image").attr('width');
		var height = $(".estampa-cont image").attr('height');

		svg.rect(g, x, y, width, height, {class: 'estampa-borde'});
		// svg.circle(g, x, y, 16, {class: 'estampa-conf'});
		// svg.circle(g, x, y, 16, {class: 'big-estampa-conf'});

		var num = 0;

		var svg = document.querySelector("svg");

		i.addEventListener("mousedown", function (evt) {
			$(ev).children("g.bordes").children().addClass('active');
			$(".print-area").addClass('active');
			num++;
			svgRaton = oMousePos(svg, evt);
			rectRaton = oMousePos(this, evt);

			if(num == 1) {
				distInicial.x = svgRaton.x - rectRaton.x;
				distInicial.y = svgRaton.y - rectRaton.y;
			}
			arrastrar = true;
		}, false);

		i.addEventListener("mousemove", function (evt) {
			if (arrastrar) {
				$(this).parents("g.estampa-view").children("g.bordes").children().addClass('blue');
				svgRaton = oMousePos(svg, evt);
				var x = svgRaton.x - rectRaton.x - distInicial.x;
				var y = svgRaton.y - rectRaton.y - distInicial.y;
				if ($('.print-area-border').position().left > $(this).position().left || $('.print-area-border').position().top > $(this).position().top) {
					$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('blue');
					$(this).parents("g.estampa-view").children("g.bordes").children().addClass('red');
				} else {
					$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('red');
				}
				$(this).parents("g.estampa-view").animate({svgTransform: 'translate(' + x + ', ' + y + ')'}, 10);
			} else {
				$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('blue');
			}
		}, false);

		i.addEventListener("mouseup", function (evt) {
			arrastrar = false;
		}, false);

		i.addEventListener("mouseout", function (evt) {
			arrastrar = false;
		}, false);
	});
	// $('g').click(function () {
	// 	$(".print-area").addClass('active');
	// });
	$('#export').click(function() {
		var xml = $('#designer').svg('get').toSVG();
		$('#svgexport').html(xml.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));
	});
});

function drawInitial(svg) {
	var g = svg.group({class: 'product-back', transform: 'translate(0,0) scale(1, 1)'});
	// svg.image(g, 0, 0, '100%', '100%', 'img/camiseta.webp', {id: 'fondo'});
	var src = $('#playera').attr('src');
	console.log(src);
	if(src)
		svg.image(g, 0, 0, '100%', '100%', src, {id: 'fondo'});
	else
		svg.image(g, 0, 0, '100%', '100%', 'https://static.owayo-cdn.com/newhp/designRenderings/fussballtrikotsf5/design_pool_variante_a_1.png', {id: 'fondo'});
	var g = svg.group(g, {id: 'print-area', class: 'print-area', transform: 'translate(280, 70)'});
	svg.rect(g, 0, 0, '22%', '75%', {class: 'print-area-border'});
	svg.rect(g, 23, 25, 75, 135, {class: 'print-area-default-box'});
}

var colours = ['purple', 'red', 'orange', 'yellow', 'lime', 'green', 'blue', 'navy', 'black'];

function drawShape() {
	var shape = this.id;
	var svg = $('#designer').svg('get');
	if (shape == 'rect') {
		svg.rect(random(300), random(200), random(100) + 100, random(100) + 100,
			{fill: colours[random(9)], stroke: colours[random(9)], strokeWidth: random(5) + 1});
	}
	else if (shape == 'line') {
		svg.line(random(400), random(300), random(400), random(300),
			{stroke: colours[random(9)], strokeWidth: random(5) + 1});
	}
	else if (shape == 'circle') {
		svg.circle(random(300) + 50, random(200) + 50, random(80) + 20,
			{fill: colours[random(9)], stroke: colours[random(9)], strokeWidth: random(5) + 1});
	}
	else if (shape == 'ellipse') {
		svg.ellipse(random(300) + 50, random(200) + 50, random(80) + 20, random(80) + 20,
			{fill: colours[random(9)], stroke: colours[random(9)], strokeWidth: random(5) + 1});
	}
	else if (shape == 'image') {
		svg.image(0, 0, '100%', '100%', 'img/camiseta.webp', {id: 'fondo', transform: 'scale(1, 1)'});
	}
	else if (shape == 'star') {
		var ev = svg.group(svg.getElementById('print-area'), {class: 'estampa-view'});
		var x = $(".print-area-default-box").attr('x');
		var y = $(".print-area-default-box").attr('y');

		var g = svg.group(ev);

		var g = svg.group(g, {class: 'estampa-cont', transform: 'scale(1, 1)'});
		// var i = svg.image(g, x, y, '60', '60', 'img/ancla.png');
		var i = svg.image(g, x, y, '60', '60', 'http://joy105.com/wp-content/uploads/2017/05/heart.png');

		var g = svg.group(ev, {class: 'bordes', transform: 'translate(0, 0)'});

		var width = $(".estampa-cont image").attr('width');
		var height = $(".estampa-cont image").attr('height');

		svg.rect(g, x, y, width, height, {class: 'estampa-borde'});
		// svg.circle(g, x, y, 16, {class: 'estampa-conf'});
		// svg.circle(g, x, y, 16, {class: 'big-estampa-conf'});

		var num = 0;

		var svg = document.querySelector("svg");

		i.addEventListener("mousedown", function (evt) {
			$(ev).children("g.bordes").children().addClass('active');
			$(".print-area").addClass('active');
			num++;
			svgRaton = oMousePos(svg, evt);
			rectRaton = oMousePos(this, evt);

			if(num == 1) {
				distInicial.x = svgRaton.x - rectRaton.x;
				distInicial.y = svgRaton.y - rectRaton.y;
			}
			arrastrar = true;
		}, false);

		i.addEventListener("mousemove", function (evt) {
			if (arrastrar) {
				$(this).parents("g.estampa-view").children("g.bordes").children().addClass('blue');
				svgRaton = oMousePos(svg, evt);
				var x = svgRaton.x - rectRaton.x - distInicial.x;
				var y = svgRaton.y - rectRaton.y - distInicial.y;
				if ($('.print-area-border').position().left > $(this).position().left || $('.print-area-border').position().top > $(this).position().top) {
					$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('blue');
					$(this).parents("g.estampa-view").children("g.bordes").children().addClass('red');
				} else {
					$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('red');
				}
				$(this).parents("g.estampa-view").animate({svgTransform: 'translate(' + x + ', ' + y + ')'}, 10);
			} else {
				$(this).parents("g.estampa-view").children("g.bordes").children().removeClass('blue');
			}
		}, false);

		i.addEventListener("mouseup", function (evt) {
			arrastrar = false;
		}, false);

		i.addEventListener("mouseout", function (evt) {
			arrastrar = false;
		}, false);
	}
	else if (shape == 'ancla') {
		var ev = svg.group(svg.getElementById('print-area'), {class: 'estampa-view'});
		var x = $(".print-area-default-box").attr('x');
		var y = $(".print-area-default-box").attr('y');

		var g = svg.group(ev);

		var g = svg.group(g, {class: 'estampa-cont', transform: 'scale(1, 1)'});
		var i = svg.image(g, x, y, '20%', '20%', 'img/ancla.png');

		var g = svg.group(ev, {transform: 'translate(0, 0)'});

		var width = $(".estampa-cont image").attr('width');
		var height = $(".estampa-cont image").attr('height');

		svg.rect(g, x, y, width, height, {class: 'estampa-borde', stroke: 'white', strokeWidth: 2});
		svg.circle(g, x, y, 16, {class: 'estampa-conf'});
		svg.circle(g, x, y, 16, {class: 'big-estampa-conf'});

		var num = 0;

		var svg = document.querySelector("svg");

		i.addEventListener("mousedown", function (evt) {
			num++;
			svgRaton = oMousePos(svg, evt);
			rectRaton = oMousePos(this, evt);

			if(num == 1) {
				distInicial.x = svgRaton.x - rectRaton.x;
				distInicial.y = svgRaton.y - rectRaton.y;
			}
			arrastrar = true;
		}, false);

		i.addEventListener("mousemove", function (evt) {
			if (arrastrar) {
				svgRaton = oMousePos(svg, evt);
				var x = svgRaton.x - rectRaton.x - distInicial.x;
				var y = svgRaton.y - rectRaton.y - distInicial.y;
				// $('.estampa-view').animate({svgTransform: 'translate(' + x + ', ' + y + ')'}, 10);
				$(this).parents("g.estampa-view").animate({svgTransform: 'translate(' + x + ', ' + y + ')'}, 10);
			}
		}, false);

		i.addEventListener("mouseup", function (evt) {
			arrastrar = false;
		}, false);

		i.addEventListener("mouseout", function (evt) {
			arrastrar = false;
		}, false);
	}
	else if (shape == 'move') {
		// var x = $('.estampa-cont image').attr('y');
		// $('.estampa-view').animate({svgTransform: 'translate(0, ' + x + ') rotate(0, 3, 3)'});
	}
}

function random(range) {
	return Math.floor(Math.random() * range);
}

function oMousePos(elemento, evt) {
  var ClientRect = elemento.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}