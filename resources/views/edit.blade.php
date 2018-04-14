@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('AddressbookController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $addressbook->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Person Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $addressbook->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact_number" class="col-sm-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            <div class="col-md-6">
                                <input id="contact_number" type="text" class="form-control{{ $errors->has('contact_number') ? ' is-invalid' : '' }}" name="contact_number" value="{{ $addressbook->contact_number }}" required>

                                @if ($errors->has('contact_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_1" class="col-sm-4 col-form-label text-md-right">{{ __('Address From') }}</label>
                            <div class="col-md-6">
                                <input id="address_from_1" type="text" class="form-control{{ $errors->has('address_from_1') ? ' is-invalid' : '' }}" name="address_from_1" value="{{ $addressbook->address_from_1 }}" required>

                                @if ($errors->has('address_from_1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_from_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_1" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="address_from_2" type="text" class="form-control{{ $errors->has('address_from_2') ? ' is-invalid' : '' }}" name="address_from_2" value="{{ $addressbook->address_from_2 }}" required>

                                @if ($errors->has('address_from_2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_from_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_from_1" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="address_from_3" type="text" class="form-control{{ $errors->has('address_from_3') ? ' is-invalid' : '' }}" name="address_from_3" value="{{ $addressbook->address_from_3 }}" required>

                                @if ($errors->has('address_from_3'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_from_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_to_1" class="col-sm-4 col-form-label text-md-right">{{ __('Address To') }}</label>
                            <div class="col-md-6">
                                <input id="address_to_1" type="text" class="form-control{{ $errors->has('address_to_1') ? ' is-invalid' : '' }}" name="address_to_1" value="{{ $addressbook->address_to_1 }}" required>

                                @if ($errors->has('address_to_1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_to_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_to_2" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="address_to_2" type="text" class="form-control{{ $errors->has('address_to_2') ? ' is-invalid' : '' }}" name="address_to_2" value="{{ $addressbook->address_to_2 }}" required>

                                @if ($errors->has('address_to_2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_to_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_to_3" class="col-sm-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="address_to_3" type="text" class="form-control{{ $errors->has('address_to_3') ? ' is-invalid' : '' }}" name="address_to_3" value="{{ $addressbook->address_to_3 }}" required>

                                @if ($errors->has('address_to_3'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address_to_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pincode" class="col-sm-4 col-form-label text-md-right">Pincode</label>
                            <div class="col-md-6">
                                <input id="pincode" type="text" class="form-control{{ $errors->has('pincode') ? ' is-invalid' : '' }}" name="pincode" value="{{ $addressbook->pincode }}" required>

                                @if ($errors->has('pincode'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-4 col-form-label text-md-right">Pincode</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $addressbook->city }}" required>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-sm-4 col-form-label text-md-right">State</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $addressbook->state }}" required>

                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-4 col-form-label text-md-right">Country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $addressbook->country }}" required>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                                <a href="{!! URL('addressbook'); !!}" class="btn btn-default">
                                    {{ __('Cancel') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
