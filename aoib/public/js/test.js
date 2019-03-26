
function listLo(){
	// alert('cc');

	// alert('Je SUIS LA ');


}

function changeEtatTableSelect(){
	$('#selectCatEnfant').change(function(){
		var enfantVal = $(this).val();
		//alert(enfantVal);
		tt(); 

		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url:"{{url('chercheInfoEnfantById')}}/"+enfantVal,
			type:"GET",
			dataType:'json',
			data:{
				idEnfant:enfantVal
			},
			success:function(response){
        //$x = response.datas.


    }

});

	});

	//alert('dd');
}


function tt(){
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url:"{{url('chercheInfoEnfantById')}}/"+enfantVal,
		type:"GET",
		dataType:'json',
		data:{
			idEnfant:enfantVal
		},
		success:function(response){
        //$x = response.datas.
        

    }

});

}


//LIST Enfant

function listeEnfant(){
//alert('je suis');
$.ajax({
	url:"{{url('ListeEnfantJson')}}",
	type:'GET',
	dataType : 'json',
	success:function(json){
		var table = $('#example').DataTable({
			'destroy' : true,
			'searching' : true,

		});
		table.clear();

		$.each(json.datas, function(key, value){
			table.row.add([value.NOMENF, value.NATIONALITE, value.NOMPERE, '<a class="btn  btn-warning btn-sm edit-modal" type="" data-toggle="modal" data-target="#myModalModify" monAttIdEnfant='+value.id+'> <i class=" fa fa-edit"> </i></a>'
				]);
		})
		table.draw();

	}
})
}

//FUNCTION 

function modalDetail(){
	$(document).on('click', '.show-modal', function(){
		var lNE = $(this).attr('monLieuNaissBtn');
		$('#LieuNaissAffich').html(lNE);

		var TypeForm = $(this).attr('monTypeFormBtn');
		$('#TypeFormAffich').html(TypeForm);

		var DateDecPere = $(this).attr('monDateDecPereBtn');
		$('#DateDecesPAffich').html(DateDecPere);

		var CauseDec = $(this).attr('monCauseDecBtn');
		$('CauseDecesPAffich').html(CauseDec);

		var lieuDecPere = $(this).attr('monLieuDecPBtn');
		$('lieuDecesP#Affich').html(lieuDecesP);

	
		var DateDecMere = $(this).attr('monDateDecMereBtn');
		$('#DateDecesMAffich').html(DateDecMere);

		var CauseDecM = $(this).attr('monCauseDecMereBtn');
		$('#CauseDecesMAffich').html(CauseDecM);

		var lieuDecMere = $(this).attr('monLieuDecMBtn');
		$('#Affich').html(lieuDecMere);

		var t = $(this).parents('tr');
		

    //recuperation de la valeur de l'id passé dans le button a travers ajax
    // var id = $(this).attr('monAttIdEnfant');

    // var td = t.find('td');

    //Affection de certains info sur la ligne cournte au champ du modal

    var nomEnfant = td.eq(0).html();
    $('#nomEnfant').val(nomEnfant);

    $("#myModalDetail").modal('show');

    $("#footer_action_button").text('Completer dossier');

    $(".actionBtn").addClass('edit');

    $(".actionBtn").addClass('btn-success');

    // $('.edit-modal').hide();



    
});

}