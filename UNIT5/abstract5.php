<!-- Methods declared as abstract simply declare the method's signature - they cannot define anybody inside them. Although the body can be present inside a non-abstract method. -->
<?php
   abstract class base{
      abstract public function printValue(){
         return "Good morning";
      }
   }
   class child extends base{
      public function printValue() {
         return "ConcreteClass1";
      }
   }
   $classobj = new child;
   $classobj->printValue();
?>