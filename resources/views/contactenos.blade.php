@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container contact-form" style="margin-top:100px">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
                
                <form method="post" action="{{ route('contactenos') }}">
                    @csrf
                    <h3>Contactenos</h3>
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <input type="text" name="nombre" class="form-control" placeholder="Su Nombre *"  required />
                                 @if ($errors->has('nombre'))
                                    <span class="help-block"><strong>{{ $errors->first('nombre') }}</strong></span>
                                 @endif
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="form-control" placeholder="Su Email"  required />
                                 @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                 @endif
                            </div>
                            <div class="form-group {{ $errors->has('asunto') ? ' has-error' : '' }}">
                                <input type="text" name="asunto" class="form-control" placeholder="Asunto *"  required  />
                                @if ($errors->has('asunto'))
                                    <span class="help-block"><strong>{{ $errors->first('subject') }}</strong></span>
                                 @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('mensaje') ? ' has-error' : '' }}">
                                <textarea name="mensaje" class="form-control" placeholder="Su Mensaje *" style="width: 100%; height: 150px;" required></textarea>
                                 @if ($errors->has('mensaje'))
                                    <span class="help-block"><strong>{{ $errors->first('mensaje') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
