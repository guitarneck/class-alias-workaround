<?php
namespace ClassAliasWorkaround;

// Using FooAlias::class to hack ide complaint...
if ( version_compare(PHP_VERSION, '7.0.0', '<') )
   class_alias(__NAMESPACE__ . '\FooLesser', FooAlias::class, true);
else
   class_alias(__NAMESPACE__ . '\FooGreater', FooAlias::class, true);

class Foo extends FooAlias
{
}