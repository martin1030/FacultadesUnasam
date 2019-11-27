@extends('vendor.adminlte.layouts.app')

@section('htmlheader_title')
Gestión de los Perfiles Profesionales
@endsection

<style type="text/css">
	#modaltamanio {
		width: 70% !important;
	}

	.swal2-popup {
		font-size: 1.175em !important;
	}
</style>
@section('main-content')
<div class="container-fluid spark-screen" id="contenidoItem">



	<div class="row">

		@include('vendor.adminlte.layouts.partials.loaders')

		@if(accesoUser([1,2]))

		<template v-if="divprincipal" id="divprincipal">
			@include('perfiles.principal')
		</template>
		@endif


	</div>
</div>
@endsection