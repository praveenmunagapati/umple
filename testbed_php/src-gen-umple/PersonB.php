<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.18.0.3036 modeling language!*/

class PersonB
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PersonB Attributes
  private $name;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aName)
  {
    $this->name = $aName;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setName($aName)
  {
    $wasSet = false;
    ConsoleTracer::handle( gettimeofday(true).",".uniqid().",/Users/hjamaan/Documents/uOttawa/GoogleUmple/trunk/testbed_php/src/../../testbed/src/TestHarnessTracer.ump,17,PersonB,".spl_object_hash( $this ).",at_s,name,".$this->name.",".$aName );
    $this->name = $aName;
    $wasSet = true;
    return $wasSet;
  }

  public function getName()
  {
    return $this->name;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>