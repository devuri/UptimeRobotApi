<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class MonitorResponse
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var Monitor
     */
    protected $monitor;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getStat()
    {
        return $this->stat;
    }
    /**
     * @param string $stat
     *
     * @return self
     */
    public function setStat($stat = null)
    {
        $this->stat = $stat;
        return $this;
    }
    /**
     * @return Monitor
     */
    public function getMonitor()
    {
        return $this->monitor;
    }
    /**
     * @param Monitor $monitor
     *
     * @return self
     */
    public function setMonitor(Monitor $monitor = null)
    {
        $this->monitor = $monitor;
        return $this;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }
}