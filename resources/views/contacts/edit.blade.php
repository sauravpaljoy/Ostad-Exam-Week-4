@extends('layout')

@section('content')
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $contact->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $contact->email }}" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ $contact->phone }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ $contact->address }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
