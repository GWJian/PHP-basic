<?php

// BEFORE
class Processor {

    public function process(Object $object) {

      switch ($object->type) {
        case 'A':
          // Do processing for type A
          break;
        case 'B':
          // Do processing for type B
          break;
        case 'C':
          // Do processing for type C
          break;
        case 'D':
        // Do processing for type C
        break;
        // ...
      }

    }
  }

  $process = new Processor();
  $process->process([])

// AFTER
class ProcessorA
{
    public function process()
    {
        // do processing for A
    }
}

class ProcessorB
{
    public function process()
    {
        // do processing for B
    }
}

class ProcessorC
{
    public function process()
    {
        // do processing for C
    }
}

class ProcessorD
{
    public function process()
    {
        // do processing for D
    }
}

class Processor
{
    public function process( $processor, $object )
    {
        $processor->process();
    }
}

$process = new Processor();
$processor = new ProcesserA();
$process->process( $processor , []);
