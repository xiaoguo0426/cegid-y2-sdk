<?php

namespace Y2\Loyalty;

class ValidityPeriod
{
    protected string $Start;

    protected string $End;

    public function __construct(string $Start, string $End)
    {
        $this->Start = $Start;
        $this->End = $End;
    }

    public function getStart(): string
    {
        return $this->Start;
    }

    public function setStart(string $Start): void
    {
        $this->Start = $Start;
    }

    public function getEnd(): string
    {
        return $this->End;
    }

    public function setEnd(string $End): void
    {
        $this->End = $End;
    }

}