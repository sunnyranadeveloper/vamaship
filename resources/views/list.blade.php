@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Address Book') }} | <a href="/addressbook/create">Add</a></div>
                <div class="card-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Contact No.</th>
                                    <th>Pincode</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($addressbook as $book)
                                  <tr>
                                    <td>{{$book['title']}}</td>
                                    <td>{{$book['name']}}</td>
                                    <td>{{$book['contact_number']}}</td>
                                    <td>{{$book['pincode']}}</td>
                                    <td>{{$book['city']}}</td>
                                    <td>{{$book['state']}}</td>
                                    <td>{{$book['country']}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <a class="btn btn-warning" href="view/$book['id']">View</a> |
                                                <a class="btn btn-warning" href="{{action('AddressbookController@edit', $book['id'])}}">Edit</a> |
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{action('AddressbookController@destroy', $book['id'])}}" method="post">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure...')">Delete</button>
                                              </form>
                                            </div>
                                        </div>
                                  </tr>
                                  @endforeach
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
