<?php

namespace spec;

trait SpecHelperTrait
{
    private function emContainsWillReturn($returnValue)
    {
        $this
            ->em
            ->contains($this->entity)
            ->shouldBeCalled()
            ->willReturn($returnValue);
    }
}