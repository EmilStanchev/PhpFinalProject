@section('title', 'Settings')
@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')
                            <hr class="my-4">
                        @endif

                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <h5 class="card-title">Change Password</h5>
                            @livewire('profile.update-password-form')

                            <hr class="my-4">
                        @endif

                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <hr class="my-4">
                            @livewire('profile.delete-user-form')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
