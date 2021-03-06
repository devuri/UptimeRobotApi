<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class GetMonitorsResponse
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var string
     */
    protected $offset;
    /**
     * @var string
     */
    protected $limit;
    /**
     * @var string
     */
    protected $total;
    /**
     * @var MonitorArray
     */
    protected $monitors;
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
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * @param string $offset
     *
     * @return self
     */
    public function setOffset($offset = null)
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * @param string $limit
     *
     * @return self
     */
    public function setLimit($limit = null)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @param string $total
     *
     * @return self
     */
    public function setTotal($total = null)
    {
        $this->total = $total;
        return $this;
    }
    /**
     * @return MonitorArray
     */
    public function getMonitors()
    {
        return $this->monitors;
    }
    /**
     * @param MonitorArray $monitors
     *
     * @return self
     */
    public function setMonitors(MonitorArray $monitors = null)
    {
        $this->monitors = $monitors;
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