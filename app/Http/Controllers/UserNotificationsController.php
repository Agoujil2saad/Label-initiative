<?php

namespace App\Http\Controllers;

class UserNotificationsController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
        $user = auth()->user();
    }

    public function index()
    {
        return $user->unreadNotifications;
    }

    public function destroy($user, $notificationId)
    {
        $user->notifications()->findOrFail($notificationId)->markAsRead();
    }
}