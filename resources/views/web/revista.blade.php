@extends('web/layout/layout')
@section('contenido')
<style>
    .imagen:hover {
        transform: scale(0.97);
        transition: .5s;
        border: 5px solid yellow;
    }
</style>
<div class="container">
    <div class="row">
        <!-- Show Latest Blog News -->
        <div class="col-md-12">
            <div class="widget-main" id="noticias">
                <div class="widget-main-title">
                    <h1 class="text-center"><strong>INVESTIGACIONES</strong></h1>
                    <p></p>
                    <p style="font-size: 16px;text-align: justify;font-family: 'Times New Roman', Times, serif">Lorem
                        ipsum dolor sit, amet consectetur adipisicing
                        elit. Odio magni inventore voluptas assumenda atque excepturi accusantium natus possimus
                        nesciunt vitae quo at, necessitatibus animi est molestias nobis ad reiciendis. </p>
                </div> <!-- /.widget-main-title -->
                <p></p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label style="font-size: 20px">TEMA:</label>
                                <select class="form-control form-control-lg">
                                        <option>Todos</option>
                                    @foreach ($revista as $rta)
                                    <option>{{$rta->titulo}}</option>   
                                    @endforeach
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-inner text-center">
                    <div class="blog-list-post clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach ($revista as $rta)
                            <h5 class="blog-list-title"><a href="{{asset('doc/investigaciones/'.$rta->ruta) }}" target="blank">{{$rta->titulo}}</a></h5> 
                            <a href="{{asset('doc/investigaciones/'.$rta->ruta)}}" target="blank"><img src="{{asset('img/investigaciones/'.$rta->imagen)}}" alt=""
                                style="width: 200px;height: 300px" class="imagen"></a>
                                <p class="blog-list-meta small-text">{{$rta->fechapublicacion}}</p>
                                <p style="font-size: 14px;font-family: 'Times New Roman', Times, serif">{{$rta->descripcion}}</p>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /col-md-6 -->
    </div>
</div>
@endsection