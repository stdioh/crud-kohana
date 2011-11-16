// CRUD

function getRelationLinkAdd(field)
{
	return '<a href="#" id="relation" name="'+field+'" rel="add">dodaj relację</a>';
}

function getRelationLinkRemove()
{
	return '<a href="#" id="relation" rel="delete">usuń relację</a>';
}

function getRelation()
{
	return '<div id="relations"><select name="relation_type"><option name="belongs_to" value="belongs_to">należy do</option><option name="has_many" value="has_many">jeden do wielu</option><option name="has_one" value="has_one">jeden do jednego</option></select><br>tabela: <input type="text" name="relation_table"><br>pole:<input type="text" name="relation_field"></div>';
}

$(document).ready(function(){ 

	// usuwanie rekordu
	$("#delete-item[rel='delete']").click(function(){
		var id 			= $(this).attr("item");
		var controller 	= $(this).attr("module"); 
		$("#dialog").html("<p>Czy napewno chcesz usunąć rekord?</p>");

		$("#dialog").dialog({
        title:'Usuń rekord',
		buttons: {
			'Usuń': function() {
				$.get(controller+"/delete/"+id,function() {
    				window.location.reload();
  				});
				$(this).dialog('close');
			},
			'Anuluj': function() {
				$(this).dialog('close');
			}
		}		
		});
	});

	$("a#relation[rel=delete]").live('click',function(){
		$("div#generator_relation").html(getRelationLinkAdd());		
	});

	$("a#relation[rel=add]").live('click',function(){		
		$("div#generator_relation").html(getRelation());
		$("div#generator_relation").append(getRelationLinkRemove());
	});

	$("a#options[rel=add]").click(function(){
		var field = $(this).attr('name');
		$("#"+field+"_options").slideToggle();
	});
});









