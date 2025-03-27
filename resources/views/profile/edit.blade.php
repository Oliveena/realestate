<x-app-layout>
    <div class="container py-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Edit Profile</h2>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4">
                            <div class="col-md-2 text-center">
                                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'img/avatar-placeholder.jpg' }}" alt="Profile Picture" class="rounded-circle" width="100" height="100">
                                <input type="file" name="avatar" class="form-control mt-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstName" class="form-control" value="{{ old('firstName', $user->firstName) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastName" class="form-control" value="{{ old('lastName', $user->lastName) }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phoneNumber" class="form-control" value="{{ old('phoneNumber', $user->phoneNumber) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
