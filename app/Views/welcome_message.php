<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">

	<script src="https://use.fontawesome.com/dd325eec25.js"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

	   .form-signin {
			width: 100%;
			max-width: 930px !important;
			padding: 15px;
			margin: auto;
		}


    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">



	  
    
<main class="form-signin">
		<button type="button" id="btn_new_register" class="btn btn-primary">Nuevo Registro</button>
		<br>
		<br>
		<table class="table" id="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Foto</th>
					<th scope="col">Nombres</th>
					<th scope="col">Fecha de Nacimiento</th>
					<th scope="col">Genero</th>
					<th scope="col">Biografia</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>

		<input type="hidden" id="ruta" value="<?php echo base_url()."/test_codeigniter/public" ?>">



		


</main>

		<div class="modal" tabindex="-1" id="modal_new">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registro nuevo</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="store" method="post"  enctype="multipart/form-data">
						<div class="mb-3">
							<label for="names" class="form-label">Nombres</label>
							<input type="text" class="form-control" name="name" id="names" required>
						</div>

						<div class="mb-3">
							<label for="birthday" class="form-label">Fecha de Nacimiento</label>
							<input type="date" class="form-control" name="birthday" id="birthday" required>
						</div>

						<div class="mb-3">
							<label for="photo" class="form-label">Foto</label>
							<input type="file" class="form-control" name="photo" id="photo" required>
						</div>


						<div class="mb-3">
							<label for="gender" class="form-label">Genero</label>
							<input type="text" class="form-control" name="gender" id="gender" required>
						</div>

						<div class="mb-3">
							<label for="biography" class="form-label">Biografia</label>
							<textarea required name="biography" class="form-control" id="biography" cols="30" rows="10"></textarea>
						</div>

						<button type="submit" id="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>




		<div class="modal" tabindex="-1" id="modal_view">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Consultar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="view" method="post"  enctype="multipart/form-data">
						<div class="mb-3">
							<label for="names" class="form-label">Nombres</label>
							<input type="text" class="form-control" name="name" id="names_view">
						</div>

						<div class="mb-3">
							<label for="birthday" class="form-label">Fecha de Nacimiento</label>
							<input type="date" class="form-control" name="birthday" id="birthday_view">
						</div>

						<div class="mb-3">
							<label for="gender" class="form-label">Genero</label>
							<input type="text" class="form-control" name="gender" id="gender_view">
						</div>

						<div class="mb-3">
							<label for="biography" class="form-label">Biografia</label>
							<textarea name="biography" class="form-control" id="biography_view" cols="30" rows="10"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>



		<div class="modal" tabindex="-1" id="modal_edit">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Editar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="update" method="post"  enctype="multipart/form-data">
						<div class="mb-3">
							<label for="names" class="form-label">Nombres</label>
							<input type="text" class="form-control" name="name" id="names_edit">
						</div>

						<div class="mb-3">
							<label for="birthday" class="form-label">Fecha de Nacimiento</label>
							<input type="date" class="form-control" name="birthday" id="birthday_edit">
						</div>

						<div class="mb-3">
							<label for="photo" class="form-label">Foto</label>
							<input type="file" class="form-control" name="photo" id="photo-edit">
						</div>



						<div class="mb-3">
							<label for="gender" class="form-label">Genero</label>
							<input type="text" class="form-control" name="gender" id="gender_edit">
						</div>

						<div class="mb-3">
							<label for="biography" class="form-label">Biografia</label>
							<textarea name="biography" class="form-control" id="biography_edit" cols="30" rows="10"></textarea>
						</div>

						<input type="hidden" class="form-control" name="id_singer" id="id_singer">

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>





    
  </body>


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>


	$(document).ready(function() {
		store();
		update();
		list()
	});




	function list() {
		$('#table tbody').off('click');
		var url=document.getElementById('ruta').value;


		




		var table=$("#table").DataTable({
			"destroy":true,

			"stateSave": true,
			"serverSide":false,
			"ajax":{
				"method":"GET",
					"url":''+url+'/get/singers',
				"dataSrc":""
			},
			"columns":[
				{"data": "name",
					render : function(data, type, row) {
						var botones = "";
						botones += "<span class='consultar btn btn-sm btn-info waves-effect' data-toggle='tooltip' title='Consultar'><i class='fa fa-eye' style='margin-bottom:5px'></i></span> ";
						botones += "<span class='editar btn btn-sm btn-primary waves-effect' data-toggle='tooltip' title='Editar'><i class='fa fa-pencil' style='margin-bottom:5px'></i></span> ";
						botones += "<span class='eliminar btn btn-sm btn-danger waves-effect' data-toggle='tooltip' title='Eliminar'><i class='fa fa-trash' style='margin-bottom:5px'></i></span>";
						return botones;
					}
				},
			
				{"data": "photo",
					render : function(data, type, row) {
						
						
						return `<img src="img/uploads/${data}" width="60" height="60" style="border-radius: 100%">`;
					}
				},
				{"data": "name"},
				{"data": "birthday"},
				{"data": "gender"},
				{"data": "biography"},
			],
			"responsive": true,
		});

		table
		.search("").draw()


		ver("#table tbody", table)
		edit("#table tbody", table)
		eliminar("#table tbody", table)


	}





	function update() {
		enviarFormulario("#update", 'update/singer');
	}

	function store() {
		enviarFormulario("#store", 'create/singer');
	}


	  $("#btn_new_register").click(function (e) { 
		$("#modal_new").modal("show")
		$("#store")[0].reset();
	  });


	  function enviarFormulario(form, controlador) {
			$(form).submit(function(e) {
				e.preventDefault(); //previene el comportamiento por defecto del formulario al darle click al input submit
				var url = document.getElementById('ruta').value;
				var formData = new FormData($(form)[0]); //obtiene todos los datos de los inputs del formulario pasado por parametros
				var method = $(this).attr('method'); //obtiene el method del formulario
				$('#submit').attr('disabled', 'disabled'); //desactiva el input submit

				axios.post(`${url}/${controlador}`, formData).then(function(response) {
					if(response.status==200) {
						$('#submit').removeAttr('disabled'); 
						alert("Operacion Exitosa")
						$("#modal_new").modal("hide")
						$("#modal_edit").modal("hide")
						list()
					}
				})
			});
		}



		function ver(tbody, table) {
			var url = document.getElementById('ruta').value;
			$(tbody).on("click", "span.consultar", function() {
				$("#alertas").css("display", "none");
				var data = table.row($(this).parents("tr")).data();

				$("#names_view").val(data.name).attr("disabled", "disabled")
				$("#birthday_view").val(data.birthday).attr("disabled", "disabled")
				$("#gender_view").val(data.gender).attr("disabled", "disabled")
				$("#biography_view").val(data.biography).attr("disabled", "disabled")

				$("#modal_view").modal("show")
			});
		}


		function edit(tbody, table) {
			var url = document.getElementById('ruta').value;
			$(tbody).on("click", "span.editar", function() {
				$("#alertas").css("display", "none");
				var data = table.row($(this).parents("tr")).data();
				$("#update")[0].reset();
				$("#names_edit").val(data.name)
				$("#birthday_edit").val(data.birthday)
				$("#gender_edit").val(data.gender)
				$("#biography_edit").val(data.biography)
				$("#id_singer").val(data.id)
				
				$("#modal_edit").modal("show")
			});
		}


		function eliminar(tbody, table) {
			var url = document.getElementById('ruta').value;
			$(tbody).on("click", "span.eliminar", function() {
				$("#alertas").css("display", "none");
				var data = table.row($(this).parents("tr")).data();

				axios.get(`${url}/delete/singer/${data.id}`).then(function(response) {
					if(response.status==200) {
						$('#submit').removeAttr('disabled'); 
						list()
					}
				})
			});
		}
  </script>
</html>
