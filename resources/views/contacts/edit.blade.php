@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>
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
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $contact->last_name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" class="form-control" name="telephone" value={{ $contact->telephone }} />
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code:</label>
                <input type="text" class="form-control" name="zip_code" value={{ $contact->zip_code }} />
            </div>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" name="street" value={{ $contact->street }} />
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" class="form-control" name="number" value={{ $contact->number }} />
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $contact->city }} />
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" name="state" value={{ $contact->state }} />
            </div>
            <div style="margin-top: 30px">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

