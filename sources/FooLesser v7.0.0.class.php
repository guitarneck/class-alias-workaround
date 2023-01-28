<?php
/*
   This class is supposed to be used for PHP version < 7.0.0
 */
namespace ClassAliasWorkaround;

class FooLesser
{
   static
   function hey ()
   {
      printf("%s() called\n", __METHOD__);
   }
}