@extends('base')

@section('main')
    <div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a Contact</h1>
    <div>
        <div style="margin-top: 30px">
            <a href="{{route('contacts.index')}}" class="btn btn-outline-info"> Return </a>
        </div>
        <br />
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name"/>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name"/>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" class="form-control" name="telephone"/>
            </div>
            <div class="form-group">
                <label for="zip_code">ZipCode:</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code"/>
            </div>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" name="street"/>
            </div>

            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" class="form-control" id="number" name="number"/>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city"/>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" name="state"/>
            </div>

            <div style="margin-top: 30px">
                <button type="submit" class="btn btn-outline-primary">Add contact</button>
            </div>
        </form>
    </div>
    </div>
    </div>


@endsection





