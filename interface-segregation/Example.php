<?php

interface ManageableInterface{
    public function beManaged();
}

interface WorkableInterface {
    public function work();
}

interface SleepableInterface {
    public function work();
}

class Worker implements WorkableInterface, SleepableInterface, ManageableInterface {
    public function work()
    {

    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManageableInterface {

    public function work()
    {
        return 'android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Captain {
    public function hire(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}