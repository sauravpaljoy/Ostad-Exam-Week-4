@extends('layout')

@section('content')
    <h1>Create New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
