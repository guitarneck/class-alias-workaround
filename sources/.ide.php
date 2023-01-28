<?php
/*
   !!! The file must not be included in classmap !!!

   This file is a hack for ide, looking to resolve classes, traits, interfaces aliases.
   The methods must be also declared ôÔ'
*/
namespace ClassAliasWorkaround;

if ( class_exists(__NAMESPACE__ . '\FooAlias') ) user_error('FooAlias MUST NOT be referenced.', E_USER_ERROR);

class FooAlias
{
   static
   function hey() {}
}