@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Students</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}

                <p>
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" placeholder="Name student" class="form-control"></br>
                    {{-- Le message d'erreur pour "name" --}}
                    @error('name')
                    <div>{{ $message }}</div>
                @enderror

                </p>
                <p>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address"
                        placeholder="Adress student"class="form-control"></br>
                    {{-- Le message d'erreur pour "address" --}}
                    @error('address')
                    <div>{{ $message }}</div>
                @enderror
                </p>
                <p>
                    <label>Mobile</label></br>
                    <input type="text" name="mobile" id="mobile"
                        placeholder="Mobile student"class="form-control"></br>
                    {{-- Le message d'erreur pour "mobile" --}}
                    @error('mobile')
                    <div>{{ $message }}</div>
                @enderror
                </p>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
