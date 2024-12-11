@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Header</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($header, ['method' => 'PATCH','route' => ['header.update', $header->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="title_uz"><strong>Title(uz):</strong></label>{!! Form::label('title_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('title_uz', null, ['autocomplete'=>'OFF','id'=>'title_uz','placeholder' => 'Title(uz)','required'=>true,'class' => "form-control ".($errors->has('title_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('title_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('title_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="title_ru"><strong>Title(ru):</strong></label>{!! Form::label('title_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('title_ru', null, ['autocomplete'=>'OFF','id'=>'title_ru','placeholder' => 'Title(ru)','required'=>true,'class' => "form-control ".($errors->has('title_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('title_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('title_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="button_title_uz"><strong>Button Title(uz):</strong></label>{!! Form::label('button_title_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('button_title_uz', null, ['autocomplete'=>'OFF','id'=>'button_title_uz','placeholder' => 'Button Title(uz)','required'=>true,'class' => "form-control ".($errors->has('button_title_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('button_title_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('button_title_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="button_title_ru"><strong>Button Title(ru):</strong></label>{!! Form::label('button_title_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('button_title_ru', null, ['autocomplete'=>'OFF','id'=>'button_title_ru','placeholder' => 'Button Title(ru)','required'=>true,'class' => "form-control ".($errors->has('button_title_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('button_title_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('button_title_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="status"><strong>Section:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('section_id', \App\Models\Header::$sections,null, ['autocomplete'=>'OFF','id'=>'section_id','required'=>true,'class' => "form-control ".($errors->has('section_id') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('section_id'))
                                        <span class="error invalid-feedback">{{ $errors->first('section_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('status', \App\Models\Job::$statuses,null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">Update</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
