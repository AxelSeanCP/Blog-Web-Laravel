<form action="{{ route('users.update', $user) }}" enctype="multipart/form-data" method="POST" class="flex gap-8"
    x-data="{
        imageUrl: '/storage/images/{{ $user->photo ?? 'noimage.png' }}',
        fileName: '{{ $user->photo ?? 'No file selected' }}',
        updateFile($event) {
            const file = $event.target.files[0];
            if (!file) return;
    
            this.fileName = file.name;
    
            if (this.imageUrl) {
                URL.revokeObjectURL(this.imageUrl);
            }
    
            this.imageUrl = URL.createObjectURL(file);
        }
    }">
    @csrf
    @method('PUT')

    <div class="w-1/2">
        <img :src="imageUrl" alt="" class="rounded-md object-contain">
    </div>

    <div class="w-1/2">
        <div class="mt-4">
            <label for="photo">Profile picture</label>
            <div class="mt-1 flex items-center space-x-2 border border-gray-300 p-2 rounded-md shadow-sm">
                <label for="photo"
                    class="px-2 py-1 text-sm bg-slate-800 text-white rounded cursor-pointer hover:bg-gray-700">
                    Browse
                </label>
                <input id="photo" class="hidden" type="file" name="photo" @change="updateFile"
                    accept="image/*" />
                <span x-text="fileName" class="text-gray-600 overflow-hidden"></span>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="px-4 py-2 bg-primary-700 text-white font-semibold rounded-lg shadow-md text-sm hover:bg-primary-800">Change</button>
        </div>
    </div>
</form>
