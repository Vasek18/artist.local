(function(){
	var saveInput = $('[name=svg]');
	var pathToSvg = $('[name=path_to_pic]').val();

	var canvas = this.__canvas = new fabric.Canvas('picture', {
		isDrawingMode: true
	});

	if (pathToSvg){
		fabric.loadSVGFromURL(pathToSvg, function(objects, options){
			var obj = fabric.util.groupSVGElements(objects, options);
			canvas.add(obj).renderAll();
		});
		console.log('Подтянули')
	}

	this.__canvas.on('mouse:up', (function(_this){
		saveInput.val(canvas.toSVG());
		console.log("Запечатлели")
	}));
})();