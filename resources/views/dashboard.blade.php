<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gradient-to-r from-purple-500 via-pink-500 to-red-500">
        <div class="max-w-3xl mx-auto">
            @if (session('status'))
                <div class="bg-green-500 text-white px-4 py-3 rounded mb-6 text-center font-bold shadow-lg">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <div class="p-6 text-gray-800 dark:text-gray-100">
                    <p class="text-2xl font-bold text-center text-gray-700 dark:text-gray-300 mb-4">{{ __("Welcome back!") }}</p>

                    <div class="mt-6">
                        <label for="mood" class="block text-lg font-medium text-gray-700 dark:text-gray-300">{{ __("Select Your Mood") }}</label>
                        <select id="mood" class="mt-2 w-full p-3 border rounded-lg bg-blue-200 text-blue-800 dark:bg-blue-700 dark:text-blue-200">
                            <option value="happy">{{ __("Happy") }}</option>
                            <option value="focused">{{ __("Focused") }}</option>
                            <option value="relaxed">{{ __("Relaxed") }}</option>
                            <option value="stressed">{{ __("Stressed") }}</option>
                        </select>
                    </div>

                    <div id="tasks" class="mt-8">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">{{ __("Your To-Do List") }}</h3>
                        <ul id="task-list" class="list-disc list-inside mt-4 text-gray-800 dark:text-gray-200">
                            <!-- Tasks will be rendered here -->
                        </ul>
                        <div class="mt-6">
                            <input type="text" id="new-task" class="w-full p-3 border rounded-lg bg-yellow-200 text-yellow-800 placeholder-gray-800 dark:bg-yellow-700 dark:text-yellow-200" placeholder="Add a new task">
                            <button id="add-task" class="mt-3 px-4 py-2 bg-gradient-to-r from-green-400 to-green-600 text-white font-bold rounded-lg shadow hover:from-green-500 hover:to-green-700">{{ __("Add Task") }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tasksByMood = {
            happy: [
                "Call a loved one and share your happiness",
                "Write in your gratitude journal",
                "Dance to your favorite song"
            ],
            focused: [
                "Complete a task on your work to-do list",
                "Organize your workspace",
                "Learn something new"
            ],
            relaxed: [
                "Read a book or watch a calming movie",
                "Go for a walk in nature",
                "Practice mindfulness or meditate"
            ],
            stressed: [
                "Take deep breaths and relax for 5 minutes",
                "Write down what's on your mind",
                "Take a short break and hydrate"
            ]
        };

        const moodSelect = document.getElementById('mood');
        const taskList = document.getElementById('task-list');
        const newTaskInput = document.getElementById('new-task');
        const addTaskButton = document.getElementById('add-task');

        function renderTasks(mood) {
            const tasks = tasksByMood[mood] || [];
            taskList.innerHTML = tasks.map(task => `
                <li class="flex justify-between items-center text-gray-700 dark:text-gray-200 bg-purple-100 dark:bg-purple-700 px-3 py-2 mb-2 rounded-lg shadow">
                    <span>${task}</span>
                    <button class="delete-task text-red-600 font-bold ml-4">X</button>
                </li>
            `).join('');
        }

        moodSelect.addEventListener('change', () => {
            renderTasks(moodSelect.value);
        });

        addTaskButton.addEventListener('click', () => {
            const taskText = newTaskInput.value.trim();
            if (taskText) {
                const li = document.createElement('li');
                li.className = "flex justify-between items-center text-gray-700 dark:text-gray-200 bg-purple-100 dark:bg-purple-700 px-3 py-2 mb-2 rounded-lg shadow";
                li.innerHTML = `
                    <span>${taskText}</span>
                    <button class="delete-task text-red-600 font-bold ml-4">X</button>
                `;
                taskList.appendChild(li);
                newTaskInput.value = '';
            }
        });

        taskList.addEventListener('click', (e) => {
            if (e.target.classList.contains('delete-task')) {
                e.target.closest('li').remove();
            }
        });

        // Render initial tasks for the default mood
        renderTasks(moodSelect.value);
    </script>
</x-app-layout>
