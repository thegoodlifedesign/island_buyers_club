<?php namespace TGL\Packages\Events;

use TGL\Packages\Events\Contracts\Event;
use TGL\Packages\Events\Contracts\Listener;

class Dispatcher
{
    /**
     * List of listeners subscribed to an event
     *
     * @var array
     */
    private  $listeners = [];

    public function assignListener($event, Listener $listener)
    {
        $this->listeners[$event][] = $listener;
    }

    /**
     * @param string
     */
    public function fire($event)
    {
        $event_name = $this->getEventName($event);

        $listeners = $this->getListeners($event_name);

        foreach($listeners as $listener)
        {
            $listener->handle($event);
        }
    }

    /**
     * get the event class full name
     *
     * @param $event
     * @return string
     */
    public function getEventName($event)
    {
        $event_name = get_class($event);

        return str_replace('\\','.',$event_name);
    }

    /**
     * @param string
     * @return array
     */
    public  function getListeners($event)
    {
        if( ! isset($this->listeners[$event])) return [];
        return $this->listeners[$event];
    }
}