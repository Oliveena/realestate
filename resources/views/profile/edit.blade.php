<x-app-layout title="Edit Profile">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Edit Profile</h2>

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Allows to use PUT method -->

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="firstName" class="form-control" value="{{ old('firstName', $user->firstName) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="lastName" class="form-control" value="{{ old('lastName', $user->lastName) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phoneNumber" class="form-control" value="{{ old('phoneNumber', $user->phoneNumber) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
