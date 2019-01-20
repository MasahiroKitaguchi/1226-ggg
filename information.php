<?php
/**
 *
 */
class Information
{

    /** @var int */
    protected $id;
    /** @var string */
    protected $name;

    function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function get_id(): int
    {
        return $this->id;
    }

    public function get_name(): string
    {
        return $this->name;
    }

}



 ?>
