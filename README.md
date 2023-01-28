# class_alias() - workaround

A workaround with using PHP class_alias(), and make it works with composer and an ide. To escape errors signaling that are not.

## Context

Let's say we have a class refactored for a new PHP version, and want the old one still usable in the same package.

From here, we decide to split the code in files according to a version.

Keeping the same class name will result in a `composer` warning about ambigous class name resolving.

We decide to use `class_alias()` and rename each class. `Composer` is now ok.

But the ide is complaining : He can't found the class, nor the methods.

Adding a _fake class_ helps (a kind of stub).