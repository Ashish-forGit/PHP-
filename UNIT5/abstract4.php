<!-- All child class must define all the methods marked as abstract in the parent class, with all these methods need to be defined with the same signature or less restricted signature. Suppose In parent class if we define an abstract method with protected visibilty, in the child class execution it should be defined with protected aorpublic, but not with private. -->
<?php
   abstract class AbstractBaseClass1{
      abstract public function addValue();
      abstract protected function getValue();
   }
   class ConcreteClass extends AbstractBaseClass1{
      protected function addValue() {
         return "ConcreteClass";
      }
      public function getValue() {
         return " Child Class";
      }
   }
   $classobj = new ConcreteClass;
   $classobj->addValue();
?>