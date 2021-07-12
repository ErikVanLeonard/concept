
function createNew() {
	$("#add-more").hide();
	var data = '<tr class="table-row" id="new_row_ajax">' +
	'<td contenteditable="false" id="txt_title" onBlur="addToHiddenField(this,\'id\')" onClick="editRow(this);"></td>' +
	
	'<td contenteditable="true" id="txt_title" onBlur="addToHiddenField(this,\'title\')" onClick="editRow(this);"></td>' +
	
	'<td contenteditable="true" id="txt_description" onBlur="addToHiddenField(this,\'descripcion_ar\')" onClick="editRow(this);"></td>' +
	'<td contenteditable="true" id="txt_ciudad" onBlur="addToHiddenField(this,\'ciudad\')" onClick="editRow(this);"></td>' +
	
	'<td><input type="hidden" id="title" /><input type="hidden" id="descripcion_ar" /><input type="hidden" id="ciudad" /><span id="confirmAdd"><a onClick="addToDatabase()" class="ajax-action-links">Guardar</a> / <a onclick="cancelAdd();" class="ajax-action-links">Cancelar</a></span></td>' +	
	'</tr>';
  $("#table-body").append(data);
}
function cancelAdd() {
	$("#add-more").show();
	$("#new_row_ajax").remove();
}
function editRow(editableObj) {
  $(editableObj).css("background","#e57373");
}

function saveToDatabase(editableObj,column,id) {
  $(editableObj).css("background","#FFF url(cargando.gif) no-repeat right");
  $.ajax({
    url: "editar.php",
    type: "POST",
    data:'column='+column+'&editval='+$(editableObj).text()+'&id='+id,
    success: function(data){
      $(editableObj).css("background","#FDFDFD");
    }
  });
}
function addToDatabase() {
  var title = $("#title").val();
  var descripcion_ar = $("#descripcion_ar").val();
  var ciudad = $("#ciudad").val();
  
	  $("#confirmAdd").html('<img src="cargando.gif" />');
	  $.ajax({
		url: "agregar.php",
		type: "POST",
		data:'title='+title+'&descripcion_ar='+descripcion_ar+'&ciudad='+ciudad,
		success: function(data){
		  $("#new_row_ajax").remove();
		  $("#add-more").show();		  
		  $("#table-body").append(data);
		}
	  });
}
function addToHiddenField(addColumn,hiddenField) {
	var columnValue = $(addColumn).text();
	$("#"+hiddenField).val(columnValue);
}

function deleteRecord(id) {
	if(confirm("Esta seguro de eliminar el registro?")) {
		$.ajax({
			url: "borrar.php",
			type: "POST",
			data:'id='+id,
			success: function(data){
			  $("#table-row-"+id).remove();
			}
		});
	}
}
