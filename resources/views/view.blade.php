@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('AddressbookController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <label id="title" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Person Name') }}</label>

                            <div class="col-md-6">
                                <label id="name" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact_number" class="col-sm-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            <div class="col-md-6">
                                <label id="contact_number" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_1" class="col-sm-4 col-form-label text-md-right">{{ __('Address From') }}</label>
                            <div class="col-md-6">
                                <label id="address_from_1" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_1" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label id="address_from_2" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_3" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label id="address_from_3" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_to_1" class="col-sm-4 col-form-label text-md-right">{{ __('Address To') }}</label>
                            <div class="col-md-6">
                                <label id="address_to_1" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_to_2" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label id="address_to_2" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_to_3" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label id="address_to_3" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pincode" class="col-sm-4 col-form-label text-md-right">Pincode</label>
                            <div class="col-md-6">
                                <label id="pincode" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-4 col-form-label text-md-right">Pincode</label>
                            <div class="col-md-6">
                                <label id="city" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-sm-4 col-form-label text-md-right">State</label>
                            <div class="col-md-6">
                                <label id="state" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-4 col-form-label text-md-right">Country</label>
                            <div class="col-md-6">
                                <label id="country" class="col-sm-4 col-form-label text-md-right"></label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{!! URL('addressbook'); !!}" class="btn btn-default">
                                    {{ __('Back') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $.get("http://localhost:8000/api/addressbook/{{ $id }}", function(data, status){
        $('#title').text(data.data.title);
        $('#name').text(data.data.name);
        $('#contact_number').text(data.data.contact_number);
        $('#address_from_1').text(data.data.address_from_1);
        $('#address_from_2').text(data.data.address_from_2);
        $('#address_from_3').text(data.data.address_from_3);
        $('#address_to_1').text(data.data.address_to_1);
        $('#address_to_2').text(data.data.address_to_2);
        $('#address_to_3').text(data.data.address_to_3);
        $('#pincode').text(data.data.pincode);
        $('#city').text(data.data.city);
        $('#state').text(data.data.state);
        $('#country').text(data.data.country);
    });
</script>
@endsection