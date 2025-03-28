<x-app-layout title=" View Realtor Profile">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Realtor Profile</h2>
                        <div class="row mb-4">
                            <div class="col-md-2 text-center">
                                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'img/avatar-placeholder.jpg' }}" alt="Profile Picture" class="rounded-circle" width="100" height="100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <p>{{ $user->firstName }}</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <p>{{ $user->lastName }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <p>{{ $user->phoneNumber }}</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">City</label>
                                <p>{{ $user->city }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
