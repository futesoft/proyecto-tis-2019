@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materias
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('materias.show_fields')
                    <a href="{!! route('materias.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
