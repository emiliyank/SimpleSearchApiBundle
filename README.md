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

Download the Zip File from Github: https://github.com/emiliyank/SimpleSearchApiBundle
Extract files and rename the main folder to 'SearchBundle'(remove '-master').
Place the folder in 'src/Emo/'(you will have to create the folder with
the vendor name Emo). Structure after this: 'src/Emo/SimpleSearchApiBundle/...'
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

Step 3: Add route
-------------------------
In your project /config/routing.yml file add the following:
//...
emo_simple_search_api:
    resource: "@EmoSimpleSearchApiBundle/Controller/"
    type:     annotation
    prefix:   /
//...


You cant test if bundle is working correct by opening: <app-name>/emo_simple_search_api_bundle
License
============
This bundle is under the MIT license. See the complete license in the bundle: LICENSE