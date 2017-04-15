<?php

namespace Myblog\Listeners\Frontend\Auth;

/**
 * Class UserEventListener.
 */
class UserEventListener
{
    /**
     * @param $event
     */
    public function onLoggedIn($event)
    {
        \Log::info('User Logged In: '.$event->user->name);
    }

    /**
     * @param $event
     */
    public function onLoggedOut($event)
    {
        \Log::info('User Logged Out: '.$event->user->name);
    }

    /**
     * @param $event
     */
    public function onRegistered($event)
    {
        \Log::info('User Registered: '.$event->user->name);
    }

    /**
     * @param $event
     */
    public function onConfirmed($event)
    {
        \Log::info('User Confirmed: '.$event->user->name);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \Myblog\Events\Frontend\Auth\UserLoggedIn::class,
            'Myblog\Listeners\Frontend\Auth\UserEventListener@onLoggedIn'
        );

        $events->listen(
            \Myblog\Events\Frontend\Auth\UserLoggedOut::class,
            'Myblog\Listeners\Frontend\Auth\UserEventListener@onLoggedOut'
        );

        $events->listen(
            \Myblog\Events\Frontend\Auth\UserRegistered::class,
            'Myblog\Listeners\Frontend\Auth\UserEventListener@onRegistered'
        );

        $events->listen(
            \Myblog\Events\Frontend\Auth\UserConfirmed::class,
            'Myblog\Listeners\Frontend\Auth\UserEventListener@onConfirmed'
        );
    }
}
