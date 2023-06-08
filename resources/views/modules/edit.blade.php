@extends('modules.layout')
@section('content')

        

            <form action="{{ route('module.edit' . $module->id) }}" method="POST">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $module->id }}" id="id" />
                <p>
                    <label>code_module</label>
                </br>
                    <input type="text" name="name" id="name" value="{{ $module->code_module }}">
                    </br>
                                @error('code_module')
                                    <div>{{ $message }}</div>
                                @enderror
                </p>
                <p>
                    <label>Libelle</label>
                </br>
                    <input type="text" name="libelle" id="libelle" value="{{ $module->libelle }}">
                </br>
                    @error('libelle')
                    <div>{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label>volume_horaire</label>
                </br>
                    <input type="text" name="volume_horaire" id="volume_horaire" value="{{ $module->volume_horaire }}">
                </br>
                    
                    @error('volume_horaire')
                        <div>{{ $message }}</div>
                    @enderror 
                </p>
                <input type="submit" value="modifier"></br>
            </form>

        

@endsection
