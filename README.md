This Bundle provides Simple Search API for Content in Files. It is implemented for Symfony 2.8.
It works the following way - there are 3 parameters of the search function:
1) Search Content:* - the content that you are looking for
2) File Type: - the file type. If you want to restrict the search 
for specific file type. Must not put dot (.) for the file type.
3) Search Path: - path you want to make the search. Starts from the path of the project and has for options all path in depth 2 dirs inside the starting path.

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require <package-name> "~1"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Emo\SimpleSearchApiBundle\EmoSimpleSearchApiBundle(),
        );

        // ...
    }

    // ...
}
```

License
============
This bundle is under the MIT license. See the complete license in the bundle: LICENSE