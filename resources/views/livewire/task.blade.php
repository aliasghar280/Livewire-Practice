<div>
    <h1>Task</h1>
    {{-- <form wire:submit="add">

        <input type="text" wire:model="task" placeholder="Enter a new task" class="border rounded p-2 mb-2">
        <button class="bg-indigo-500 text-white p-2 rounded">Add</button>
    </form> --}}
    <input type="text" wire:model="task" placeholder="Enter a new task" class="border rounded p-2 mb-2">
        <button wire:click="Add" class="bg-indigo-500 text-white p-2 rounded">Add</button>
    <ul class="mt-4">
        @foreach ($tasks as $task)
            <li class="p-2 border-b">{{ $task }}</li>
        @endforeach
    </ul>
</div>
