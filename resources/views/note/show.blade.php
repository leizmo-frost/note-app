<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <div class="note-buttons" style="margin-left: 80%">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button" onclick="return
                    confirm('Are you sure you want to delete this employee?')">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
