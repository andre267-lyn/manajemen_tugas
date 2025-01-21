<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // Tampilkan semua tugas milik user
    public function index() {
        $tasks = Auth::user()->tasks;
        return response()->json($tasks);
    }

    // Buat tugas baru
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'nullable|in:pending,in-progress,completed'
        ]);

        $task = Auth::user()->tasks()->create($request->all());

        return response()->json($task, 201);
    }

    // Tampilkan tugas tertentu
    public function show(Task $task) {
        if ($task->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return response()->json($task);
    }

    // Update tugas
    public function update(Request $request, Task $task) {
        if ($task->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'nullable|in:pending,in-progress,completed'
        ]);

        $task->update($request->all());

        return response()->json($task);
    }

    // Hapus tugas
    public function destroy(Task $task) {
        if ($task->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully']);
    }
}
