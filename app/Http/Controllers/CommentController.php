<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Student;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index() {
        $comments = Comment::with('student')->get();
        dd($comments);
    }

    public function store() {
        $student = Student::find(1);
        $comment = new Comment();
        $comment->comment = 'This is a comment';
        $comment->student_id = $student->id;
        $comment->save();
        dd($comment);
    }
}
