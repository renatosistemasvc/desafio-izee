<?php

namespace Izee\Action;

use Illuminate\Database\Eloquent\Model;
use Izee\Events\Event;
use Izee\Handlers\Handler;

/**
 * Class Action
 * @package Izee\Action
 */
abstract class Action
{
    private $before = [];
    private $after = [];
    private $events = [];

    /**
     * @param string $class
     * @return mixed
     */
    public function getCustomHandler(string $class)
    {
        return \Handler::getCustomHandler($class);
    }

    /**
     * @return Handler
     */
    public function handler() : Handler
    {
        return app('model-handler');
    }

    /**
     * @return Model
     */
    abstract protected function action() : Model;

    /**
     * @return Model
     * @throws \Exception
     */
    public function execute() : Model
    {
        try {
            $this->handler()->beginTransaction();

            $this->before();
            foreach ($this->before as $action) {
                $action->execute();
            }

            $model = $this->action();

            $this->after($model);
            foreach ($this->after as $action) {
                $action->execute();
            }

            $this->events($model);
            foreach ($this->events as $event) {
                event($event);
            }

            $this->handler()->commit();
        } catch (\Exception $e) {
            $this->handler()->rollbackTransactionAndThrowException($e);
        }

        return $model;
    }

    /**
     * @param Action $action
     */
    protected function beforeAction(Action $action) : void
    {
        $this->before[] = $action;
    }

    /**
     * @param Action $action
     */
    protected function afterAction(Action $action) : void
    {
        $this->after[] = $action;
    }

    /**
     * @param Event $event
     */
    protected function dispatchEvent(Event $event) : void
    {
        $this->events[] = $event;
    }

    public function before() : void
    {
    }

    public function after(Model $model) : void
    {
    }

    public function events(Model $model) : void
    {
    }
}
