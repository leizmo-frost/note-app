<x-app-layout>
    <div class="note-container">
        <a href="#" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note )
            <div class="note">
                <div class="note-body">
                    {{ $note->note }}
                </div>
                <div class="note-buttons">
                    <a href="#" class="note-edit-button">View</a>
                    <a href="#" class="note-edit-button">View</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
